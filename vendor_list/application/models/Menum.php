<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Menum extends CI_Model
{
	private $temp = array();
	function __construct()
	{
		parent::__construct();
	}

	public function tahun_berjalan()
	{
		date_default_timezone_set('Asia/Jakarta');
		$sekarang = date('Y-m-d H:i:s');
		$thn_sekarang = date('Y');
		#$thn_sekarang = '2019';
		return $thn_sekarang;
	}

	public function validate($username, $password)
	{
		$app = '2';
		// $this->db->select("user_name,password,type,nama,concat(job,' ',jabatan) as ket,kode_div, kode_gcg");
		$this->db->select("*");
		$this->db->from("master_user");
		$this->db->where("user_name", $username);
		$sql = $this->db->get();
		$this->db->query("SET GLOBAL query_cache_size = 999424");
		$hasil = false;
		foreach ($sql->result_array() as $resulte) {
			if (md5($password) == $resulte['password']) {
				$hasil = true;
				$data = array(
					'user' => $username,
					'app' => $app,
					'nama' => $resulte['nama'],
					// 'ket' => $resulte['ket'],
					'type' => $resulte['type'],
					'kode_div' => $resulte['kode_div'],
					'kode_gcg' => $resulte['kode_gcg']
				);
				$this->session->set_userdata($data);
			} else {
				$hasil = false;
				$this->session->userdata['user'] = '';
			}
		}

		return $hasil;
	}

	protected function parent_menu($menu)
	{
		$this->db->select("*");
		$this->db->from("master_user_menu");
		$this->db->where("id", $menu[0]['kategori']);
		$this->db->where("index_id <", $menu[0]['index_id']);
		$this->db->order_by("no_urut", "asc");

		$query = $this->db->get();
		$res = $query->result_array();
		if (count($res) > 0) {
			array_unshift($menu, $res[0]);
			return $this->parent_menu($menu);
		} else {
			return $menu;
		}
	}

	protected function linier_menu($menu)
	{
		foreach ($menu as $resul) {
			$this->temp[] = $resul;
			if ($resul['child']) $this->linier_menu($resul['child']);
		}
	}

	public function main_menu()
	{
		$hasil = array();
		$hasil2 = array();
		if (empty($this->session->userdata['user'])) {
			$hasil = false;
			$this->load->helper('url');
			redirect('/', 'refresh');
		} else {
			$ket = strtoupper($this->session->userdata['nama']);
			if (empty($this->session->userdata['usermenu'])) {
				$sql = $this->db->query("SELECT user_name,password,type,nama,concat(job,' ',jabatan) as ket FROM master_user WHERE user_name='" .
					$this->db->escape_str($this->session->userdata['user']) . "'");
				if ($sql->num_rows() > 0) {
					$tmp = $sql->result_array();
					$resulte = @$tmp[0];
					$load = $this->db->query("SELECT a.id,a.menu,a.controller,a.index_id,a.kategori,a.kategori_sub,a.ikons FROM master_user_menu a
					LEFT JOIN master_user_otoritas b ON b.id = a.id WHERE b.type='" . $resulte['type'] . "' and a.index_id='0'
					order by a.no_urut");
					foreach ($load->result_array() as $resul) {
						$child = $this->child_menu($resulte['type'], ($resul['index_id'] + 1), $resul['id']);
						$resul['child'] = $child;
						$hasil[] = $resul;
					}
				}
				$this->linier_menu($hasil);
				$this->session->set_userdata('usermenu', $hasil);
				$this->session->set_userdata('usermenu2', $this->temp);
			} else {
				$hasil = $this->session->userdata['usermenu'];
			}
		}
		$coba = array('hasil' => $hasil, 'linit' => @$ket);
		return $coba;
	}

	protected function child_menu($type, $indexid, $kategori)
	{
		$child = array();
		$load2 = $this->db->query("SELECT a.id,a.menu,a.controller,a.index_id,a.kategori,a.kategori_sub,a.ikons FROM master_user_menu a
		LEFT JOIN master_user_otoritas b ON b.id = a.id WHERE b.type='" . $type . "' AND a.index_id='" . $indexid . "' AND a.kategori='" . $kategori . "'
		ORDER by a.no_urut");
		foreach ($load2->result_array() as $resul3) {
			$resul3['child'] = $this->child_menu($type, ($resul3['index_id'] + 1), $resul3['id']);
			$child[] = $resul3;
		};
		return $child;
	}

	public function active_menu()
	{
		$aruristr = explode("/", $this->uri->uri_string);
		$uristr = @implode("/", array($aruristr[0], $aruristr[1]));
		$uristr = preg_replace('/_(line|pie|det|detail|baru|otoritas|create|edit)$/', '', $uristr);
		$uristr = preg_replace('/^(lap)_$/', '', $uristr);

		$this->db->from('master_user_menu');
		$this->db->like('controller', $uristr);
		$query = $this->db->get();
		$res = $query->result_array();
		if (count($res) > 0) {
			$res = $this->parent_menu($res);
			return $res;
		} else {
			return null;
		}
	}

	function islogin()
	{
		if ($this->session->userdata['thn'] != '') {
			$hasil = true;
		} else {
			$hasil = false;
		}
		return $hasil;
	}

	function generatecapta()
	{
		$chart = str_shuffle('123456789ABCDEFGHIJKLMNPRSTUVWXYZ');
		$captcha = substr($chart, 0, 5);
		return $captcha;
	}

	#----------------------------------------

	public function save($table, $data)
	{
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}

	public function update($table, $where, $data)
	{
		$this->db->update($table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete($tabel, $kolom, $id)
	{
		$this->db->where($kolom, $id);
		$this->db->delete($tabel);
	}

	#----------------------------------------

	public function list_tahun()
	{
		$query = $this->db->query("SELECT tahun as id, tahun as isi FROM v_monitoring_mr group by tahun order by tahun asc");
		$dropdowns = $query->result();
		if (!$dropdowns) {
			$finaldropdown[''] = " - Data tidak ada - ";
			return $finaldropdown;
		} else {
			foreach ($dropdowns as $dropdown) {
				$dropdownlist[$dropdown->id] = $dropdown->isi;
			}
			$finaldropdown = $dropdownlist;
			$finaldropdown[''] = " - Pilih - ";
			return $finaldropdown;
		}
	}

	public function row_v_monitoring_mr_tahun_last()
	{
		$query = $this->db->query("SELECT max(tahun) as tahun FROM v_monitoring_mr  ");
		return $query->row('tahun');
	}

	public function row_mr_ref_tingkat_dan_respon_indeks($indeks)
	{
		$query = $this->db->query("SELECT * FROM mr_ref_tingkat_dan_respon WHERE indeks = '$indeks' order by id asc ");
		return $query->row();
	}

	public function row_x_peta_resiko_indeks($tahun, $indeks, $ket)
	{
		$query = $this->db->query("
			SELECT *
			FROM x_peta_resiko_indeks
			where tahun = '$tahun' and indeks = '$indeks' and ket = '$ket'
		");
		if ($query->num_rows() > 0) {
			return $query->row('no_urut');
		} else {
			return false;
		}
	}

	public function result_v_mr_tab_renc_penanganan_inherent($no_urut)
	{
		$tahun = $this->tahun_berjalan();
		$query = $this->db->query("SELECT 
			'Inherent' as judul,
			no_urut,
			no_register as kode,
            divisi_mr,
			detail_resiko as uraian,
            concat( DATE_FORMAT(rencana_awal, '%d %b %Y' ),' s/d ',DATE_FORMAT(rencana_akhir, '%d %b %Y' ) ) as jadwal, 
			tingkat_mr as tingkat,
			warna_mr as warna
			FROM v_mr_tab_renc_penanganan 
            WHERE no_urut = '$no_urut' 
            and tahun = '$tahun' ");
		return $query->result();
	}

	public function result_v_mr_tab_renc_penanganan_residual($no_urut)
	{
		$tahun = $this->tahun_berjalan();
		$query = $this->db->query("SELECT 
			'Residual' as judul,
			no_urut,
			no_register as kode,
            divisi_mr,
			group_concat(aktifitas_kontrol SEPARATOR '<br/>') as uraian,
            concat( DATE_FORMAT(rencana_awal, '%d %b %Y' ),' s/d ',DATE_FORMAT(rencana_akhir, '%d %b %Y' ) ) as jadwal, 
			tingkat_kontrol as tingkat,
			warna_kontrol as warna
			FROM v_mr_tab_renc_penanganan 
			WHERE no_urut = '$no_urut' 
            and tahun = '$tahun'
			group by no_urut ");
		return $query->result();
	}

	public function result_v_mr_tab_renc_penanganan_target($no_urut)
	{
		$tahun = $this->tahun_berjalan();
		$query = $this->db->query("SELECT 
			'Target' as judul,
			no_urut,
			no_register as kode,
            divisi_mr,
			group_concat(uraian SEPARATOR '<br/>') as uraian,
            concat( DATE_FORMAT(rencana_awal, '%d %b %Y' ),' s/d ',DATE_FORMAT(rencana_akhir, '%d %b %Y' ) ) as jadwal, 
			tingkat_rencana as tingkat,
			warna_rencana as warna
			FROM v_mr_tab_renc_penanganan 
			WHERE no_urut = '$no_urut' 
            and tahun = '$tahun'
			group by no_urut ");
		return $query->result();
	}

	public function result_v_mr_tab_renc_penanganan_realisasi($no_urut)
	{
		$tahun = $this->tahun_berjalan();
		$query = $this->db->query("SELECT 
			'Realisasi' as judul,
			no_urut,
			no_register as kode,
            divisi_mr,
			detail_resiko as uraian,
			uraian as uraian_rp,
            concat( DATE_FORMAT(rencana_awal, '%d %b %Y' ),' s/d ',DATE_FORMAT(rencana_akhir, '%d %b %Y' ) ) as jadwal, 
			if(status_realisasi = 'sudah', tingkat_rencana, tingkat_mr )  as tingkat,
			if(status_realisasi = 'sudah', warna_rencana, warna_mr )  as warna,
			if(status_progres <> 'Belum', if(status_progres = 'Selesai','Selesai',concat('Dalam Pelaksanaan ( Tahapan ke : ',jlh_tahapan_real,' dari ',jlh_tahapan,', Progres : ',jlh_bobot_tahapan_real,' % )') ), 'Belum' )   as sts
			FROM v_mr_tab_renc_penanganan 
			WHERE no_urut = '$no_urut' 
            and tahun = '$tahun'
			group by no_urut ");
		return $query->result();
	}

	public function grafik_v_mr_ref_klasifikasi_per_kode()
	{
		$tahun = $this->last_tahun_v_mr_ref_klasifikasi_per_kode();
		#$tahun = '2019';
		$query = $this->db->query("SELECT 
			kode_kl as labels,  
			jlh_mr as datas
			FROM v_mr_ref_klasifikasi_per_kode 
			where tahun = '$tahun' ");
		foreach ($query->result() as $data) {
			$hasil[] = $data;
		}
		return $hasil;
	}

	public function last_tahun_v_mr_ref_klasifikasi_per_kode()
	{
		$query = $this->db->query("SELECT 
			max(tahun) as tahun 
			from v_mr_ref_klasifikasi_per_kode
		");
		return $query->row('tahun');
	}

	public function grafik_v_rekap_mr_per_direktorat()
	{
		$tahun = $this->last_tahun_v_mr_ref_klasifikasi_per_kode();
		#$tahun = '2019';
		$query = $this->db->query("SELECT 
			nama_dir as labels,  
			jlh_mr as datat,
			jlh_real as datar
			FROM v_rekap_mr_per_direktorat 
			where tahun = '$tahun' ");
		foreach ($query->result() as $data) {
			$hasil[] = $data;
		}
		return $hasil;
	}

	public function update_x_peta_resiko_indeks()
	{
		#$tahun = $this->tahun_berjalan();
		$tahun = '2020';

		$query1 = $this->db->query("
			DELETE FROM x_peta_resiko_indeks
			WHERE tahun = '$tahun' 
		");
		$query2 = $this->db->query("
			insert into x_peta_resiko_indeks
			select tahun, indeks, no_urut, ket
			from (
				select * from v_peta_resiko_mr_indeks
				where tahun = '$tahun'
				union all
				select * from v_peta_resiko_kontrol_indeks
				where tahun = '$tahun'
				union all
				select * from v_peta_resiko_rencana_indeks
				where tahun = '$tahun'
				union all
				select * from v_peta_resiko_realisasi_indeks
				where tahun = '$tahun'
			) as a
		");
		return true;
	}

	public function result_v_rekap_rkm_per_divisi_tahun()
	{
		$tahun = $this->tahun_berjalan();
		$query = $this->db->query("SELECT 
			inisial as labels,  
			jlh_rkm_target as datat,
			jlh_rkm_real_selesai as datar
			FROM v_rekap_rkm_per_divisi 
			where tahun = '$tahun' ");
		foreach ($query->result() as $data) {
			$hasil[] = $data;
		}
		return $hasil;
	}
}
