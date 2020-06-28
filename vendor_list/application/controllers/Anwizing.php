<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Anwizing extends CI_Controller {
	public function __construct()
	{
		// if ($this->session->userdata('nama') <> '') {
			parent::__construct();
			$this->load->model('db_models');
			$this->load->model('jquery_models');
			$this->load->model('menum');
		// }else {
		// 	$dataa['cpt'] = $this->menum->generatecapta();
		// 	$this->load->view('welcome/login', $dataa);
		// }
		// if ($this->session->userdata('nama') <> '') {
		// 	$url = base_url() . 'welcome/dashboard';
		// 	header( "Location: $url" );
		// }else {
		// 	$url = base_url() . 'welcome';
		// 	header( "Location: $url" );
		// }
	}
	public function index(){
		if ($this->session->userdata('nama') <> '') { 
			$url = base_url() . 'anwizing/daftar_hadir';
			header( "Location: $url" );
		}else {
			$dataa['cpt'] = $this->menum->generatecapta();    
			$this->load->view('welcome/login', $dataa);
		}
	}
	public function daftar_hadir(){ 
		if ($this->session->userdata('nama') <> '') {
			$this->load->model('menum');
			$data['prev'] = $this->menum->main_menu();
			$this->load->view('template/header',$data);

			$list_project=$this->db_models->list_dropdown('tp_master_project',array('kode_project','nama_project'),'where sts_publish="1"','','','Select Project');
			$data['dropdown_daftar_project']=form_dropdown("dropdown_daftar_project", $list_project, [], 'id="dropdown_daftar_project" onchange="daftar_hadir($(this).val())" style="width:100%; " class="form-control select2me"');
			$data['nama_dropdown_daftar_project'] = 'dropdown_daftar_project';
			
			$data['register_jquery'] = $this->jquery_models->register();
			$data['crude_jquery'] = $this->jquery_models->crude();
			$data['load_tabel_jquery'] = $this->jquery_models->load_tabel();
			$data['ready_jquery'] = $this->jquery_models->ready();
			$this->load->view('anwizing/daftar_hadir',$data);
		}else {
			$dataa['cpt'] = $this->menum->generatecapta();    
			$this->load->view('welcome/login', $dataa);
		}
	}
	public function load_data(){
		$data_tabel=array();
		$kode_project = $this->input->post('kode_project');
		$data = $this->input->post('data');
		switch($data){
			case 'project' : $data=$this->db_models->result('tp_master_project',array('kode_project'=>$kode_project)); break;
			case 'pic' : $data=$this->db_models->result('master_pic',array('kode_register'=>$kode_register)); break;
			case 'berkas' : $data=$this->db_models->result('master_berkas',array('kode_file'=>$this->input->post('kode_file'))); break;
			case 'minat' :  $data=$this->data_minat($kode_register); break;
		}
		// $data_tabel=$this->db_models->result('temp_register_berkas_perijinan',array('kode_dokumen'=>$this->input->post('kode_dokumen')));
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
		$kode_register='registrasi_project';
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
	public function load_tabel()
	{
		$nama_tabel = $this->input->post('nama_tabel');
		$where = $this->input->post('where');
		switch($nama_tabel){
			case 'tabel_kehadiran' : $this->tabel_kehadiran($where);break;
			case 'tabel_project' : $this->tabel_project($where);break;
			case 'tabel_anwizing' : $this->tabel_anwizing($where);break;
			case 'tabel_boq' : $this->tabel_boq($where);break;
		} 
	}
	private function tabel_kehadiran($where){
		$i = 1;
		$data = array();
		$hasil = $this->db_models->result('tp_transaksi_project',$where);
		foreach ($hasil as $r) {
			$row = array();
			$row[] = $i;
			$row[] = $r->nama_perusahaan;
			if($this->db_models->row('master_perusahaan',array('kode_register'=>$r->kode_vendor),'status_online')=='1'){
				$status="Online";
			}else{
				$status="Offline";
			}
			$row[] = $status;
			$row[] = '
					<input type="checkbox" name="kode_vendor" class="icheck" onclick="" value="' . $r->kode_vendor . '"><small> Hadir </small> 
					';
			$data[] = $row;
			$i++;
			}
		$output = array(
			"data" => $data,
		);
		echo json_encode($output);
	}
	private function tabel_anwizing($where){
		$i = 1;
		$data = array();
		$hasil = $this->db_models->result('tp_anwizing_chat',$where);
		foreach ($hasil as $r) {
			$row = array();
			$row[] = $i;
			$row[] = $this->db_models->row('master_perusahaan',array('kode_register'=>$r->kode_vendor),'nama_perusahaan');
			$row[] = $r->pertanyaan;
			$row[] = $r->jawaban;
			$row[] = '
					<div class="row">
					<a type="button" class="btn blue" onclick="jawab(' . "'" . $r->pertanyaan .  "','" . $r->id . "'" . ')"  title="Daftar Hadir"><i class="fa fa-book"></i></i></a>
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
	private function tabel_project($where){
		$i = 1;
		$data = array();
		$hasil = $this->db_models->result('tp_master_project',$where);
		foreach ($hasil as $r) {
			$row = array();
			$row[] = $i;
			$row[] = $this->db_models->row('tr_keperluan',array('kode'=>$r->keperluan),'nama');
			$row[] = $r->nama_project;
			$row[] = $r->tgl_rencana_anwizing;
			$row[] = $this->db_models->count('tp_transaksi_project',array('kode_project'=>$r->kode_project),'nama_perusahaan');
			$file_rks = $this->db_models->row('master_berkas_pengadaan',array('kode_project'=>$r->kode_project,'kode_dokumen_pengadaan'=>'DOC1'),'kode_file');
			$row[] = '
					<div class="row">
					<a type="button" class="btn blue" onclick="daftar_hadir(' . "'" . $r->kode_project .  "','" . $r->keperluan .  "','" . $file_rks . "'" . ')"  title="Daftar Hadir"><i class="fa fa-book"></i></i></a>
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
	private function tabel_boq($where){
		$i = 1;
		$data = array();
		$hasil = $this->db_models->result('tp_master_boq',$where);
		foreach ($hasil as $r) {
			$row = array();
			$row[] = $i;
			$row[] = $r->nama_barang;
			$row[] = $r->merk_barang;
			$row[] = $r->tipe_barang;
			$row[] = $r->spesifikasi_barang;
			$row[] = $r->jumlah_barang . ' ' .$r->satuan_barang;
			$row[] = '
					<div class="row">
					<a type="button" class="btn red" onclick="delete_boq(' . "'" . $r->id .  "'" . ')"  title="Delete Berkas"><i class="fa fa-trash"></i></a>
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
	private function tabel_daftar_berkas($where){
		$i = 1;
		$data = array();
		$hasil = $this->db_models->result('master_berkas_pengadaan',$where);
		foreach ($hasil as $r) {
			$row = array();
			$row[] = $i;
			$row[] = $r->uraian_dokumen;
			$row[] = $r->nama_file;
			$row[] = $r->nomor_dokumen;
			$row[] = '
					<div class="row">
					<a type="button" class="btn red" onclick="delete_berkas_pengadaan(' . "'" . $r->id .  "'" . ')"  title="Delete Berkas"><i class="fa fa-trash"></i></a>
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
	private function tabel_daftar_entry_boq($where){
		$i = 1;
		$data = array();
		$hasil = $this->db_models->result('tp_master_boq',$where);
		foreach ($hasil as $r) {
			$row = array();
			$row[] = $i;
			$row[] = $r->nama_barang;
			$row[] = $r->merk_barang;
			$row[] = $r->tipe_barang;
			$row[] = $r->spesifikasi_barang;
			$row[] = $r->jumlah_barang . ' ' .$r->satuan_barang;
			$row[] = '
					<div class="row">
					<a type="button" class="btn red" onclick="delete_boq(' . "'" . $r->id .  "'" . ')"  title="Delete Berkas"><i class="fa fa-trash"></i></a>
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
	private function tabel_pemakaian_sendiri($where){
		$i = 1;
		$data = array();
		$hasil = $this->db_models->result('tp_master_project',$where);
		foreach ($hasil as $r) {
			$row = array();
			$row[] = $i;
			$row[] = $r->kode_project;
			$row[] = $this->db_models->row('tr_keperluan',array('kode'=>$r->keperluan),'nama');
			$row[] = $r->nama_project;
			$row[] = $r->lokasi_project.', '.$r->kec.', '.$r->kab.', '.$r->prov;
			$row[] = 'Rp.'.$r->nilai_oe;
			$row[] = $r->divisi;
			$row[] = '
					<div class="row">
					<a type="button" data-toggle="modal" data-target="#publish" data-id="' . $i . '" class="btn blue" onclick="load_publish_setting(' . "'PS','" . $r->kode_project .  "'" . ')"  title="Publish"><i class="fa fa-paper-plane-o"></i></i></a>
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
	private function tabel_kbli($where){
		$i = 1;
		$data = array();
		$kode_kbli_all = $this->db_models->row('tp_master_project',$where,'kode_kbli');
		$kode_kbli = explode(", ", $kode_kbli_all);
		for ($i=0; $i<1;$i++) {
			$row = array();
			$row[] = $i+1;
			$row[] = $kode_kbli[$i];
			$row[] = $this->db_models->row('tr_kbli_detil',array('kode'=>$kode_kbli[$i]),'deskripsi');
			$data[] = $row;
			}
		$output = array(
			"data" => $data,
		);
		echo json_encode($output);
	}
	private function tabel_kbli_custom($where){
		$i = 1;
		$data = array();
		$kode_kbli_all = $this->db_models->row('tp_master_project',$where,'kode_kbli');
		$kode_kbli = explode(", ", $kode_kbli_all);
		for ($i=0; $i<sizeof($kode_kbli);$i++) {
			$row = array();
			$row[] = $i+1;
			$row[] = $kode_kbli[$i];
			$row[] = $this->db_models->row('tr_kbli_detil',array('kode'=>$kode_kbli[$i]),'deskripsi');
			$row[] = '
					<div class="row">
					<a type="button" data-toggle="modal" data-target="#publish" data-id="' . $i . '" class="btn red" onclick="view_detail(' . "'" . $kode_kbli[$i] .  "'" . ')"  title="Publish"><i class="fa fa-trash"></i></i></a>
					<div>
					';
			$data[] = $row;
			}
		$output = array(
			"data" => $data,
		);
		echo json_encode($output);
	}
	private function tabel_publish($where){
		$i = 1;
		$data = array();
		if($where!='all'){
			$kode_kbli_all = $this->db_models->row('tp_master_project',$where,'kode_kbli');
			$kode_kbli = explode(", ", $kode_kbli_all);
			$filter='';
			$size=sizeof($kode_kbli);
			$last=$size-1;
			if($size>1){
				for ($x=0; $x<$last;$x++) {
					$filter .= 'kode_kbli=\'' . $kode_kbli[$x] .'\' or ';
				}
			}
			$hasil = $this->db_models->result_distinct('master_ijin',array($filter . 'kode_kbli='=>$kode_kbli[$last]),'kode_reg');
		}else{
			$hasil = $this->db_models->result('master_perusahaan',array(''));
		}
		foreach ($hasil as $r) {
			$row = array();
			$row[] = $i;
			if($where!='all'){
				$row[] = $this->db_models->row('master_perusahaan',array('kode_register'=>$r->kode_reg),'nama_perusahaan');
			}else{
				$row[] = $r->nama_perusahaan;
			}
			$data[] = $row;
			$i++;
			}
		$output = array(
			"data" => $data,
		);
		echo json_encode($output);
	}
	private function tabel_publish_custom($where){
		$i = 1;
		$data = array();
		$hasil = $this->db_models->result('master_perusahaan',array());
		foreach ($hasil as $r) {
			$row = array();
			$row[] = $i;
			$row[] = $r->nama_perusahaan;
			$row[] = '
					<input type="checkbox" class="icheck" onclick="" value="1"><small> Ikutkan </small> 
					';
			$data[] = $row;
			$i++;
			}
		$output = array(
			"data" => $data,
		);
		echo json_encode($output);
	}
	private function tabel_kontraktor($where){
		$i = 1;
		$data = array();
		$hasil = $this->db_models->result('tp_master_project',$where);
		foreach ($hasil as $r) {
			$row = array();
			$row[] = $i;
			$row[] = $r->kode_project;
			$row[] = $this->db_models->row('tr_keperluan',array('kode'=>$r->keperluan),'nama');
			$row[] = $r->nama_project;
			$row[] = $r->lokasi_project.', '.$r->kec.', '.$r->kab.', '.$r->prov;
			$row[] = 'Rp.'.$r->nilai_oe;
			$row[] = $r->divisi;
			$row[] = '
					<div class="row">
					<a type="button" class="btn blue" onclick="view_detail(' . "'" . $r->id .  "'" . ')"  title="Load Detail"><i class="fa fa-eye"></i></i></a>
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
	public function test(){
		$this->load->view('others/test');
	}
	public function pemakaian_sendiri(){
		$this->load->model('menum');
		$head['prev'] = $this->menum->main_menu();
		$this->load->view('template/header',$head);
		$data['crude_jquery'] = $this->jquery_models->crude();
		$data['nama_dropdown_kbli'] = 'dropdown_kbli';
		$list_kbli=$this->db_models->list_dropdown('tr_kbli_detil',array('kode',array('kode','deskripsi'),' - '),'where kode_level="kelompok"','','','--Pilih Klasifikasi Pekerjaan--');
		$data['dropdown_kbli']=form_dropdown("dropdown_kbli", $list_kbli, [], 'id="dropdown_kbli" style="width:100%;" onchange="add_kbli();load_publish_tabel();" class="form-control select2me" data-placeholder="Select..."');
		$this->load->view('pengumuman/pemakaian_sendiri',$data);
	}
	public function kontraktor(){
		$this->load->model('menum');
		$data['prev'] = $this->menum->main_menu();
		$this->load->view('template/header',$data);
		$this->load->view('pengumuman/kontraktor');
	}
	public function daftar_project(){
		$this->load->model('menum');
		$data['prev'] = $this->menum->main_menu();
		$this->load->view('template/header',$data);
		$this->load->view('reg_project/daftar_project');
	}
}
