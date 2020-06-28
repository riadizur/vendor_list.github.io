<?php
// header("Access-Control-Allow-Origin: *");
defined('BASEPATH') OR exit('No direct script access allowed');
class Evaluasi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('db_models');
		// require 'C:\xampp\htdocs\vendor_list\application\libraries\PHPMailer\src\Exception.php';
		// require 'C:\xampp\htdocs\vendor_list\application\libraries\Phpmailer.php';
		// require 'C:\xampp\htdocs\vendor_list\application\libraries\PHPMailer\src\SMTP.php';
	}
	public function index(){
		if ($this->session->userdata('nama') <> '') {
			// $url = base_url() . 'welcome/dashboard';
			// header( "Location: $url" );
			$this->evaluasi();
		}else {
			$url = base_url() . 'welcome';
			header( "Location: $url" );
		}
	}
	private function evaluasi() 
	{
		if ($this->session->userdata('nama') <> '') {
			$this->load->model('menum');
			$data_head['prev'] = $this->menum->main_menu();
			$this->load->view('evaluasi/head',$data_head);
			$list_minat=$this->db_models->list_dropdown('tr_minat_pekerjaan',array('kode','nama'),'all','','','Semua');
			$list_provinsi=$this->db_models->list_dropdown('master_perusahaan',array('distinct(prov)','prov'),'all','','','Semua');
			$data_body['dropdown_minat'] = form_dropdown("dropdown_minat", $list_minat, [], 'id="dropdown_minat"  onchange="load_tabel_minat($(this).val(),$(\'#dropdown_area\').val());" style="width:100%; " class="form-control select2me"');
			$data_body['dropdown_area'] = form_dropdown("dropdown_area", $list_provinsi, [], 'id="dropdown_area"  onchange="load_tabel_minat($(\'#dropdown_minat\').val(),$(this).val());" style="width:100%; " class="form-control select2me"');
			$this->load->view('evaluasi/evaluasi_new',$data_body);
			// $this->load->view('pengadaan/footer');
			// $this->load->view('evaluasi/evaluasi');
		} else {
			$this->load->model('menum');
			$dataa['cpt'] = $this->menum->generatecapta();
			$this->load->view('pengadaan/login', $dataa);
		}
	}
	public function daftar_perusahaan(){
		if ($this->session->userdata('nama') <> '') {
			$this->load->model('menum');
			$data['prev'] = $this->menum->main_menu();
			$this->load->view('evaluasi/head',$data);
			$this->load->view('evaluasi/daftar_vendor'); 
			// $this->load->view('pengadaan/footer');
			// $this->load->view('evaluasi/evaluasi');
		} else {
			$this->load->model('menum');
			$dataa['cpt'] = $this->menum->generatecapta();
			$this->load->view('pengadaan/login', $dataa);
		}
	}
	public function kelompok_minat(){
		if ($this->session->userdata('nama') <> '') {
			$this->load->model('menum');
			$data_head['prev'] = $this->menum->main_menu();
			$this->load->view('evaluasi/head',$data_head);
			$list_minat=$this->db_models->list_dropdown('tr_minat_pekerjaan',array('kode','nama'),'all','','','Semua');
			$list_provinsi=$this->db_models->list_dropdown('master_perusahaan',array('distinct(prov)','prov'),'all','','','Semua');
			$data_body['dropdown_minat'] = form_dropdown("dropdown_minat", $list_minat, [], 'id="dropdown_minat"  onchange="load_tabel_minat($(this).val(),$(\'#dropdown_area\').val());" style="width:100%; " class="form-control select2me"');
			$data_body['dropdown_area'] = form_dropdown("dropdown_area", $list_provinsi, [], 'id="dropdown_area"  onchange="load_tabel_minat($(\'#dropdown_minat\').val(),$(this).val());" style="width:100%; " class="form-control select2me"');
			$this->load->view('evaluasi/kelompok_minat2',$data_body); 
			// $this->load->view('pengadaan/footer');
			// $this->load->view('evaluasi/evaluasi');
		} else {
			$this->load->model('menum');
			$dataa['cpt'] = $this->menum->generatecapta();
			$this->load->view('welcome/login', $dataa);
		}
	} 
	public function kelompok_bidang(){
		if ($this->session->userdata('nama') <> '') {
			$this->load->model('menum');
			$data_head['prev'] = $this->menum->main_menu();
			$this->load->view('evaluasi/head',$data_head);
			$list_minat=$this->db_models->list_dropdown('tr_bidang_pekerjaan',array('kode','nama'),'all','','','Semua');
			$list_provinsi=$this->db_models->list_dropdown('master_perusahaan',array('distinct(prov)','prov'),'all','','','Semua');
			$data_body['dropdown_bidang'] = form_dropdown("dropdown_bidang", $list_minat, [], 'id="dropdown_bidang"  onchange="load_tabel_bidang($(this).val(),$(\'#dropdown_area\').val());" style="width:100%; " class="form-control select2me"');
			$data_body['dropdown_area'] = form_dropdown("dropdown_area", $list_provinsi, [], 'id="dropdown_area"  onchange="load_tabel_bidang($(\'#dropdown_bidang\').val(),$(this).val());" style="width:100%; " class="form-control select2me"');
			$this->load->view('evaluasi/kelompok_bidang',$data_body); 
			// $this->load->view('pengadaan/footer');
			// $this->load->view('evaluasi/evaluasi');
		} else {
			$this->load->model('menum');
			$dataa['cpt'] = $this->menum->generatecapta();
			$this->load->view('welcome/login', $dataa);
		}
	} 
	public function coba(){
		$this->load->view('others/test');	
	}
	public function save_tab() 
	{
		$id_tab=$this->input->post('id_tab');
		$formData=$this->input->post('formData');
		$is_upload=$this->input->post('is_upload');
		date_default_timezone_set('Asia/Jakarta');
		$sekarang = date('Y-m-d H:i:s');
        $data = array();
        $kolom = $this->db_models->result_kolom($nama_tabel);
		foreach ($kolom as $col) {
			$data[$col->COLUMN_NAME] = $this->formData[$col->COLUMN_NAME];
		}
		$data_all['status'] = TRUE;
		echo json_encode($data_all);
	}
	
	public function cek_session(){
		$tabel=$this->input->post('tabel');
		$where=$this->input->post('where');
		$kolom=$this->input->post('kolom');
		$kode_register=$this->input->post('session');
		$hasil=$this->db_models->cek($tabel,$where);
		if($hasil!=''){
			$this->session->set_userdata(array('kode_register'=>$kode_register));
			$url = base_url() . 'register/register';
			header( "Location: $url" );
		}else{
			$this->session->set_userdata(array('kode_register'=>'epi-' . round(microtime(true) * 1000)));
			$url = base_url() . 'register/register';
			header( "Location: $url" );
		}
	}
	public function cek(){
		$tabel=$this->input->post('tabel');
		$where=$this->input->post('where');
		$hasil=$this->db_models->cek($tabel,$where);
		echo json_encode($hasil);
	}
	private function incrementalHash($len = 1){
		$charset = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$base = strlen($charset);
		$result = '';
	  
		$now = explode(' ', microtime())[1];
		while ($now >= $base){
		  $i = $now % $base;
		  $result = $charset[$i] . $result;
		  $now /= $base;
		}
		return substr($result, -1);
	  }
	public function analyze(){
		$kode_register=$this->input->post('kode_register');
		$dokumen_wajib = $this->db_models->result_array('tr_dokumen',array('wajib'=>'1'));
		// $terpenuhi = true;
		$x=0;
		for($i=0;$i<sizeof($dokumen_wajib);$i++){
			$cek_berkas_ijin = $this->db_models->cek('master_berkas',array('hasil_eva'=>'1','kode_register'=>$kode_register,'kode_dokumen'=>$dokumen_wajib[$i]['kode']));
			if(!$cek_berkas_ijin && $dokumen_wajib[$i]['kode']!='admp_01'){
				// $terpenuhi = false;
			}else{
				$x++;
			}
		}
		if(true){
			$month = date("m");
   			$year = date("Y");
			$id=$this->db_models->max_id_vendor();
			if($id!=null){
				$id=$id+1;
			}else{
				$id='001';
			}
			$random=$this->incrementalHash(1);
			$sudah=$this->db_models->row('master_perusahaan',array('kode_register'=>$kode_register),'kode_vendor');
			if($sudah=='' or $sudah ==NULL){
				$kode_vendor='EPI-'.$year.$month.$id.$random;
				$this->crude_new('insert','master_perusahaan',array('kode_vendor'=>$kode_vendor,'hasil_eva'=>'1','tgl_terbit_kode_vendor'=>date("Y-m-d h:i:sa")),array('kode_register'=>$kode_register),'');
			}else{
				$this->crude_new('insert','master_perusahaan',array('hasil_eva'=>'1','tgl_terbit_kode_vendor'=>date("Y-m-d h:i:sa")),array('kode_register'=>$kode_register),'');
				$kode_vendor=$this->db_models->row('master_perusahaan',array('kode_register'=>$kode_register),'kode_vendor');
			}
			echo json_encode([$kode_vendor]);
		}else{
			$dokumen_tidak_lengkap = array();
			$dokumen_tidak_terpenuhi = $this->db_models->result_array('master_berkas',array('hasil_eva'=>'0','kode_register'=>$kode_register));
			for($i=0;$i<sizeof($dokumen_tidak_terpenuhi);$i++){
				$dokumen_tidak_lengkap[$i]=$this->db_models->row('tr_dokumen',array('kode'=>$dokumen_tidak_terpenuhi[$i]['kode_dokumen']),'uraian');
			}
			echo json_encode($dokumen_tidak_lengkap);
		}
	}
	public function check(){
		$db=$this->input->post('db');
		$check=$this->db_models->get_data($db[0],$db[1],$db[2]);
		echo json_encode($check);
	}
	private function crude_new($aksi,$tabel,$data,$where){
		switch ($aksi) { 
			case 'update':
				$this->db_models->update($tabel, $data, $where);
				break;
			case 'delete':
				$this->db_models->delete($tabel, $where);
				break;
			case 'insert':
				$ada_data=false;
				if($where!=''){
					$ada_data=$this->db_models->cek($tabel,$where);
				}
				if(!$ada_data){
					$this->db_models->insert($tabel, $data);
				}else{
					$this->db_models->update($tabel, $data, $where);
				}
				break;
			default:
				break;
		}
	}
    public function crude()
	{
		$aksi = $this->input->post('aksi');
		$tabel = $this->input->post('tabel');
		$data = $this->input->post('data');
		$where = $this->input->post('where');
		$status = '';
		switch ($aksi) {
			case 'update':
				$this->db_models->update($tabel, $data, $where);
				$status = 'update';
				break;
			case 'delete':
				$this->db_models->delete($tabel, $where);
				$status = 'delete';
				break;
			case 'insert':
				$ada_data=false;
				if($where!=''){
					$ada_data=$this->db_models->cek($tabel,$where);
				}
				if(!$ada_data){
					$this->db_models->insert($tabel, $data);
					$status = 'tambahkan';
				}else{
					$this->db_models->update($tabel, $data, $where);
					$status = 'update';
				}
				break;
			default:
				break;
		}
		echo json_encode($status);
	}
	public function load_tabel()
	{
		$nama_tabel = $this->input->post('nama_tabel');
		$where = $this->input->post('where');
		$data = array();
		switch($nama_tabel){
			case 'tabel_evaluasi' : $this->tabel_evaluasi($where);break;
			case 'tabel_berkas_adm' : $this->tabel_berkas_adm($where);break;
			case 'tabel_berkas_ijin' : $this->tabel_berkas_ijin($where);break;
			case 'tabel_kbli' : $this->tabel_kbli($where);break;
			case 'tabel_pengalaman' : $this->tabel_daftar_pengalaman($where);break;
			case 'tabel_vendor' : $this->tabel_vendor($where);break;
			case 'tabel_minat' : $this->tabel_minat($where);break;
			case 'tabel_bidang' : $this->tabel_bidang($where);break;
			case 'tabel_bidangx' : $this->tabel_bidangx($where);break;
		}
	}
	private function data_minat($kode_register){
		$data=$this->db_models->result('master_minat_pekerjaan',array('kode_register'=>$kode_register));
		$i=0;
		$minat=array();
		foreach($data as $d){
			$minat[]=array('minat'=>$this->db_models->row('tr_minat_pekerjaan',array('kode'=>$d->kode_minat),'nama'));
			$i++;
		}
		return $minat;
	}
	public function load_data(){
		$data_tabel=array();
		$kode_register = $this->input->post('kode_register');
		$data = $this->input->post('data');
		switch($data){
			case 'perusahaan' : $data=$this->db_models->result('master_perusahaan',array('kode_register'=>$kode_register)); break;
			case 'pic' : $data=$this->db_models->result('master_pic',array('kode_register'=>$kode_register)); break;
			case 'berkas' : $data=$this->db_models->result('master_berkas',array('kode_file'=>$this->input->post('kode_file'))); break;
			case 'minat' :  $data=$this->data_minat($kode_register); break;
		}
		// $data_tabel=$this->db_models->result('temp_register_berkas_perijinan',array('kode_dokumen'=>$this->input->post('kode_dokumen')));
		echo json_encode($data);
	}
	public function tabel_kbli($where){
		$i = 1;
		$data=array();
		$hasil = $this->db_models->result('master_ijin',$where);
		foreach ($hasil as $r) {
			$row = array();
			$row[] = $i;
			$row[] = $r->kode_kbli;
			$row[] = $this->db_models->row('tr_kbli_detil',array('kode'=>$r->kode_kbli),'deskripsi');
			if($r->klasifikasi!='-'){
				$kualifikasi = $this->db_models->row('tr_klasifikasi_grade',array('kode'=>$r->klasifikasi),'kualifikasi');
				$modal_usaha = $this->db_models->row('tr_klasifikasi_grade',array('kode'=>$r->klasifikasi),'modal_usaha');
				$row[] =  $kualifikasi . ' dengan modal usaha ' . $modal_usaha;
			}else{
				$row[] = '-';
			}
			$data[] = $row;
			$i++;
		}
		$output = array(
			"data" => $data,
		);
		echo json_encode($output);
	}
	public function tabel_vendor($where){
		$i = 1;
		$data=array();
		$hasil = $this->db_models->result('master_perusahaan',array('hasil_eva'=>'1'));
		foreach ($hasil as $r) {
			$row = array();
			$row[] = $i;
			$row[] = $r->kode_register;
			$row[] = $r->nama_perusahaan;
			$row[] = $r->alamat.', '.$r->kec.', '.$r->kab.', '.$r->prov.', '.$r->kode_pos;
			$row[] = '
					<div class="row">
					<a type="button" class="btn blue" onclick="
					crude(\'update\',\'master_perusahaan\',{kode_register:\'' . $r->kode_register .  '\'},{hasil_eva:\'0\'},\'\');
					load_tabel_vendor();
					" 
					title="Re-evaluasi Vendor"><i class="fa fa-refresh"></i></a>
					<div>
					';
			$data[] = $row;
			$i++;
		}
		$output = array(
			"data" => $data,
		);
		echo json_encode($output);
	}
	public function cobaa(){
		$this->load->view('others/coba');
	}
	public function cobaaa(){
		$this->load->view('others/coba1');
	}
	public function cobaaaa(){
		$this->load->view('others/indorelawan');
	}
	public function tabel_evaluasi($where){
		$i = 1;
		$data=array();
		$hasil = $this->db_models->result('master_perusahaan',array('hasil_eva=\'\' or hasil_eva=0 or hasil_eva='=>NULL));
		foreach ($hasil as $r) {
			$row = array();
			$row[] = $i;
			$row[] = $r->kode_register;
			$row[] = $r->nama_perusahaan;
			$row[] = $r->alamat.', '.$r->kec.', '.$r->kab.', '.$r->prov.', '.$r->kode_pos;
			$kode_minat = $this->db_models->result_array('master_minat_pekerjaan',array('kode_register'=> $r->kode_register));
			// $minat ='';
			// for($j=0;$j<sizeof($kode_minat);$j++){
			// 	$x=$j+1;
			// 	$nama_minat = $this->db_models->row('tr_minat_pekerjaan',array('kode'=> $kode_minat[$j]['kode_minat']),'nama');
			// 	$minat .= $x.'. '.$nama_minat.'<br>';
			// }
			// $row[]=$minat;
			$sts_eva1=$this->db_models->row('master_perusahaan',array('kode_register'=> $r->kode_register),'sts_eva');
			$sts_eva2=$this->db_models->row('temp_register_data_perusahaan',array('kode_register'=> $r->kode_register),'sts_eva');
			if($sts_eva1!='1'){
				if($sts_eva2!='1'){
					$row[] = '
							<button class="btn btn-primary" type="button" onclick="load_detil(' . "'" . $r->kode_register . "'" . ');$(\'#form_tabel_evaluasi\').hide();$(\'#form_detil\').show();
							crude(\'insert\',\'master_perusahaan\',{kode_register:\''.$r->kode_register.'\'},{sts_eva:\'1\'},\'\');"  title="Detil"><i class="fa fa-book"></i></button>
							';
				}else{
					$row[] = '
						<button class="btn btn-primary"  type="button" onclick="alert(\'Data ini sedang diakses oleh Calon Mitra !\');"  title="Detil"><i class="fa fa-book"></i></button>
						';
				}
			}else{
				$row[] = '
					<button class="btn btn-primary"  type="button"  onclick="alert(\'Data ini sedang diakses oleh User Panitia lain !\');"  title="Detil"><i class="fa fa-book"></i></button>
						';
			}
			$data[] = $row;
			$i++;
		}
		$output = array(
			"data" => $data,
		);
		echo json_encode($output);
	}
	public function tabel_bidangx($where){
		$i = 1;
		$data=array();
		if($where['kode_bidang']=='0000'){
			if($where['prov']=='0000'){
				$hasil = $this->db_models->result('master_perusahaan',array());
			}else{
				$hasil = $this->db_models->result('master_perusahaan',array('prov'=>$where['prov']));
			}
			foreach ($hasil as $r) {
				$row = array();
				$row[] = $i;
				$row[] = $r->kode_register;
				// $row[] = $r->kode_vendor;
				$row[] = $r->nama_perusahaan;
				$row[] = $r->alamat.', '.$r->kec.', '.$r->kab.', '.$r->prov.', '.$r->kode_pos;
				$kode_minat = $this->db_models->result_array('master_bidang_pekerjaan',array('kode_register'=> $r->kode_register));
				$sts_eva1=$this->db_models->row('master_perusahaan',array('kode_register'=> $r->kode_register),'sts_eva');
				$sts_eva2=$this->db_models->row('temp_register_data_perusahaan',array('kode_register'=> $r->kode_register),'sts_eva');
				if($sts_eva1!='1'){
					if($sts_eva2!='1'){
						$row[] = '
								<button class="btn btn-primary" type="button" onclick="load_detil(' . "'" . $r->kode_register . "'" . ');$(\'#form_tabel_evaluasi\').hide();$(\'#form_detil\').show();
								crude(\'insert\',\'master_perusahaan\',{kode_register:\''.$r->kode_register.'\'},{sts_eva:\'1\'},\'\');"  title="Detil"><i class="fa fa-book"></i></button>
								';
					}else{
						$row[] = '
							<button class="btn btn-primary"  type="button" onclick="alert(\'Data ini sedang diakses oleh Calon Mitra !\');"  title="Detil"><i class="fa fa-book"></i></button>
							';
					}
				}else{
					$row[] = '
						<button class="btn btn-primary"  type="button"  onclick="alert(\'Data ini sedang diakses oleh User Panitia lain !\');"  title="Detil"><i class="fa fa-book"></i></button>
							';
				}
				$data[] = $row;
				$i++;
			}
		}else{
			$pra_hasil = $this->db_models->result('master_bidang_pekerjaan',array('kode_bidang'=>$where['kode_bidang']));
			foreach($pra_hasil as $ph){
				$hasil=array();
				if($where['prov']=='0000'){
					$hasil= $this->db_models->result('master_perusahaan',array('kode_register'=>$ph->kode_register));
				}else{
					$pra_hasilx = $this->db_models->count('master_perusahaan',array('kode_register'=>$ph->kode_register,'prov'=>$where['prov']),'kode_register');
					if($pra_hasilx>0){
						$hasil= $this->db_models->result('master_perusahaan',array('kode_register'=>$ph->kode_register,'prov'=>$where['prov']),'kode_register');
					}
				}
				foreach($hasil as $r){
					$row = array();
					$row[] = $i;
					$row[] = $r->kode_register;
					// $row[] = $r->kode_vendor;
					$row[] = $r->nama_perusahaan;
					$row[] = $r->alamat.', '.$r->kec.', '.$r->kab.', '.$r->prov.', '.$r->kode_pos;
					$kode_minat = $this->db_models->result_array('master_bidang_pekerjaan',array('kode_register'=> $r->kode_register));
					$sts_eva1=$this->db_models->row('master_perusahaan',array('kode_register'=> $r->kode_register),'sts_eva');
					$sts_eva2=$this->db_models->row('temp_register_data_perusahaan',array('kode_register'=> $r->kode_register),'sts_eva');
					if($sts_eva1!='1'){
						if($sts_eva2!='1'){
							$row[] = '
									<button class="btn btn-primary" type="button" onclick="load_detil(' . "'" . $r->kode_register . "'" . ');$(\'#form_tabel_evaluasi\').hide();$(\'#form_detil\').show();
									crude(\'insert\',\'master_perusahaan\',{kode_register:\''.$r->kode_register.'\'},{sts_eva:\'1\'},\'\');"  title="Detil"><i class="fa fa-book"></i></button>
									';
						}else{
							$row[] = '
								<button class="btn btn-primary"  type="button" onclick="alert(\'Data ini sedang diakses oleh Calon Mitra !\');"  title="Detil"><i class="fa fa-book"></i></button>
								';
						}
					}else{
						$row[] = '
							<button class="btn btn-primary"  type="button"  onclick="alert(\'Data ini sedang diakses oleh User Panitia lain !\');"  title="Detil"><i class="fa fa-book"></i></button>
								';
					}
					$data[] = $row;
					$i++;
				}
			}
		}
		
		$output = array(
			"data" => $data,
		);
		echo json_encode($output);
	}
	public function tabel_minat($where){
		$i = 1;
		$data=array();
		if($where['kode_minat']=='0000'){
			if($where['prov']=='0000'){
				$hasil = $this->db_models->result('master_perusahaan',array());
			}else{
				$hasil = $this->db_models->result('master_perusahaan',array('prov'=>$where['prov']));
			}
			foreach ($hasil as $r) {
				$row = array();
				$row[] = $i;
				$row[] = $r->kode_register;
				$row[] = $r->kode_vendor;
				$row[] = $r->nama_perusahaan;
				$row[] = $r->alamat.', '.$r->kec.', '.$r->kab.', '.$r->prov.', '.$r->kode_pos;
				$kode_minat = $this->db_models->result_array('master_minat_pekerjaan',array('kode_register'=> $r->kode_register));
				$sts_eva1=$this->db_models->row('master_perusahaan',array('kode_register'=> $r->kode_register),'sts_eva');
				$sts_eva2=$this->db_models->row('temp_register_data_perusahaan',array('kode_register'=> $r->kode_register),'sts_eva');
				if($sts_eva1!='1'){
					if($sts_eva2!='1'){
						$row[] = '
								<button type="button" class="btn btn-primary" data-target="#modal_detil" data-toggle="modal" onclick="load_detil(' . "'" . $r->kode_register . "'" . ');
								crude(\'insert\',\'master_perusahaan\',{kode_register:\''.$r->kode_register.'\'},{sts_eva:\'1\'},\'\');"  title="Detil"><i class="fa fa-book"></i></button>
								';
					}else{
						$row[] = '
							<button type="button" class="btn btn-primary" onclick="alert(\'Data ini sedang diakses oleh Calon Mitra !\');"  title="Detil"><i class="fa fa-book"></i></button>
							';
					}
				}else{
					$row[] = '
							<button type="button" class="btn btn-primary" onclick="alert(\'Data ini sedang diakses oleh User Panitia lain !\');"  title="Detil"><i class="fa fa-book"></i></button>
							';
				}
				$data[] = $row;
				$i++;
			}
		}else{
			$pra_hasil = $this->db_models->result('master_minat_pekerjaan',array('kode_minat'=>$where['kode_minat']));
			foreach($pra_hasil as $ph){
				$hasil=array();
				if($where['prov']=='0000'){
					$hasil= $this->db_models->result('master_perusahaan',array('kode_register'=>$ph->kode_register));
				}else{
					$pra_hasilx = $this->db_models->count('master_perusahaan',array('kode_register'=>$ph->kode_register,'prov'=>$where['prov']),'kode_register');
					if($pra_hasilx>0){
						$hasil= $this->db_models->result('master_perusahaan',array('kode_register'=>$ph->kode_register,'prov'=>$where['prov']),'kode_register');
					}
				}
				foreach($hasil as $r){
					$row = array();
					$row[] = $i;
					$row[] = $r->kode_register;
					$row[] = $r->kode_vendor;
					$row[] = $r->nama_perusahaan;
					$row[] = $r->alamat.', '.$r->kec.', '.$r->kab.', '.$r->prov.', '.$r->kode_pos;
					$kode_minat = $this->db_models->result_array('master_minat_pekerjaan',array('kode_register'=> $r->kode_register));
					$sts_eva1=$this->db_models->row('master_perusahaan',array('kode_register'=> $r->kode_register),'sts_eva');
					$sts_eva2=$this->db_models->row('temp_register_data_perusahaan',array('kode_register'=> $r->kode_register),'sts_eva');
					if($sts_eva1!='1'){
						if($sts_eva2!='1'){
							$row[] = '
									<button type="button" class="btn btn-primary" data-target="#modal_detil" data-toggle="modal" onclick="load_detil(' . "'" . $r->kode_register . "'" . ');
									crude(\'insert\',\'master_perusahaan\',{kode_register:\''.$r->kode_register.'\'},{sts_eva:\'1\'},\'\');"  title="Detil"><i class="fa fa-book"></i></button>
									';
						}else{
							$row[] = '
								<button type="button" class="btn btn-primary" onclick="alert(\'Data ini sedang diakses oleh Calon Mitra !\');"  title="Detil"><i class="fa fa-book"></i></button>
								';
						}
					}else{
						$row[] = '
								<button type="button" class="btn btn-primary"onclick="alert(\'Data ini sedang diakses oleh User Panitia lain !\');"  title="Detil"><i class="fa fa-book"></i></button>
								';
					}
					$data[] = $row;
					$i++;
				}
			}
		}
		
		$output = array(
			"data" => $data,
		);
		echo json_encode($output);
	}
	public function tabel_bidang($where){
		$i = 1;
		$data=array();
		if($where['kode_bidang']=='0000'){
			$kode_bidang=$this->db_models->get('master_bidang_pekerjaan',array('distinct(kode_register)'),'all');
			foreach($kode_bidang as $kd){
				if($where['prov']=='0000'){
					$hasil = $this->db_models->result('master_perusahaan',array('kode_register'=>$kd->kode_register));
				}else{
					$hasil = $this->db_models->result('master_perusahaan',array('kode_register'=>$kd->kode_register,'prov'=>$where['prov']));
				}
				foreach ($hasil as $r) {
					$row = array();
					$row[] = $i;
					$row[] = $r->kode_register;
					$row[] = $r->kode_vendor;
					$row[] = $r->nama_perusahaan;
					$row[] = $r->alamat.', '.$r->kec.', '.$r->kab.', '.$r->prov.', '.$r->kode_pos;
					$kode_bidang = $this->db_models->result_array('master_bidang_pekerjaan',array('kode_register'=> $r->kode_register));
					$sts_eva1=$this->db_models->row('master_perusahaan',array('kode_register'=> $r->kode_register),'sts_eva');
					$sts_eva2=$this->db_models->row('temp_register_data_perusahaan',array('kode_register'=> $r->kode_register),'sts_eva');
					if($sts_eva1!='1'){
						if($sts_eva2!='1'){
							$row[] = '
									<button type="button" class="btn btn-primary" data-target="#modal_detil" data-toggle="modal" onclick="load_detil(' . "'" . $r->kode_register . "'" . ');
									crude(\'insert\',\'master_perusahaan\',{kode_register:\''.$r->kode_register.'\'},{sts_eva:\'1\'},\'\');"  title="Detil"><i class="fa fa-book"></i></button>
									';
						}else{
							$row[] = '
								<button type="button" class="btn btn-primary" onclick="alert(\'Data ini sedang diakses oleh Calon Mitra !\');"  title="Detil"><i class="fa fa-book"></i></button>
								';
						}
					}else{
						$row[] = '
								<button type="button" class="btn btn-primary" onclick="alert(\'Data ini sedang diakses oleh User Panitia lain !\');"  title="Detil"><i class="fa fa-book"></i></button>
								';
					}
					$data[] = $row;
					$i++;
				}
			}
		}else{
			$pra_hasil = $this->db_models->result('master_bidang_pekerjaan',array('kode_bidang'=>$where['kode_bidang']));
			foreach($pra_hasil as $ph){
				$hasil=array();
				if($where['prov']=='0000'){
					$hasil= $this->db_models->result('master_perusahaan',array('kode_register'=>$ph->kode_register));
				}else{
					$pra_hasilx = $this->db_models->count('master_perusahaan',array('kode_register'=>$ph->kode_register,'prov'=>$where['prov']),'kode_register');
					if($pra_hasilx>0){
						$hasil= $this->db_models->result('master_perusahaan',array('kode_register'=>$ph->kode_register,'prov'=>$where['prov']),'kode_register');
					}
				}
				foreach($hasil as $r){
					$row = array();
					$row[] = $i;
					$row[] = $r->kode_register;
					$row[] = $r->kode_vendor;
					$row[] = $r->nama_perusahaan; 
					$row[] = $r->alamat.', '.$r->kec.', '.$r->kab.', '.$r->prov.', '.$r->kode_pos;
					$kode_bidang = $this->db_models->result_array('master_bidang_pekerjaan',array('kode_register'=> $r->kode_register));
					$sts_eva1=$this->db_models->row('master_perusahaan',array('kode_register'=> $r->kode_register),'sts_eva');
					$sts_eva2=$this->db_models->row('temp_register_data_perusahaan',array('kode_register'=> $r->kode_register),'sts_eva');
					if($sts_eva1!='1'){
						if($sts_eva2!='1'){
							$row[] = '
									<button type="button" class="btn btn-primary" data-target="#modal_detil" data-toggle="modal" onclick="load_detil(' . "'" . $r->kode_register . "'" . ');
									crude(\'insert\',\'master_perusahaan\',{kode_register:\''.$r->kode_register.'\'},{sts_eva:\'1\'},\'\');"  title="Detil"><i class="fa fa-book"></i></button>
									';
						}else{
							$row[] = '
								<button type="button" class="btn btn-primary" onclick="alert(\'Data ini sedang diakses oleh Calon Mitra !\');"  title="Detil"><i class="fa fa-book"></i></button>
								';
						}
					}else{
						$row[] = '
								<button type="button" class="btn btn-primary"onclick="alert(\'Data ini sedang diakses oleh User Panitia lain !\');"  title="Detil"><i class="fa fa-book"></i></button>
								';
					}
					$data[] = $row;
					$i++;
				}
			}
		}
		
		$output = array(
			"data" => $data,
		);
		echo json_encode($output);
	}
	public function tabel_daftar_minat($hasil){
		$i = 1;
		$data=array();
		foreach ($hasil as $r) {
			$row = array();
			$row[] = $i;
			$row[] = $this->db_models->row('tr_minat_pekerjaan',array('kode'=>$r->kode_minat),'nama');
			$row[] = '
					<div class="row">
					<button type="button" class="btn btn-red" onclick="delete_klasifikasi(' . "'" . $r->id .  "'" . ')"  title="Delete Klasifikasi"><i class="fa fa-trash"></i></button>
					<div>
					';
			$data[] = $row;
			$i++;
			}
		$output = array(
			"data" => $data,
		);
		echo json_encode($output);
	}
	public function tabel_daftar_pengalaman($where){
		
		$i = 1;
		$data=array();
		$hasil = $this->db_models->result('master_pengalaman',$where);
		foreach ($hasil as $r) {
			$row = array();
			$row[] = $i;
			$row[] = $r->nama_pekerjaan;
			$row[] = $r->pemberi_pekerjaan;
			$row[] = 'Rp.' . $r->nilai;
			$row[] = $r->tahun;
			$row[] = '
					<div class="row" align="center">
					<button type="button" class="btn btn-primary" onclick="delete_klasifikasi(' . "'" . $r->id .  "'" . ')"  title="Delete Klasifikasi"><i class="fa fa-eye"></i></button>
					<div>
					';
			$row[] = '
					<div class="row" align="center">
					<button type="button" class="btn btn-primary" onclick="delete_klasifikasi(' . "'" . $r->id .  "'" . ')"  title="Delete Klasifikasi"><i class="fa fa-eye"></i></button>
					<div>
					';
			$data[] = $row;
			$i++;
			}
		$output = array(
			"data" => $data, 
		);
		echo json_encode($output);
	}
	public function tabel_berkas_adm($where){
		$i = 1;
		$data=array();
		$hasil = $this->db_models->result('tr_dokumen',array('kode_jen_dokumen'=>'adms'));
		$pic = $this->db_models->result('tr_dokumen',array('kode_jen_dokumen'=>'admp'));
		foreach ($pic as $r) {
			array_push($hasil,$r);
		}
		foreach ($hasil as $r) {
			$where['kode_dokumen']=$r->kode;
			$hasil = $this->db_models->result('master_berkas',$where);
			$row = array();
			$row[] = $i;
			if($hasil!=null){
				$row[] = $r->uraian;
				$row[] = $hasil[0]->nomor_dokumen;
				$row[] = $r->wajib=='1'?'Wajib' : 'Tidak Wajib';
				$row[] = 'Ada';

				// $row[] = '
				// 		<button type="button" class="btn btn-primary" data-target="#view_dokumen" data-toggle="modal" onclick="load_dokumen(' . "'" . $hasil[0]->kode_file . "'" . ')"  title="Lihat Dokumen"><i class="fa fa-eye"></i></button>
				// 		';
				if($hasil[0]->kode_file!='' and $hasil[0]->kode_file!=NULL){
					$ada_file_db=$this->db_models->cek('master_berkas',array('kode_file'=>$hasil[0]->kode_file));
				}else{
					$ada_file_db=FALSE;
				}
				$path='';
				$jen_dokumen=explode('_',$hasil[0]->kode_dokumen);
				switch($jen_dokumen[0]){
					case 'admp': $path='data_pic';break;
					case 'adms': $path='data_adms';break;
					case 'ijin': $path='data_ijin';break;
					case 'klpn': $path='data_pengalaman';break;
					default :$path='';break;
				}
				$ada_file_berkas=file_exists('assets/upload_file/' . $hasil[0]->kode_register.'/'.$path.'/'.$hasil[0]->kode_file);
				if($ada_file_db and $ada_file_berkas){
					$row[] = '
							<button type="button" class="btn btn-primary" onclick="load_dokumen_new_tab(' . "'" . $hasil[0]->kode_file . "'" . ')"  title="Lihat Dokumen"><i class="fa fa-eye"></i></button>
							';
				}else{
					if(!$ada_file_db){
						$row[] = 'Not Found in DB';
					}else if(!$ada_file_berkas){
						$row[] = 'Not Found in Path';
					}else{
						$row[] = 'Not Found in Path and DB';
					}
				}
				$kode=explode('.',$hasil[0]->kode_file);
				$kode_file=$kode[0];
				if($hasil[0]->hasil_eva=='0'){
					$row[] = '
							<div class="row" align="center">
							<input type="checkbox" class="icheck" onclick="ceklist($(this).val(),\'checkbox_adms_' . $kode_file . '_2\',\'' . $hasil[0]->kode_file . '\')" id="checkbox_adms_' . $kode_file . '_1" value="1"><small> Yes </small> 
							<input type="checkbox" data-target="#catatan" data-toggle="modal" class="icheck" onclick="ceklist($(this).val(),\'checkbox_adms_' . $kode_file . '_1\',\'' . $hasil[0]->kode_file . '\')" id="checkbox_adms_' . $kode_file . '_2" value="0" checked><small> No</small> 
							</div>
							';
				}else if($hasil[0]->hasil_eva=='1'){
					$row[] = '
							<div class="row" align="center">
							<input type="checkbox" class="icheck" onclick="ceklist($(this).val(),\'checkbox_adms_' . $kode_file . '_2\',\'' . $hasil[0]->kode_file . '\')" id="checkbox_adms_' . $kode_file . '_1" value="1" checked><small> Yes </small> 
							<input type="checkbox" data-target="#catatan" data-toggle="modal" class="icheck" onclick="ceklist($(this).val(),\'checkbox_adms_' . $kode_file . '_1\',\'' . $hasil[0]->kode_file . '\')" id="checkbox_adms_' . $kode_file . '_2" value="0"><small> No</small> 
							</div>
							';
				}else{
					$row[] = '
							<div class="row" align="center">
							<input type="checkbox" class="icheck" onclick="ceklist($(this).val(),\'checkbox_adms_' . $kode_file . '_2\',\'' . $hasil[0]->kode_file . '\')" id="checkbox_adms_' . $kode_file . '_1" value="1"><small> Yes </small> 
							<input type="checkbox" data-target="#catatan" data-toggle="modal" class="icheck" onclick="ceklist($(this).val(),\'checkbox_adms_' . $kode_file . '_1\',\'' . $hasil[0]->kode_file . '\')" id="checkbox_adms_' . $kode_file . '_2" value="0"><small> No</small> 
							</div>
							';
				}
			}else{
				$row[] = $r->uraian;
				$row[] = '-';
				$row[] = $r->wajib=='1'?'Wajib' : 'Tidak Wajib';
				$row[] = 'Tidak Ada';
				$row[] = '-';
				$row[] = '
						<div class="row" align="center">
						<input type="checkbox" class="icheck" value="1" disabled><small> Yes </small> 
						<input type="checkbox" class="icheck" value="0" checked disabled><small> No</small> 
						</div>
						';
			}
			$data[] = $row;
			$i++;
		}
		$output = array(
			"data" => $data,
		);
		echo json_encode($output);
	}
	public function cetak_survei($kode_register)
	{
		date_default_timezone_set('Asia/Jakarta');
		$sekarang = date('Y-m-d H:i:s');
		set_time_limit(0);
		$this->load->model("Cetakm");
		$cetak	= $this->uri->segment(3);
		$no_agenda = $this->uri->segment(4);
		$data_perusahaan = $this->db_models->result_array('master_perusahaan',array('kode_register'=>$kode_register));
		$data['perusahaan']	= $data_perusahaan[0];
		$data_pic = $this->db_models->result_array('master_pic',array('kode_register'=>$kode_register));
		$data['pic']	= $data_pic[0];
		$minat = $this->db_models->result_array('master_minat_pekerjaan',array('kode_register'=>$kode_register));
		$data['minat']	= $minat;

		$adm=array();
		$dokumen_adm = $this->db_models->result_array('tr_dokumen',array('kode_jen_dokumen'=>'adms'));
		for($i=0;$i<sizeof($dokumen_adm);$i++){
			$adm[$i]['nama']=$dokumen_adm[$i]['uraian'] . '(' . $dokumen_adm[$i]['nama_dokumen'] . ')';
			$adm[$i]['wajib']=$dokumen_adm[$i]['wajib']=='1'? 'YA' : 'TIDAK';
			$ada_doc =$this->db_models->cek('master_berkas',array('kode_register'=>$kode_register,'kode_dokumen'=>$dokumen_adm[$i]['kode']));
			$adm[$i]['status']=$ada_doc? 'ADA' : 'TIDAK ADA';
			$sesuai =$this->db_models->row('master_berkas',array('kode_register'=>$kode_register,'kode_dokumen'=>$dokumen_adm[$i]['kode']),'hasil_eva');
			if($sesuai!=NULL and $sesuai !=''){
				$adm[$i]['kesesuaian']=$sesuai == '1' ? 'Sesuai' : 'Tidak Sesuai';
			}else{
				$adm[$i]['kesesuaian']='Belum Dievaluasi';
			}
			$catatan =$this->db_models->row('master_berkas',array('kode_register'=>$kode_register,'kode_dokumen'=>$dokumen_adm[$i]['kode']),'catatan');
			$adm[$i]['ket']=$catatan != NULL or $catatan !='' ? $catatan : '-';
		}
		
		$ijin=array();
		$dokumen_ijin = $this->db_models->result_array('tr_dokumen',array('kode_jen_dokumen'=>'ijin'));
		for($i=0;$i<sizeof($dokumen_ijin);$i++){
			$ijin[$i]['nama']=$dokumen_ijin[$i]['uraian'] . '(' . $dokumen_ijin[$i]['nama_dokumen'] . ')';
			$ijin[$i]['wajib']=$dokumen_ijin[$i]['wajib']=='1'? 'YA' : 'TIDAK';
			$ada_doc =$this->db_models->cek('master_berkas',array('kode_register'=>$kode_register,'kode_dokumen'=>$dokumen_ijin[$i]['kode']));
			$ijin[$i]['status']=$ada_doc? 'ADA' : 'TIDAK ADA';
			$sesuai =$this->db_models->row('master_berkas',array('kode_register'=>$kode_register,'kode_dokumen'=>$dokumen_ijin[$i]['kode']),'hasil_eva');
			if($sesuai!=NULL and $sesuai !=''){
				$ijin[$i]['kesesuaian']=$sesuai == '1' ? 'Sesuai' : 'Tidak Sesuai';
			}else{
				$ijin[$i]['kesesuaian']='Belum Dievaluasi';
			}
			$catatan =$this->db_models->row('master_berkas',array('kode_register'=>$kode_register,'kode_dokumen'=>$dokumen_ijin[$i]['kode']),'catatan');
			$ijin[$i]['ket']=$catatan != NULL or $catatan !='' ? $catatan : '-';
		}
		$data['adm']	= $adm;
		$data['ijin']	= $ijin;
		$data['dtkr']	= '';
		$data['dtpr']	= '';
		$data['ddil']	= '';
		$data['tanggal']	= tanggal_ttd($sekarang);
		$Rpt = $this->load->view("laporan/cetak_survei", $data, TRUE);

		$SenD["TitlE"]	= 'test';
		$SenD["OutpuT"]	= $Rpt;
		$SenD["CetaK"]	= '1';
		$SenD["Kertas"]	= "A4-P";
		$SenD["tmargin"] = "5";
		$SenD["bmargin"] = "5";
		$this->load->view("laporan/Report", $SenD,true);
	}
	public function sending()
    {
		$this->load->model('mailm');
		$this->mailm->send_notification("man_operasi","'survey','mohon'","'Teknik','Niaga'","$no_agenda");
    }
	public function tabel_berkas_ijin($where){
		$i = 1;
		$data=array();
		$hasil = $this->db_models->result('tr_dokumen',array('kode_jen_dokumen'=>'ijin'));
		foreach ($hasil as $r) {
			$where['kode_dokumen']=$r->kode;
			$hasil = $this->db_models->result('master_berkas',$where);
			$row = array();
			$row[] = $i;
			if($hasil!=null){
				$row[] = $r->uraian;
				$row[] = $hasil[0]->nomor_dokumen;
				$row[] = $r->wajib=='1'?'Wajib' : 'Tidak Wajib';
				if($hasil[0]->kode_file!='' and $hasil[0]->kode_file!=NULL){
					$ada_klasifikasi=$this->db_models->cek('master_ijin',array('kode_file'=>$hasil[0]->kode_file));
					$ada_file_db=$this->db_models->cek('master_berkas',array('kode_file'=>$hasil[0]->kode_file));
				}else{
					$ada_klasifikasi=FALSE;
					$ada_file_db=FALSE;
				}
				// $ada_file=
				$path='';
				$jen_dokumen=explode('_',$hasil[0]->kode_dokumen);
				switch($jen_dokumen[0]){
					case 'admp': $path='data_pic';break;
					case 'adms': $path='data_adms';break;
					case 'ijin': $path='data_ijin';break;
					case 'klpn': $path='data_pengalaman';break;
					default :$path='';break;
				}
				$ada_file_berkas=file_exists('assets/upload_file/' . $hasil[0]->kode_register.'/'.$path.'/'.$hasil[0]->kode_file);
				$detail='-';
				$row[] = 'Ada';
				if($ada_file_db and $ada_file_berkas){
					if($ada_klasifikasi){
						$detail = '
								<button type="button" class="btn btn-primary" onclick="load_dokumen_new_tab(' . "'" . $hasil[0]->kode_file . "'" . ')"  title="Lihat Dokumen"><i class="fa fa-eye"></i></button>
								<a>&nbsp;&nbsp</a>
								<button type="button" class="btn btn-primary" data-target="#detil_ijin" data-toggle="modal" onclick="detail_ijin(' . "'" . $hasil[0]->kode_file . "'" . ')"  title="Detail"> <i class="fa fa-book"></i></button>
								';
					}else{
						$detail = '
								<button type="button" class="btn btn-primary" onclick="load_dokumen_new_tab(' . "'" . $hasil[0]->kode_file . "'" . ')"  title="Lihat Dokumen"><i class="fa fa-eye"></i></button>
								';
					}
				}else{
					if(!$ada_file_db){
						$row[] = 'Not Found in DB';
					}else if(!$ada_file_berkas){
						$row[] = 'Not Found in Path';
					}else{
						$row[] = 'Not Found in Path and DB';
					}
				}
				$row[] = $detail;
				$kode=explode('.',$hasil[0]->kode_file);
				$kode_file=$kode[0];
				if($hasil[0]->hasil_eva=='0'){
					$row[] = '
							<div class="row" align="center">
							<input type="checkbox" class="icheck" onclick="ceklist($(this).val(),\'checkbox_ijin_' . $kode_file . '_2\',\'' . $hasil[0]->kode_file . '\')" id="checkbox_ijin_' . $kode_file . '_1" value="1"><small> Yes </small> 
							<input type="checkbox" class="icheck" onclick="ceklist($(this).val(),\'checkbox_ijin_' . $kode_file . '_1\',\'' . $hasil[0]->kode_file . '\')" id="checkbox_ijin_' . $kode_file . '_2" value="0" checked><small> No</small> 
							</div>
							';
				}else if($hasil[0]->hasil_eva=='1'){
					$row[] = '
							<div class="row" align="center">
							<input type="checkbox" class="icheck" onclick="ceklist($(this).val(),\'checkbox_ijin_' . $kode_file . '_2\',\'' . $hasil[0]->kode_file . '\')" id="checkbox_ijin_' . $kode_file . '_1" value="1" checked><small> Yes </small> 
							<input type="checkbox" class="icheck" onclick="ceklist($(this).val(),\'checkbox_ijin_' . $kode_file . '_1\',\'' . $hasil[0]->kode_file . '\')" id="checkbox_ijin_' . $kode_file . '_2" value="0"><small> No</small> 
							</div>
							';
				}else{
					$row[] = '
							<div class="row" align="center">
							<input type="checkbox" class="icheck" onclick="ceklist($(this).val(),\'checkbox_ijin_' . $kode_file . '_2\',\'' . $hasil[0]->kode_file . '\')" id="checkbox_ijin_' . $kode_file . '_1" value="1"><small> Yes </small> 
							<input type="checkbox" class="icheck" onclick="ceklist($(this).val(),\'checkbox_ijin_' . $kode_file . '_1\',\'' . $hasil[0]->kode_file . '\')" id="checkbox_ijin_' . $kode_file . '_2" value="0"><small> No</small> 
							</div>
							';
				}
			}else{
				$row[] = $r->uraian;
				$row[] = '-';
				$row[] = $r->wajib=='1'?'Wajib' : 'Tidak Wajib';
				$row[] = 'Tidak Ada';
				$row[] = '-';
				$row[] = '
						<div class="row" align="center">
						<input type="checkbox" class="icheck" value="1" disabled><small> Yes </small> 
						<input type="checkbox" class="icheck" value="0" checked disabled><small> No</small> 
						</div>
						';
			}
			$data[] = $row;
			$i++;
		}
		$output = array(
			"data" => $data,
		);
		echo json_encode($output);
	}
	public function tabel_daftar_bidang_usaha($hasil){
		$i = 1;
		$data=array();
		foreach ($hasil as $r) {
			$row = array();
			$row[] = $i;
			$row[] = $r->kode_kbli;
			$row[] = $this->db_models->row('tr_kbli_detil',array('kode'=>$r->kode_kbli),'deskripsi');
			$perlu_grade = $this->db_models->row('tr_dokumen',array('kode'=>$r->kode_dokumen),'grade');
			if($perlu_grade=='1'){
				$row[] = $this->db_models->row('tr_klasifikasi_grade',array('kode'=>$r->kode_grade),'kualifikasi');
				$row[] = $r->modal_usaha;
			} 
			$row[] = '
					<div class="row">
					<a type="text" class="btn red" onclick="delete_klasifikasi(' . "'" . $r->id .  "'" . ')"  title="Detail"><i class="fa fa-trash"></i></a>
					<div>
					';
			$data[] = $row;
			$i++;
			}
		$output = array(
			"data" => $data,
		);
		echo json_encode($output);
	}
    public function list_dropdown()
	{
		$uraian=array();
        $tabel = $this->input->post('tabel');
		$dt = $this->input->post('data');
        $adder = $this->input->post('adder');
		$where = $this->input->post('where');
		$lainnya = $this->input->post('lainnya');
		$placeholder = $this->input->post('placeholder');
		$data = array();
		$data[0]['id'] = "-";
		$data[0]['uraian'] = $placeholder;
		$val = $this->db_models->list_dropdown_result($tabel,$dt,$where,$adder,$lainnya);
		for($i = 0; $i < count($val); $i++){
			array_push($data,$val[$i]);
		}
		echo json_encode($data);
	}
	public function upload($kel_file=''){
		$name_file='';
		if($kel_file==''){
			$kel_file='umum';

		}else{
			$data = explode("-", $kel_file);
			$kel_file=$data[0];
			if(array_key_exists(1, $data)){
				$name_file=$data[1];
			}
		}
		if (!empty($_FILES['myfile']['name'])) {
			$status['nama_file'] = $_FILES['myfile']['name'];
			$ext = pathinfo($_FILES['myfile']['name'], PATHINFO_EXTENSION);
			$upload = $this->cek_berkas('myfile',$kel_file,$name_file,$ext);
			$status['kode_file'] = $upload;
			echo json_encode($status);
		}else{
			echo 'File Kosong !';
		}
	}
	private function cek_berkas($file_upload,$kel_file,$name_file,$ext)
	{
		$kode_register=$this->session->userdata('kode_register');
		if(!(file_exists('assets/upload_file/' . $kode_register))){
			$result = mkdir ('assets/upload_file/' . $kode_register, '0777');
			if(!(file_exists('assets/upload_file/' . $kode_register .'/' . $kel_file))){
				$result = mkdir ('assets/upload_file/' . $kode_register .'/' . $kel_file, '0777');
			}
		}else{
			if(!(file_exists('assets/upload_file/' . $kode_register .'/' . $kel_file))){
				$result = mkdir ('assets/upload_file/' . $kode_register .'/' . $kel_file, '0777');
			}else{
				if(file_exists('assets/upload_file/' . $kode_register .'/' . $kel_file . '/' . $name_file .'.'.$ext)){
					rename( 'assets/upload_file/' . $kode_register .'/' . $kel_file . '/' . $name_file .'.'.$ext, 'assets/upload_file/' . $kode_register .'/' . $kel_file . '/old_foto.'.$ext) ;
				}
			}
		}
		$config['upload_path']          = 'assets/upload_file/' . $kode_register .'/' . $kel_file;
		$config['allowed_types']        = 'jpeg|jpg|png|pdf|doc|docx|xls|xlsx';
		$config['max_size']             = 100250;
		if($name_file==''){
			$config['file_name']            = round(microtime(true) * 1000);
		}else{
			$config['file_name']            = $name_file;
		}

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if (!$this->upload->do_upload($file_upload)) {
			echo 'Gagal Upload: ' . $file_upload . ' dan ' . $this->upload->display_errors('', '');
			exit();
		}
		return $this->upload->data('file_name');
	}
	public function selesai(){
		$kode_register = $this->input->post('kode_register');
		$data_lengkap = false;
		$dokumen_wajib_lengkap = false;
		$alert = '';

		//data perusahaan
		$data_perusahaan = $this->db_models->result_array('temp_register_data_perusahaan',array('kode_register'=>$kode_register));
		$data_pic = $this->db_models->result_array('temp_register_data_pic',array('kode_register'=>$kode_register));
		$data_pengalaman = $this->db_models->result_array('temp_register_pengalaman',array('kode_register'=>$kode_register));
		$data_minat = $this->db_models->result_array('temp_register_minat_pekerjaan',array('kode_register'=>$kode_register));
		$data_berkas_adm = $this->db_models->result_array('temp_register_berkas_administrasi',array('kode_register'=>$kode_register));
		$data_berkas_ijin = $this->db_models->result_array('temp_register_berkas_perijinan',array('kode_register'=>$kode_register));
		$data_berkas_ijin_klasifikasi = $this->db_models->result_array('temp_register_berkas_perijinan_klasifikasi',array('kode_register'=>$kode_register));
		$dokumen_wajib = $this->db_models->result_array('tr_dokumen',array('wajib'=>'1'));

		$dokumen_tidak_lengkap = array();
		$x=0;
		$y=0;
		for($i=0;$i<sizeof($dokumen_wajib);$i++){
			$cek_berkas_ijin = $this->db_models->cek('temp_register_berkas_perijinan',array('kode_register'=>$kode_register,'kode_dokumen'=>$dokumen_wajib[$i]['kode']));
			$cek_berkas_adm = $this->db_models->cek('temp_register_berkas_administrasi',array('kode_register'=>$kode_register,'kode_dokumen'=>$dokumen_wajib[$i]['kode']));
			if($cek_berkas_ijin!='' || $cek_berkas_adm!=''){
				$x++;
			}else{
				$dokumen_tidak_lengkap[$y]=$this->db_models->row('tr_dokumen',array('kode'=>$dokumen_wajib[$i]['kode']),'uraian');
				$y++;
			}
		}
		if($x==sizeof($dokumen_wajib)){
			$dokumen_wajib_lengkap = true;
		}

		// if(sizeof($data_perusahaan)>0 && sizeof($data_pic)>0 && sizeof($data_pengalaman)>0 && sizeof($data_minat)>0 && sizeof($data_berkas_adm)>0 && sizeof($data_berkas_ijin)>0 && $dokumen_wajib_lengkap){
		if(sizeof($data_perusahaan)>0 && sizeof($data_pic)>0){
			$data_lengkap = true;
		}else{
			// if(sizeof($data_perusahaan)>0){
			// 	$alert
			// }
		}
		if($data_lengkap){
			if($dokumen_wajib_lengkap){
				$master_perusahaan['kode_register']=$data_perusahaan[0]['kode_register'];
				$master_perusahaan['nama_perusahaan']=$data_perusahaan[0]['nama_perusahaan'];
				$master_perusahaan['alamat']=$data_perusahaan[0]['alamat'];
				$master_perusahaan['prov']=$this->db_models->row('tr_lokasi_prov',array('id_prov'=>$data_perusahaan[0]['kode_prov']),'nama');
				$master_perusahaan['kab']=$this->db_models->row('tr_lokasi_kab',array('id_kab'=>$data_perusahaan[0]['kode_kab']),'nama');
				$master_perusahaan['kec']=$this->db_models->row('tr_lokasi_kec',array('id_kec'=>$data_perusahaan[0]['kode_kec']),'nama');
				$master_perusahaan['kode_pos']=$data_perusahaan[0]['kode_pos'];
				$master_perusahaan['jab_tertinggi']=$data_perusahaan[0]['jab_tertinggi'];
				$master_perusahaan['email_perusahaan']=$data_perusahaan[0]['email_perusahaan'];
				$master_perusahaan['nama_jab_tertinggi']=$data_perusahaan[0]['nama_jab_tertinggi'];
				$master_perusahaan['no_telp_perusahaan']=$data_perusahaan[0]['no_telp_perusahaan'];
				$master_perusahaan['email_perusahaan']=$data_perusahaan[0]['email_perusahaan'];
				$master_perusahaan['website_perusahaan']=$data_perusahaan[0]['website_perusahaan'];
				$old=$this->db_models->row('master_perusahaan',array('kode_register'=>$data_perusahaan[0]['kode_register']),'kode_register');
				if($old == ''){
					$this->db_models->insert('master_perusahaan',$master_perusahaan);
				}else{
					$this->db_models->update('master_perusahaan',$master_perusahaan,array('kode_register'=>$data_perusahaan[0]['kode_register']));
				}
				$this->db_models->delete('temp_register_data_perusahaan',array('kode_register'=>$data_perusahaan[0]['kode_register']));
				
				//data pic
				$master_pic['kode_register']=$data_pic[0]['kode_register'];
				$master_pic['nama_pic']=$data_pic[0]['nama_pic'];
				$master_pic['no_hp_pic']=$data_pic[0]['no_hp_pic'];
				$master_pic['email_pic']=$data_pic[0]['email_pic'];
				$master_pic['nik_pic']=$data_pic[0]['nik_pic'];
				$master_pic['kode_file_ktp']=$data_pic[0]['kode_file_ktp'];
				$master_pic['file_foto']=$data_pic[0]['file_foto'];

				$master_berkas=array();
				$master_berkas['kode_register']=$data_pic[0]['kode_register'];
				$master_berkas['kode_file']=$data_pic[0]['kode_file_ktp'];
				$master_berkas['nama_file']=$data_pic[0]['nama_file_ktp'];
				$master_berkas['kode_dokumen']='adms_11';
				$master_berkas['nomor_dokumen']=$data_pic[0]['nik_pic'];
				// $master_berkas['hasil_eva']='';

				$old=$this->db_models->row('master_pic',array('kode_register'=>$data_pic[0]['kode_register']),'kode_register');
				if($old == ''){
					$this->db_models->insert('master_pic',$master_pic);
					$this->db_models->insert('master_berkas',$master_berkas);
				}else{
					$this->db_models->update('master_pic',$master_pic,array('kode_register'=>$data_pic[0]['kode_register']));
					$this->db_models->update('master_berkas',$master_berkas,array('kode_register'=>$data_pic[0]['kode_register']));
				}
				$this->db_models->delete('temp_register_data_pic',array('kode_register'=>$data_pic[0]['kode_register']));
				
				//data pengalaman
				if(sizeof($data_pengalaman)>0){
					for($i=0;$i < sizeof($data_pengalaman);$i++){
						$master_pengalaman['kode_register']=$data_pengalaman[$i]['kode_register'];
						$master_pengalaman['kode_kbli']=$data_pengalaman[$i]['kode_kbli'];
						$master_pengalaman['nama_pekerjaan']=$data_pengalaman[$i]['nama_pekerjaan'];
						$master_pengalaman['nilai']=$data_pengalaman[$i]['nilai'];
						$master_pengalaman['tahun']=$data_pengalaman[$i]['tahun'];
						$master_pengalaman['pemberi_pekerjaan']=$data_pengalaman[$i]['pemberi_pekerjaan'];
						$master_pengalaman['kode_dokumen_kontrak']=$data_pengalaman[$i]['kode_dokumen_kontrak'];
						$master_pengalaman['kode_dokumen_bast1']=$data_pengalaman[$i]['kode_dokumen_bast1'];
						$this->db_models->insert('master_pengalaman',$master_pengalaman);
						
						$master_berkas=array();
						$master_berkas['kode_register']=$data_pengalaman[0]['kode_register'];
						$master_berkas['kode_file']=$data_pengalaman[0]['kode_dokumen_kontrak'];
						$master_berkas['nama_file']=$data_pengalaman[0]['nama_dokumen_kontrak'];
						$master_berkas['kode_dokumen']='klpn_01';
						// $master_berkas['sts_eva']='0';
						$this->db_models->insert('master_berkas',$master_berkas);

						$master_berkas=array();
						$master_berkas['kode_register']=$data_pengalaman[0]['kode_register'];
						$master_berkas['kode_file']=$data_pengalaman[0]['kode_dokumen_bast1'];
						$master_berkas['nama_file']=$data_pengalaman[0]['nama_dokumen_bast1'];
						$master_berkas['kode_dokumen']='klpn_02';
						// $master_berkas['sts_eva']='0';
						$this->db_models->insert('master_berkas',$master_berkas);
					}
					$this->db_models->delete('temp_register_pengalaman',array('kode_register'=>$data_pengalaman[0]['kode_register']));
				}
				//data minat pekerjaan
				if(sizeof($data_minat)>0){
					for($i=0;$i < sizeof($data_minat);$i++){
						$master_minat['kode_register']=$data_minat[$i]['kode_register'];
						$master_minat['kode_minat']=$data_minat[$i]['kode_minat'];
						$this->db_models->insert('master_minat_pekerjaan',$master_minat);
					}
					$this->db_models->delete('temp_register_minat_pekerjaan',array('kode_register'=>$data_minat[0]['kode_register']));
				}

				//data berkas_adm
				if(sizeof($data_berkas_adm)>0){
					for($i=0;$i < sizeof($data_berkas_adm);$i++){
						$master_berkas['kode_register']=$data_berkas_adm[$i]['kode_register'];
						$master_berkas['kode_file']=$data_berkas_adm[$i]['kode_file'];
						$master_berkas['nama_file']=$data_berkas_adm[$i]['nama_file'];
						$master_berkas['kode_dokumen']=$data_berkas_adm[$i]['kode_dokumen'];
						$master_berkas['nomor_dokumen']=$data_berkas_adm[$i]['nomor_dokumen'];
						$master_berkas['nomor_pengesahan']=$data_berkas_adm[$i]['nomor_pengesahan'];
						$master_berkas['tgl_pengesahan']=$data_berkas_adm[$i]['tgl_pengesahan'];
						$master_berkas['tgl_berlaku']=$data_berkas_adm[$i]['tgl_berlaku'];
						$master_berkas['tgl_berakhir']=$data_berkas_adm[$i]['tgl_berakhir'];
						$master_berkas['tgl_upload']=$data_berkas_adm[$i]['tgl_upload'];
						// $master_berkas['sts_eva']='0';
						$this->db_models->insert('master_berkas',$master_berkas);
					}
					$this->db_models->delete('temp_register_berkas_administrasi',array('kode_register'=>$data_berkas_adm[0]['kode_register']));
				}
				//data berkas_perijinan
				if(sizeof($data_berkas_ijin)>0){
					for($i=0;$i < sizeof($data_berkas_ijin);$i++){
						$master_berkas['kode_register']=$data_berkas_ijin[$i]['kode_register'];
						$master_berkas['kode_file']=$data_berkas_ijin[$i]['kode_file'];
						$master_berkas['nama_file']=$data_berkas_ijin[$i]['nama_file'];
						$master_berkas['kode_dokumen']=$data_berkas_ijin[$i]['kode_dokumen'];
						$master_berkas['nomor_dokumen']=$data_berkas_ijin[$i]['nomor_dokumen'];
						$master_berkas['nomor_pengesahan']='';
						$master_berkas['tgl_pengesahan']='';
						$master_berkas['tgl_berlaku']=$data_berkas_ijin[$i]['tgl_berlaku'];
						$master_berkas['tgl_berakhir']=$data_berkas_ijin[$i]['tgl_berakhir'];
						$master_berkas['tgl_upload']=$data_berkas_ijin[$i]['tgl_upload'];
						// $master_berkas['sts_eva']='0';
						$this->db_models->insert('master_berkas',$master_berkas);
					}
					$this->db_models->delete('temp_register_berkas_perijinan',array('kode_register'=>$data_berkas_ijin[0]['kode_register']));
				}
				//data master ijin / kbli
				if(sizeof($data_berkas_ijin)>0){
					for($i=0;$i < sizeof($data_berkas_ijin_klasifikasi);$i++){
						$master_ijin['kode_reg']=$data_berkas_ijin_klasifikasi[$i]['kode_register'];
						$master_ijin['kode_file']=$this->db_models->row('master_berkas',array('kode_register'=>$data_berkas_ijin_klasifikasi[$i]['kode_register'],'kode_dokumen'=>$data_berkas_ijin_klasifikasi[$i]['kode_dokumen']),'kode_file');
						$master_ijin['kategori']=$this->db_models->row('tr_dokumen',array('kode'=>$data_berkas_ijin_klasifikasi[$i]['kode_dokumen']),'kode_jen_dokumen');
						$master_ijin['jenis']=$this->db_models->row('tr_dokumen',array('kode'=>$data_berkas_ijin_klasifikasi[$i]['kode_dokumen']),'nama_dokumen');
						$master_ijin['kode_kbli']=$data_berkas_ijin_klasifikasi[$i]['kode_kbli'];
						$master_ijin['klasifikasi']=$data_berkas_ijin_klasifikasi[$i]['kode_grade'];
						$master_ijin['modal_usaha']=$data_berkas_ijin_klasifikasi[$i]['modal_usaha'];
						// $master_ijin['sts_eva']='0';
						$this->db_models->insert('master_ijin',$master_ijin);
					}
					$this->db_models->delete('temp_register_berkas_perijinan_klasifikasi',array('kode_register'=>$data_berkas_ijin_klasifikasi[0]['kode_register']));
				}
				echo json_encode(['ok']);
			}else{
				echo json_encode($dokumen_tidak_lengkap);
			}
		}else{
			echo json_encode(['no']);
		}
	}
	public function list_dropdownx()
	{
		$uraian=array();
        $tabel = $this->input->post('tabel');
		$dt = $this->input->post('data');
        $adder = $this->input->post('adder');
		$where = $this->input->post('where');
		$lainnya = $this->input->post('lainnya');
		$placeholder = $this->input->post('placeholder');
		$data = array();
		$data[0]['id'] = "-";
		$data[0]['uraian'] = $placeholder;
		$val = $this->db_models->list_dropdown_resultx($tabel,$dt,$where,$adder,$lainnya);
		for($i = 0; $i < count($val); $i++){
			array_push($data,$val[$i]);
		}
		echo json_encode($data);
	}
}