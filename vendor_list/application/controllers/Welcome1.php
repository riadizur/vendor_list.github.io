<?php
defined('BASEPATH') or exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, x-xsrf-token");

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('gcgm');
		date_default_timezone_set('Asia/Jakarta');
	}
	public function index()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$randcap  = $this->input->post('randcaptcha');
		$capthcha = $this->input->post('captcha');
		if ($randcap != $capthcha) {
			$dataa['cpt'] = $this->menum->generatecapta();
			$this->load->view('login', $dataa);
		} else {
			$hasil = $this->menum->validate($username, $password);
			if ($hasil == true) {
				$this->dashboard();
			} else {
				$dataa['cpt'] = $this->menum->generatecapta();
				$this->load->view('login', $dataa);
			}
		}
	}
	public function cek()
	{
		$cek = $this->gcgm->result('cek', array());
		// var_dump($cek);
		foreach ($cek as $cek) {
			$ceks = row_tabel('gcg_master_fu', array('kode_fu' => $cek->kode, 'periode' => '2020_1'), 'kode_fu');
			if ($ceks == NULL) {
				$this->gcgm->update('gcg_master_fu_file', array('status_file' => '0'), array('kode_fu' => $cek->kode));
				echo ($cek->kode . ' ' . $ceks . ' status file diubah jadi 0<br>');
			}
		}
	}
	public function dashboard()
	{
		if ($this->session->userdata('ket') <> '') {
			$data['prev'] = $this->menum->main_menu();
			$this->load->view('header', $data);

			#$datax['tahun'] = $this->menum->row_v_monitoring_mr_tahun_last();
			$tahun = $this->menum->tahun_berjalan();
			$kode_survey = $this->gcgm->last_gcg_master_periode();
			$datax['tahun'] = $tahun;
			$datax['list_tahun'] = ''; //$this->menum->list_tahun();status_survey
			$datax['total_pemenuhan'] = $this->gcgm->count_file_doc('gcg_master_fu_file', 'kode_fu', 'periode="' . $kode_survey . '" and status_file="1"');
			$datax['total_kebutuhan'] = $this->gcgm->count('gcg_master_fu', array('periode' => $kode_survey, 'kebutuhan' => 'Dokumen', 'status_uji' => '1'));
			$datax['selesai_survey'] = $this->gcgm->count('gcg_transaksi_fu', array('kode_survey' => $kode_survey, 'status_survey' => '1'));
			$datax['banyak_fu'] = $this->gcgm->count('gcg_transaksi_fu', array('kode_survey' => $kode_survey));
			$datax['banyak_na'] = $this->gcgm->count('gcg_transaksi_fu', array('kode_survey' => $kode_survey, 'status_uji' => '0'));
			$datax['banyak_sesuai'] = $this->gcgm->count('gcg_transaksi_fu', array('kode_survey' => $kode_survey, 'status_uji' => '1', 'status_survey' => '1', 'hasil_survey' => '1'));
			$datax['banyak_tidak_sesuai'] = $this->gcgm->count('gcg_transaksi_fu', array('kode_survey' => $kode_survey, 'status_uji' => '1', 'status_survey' => '1', 'hasil_survey' => '0'));
			$datax['total_gcg'] = round($this->gcgm->row_gcg_transaksi_fu_aspek_hasil_last('jlh_skor'), 2);

			$bar_klasifikasi = $this->gcgm->grafik_v_rekap_gcg_per_divisi();
			$labels = array();
			$datat = array();
			$datar = array();
			foreach ($bar_klasifikasi as $data) {
				$labels[] = row_tabel('master_org_divisi', array('kode' => $data->labels), 'divisi');
				$datat[] = (int) $data->datat;
				$datar[] = (int) $data->datar;
			}
			$datax['labels'] = $labels;
			$datax['datat'] = $datat;
			$datax['datar'] = $datar;
			$datax['bar_rkm'] = ''; //$this->menum->result_v_rekap_rkm_per_divisi_tahun();
			$this->load->view('content', $datax);
			$this->load->view('footer');
		} else {
			$dataa['cpt'] = $this->menum->generatecapta();
			$this->load->view('login', $dataa);
		}
	}

	public function gcg_tabel_aspek()
	{
		$kode_survey =  $this->gcgm->last_gcg_transaksi_fu();
		$hasil = '';
		$isi = $this->gcgm->result_v_gcg_transaksi_fu_aspek_kode_survey($kode_survey);
		$x = 1;
		$data = array();
		foreach ($isi as $r) {
			$row = array();
			$row[] = $x;
			$row[] = $r->no_aspek;
			$row[] = $r->aspek_pengujian_indikator;
			$row[] = number_format($r->bobot, 2);
			$row[] = $r->pemenuhan;
			$row[] = number_format($r->skor, 2);
			$data[] = $row;
			$x++;
		}

		$output = array(
			"data" => $data,
		);
		echo json_encode($output);
	}

	public function logout()
	{
		$this->session->userdata['username'] = '';
		$this->session->userdata['usermenu'] = '';
		$this->session->userdata['usermenu2'] = '';
		$this->session->userdata['ket'] = '';

		$CI = &get_instance();
		$CI->session->sess_destroy();
		$this->index();
	}

	public function get_grafik_peta()
	{
		$tahun = $this->input->post('tahun', true);
		$data = array();

		$data['peta_resiko_mr'] = $this->peta_resiko_mr($tahun);
		$data['peta_resiko_kontrol'] = $this->peta_resiko_kontrol($tahun);
		$data['peta_resiko_target'] = $this->peta_resiko_target($tahun);
		$data['peta_resiko_realisasi'] = $this->peta_resiko_realisasi($tahun);

		echo json_encode($data);
	}

	private function ket_col($nilai)
	{
		switch ($nilai) {
			case "1":
				$data = '<span class="align-middle">1 - Sangat Kecil</span>';
				break;
			case "2":
				$data = '<span class="align-middle">2 - Kecil</span>';
				break;
			case "3":
				$data = '<span class="align-middle">3 - Sedang</span>';
				break;
			case "4":
				$data = '<span class="align-middle">4 - Besar</span>';
				break;
			case "5":
				$data = '<span class="align-middle">5 - Sangat Besar</span>';
				break;
			default:
				$data = '<span class="align-middle">&nbsp;</span>';
				break;
		}
		return $data;
	}

	private function ket_row($nilai)
	{
		switch ($nilai) {
			case "1":
				$data = '<span class="align-middle">1 - Sangat Jarang</span>';
				break;
			case "2":
				$data = '<span class="align-middle">2 - Jarang</span>';
				break;
			case "3":
				$data = '<span class="align-middle">3 - Mungkin</span>';
				break;
			case "4":
				$data = '<span class="align-middle">4 - Mungkin Sekali</span>';
				break;
			case "5":
				$data = '<span class="align-middle">5 - Hampir Pasti</span>';
				break;
			default:
				$data = '<span class="align-middle">&nbsp;</span>';
				break;
		}

		return $data;
	}

	public function peta_resiko_mr($tahun)
	{
		$jumlah = 6;
		$mulai = 5;
		$hasil = '';
		for ($row = $mulai; $row > 0; $row--) {
			$hasil .= '<div class="clearfix">';

			for ($col = 1; $col <= $jumlah; $col++) {

				$col_isi = $col - 1;

				if ($col == '1') {
					$tampil = $this->ket_row($row);
					$hasil .= '<div class="col-md-2 float-left border border-light pt-1 pb-1" style="overflow:auto;height:100px;font-size:12px;">
					' . $tampil . '</div>';
				} else {
					$indeks = $col_isi . '-' . $row;
					$indeks_color = $this->menum->row_mr_ref_tingkat_dan_respon_indeks($indeks)->warna;

					$no_urut = $this->menum->row_x_peta_resiko_indeks($tahun, $indeks, 'mr');
					if ($no_urut) {
						$indeks_data = $no_urut;
						$indeks_isi = $this->tombol('inherent', $indeks_data);
					} else {
						$indeks_isi = "&nbsp;";
					}

					$hasil .= '<div class="col-md-2 float-left border border-light pt-1 pb-1" style="overflow:auto;height:100px;font-size:12px;background-color:' . $indeks_color . ';">
					' . $indeks_isi . '</div>';
				}
			}
			$hasil .= '</div>';
		}

		$hasil_ket = '<div class="clearfix">';

		for ($col = 1; $col <= 6; $col++) {

			if ($col == '1') {
				$tampil = $this->ket_col($row);
				$hasil .= '<div class="col-md-2 float-left border border-light pt-1 pb-1" style="overflow:auto;height:100px;font-size:12px;">
				&nbsp;</div>';
			} else {
				$col_ket = $col - 1;
				$tampil = $this->ket_col($col_ket);
				$hasil .= '<div class="col-md-2 float-left border border-light pt-1 pb-1" style="overflow:auto;height:100px;font-size:12px;">
				' . $tampil . '</div>';
			}
		}
		$hasil_ket .= '</div>';


		return $hasil;
	}

	private function peta_resiko_kontrol($tahun)
	{

		$jumlah = 6;
		$mulai = 5;
		$hasil = '';
		for ($row = $mulai; $row > 0; $row--) {
			$hasil .= '<div class="clearfix">';

			for ($col = 1; $col <= $jumlah; $col++) {

				$col_isi = $col - 1;

				if ($col == '1') {
					$tampil = $this->ket_row($row);
					$hasil .= '<div class="col-md-2 float-left border border-light pt-1 pb-1" style="overflow:auto;height:100px;font-size:12px;">
					' . $tampil . '</div>';
				} else {
					$indeks = $col_isi . '-' . $row;
					$indeks_color = $this->menum->row_mr_ref_tingkat_dan_respon_indeks($indeks)->warna;

					$no_urut = $this->menum->row_x_peta_resiko_indeks($tahun, $indeks, 'ak');
					if ($no_urut) {
						$indeks_data = $no_urut;
						$indeks_isi = $this->tombol('residual', $indeks_data);
					} else {
						$indeks_isi = "&nbsp;";
					}

					$hasil .= '<div class="col-md-2 float-left border border-light pt-1 pb-1" style="overflow:auto;height:100px;font-size:12px;background-color:' . $indeks_color . ';">
					' . $indeks_isi . '</div>';
				}
			}
			$hasil .= '</div>';
		}

		$hasil_ket = '<div class="clearfix">';

		for ($col = 1; $col <= 6; $col++) {

			if ($col == '1') {
				$tampil = $this->ket_col($row);
				$hasil .= '<div class="col-md-2 float-left border border-light pt-1 pb-1" style="overflow:auto;height:100px;font-size:12px;">
				&nbsp;</div>';
			} else {
				$col_ket = $col - 1;
				$tampil = $this->ket_col($col_ket);
				$hasil .= '<div class="col-md-2 float-left border border-light pt-1 pb-1" style="overflow:auto;height:100px;font-size:12px;">
				' . $tampil . '</div>';
			}
		}
		$hasil_ket .= '</div>';

		return $hasil;
	}

	private function peta_resiko_target($tahun)
	{

		$jumlah = 6;
		$mulai = 5;
		$hasil = '';
		for ($row = $mulai; $row > 0; $row--) {
			$hasil .= '<div class="clearfix">';

			for ($col = 1; $col <= $jumlah; $col++) {

				$col_isi = $col - 1;

				if ($col == '1') {
					$tampil = $this->ket_row($row);
					$hasil .= '<div class="col-md-2 float-left border border-light pt-1 pb-1" style="overflow:auto;height:100px;font-size:12px;">
					' . $tampil . '</div>';
				} else {
					$indeks = $col_isi . '-' . $row;
					$indeks_color = $this->menum->row_mr_ref_tingkat_dan_respon_indeks($indeks)->warna;

					$no_urut = $this->menum->row_x_peta_resiko_indeks($tahun, $indeks, 'rp');
					if ($no_urut) {
						$indeks_data = $no_urut;
						$indeks_isi = $this->tombol('target', $indeks_data);
					} else {
						$indeks_isi = "&nbsp;";
					}

					$hasil .= '<div class="col-md-2 float-left border border-light pt-1 pb-1" style="overflow:auto;height:100px;font-size:12px;background-color:' . $indeks_color . ';">
					' . $indeks_isi . '</div>';
				}
			}
			$hasil .= '</div>';
		}

		$hasil_ket = '<div class="clearfix">';

		for ($col = 1; $col <= 6; $col++) {

			if ($col == '1') {
				$tampil = $this->ket_col($row);
				$hasil .= '<div class="col-md-2 float-left border border-light pt-1 pb-1" style="overflow:auto;height:100px;font-size:12px;">
				&nbsp;</div>';
			} else {
				$col_ket = $col - 1;
				$tampil = $this->ket_col($col_ket);
				$hasil .= '<div class="col-md-2 float-left border border-light pt-1 pb-1" style="overflow:auto;height:100px;font-size:12px;">
				' . $tampil . '</div>';
			}
		}
		$hasil_ket .= '</div>';
		return $hasil;
	}

	private function peta_resiko_realisasi($tahun)
	{

		$jumlah = 6;
		$mulai = 5;
		$hasil = '';
		for ($row = $mulai; $row > 0; $row--) {
			$hasil .= '<div class="clearfix">';

			for ($col = 1; $col <= $jumlah; $col++) {

				$col_isi = $col - 1;

				if ($col == '1') {
					$tampil = $this->ket_row($row);
					$hasil .= '<div class="col-md-2 float-left border border-light pt-1 pb-1" style="overflow:auto;height:100px;font-size:12px;">
					' . $tampil . '</div>';
				} else {
					$indeks = $col_isi . '-' . $row;
					$indeks_color = $this->menum->row_mr_ref_tingkat_dan_respon_indeks($indeks)->warna;

					$no_urut = $this->menum->row_x_peta_resiko_indeks($tahun, $indeks, 'real');
					if ($no_urut) {
						$indeks_data = $no_urut;
						$indeks_isi = $this->tombol('realisasi', $indeks_data);
					} else {
						$indeks_isi = "&nbsp;";
					}

					$hasil .= '<div class="col-md-2 float-left border border-light pt-1 pb-1" style="overflow:auto;height:100px;font-size:12px;background-color:' . $indeks_color . ';">
					' . $indeks_isi . '</div>';
				}
			}
			$hasil .= '</div>';
		}

		$hasil_ket = '<div class="clearfix">';

		for ($col = 1; $col <= 6; $col++) {

			if ($col == '1') {
				$tampil = $this->ket_col($row);
				$hasil .= '<div class="col-md-2 float-left border border-light pt-1 pb-1" style="overflow:auto;height:100px;font-size:12px;">
				&nbsp;</div>';
			} else {
				$col_ket = $col - 1;
				$tampil = $this->ket_col($col_ket);
				$hasil .= '<div class="col-md-2 float-left border border-light pt-1 pb-1" style="overflow:auto;height:100px;font-size:12px;">
				' . $tampil . '</div>';
			}
		}
		$hasil_ket .= '</div>';

		return $hasil;
	}

	private function tombol($untuk, $data)
	{
		$hasil = '';
		$a = explode(",", $data);
		foreach ($a as $r) {
			$hasil .= '
			<button type="button" class="btn btn-light btn-sm mt-1 mb-1" style="font-size:10px;" onclick="detil(' . "'" . $untuk . "','" . $r . "'" . ')" title="Lihat Detil ?">' . $r . '</button>
			';
		}
		return $hasil;
	}

	public function get_info_peta()
	{
		$no_urut = $this->input->post('id', true);
		$untuk = $this->input->post('untuk', true);

		switch ($untuk) {
			case "inherent":
				$data = $this->menum->result_v_mr_tab_renc_penanganan_inherent($no_urut);
				break;
			case "residual":
				$data = $this->menum->result_v_mr_tab_renc_penanganan_residual($no_urut);
				break;
			case "target":
				$data = $this->menum->result_v_mr_tab_renc_penanganan_target($no_urut);
				break;
			case "realisasi":
				$data = $this->menum->result_v_mr_tab_renc_penanganan_realisasi($no_urut);
				break;
		}

		echo json_encode($data);
	}

	public function update_peta()
	{
		return $this->menum->update_x_peta_resiko_indeks();
	}
}
