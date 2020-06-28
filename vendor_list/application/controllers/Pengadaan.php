<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pengadaan extends CI_Controller {
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
	// public function index(){
	// 	if ($this->session->userdata('nama') <> '') {
	// 		$url = base_url() . 'welcome/dashboard';
	// 		header( "Location: $url" );
	// 	}else {
	// 		$url = base_url() . 'welcome';
	// 		header( "Location: $url" );
	// 	}
	// }
	public function reg_project(){ 
		if ($this->session->userdata('nama') <> '') {
			$this->load->model('menum');
			$data['prev'] = $this->menum->main_menu();
			$this->load->view('template/header',$data);
			
			$kode_project=round(microtime(true) * 1000);
			$this->session->set_userdata(array('kode_project'=>$this->input->post('kode_project')));
			$keperluan=array();
			$keperluan['']='-- Select --';
			$keperluan['PS']='Pemakaian Sendiri';  
			$keperluan['KT']='Kontraktor';
			$data['dropdown_keperluan'] = form_dropdown("dropdown_keperluan", $keperluan, [], 'id="dropdown_keperluan" onchange="show_id($(this).val());" style="width:100%; " class="form-control select2me"');
			$data['nama_dropdown_keperluan'] = 'dropdown_keperluan';
			
			$mode_entry=array(
				''=>'-- Select --',
				'MA'=>'Entry Manual',
				'IM'=>'Import File Excel'
			);
			$data['dropdown_mode_entry'] = form_dropdown("dropdown_mode_entry", $mode_entry, [], 'id="dropdown_mode_entry" onchange="mode_entry($(this).val());" style="width:100%; " class="form-control select2me"');
			$data['nama_dropdown_mode_entry'] = 'dropdown_mode_entry';
			
			$list_provinsi=$this->db_models->list_dropdown('tr_lokasi_prov',array('id_prov','nama'),'all','','','Select');
			$load_kabupaten='list_dropdown(' . "'dropdown_kabupaten',['dropdown_kecamatan'],'tr_lokasi_kab',['id_kab','nama'],'where id_prov='+$(this).val(),'','','Select'" . ')';
			$load_kecamatan='list_dropdown(' . "'dropdown_kecamatan',[],'tr_lokasi_kec',['id_kec','nama'],'where id_kab='+$(this).val(),'','','Select'" . ')';
			$data['dropdown_provinsi']=form_dropdown("dropdown_provinsi", $list_provinsi, [], 'id="dropdown_provinsi" onchange="' . $load_kabupaten . '" style="width:100%; " class="form-control select2me"');
			$data['dropdown_kabupaten']=form_dropdown("dropdown_kabupaten", 'Select', [], 'id="dropdown_kabupaten" onchange="' . $load_kecamatan . '" style="width:100%; " class="form-control select2me"');
			$data['dropdown_kecamatan']=form_dropdown("dropdown_kecamatan", 'Select', [], 'id="dropdown_kecamatan" style="width:100%; " class="form-control select2me"');

			$data['nama_dropdown_provinsi'] = 'dropdown_provinsi';
			$data['nama_dropdown_kabupaten'] = 'dropdown_kabupaten';
			$data['nama_dropdown_kecamatan'] = 'dropdown_kecamatan';

			$data['nama_dropdown_klasifikasi'] = 'dropdown_klasifikasi';
			$list_jen_pekerjaan=$this->db_models->list_dropdown('tr_kbli_detil',array('kode',array('kode','deskripsi'),' - '),'where kode_level="kelompok"','','','Select');
			$data['dropdown_klasifikasi']=form_dropdown("dropdown_klasifikasi", $list_jen_pekerjaan, [], 'id="dropdown_klasifikasi" style="width:100%; " class="form-control select2me"');
			
			$data['nama_dropdown_divisi'] = 'dropdown_divisi';
			$list_divisi=$this->db_models->list_dropdown('tr_divisi',array('kode','nama_divisi'),'all','','','Select');
			$data['dropdown_divisi']=form_dropdown("dropdown_divisi", $list_divisi, [], 'id="dropdown_divisi" style="width:100%; " class="form-control select2me"');
			
			$data['nama_dropdown_metode_pengadaan'] = 'dropdown_metode_pengadaan';
			$list_metode_pekerjaan=$this->db_models->list_dropdown('tr_mtd_pengadaan',array('id','uraian'),'all','','','Select');
			$data['dropdown_metode_pengadaan']=form_dropdown("dropdown_metode_pengadaan", $list_metode_pekerjaan, [], 'id="dropdown_metode_pengadaan" style="width:100%; " class="form-control select2me"');
			
			$data['nama_dropdown_jenis_pengadaan'] = 'dropdown_jenis_pengadaan';
			$list_jenis_pengadaan=$this->db_models->list_dropdown('tr_jen_pengadaan',array('id','uraian'),'all','','','Select');
			$data['dropdown_jenis_pengadaan']=form_dropdown("dropdown_jenis_pengadaan", $list_jenis_pengadaan, [], 'id="dropdown_jenis_pengadaan" style="width:100%; " class="form-control select2me"');
			
			$data['nama_dropdown_jenis_dokumen'] = 'dropdown_jenis_dokumen';
			$list_jenis_dokumen=$this->db_models->list_dropdown('tr_dokumen_pengadaan',array('kode','uraian'),'all','','','Select');
			$data['dropdown_jenis_dokumen']=form_dropdown("dropdown_jenis_dokumen", $list_jenis_dokumen, [], 'id="dropdown_jenis_dokumen" onchange="form_upload($(this).val());"style="width:100%; " class="form-control select2me"');
			
			$data['nama_dropdown_jenis_barang'] = 'dropdown_jenis_barang';
			$data['nama_dropdown_kelompok_barang'] = 'dropdown_kelompok_barang';
			$data['nama_dropdown_nama_barang'] = 'dropdown_nama_barang';
			$data['nama_dropdown_tipe_barang'] = 'dropdown_tipe_barang';
			$data['nama_dropdown_spesifikasi_barang'] = 'dropdown_spesifikasi_barang';
			$data['nama_dropdown_satuan_barang'] = 'dropdown_satuan_barang';
			$list_jenis_barang=$this->db_models->list_dropdown('tr_barang_jen_barang',array('kode','uraian'),'all','','','Select');
			$load_kelompok_barang='list_dropdown(' . "'dropdown_kelompok_barang',['dropdown_nama_barang'],'tr_barang_kelompok_barang',['kode','uraian'],'where jenis_barang=\''+$(this).val()+'\'','','','Select'" . ')';
			$load_nama_barang='list_dropdown(' . "'dropdown_nama_barang',[],'tr_barang_nama_barang',['kode','nama_barang'],'where kelompok_barang=\''+$(this).val()+'\'','','','Select'" . ')';
			
			$load_tipe_barang='list_dropdown(' . "'dropdown_tipe_barang',[],'tr_barang_master_barang',['distinct tipe','tipe'],'where kode_kategori=\''+$(this).val()+'\'','','','Select'" . ')';
			$load_spesifikasi_barang='list_dropdown(' . "'dropdown_spesifikasi_barang',[],'tr_barang_master_barang',['distinct spesifikasi','spesifikasi'],'where kode_kategori=\''+$(this).val()+'\'','','','Select'" . ')';
			$load_satuan_barang='list_dropdown(' . "'dropdown_satuan_barang',[],'tr_barang_master_barang',['distinct satuan','satuan'],'where kode_kategori=\''+$(this).val()+'\'','','','Select'" . ')';
			$load_merek_barang='load_value(' . "'merk_barang','tr_barang_master_barang',['distinct merk','\', \''],'where kode_kategori=\''+$(this).val()+'\'','','','Select'" . ')';
			
			// $load_nama_barang='list_dropdown(' . "'dropdown_nama_barang',[],'tr_barang_master_barang',['id_barang','concat(nama,\' \',merk,\' \',tipe,\' \',spesifikasi)'],'where kode_kategori=\''+$(this).val()+'\'','','','Select'" . ')';
			$data['dropdown_jenis_barang']=form_dropdown("dropdown_jenis_barang", $list_jenis_barang, [], 'id="dropdown_jenis_barang" onchange="' . $load_kelompok_barang . '" style="width:100%; " class="form-control select2me"');
			$data['dropdown_kelompok_barang']=form_dropdown("dropdown_kelompok_barang", 'Select', [], 'id="dropdown_kelompok_barang" onchange="' . $load_nama_barang . '" style="width:100%; " class="form-control select2me"');
			$data['dropdown_nama_barang']=form_dropdown("dropdown_nama_barang", 'Select', [], 'id="dropdown_nama_barang" onchange="' . $load_tipe_barang . ';' . $load_spesifikasi_barang . ';' . $load_satuan_barang . ';'. $load_merek_barang . ';" style="width:100%; " class="form-control select2me"');
			// $data['dropdown_nama_barang']=form_dropdown("dropdown_nama_barang", 'Select', [], 'id="dropdown_nama_barang" style="width:100%; " class="form-control select2me"');
			
			$data['dropdown_tipe_barang']=form_dropdown("dropdown_tipe_barang",'Select', [], 'id="dropdown_tipe_barang" style="width:100%;" class="form-control select2me"');
			$data['dropdown_spesifikasi_barang']=form_dropdown("dropdown_spesifikasi_barang", 'Select', [], 'id="dropdown_spesifikasi_barang" style="width:100%; " class="form-control select2me"');
			$data['dropdown_satuan_barang']=form_dropdown("dropdown_satuan_barang", 'Select', [], 'id="dropdown_satuan_barang" style="width:100%; " class="form-control select2me"');
			// $data['dropdown_nama_barang']=form_dropdown("dropdown_nama_barang", 'Select', [], 'id="dropdown_nama_barang" style="width:100%; " class="form-control select2me"');
			
			// $list_kelompok_barang=$this->db_models->list_dropdown('tr_dokumen_pengadaan',array('kode','uraian'),'all','','','Select');
			
			// $list_kategori_barang=$this->db_models->list_dropdown('tr_dokumen_pengadaan',array('kode','uraian'),'all','','','Select');
			
			// $list_kategori_barang=$this->db_models->list_dropdown('tr_dokumen_pengadaan',array('kode','uraian'),'all','','','Select');
			$data['register_jquery'] = $this->jquery_models->register();
			$data['crude_jquery'] = $this->jquery_models->crude();
			$data['load_tabel_jquery'] = $this->jquery_models->load_tabel();
			$data['ready_jquery'] = $this->jquery_models->ready();
			$data['list_checkbox'] = $this->db_models->result('tr_minat_pekerjaan','all');
			$this->load->view('reg_project/register',$data);
		// $this->load->view('template/footer',$data);
		}else {
			$dataa['cpt'] = $this->menum->generatecapta();    
			$this->load->view('welcome/login', $dataa);
		}
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
			case 'tabel_daftar_berkas' : $this->tabel_daftar_berkas($where);break;
			case 'tabel_import_boq' : $this->tabel_import_boq($where);break;
			case 'tabel_daftar_entry_boq' : $this->tabel_daftar_entry_boq($where);break;
			case 'tabel_daftar_project' : $this->tabel_daftar_project($where);break;
			case 'tabel_pemakaian_sendiri' : $this->tabel_pemakaian_sendiri($where);break;
			case 'tabel_kontraktor' : $this->tabel_kontraktor($where);break;
			case 'tabel_pengumuman' : $this->tabel_pengumuman($where);break;
			case 'tabel_kbli' : $this->tabel_kbli($where);break;
			case 'tabel_kbli_custom' : $this->tabel_kbli_custom($where);break;
			case 'tabel_publish' : $this->tabel_publish($where);break;
			case 'tabel_publish_custom' : $this->tabel_publish_custom($where);break;
		}
	}
	private function tabel_daftar_project($where){
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
					<a type="button" class="btn blue" onclick="delete_project(' . "'" . $r->id .  "'" . ')"  title="Load Detail"><i class="fa fa-eye"></i></i></a>
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
	private function tabel_import_boq($where){
		$i = 1;
		$data = array();
		$hasil = $this->db_models->result('temp_entry_boq_import_excel',$where);
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
	private function tabel_daftar_entry_boq($where){
		$i = 1;
		$data = array();
		$hasil = $this->db_models->result('temp_entry_boq',$where);
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
			if(array_key_exists('mode', $where)){ 
				unset($where['mode']);
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
				$kode_kbli_all = $this->db_models->row('tp_master_project',$where,'kode_kbli');
				$kode_kbli = explode(", ", $kode_kbli_all);
				$hasil = $this->db_models->result_distinct('master_ijin',array('kode_kbli='=>$kode_kbli[0]),'kode_reg');
			}
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
					<input type="checkbox" name="kode_vendor" class="icheck" onclick="" value="' . $r->kode_register . '"><small> Ikutkan </small> 
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
			$row[] = $r->nama_project;
			$row[] = $r->lokasi_project.', '.$r->kec.', '.$r->kab.', '.$r->prov;
			$row[] = $r->divisi;
			$row[] = '
					<div class="row">
					<a type="button" data-toggle="modal" data-target="#publish" data-id="' . $i . '" class="btn blue" onclick="load_publish_setting(' . "'KT','" . $r->kode_project .  "'" . ')"  title="Publish"><i class="fa fa-paper-plane-o"></i></i></a>
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
	private function tabel_pengumuman($where){
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
					<a type="button" data-toggle="modal" data-target="#publish" data-id="' . $i . '" class="btn blue" onclick="load_publish_setting(' . "'KT','" . $r->kode_project .  "'" . ')"  title="Publish"><i class="fa fa-eye"></i></i></a>
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
	// public function test(){
	// 	$this->load->view('others/test');
	// }
	public function pemakaian_sendiri(){
		if ($this->session->userdata('nama') <> '') {
			$this->load->model('menum');
			$head['prev'] = $this->menum->main_menu();
			$this->load->view('template/header',$head);
			$data['crude_jquery'] = $this->jquery_models->crude();
			$data['nama_dropdown_kbli'] = 'dropdown_kbli';
			$list_kbli=$this->db_models->list_dropdown('tr_kbli_detil',array('kode',array('kode','deskripsi'),' - '),'where kode_level="kelompok"','','','--Pilih Klasifikasi Pekerjaan--');
			$data['dropdown_kbli']=form_dropdown("dropdown_kbli", $list_kbli, [], 'id="dropdown_kbli" style="width:100%;" onchange="add_kbli();load_publish_tabel();" class="form-control select2me" data-placeholder="Select..."');
			$this->load->view('pengumuman/pemakaian_sendiri',$data);
		}else {
			$dataa['cpt'] = $this->menum->generatecapta();    
			$this->load->view('welcome/login', $dataa);
		}
	}
	public function kontraktor(){
		if ($this->session->userdata('nama') <> '') {
			$this->load->model('menum');
			$data['prev'] = $this->menum->main_menu();
			$this->load->view('template/header',$data);
			$data['crude_jquery'] = $this->jquery_models->crude();
			$data['nama_dropdown_kbli'] = 'dropdown_kbli';
			$list_kbli=$this->db_models->list_dropdown('tr_kbli_detil',array('kode',array('kode','deskripsi'),' - '),'where kode_level="kelompok"','','','--Pilih Klasifikasi Pekerjaan--');
			$data['dropdown_kbli']=form_dropdown("dropdown_kbli", $list_kbli, [], 'id="dropdown_kbli" style="width:100%;" onchange="add_kbli();load_publish_tabel();" class="form-control select2me" data-placeholder="Select..."');
			$this->load->view('pengumuman/kontraktor',$data);
		}else {
			$dataa['cpt'] = $this->menum->generatecapta();    
			$this->load->view('welcome/login', $dataa);
		}
	}
	public function daftar_pengumuman(){
		if ($this->session->userdata('nama') <> '') {
			$this->load->model('menum');
			$data['prev'] = $this->menum->main_menu();
			$this->load->view('template/header',$data);
			$this->load->view('pengumuman/daftar_pengumuman',$data);
		}else {
			$dataa['cpt'] = $this->menum->generatecapta();    
			$this->load->view('welcome/login', $dataa);
		}
	}
	public function daftar_project(){
		if ($this->session->userdata('nama') <> '') {
			$this->load->model('menum');
			$data['prev'] = $this->menum->main_menu();
			$this->load->view('template/header',$data);
			$this->load->view('reg_project/daftar_project');
		}else {
			$dataa['cpt'] = $this->menum->generatecapta();    
			$this->load->view('welcome/login', $dataa);
		}
	}
	public function publish(){
		$mode = $this->input->post('mode');
		$data = $this->input->post('data');
		$kode_project = $data['kode_project'];
		$keperluan = $data['keperluan'];
		$kode_kbli_all = $this->db_models->row('tp_master_project',array('keperluan'=>$keperluan,'kode_project'=>$kode_project),'kode_kbli');
		$kode_kbli = explode(", ", $kode_kbli_all);
		$filter='';
		$size=sizeof($kode_kbli);
		$last=$size-1;
		if($size>1){
			for ($x=0; $x<$last;$x++) {
				$filter .= 'kode_kbli=\'' . $kode_kbli[$x] .'\' or ';
			}
		}
		$hasil=array();
		switch($mode){
			case 'sesuai_kbli' : $kode_reg = $this->db_models->result_distinct('master_ijin',array('kode_kbli='=>$kode_kbli[0]),'kode_reg');
								 foreach ($kode_reg as $r) {
									$hasil[]= $this->db_models->result('master_perusahaan',array('kode_register'=>$r->kode_reg));						 
								 } 
								 break;
			case 'custom_kbli' : $kode_reg = $this->db_models->result_distinct('master_ijin',array($filter . 'kode_kbli='=>$kode_kbli[$last]),'kode_reg');
								 foreach ($kode_reg as $r) {
									$hasil[]= $this->db_models->result('master_perusahaan',array('kode_register'=>$r->kode_reg));						 
								 }
								 break;
			case 'semua_perusahaan' : $hasil = $this->db_models->result('master_perusahaan',array(''));
								 break;
			case 'custom_perusahaan' : 
								 for($i=0;$i<sizeof($data['kode_vendor']);$i++){
									$hasil []= $this->db_models->result('master_perusahaan',array('kode_registrasi'=>$data['kode_vendor'][$i]));
								 }
								break;
		}
		date_default_timezone_set('Asia/Jakarta');
		$time = date('Y-m-d H:i:s');
		for ($i=0;$i<sizeof($hasil);$i++){
			foreach ($hasil[$i] as $r) {
				$tp_transaksi_project=array(
					'kode_project'=>$kode_project,
					'kode_vendor'=>$r->kode_register,
					'nama_perusahaan'=>$r->nama_perusahaan,
					'tgl_publish'=>$time,
					'user_publish'=>$this->session->userdata('nama'),
					'pengumuman'=>1
				);
				$validitas=array(
					'kode_project'=>$kode_project,
					'kode_vendor'=>$r->kode_register,
					'nama_perusahaan'=>$r->nama_perusahaan
				);
				$this->crude_tabel('insert','tp_transaksi_project',$tp_transaksi_project,$validitas);
			}
		}
		$tp_master_project=array(
			'tgl_publish'=>$time,
			'sts_publish'=>1,
			'last_update'=>$time
		);
		$validitas=array(
			'kode_project'=>$kode_project,
			'nama_perusahaan'=>$r->nama_perusahaan
		);
		$this->crude_tabel('insert','tp_master_project',$tp_master_project,$validitas);
		echo json_encode('ok');
	}
	private function crude_tabel($aksi,$tabel,$data,$where)
	{
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
}
