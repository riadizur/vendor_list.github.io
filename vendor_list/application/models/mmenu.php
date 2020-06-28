<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mmenu extends CI_Model {
	private $temp = array();
	function __construct() {
		parent::__construct();
	}

public function validate($username,$password){
	$app='2';
	#$sql=$this->db->query("SELECT user_name,password,type,nama,ket FROM USER WHERE user_name='".$username."'");
	$this->db->select("user_name,password,type,nama,ket");
	$this->db->from("tuser");
	$this->db->where("user_name",$username);
	$sql = $this->db->get();
	$this->db->query("SET GLOBAL query_cache_size = 999424");
	$hasil=false;
	foreach($sql->result_array() as $resulte){
		if(md5($password)==$resulte['password']){
				$hasil=true;
				$data = array(
				'user' => $username,
				'app' => $app,
				'ket' => $resulte['ket'],
				'nama'=> $resulte['nama'],
				'type'=> $resulte['type']
				);
				$this->session->set_userdata($data);
		}else{
				$hasil=false;
				$this->session->userdata['user'] = '';
		}
	}

return $hasil;
}

protected function parent_menu($menu) {
	$this->db->select("*");
	$this->db->from("master_user_menu");
	$this->db->where("id",$menu[0]['kategori']);
	$this->db->where("index_id <",$menu[0]['index_id']);
	$this->db->order_by("no_urut","asc");

	$query = $this->db->get();
	$res = $query->result_array();
	if (count($res)>0) {
		array_unshift($menu,$res[0]);
		return $this->parent_menu($menu);
	} else {
		return $menu;
	}
}

protected function linier_menu($menu) {
	foreach ($menu as $resul) {
		$this->temp[] = $resul;
		if ($resul['child']) $this->linier_menu($resul['child']);
	}
}

public function main_menu() {
	$hasil = array();
	$hasil2 = array();
	if (empty($this->session->userdata['user'])){
		$hasil=false;
		$this->load->helper('url');
		redirect('/', 'refresh');
	} else {
		$ket = strtoupper($this->session->userdata['ket']);
		if (empty($this->session->userdata['usermenu']))
		{
			$sql=$this->db->query("SELECT user_name,password,type,nama,ket FROM tuser WHERE user_name='".
				$this->db->escape_str($this->session->userdata['user'])."'");
			if($sql->num_rows()>0){
				$tmp = $sql->result_array();
				$resulte = @$tmp[0];
				$load = $this->db->query("SELECT a.id,a.menu,a.controller,a.index_id,a.kategori,a.kategori_sub FROM tuser_menu a
					LEFT JOIN tuser_otoritas b ON b.id = a.id WHERE b.type='".$resulte['type']."' and a.index_id='0'
					order by a.no_urut");
				foreach($load->result_array() as $resul) {
					$child = $this->child_menu($resulte['type'],($resul['index_id']+1),$resul['id']);
					$resul['child'] = $child;
					$hasil[] = $resul;
				}
			}
			$this->linier_menu($hasil);
			$this->session->set_userdata('usermenu',$hasil);
			$this->session->set_userdata('usermenu2',$this->temp);
		} else {
			$hasil = $this->session->userdata['usermenu'];
		}

	}
	$coba = array('hasil'=>$hasil,'linit'=>@$ket);
    return $coba;
}

protected function child_menu($type,$indexid,$kategori) {
	$child = array();
	$load2 = $this->db->query("SELECT a.id,a.menu,a.controller,a.index_id,a.kategori,a.kategori_sub FROM tuser_menu a
		LEFT JOIN tuser_otoritas b ON b.id = a.id WHERE b.type='".$type."' AND a.index_id='".$indexid."' AND a.kategori='".$kategori."'
		ORDER by a.no_urut");
	foreach($load2->result_array() as $resul3){
		$resul3['child'] = $this->child_menu($type,($resul3['index_id']+1),$resul3['id']);
		$child[] = $resul3;
	};
	return $child;
}

public function active_menu() {
	$aruristr = explode("/",$this->uri->uri_string);
	$uristr = @implode("/",array($aruristr[0],$aruristr[1]));
	$uristr = preg_replace('/_(line|pie|det|detail|baru|otoritas|create|edit)$/', '', $uristr);
	$uristr = preg_replace('/^(lap)_$/', '', $uristr);

	$this->db->from('master_user_menu');
	$this->db->like('controller',$uristr);
	$query = $this->db->get();
	$res = $query->result_array();
	if (count($res)>0) {
		$res = $this->parent_menu($res);
		return $res;
	} else {
		return null;
	}
}

	function islogin(){
		if($this->session->userdata['thn']!=''){
			$hasil=true;
		}else{
			$hasil=false;
		}
		return $hasil;
	}

	function totcust(){
		$this->db->from('MASTER_REKENING');
		$this->db->where('LEFT(THBLREK,4) = YEAR(NOW()) AND RIGHT(THBLREK,2) = MONTH(NOW()) ');
		$this->db->group_by('ID_CUST');
		$query = $this->db->get();
		$rowcount = $query->num_rows();
		if($rowcount == '0'){
			$this->db->from('MASTER_REKENING');
			$this->db->where('LEFT(THBLREK,4) = YEAR(NOW()) AND RIGHT(THBLREK,2) = MONTH(NOW() - interval 1 month) ');
			$this->db->group_by('ID_CUST');
			$query = $this->db->get();
			$rowcount = $query->num_rows();
		}
		return $rowcount;
	}

	function persentotcust(){
		$this->db->from('MASTER_REKENING');
		$this->db->where('LEFT(THBLREK,4) = YEAR(NOW()) AND RIGHT(THBLREK,2) = MONTH(NOW()) ');
		$this->db->group_by('ID_CUST');
		$query = $this->db->get();
		$rowcount1 = $query->num_rows();

		$this->db->from('MASTER_REKENING');
		$this->db->where('LEFT(THBLREK,4) = YEAR(NOW() - interval 1 year) AND RIGHT(THBLREK,2) = MONTH(now()) ');
		$this->db->group_by('ID_CUST');
		$query = $this->db->get();
		$rowcount2 = $query->num_rows();

		if($rowcount1 == '0'){
			$this->db->from('MASTER_REKENING');
			$this->db->where('LEFT(THBLREK,4) = YEAR(NOW()) AND RIGHT(THBLREK,2) = MONTH(NOW() - interval 1 month) ');
			$this->db->group_by('ID_CUST');
			$query = $this->db->get();
			$rowcount1 = $query->num_rows();

			$this->db->from('MASTER_REKENING');
			$this->db->where('LEFT(THBLREK,4) = YEAR(NOW() - interval 1 year) AND RIGHT(THBLREK,2) = MONTH(now() - interval 1 month) ');
			$this->db->group_by('ID_CUST');
			$query = $this->db->get();
			$rowcount2 = $query->num_rows();

		}

		$rowcounta = $rowcount1 - $rowcount2;
		$rowcountb = $rowcounta / $rowcount2;
		$rowcountc = $rowcountb * 100;

		return number_format($rowcountc,2);
	}

	function totlang(){
		$this->db->from('MASTER_REKENING');
		$this->db->where('LEFT(THBLREK,4) = YEAR(NOW()) AND RIGHT(THBLREK,2) = MONTH(NOW()) ');
		$this->db->group_by('ID_LANG');
		$query = $this->db->get();
		$rowcount = $query->num_rows();
		if($rowcount == '0'){
			$this->db->from('MASTER_REKENING');
			$this->db->where('LEFT(THBLREK,4) = YEAR(NOW()) AND RIGHT(THBLREK,2) = MONTH(NOW() - interval 1 month) ');
			$this->db->group_by('ID_LANG');
			$query = $this->db->get();
			$rowcount = $query->num_rows();
		}
		$rowcount = $query->num_rows();

		return $rowcount;
	}

	function persentotlang(){
		$this->db->from('MASTER_REKENING');
		$this->db->where('LEFT(THBLREK,4) = YEAR(NOW()) AND RIGHT(THBLREK,2) = MONTH(NOW()) ');
		$this->db->group_by('ID_LANG');
		$query = $this->db->get();
		$rowcount1 = $query->num_rows();

		$this->db->from('MASTER_REKENING');
		$this->db->where('LEFT(THBLREK,4) = YEAR(NOW() - interval 1 year) AND RIGHT(THBLREK,2) = MONTH(NOW()) ');
		$this->db->group_by('ID_LANG');
		$query = $this->db->get();
		$rowcount2 = $query->num_rows();

		if($rowcount1 == '0'){
			$this->db->from('MASTER_REKENING');
			$this->db->where('LEFT(THBLREK,4) = YEAR(NOW()) AND RIGHT(THBLREK,2) = MONTH(NOW() - interval 1 month) ');
			$this->db->group_by('ID_LANG');
			$query = $this->db->get();
			$rowcount1 = $query->num_rows();

			$this->db->from('MASTER_REKENING');
			$this->db->where('LEFT(THBLREK,4) = YEAR(NOW() - interval 1 year) AND RIGHT(THBLREK,2) = MONTH(NOW() - interval 1 month ) ');
			$this->db->group_by('ID_LANG');
			$query = $this->db->get();
			$rowcount2 = $query->num_rows();
		}

		$rowcounta = $rowcount1 - $rowcount2;
		$rowcountb = $rowcounta / $rowcount2;
		$rowcountc = $rowcountb * 100;

		return number_format($rowcountc,2);
	}

	function totkwh(){
		$kwh = $this->db->query("select Real_KWH_Kom from v_target_dan_realisasi where Real_KWH_Kom != 0
									order by Bulan desc limit 1")->row("Real_KWH_Kom");
		return $kwh;
	}

	function persentotkwh(){
		$kwh2 = $this->db->query("select Target_KWH_Kom from v_target_dan_realisasi where Real_KWH_Kom != 0
									order by Bulan desc limit 1")->row("Target_KWH_Kom");

		$kwh1 = $this->db->query("select Real_KWH_Kom from v_target_dan_realisasi where Real_KWH_Kom != 0
									order by Bulan desc limit 1")->row("Real_KWH_Kom");

		$kwha = $kwh1 - $kwh2;
		$kwhb = $kwha / $kwh2;
		$kwhc = $kwhb * 100;

		return abs($kwhc);
	}

	function totrptag(){
		$rptag = $this->db->query("select Real_Rp_Kom from v_target_dan_realisasi where Real_Rp_Kom != 0
									order by Bulan desc limit 1")->row("Real_Rp_Kom");
		return $rptag;
	}

	function persentotrptag(){
		$rptag2 = $this->db->query("select Target_Rp_Kom from v_target_dan_realisasi where Real_Rp_Kom != 0
									order by Bulan desc limit 1")->row("Target_Rp_Kom");

		$rptag1 = $this->db->query("select Real_Rp_Kom from v_target_dan_realisasi where Real_Rp_Kom != 0
									order by Bulan desc limit 1")->row("Real_Rp_Kom");

		$rptaga = $rptag1 - $rptag2;
		$rptagb = $rptaga / $rptag2;
		$rptagc = $rptagb * 100;

		return abs($rptagc);
	}

	function totlogin(){
		$this->db->from('user');
		$this->db->where('sts','1');
		$query = $this->db->get();
		$rowcount = $query->num_rows();

		return $rowcount;
	}

	function totlogout(){
		$this->db->from('user');
		$this->db->where('sts','0');
		$query = $this->db->get();
		$rowcount = $query->num_rows();

		return $rowcount;
	}

	function totrpepi(){
		$this->db->select('SUM(RP_EPI) RPEPI');
		$this->db->from('billing_listrik_ref');
		$query = $this->db->get();
		$ret = $query->row();
		return $ret->RPEPI;
	}

	function get_chart_langbyarea(){
		$query = $this->db->query("select b.nm_area area, count(a.id_lang) jml
									from master_rekening a
									join tr_area b on a.kd_area=b.kd_area
									where thblrek = (select max(thblrek) from master_rekening)
									group by a.kd_area");
		return $all = $query->result();
	}

	function get_chart_langbygol(){
		$query = $this->db->query("select b.uraian gol, count(a.id_lang) jml
									from master_rekening a
									join tr_golongan b on a.kogol=b.kd_gol
									where thblrek = (select max(thblrek) from master_rekening)
									group by a.kogol ");
		return $all = $query->result();
	}

	function get_chart_dayabyarea(){
		$query = $this->db->query("select b.nm_area area, sum(a.daya) jml
									from master_rekening a
									join tr_area b on a.kd_area=b.kd_area
									where thblrek = (select max(thblrek) from master_rekening)
									group by a.kd_area ");
		return $all = $query->result();
	}

	function get_chart_dayabygol(){
		$query = $this->db->query("select b.uraian gol, sum(a.daya) jml
									from master_rekening a
									join tr_golongan b on a.kogol=b.kd_gol
									where thblrek = (select max(thblrek) from master_rekening)
									group by a.kogol ");
		return $all = $query->result();
	}

	function get_chart_kwhbyarea(){
		$query = $this->db->query("select b.nm_area area, sum(a.PEMKWH) jml
									from master_rekening a
									join tr_area b on a.kd_area=b.kd_area
									where thblrek = (select max(thblrek) from master_rekening)
									group by a.kd_area ");
		return $all = $query->result();
	}

	function get_chart_kwhbygol(){
		$query = $this->db->query("select b.uraian gol, sum(a.PEMKWH) jml
									from master_rekening a
									join tr_golongan b on a.kogol=b.kd_gol
									where thblrek = (select max(thblrek) from master_rekening)
									group by a.kogol ");
		return $all = $query->result();
	}

	function get_chart_pendapatanbyarea(){
		$query = $this->db->query("select b.nm_area area, sum(a.RPTAG) jml
									from master_rekening a
									join tr_area b on a.kd_area=b.kd_area
									where thblrek = (select max(thblrek) from master_rekening)
									group by a.kd_area ");
		return $all = $query->result();
	}

	function get_chart_pendapatanbygol(){
		$query = $this->db->query("select b.uraian gol, sum(a.RPTAG) jml
									from master_rekening a
									join tr_golongan b on a.kogol=b.kd_gol
									where thblrek = (select max(thblrek) from master_rekening)
									group by a.kogol ");
		return $all = $query->result();
	}

	function get_grafik_kwh(){
		$query = $this->db->query("select * from v_target_dan_realisasi ");
		return $all = $query->result_array();
	}

}
?>
