<?php
defined('BASEPATH') or exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, x-xsrf-token");

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('db_models');
		$this->load->model('jquery_models');
		$this->load->model('menum');
		$this->load->model('mailm');
	}
	public function index()
	{
		// if ($this->session->userdata('nama') == '') {
		// 	$this->dashboard();
		// }else{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$randcap  = $this->input->post('randcaptcha');
			$capthcha = $this->input->post('captcha');
			if ($randcap != $capthcha) {
				$dataa['cpt'] = $this->menum->generatecapta();
				$this->load->view('welcome/login', $dataa);
			} else {
				$hasil = $this->menum->validate($username, $password);
				if ($hasil == true) {
					$this->dashboard();
				} else {
					$dataa['cpt'] = $this->menum->generatecapta();
					$this->load->view('welcome/login', $dataa);
				}
			}
		// }
	}
	
	public function dashboard()
	{
		if ($this->session->userdata('nama') <> '') {
			$data['prev'] = $this->menum->main_menu();
			$this->load->view('welcome/header', $data);
			$prov=$this->db_models->result('tr_lokasi_prov','all');
			$datax=array();
			foreach($prov as $p){
				$datax['prov_id'][$p->id_prov]=$this->db_models->count('master_perusahaan',array('prov'=>$p->nama),'prov');
			}
			$datax['total_vendor']=$this->db_models->count('master_perusahaan',array(),'prov');
			$this->load->view('welcome/dashboard', $datax);
			// $this->load->view('welcome/footer');
		} else {
			$dataa['cpt'] = $this->menum->generatecapta();
			$this->load->view('welcome/login', $dataa);
		}
	}
	public function index1()
	{
		$id_vendor = $this->input->post('id_vendor');
        $this->load->view('welcome/login');
	}
	public function id_register($login='')
	{
		$id_vendor = $this->input->post('id_vendor');
		$data['autentifikasi']='';
		if($login=='failed_login'){
			$data['autentifikasi']='ID Registrasi Tidak Ditemukan !';
		}
        $this->load->view('login/id_register',$data);
	}
	public function login($login='')
	{
		$id_vendor = $this->input->post('id_vendor');
		$data['autentifikasi']='';
		if($login=='failed_login'){
			$data['autentifikasi']='ID Registrasi Tidak Ditemukan !';
		}
        $this->load->view('login/login',$data);
	}
	public function logout(){
		$this->session->userdata['username']='';
		$this->session->userdata['usermenu']='';
		$this->session->userdata['usermenu2']='';
		$this->session->userdata['ket']='';
		$CI =& get_instance();
		$CI->session->sess_destroy();
		$dataa['cpt'] = $this->menum->generatecapta();
		$this->load->view('welcome/login',$dataa);
	}
	public function test_mail(){
		$this->load->model('mailm');
		// $dt['']
		// $template = $this->load->view("laporan/template_notification",$dt,TRUE);
		$this->mailm->send_notification();
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

		$SenD["TitlE"]	= $kode_register;
		$SenD["OutpuT"]	= $Rpt;
		$SenD["CetaK"]	= '5';
		$SenD["Kertas"]	= "A4-P";
		$SenD["tmargin"] = "5";
		$SenD["bmargin"] = "5";
		$file=$this->load->view("laporan/Report", $SenD,true);
	}
	public function mail(){ 
		$kode_register=$this->input->post('kode_register');
		$jen_mail=$this->input->post('jen_mail');
		$EMAIL=$this->input->post('EMAIL');
		$subject=$this->input->post('subject');
		$this->cetak_survei($kode_register);
		$attach=FCPATH.'upload/'.$kode_register.'.pdf';
		$respon=$this->mailm->send_notification($jen_mail,$kode_register,$EMAIL,$subject,$attach);
		echo json_encode(['ok']);
	}
	public function cek_id_register(){
		$kode_register=$this->input->post('id_registrasi');
		$hasil1=$this->db_models->cek('master_perusahaan',array('kode_register'=>$kode_register),'kode_register');
		$hasil2=$this->db_models->cek('temp_register_data_perusahaan',array('kode_register'=>$kode_register),'kode_register');
		// echo($hasil);
		if($hasil2){
			$this->session->set_userdata(array('kode_register'=>$kode_register));
			$sts_eva=$this->db_models->row('master_perusahaan',array('kode_register'=>$kode_register),'sts_eva');
			if($sts_eva!='1'){
				$temp_register_data_perusahaan['sts_eva']='1';
				if($hasil1){
					$temp_register_data_perusahaan['sts_transf']='1';
					$this->crude('insert','temp_register_data_perusahaan',$temp_register_data_perusahaan,array('kode_register'=>$kode_register));
				}else{
					$temp_register_data_perusahaan['sts_transf']='0';
					$this->crude('insert','temp_register_data_perusahaan',$temp_register_data_perusahaan,array('kode_register'=>$kode_register));
				}
				$url = base_url() . 'register/index';
				header( "Location: $url" );
			}else{
				echo '<script>alert("Data Anda sedang dalam proses evaluasi, untuk sementara waktu tidak dapat diakses !");;</script>';
				// $url = base_url() . 'welcome/id_register';
				// header( "Location: $url" );
			}
		}else if($hasil1){
			$sts_eva=$this->db_models->row('master_perusahaan',array('kode_register'=>$kode_register),'sts_eva');
			if($sts_eva!='1'){
				$this->session->set_userdata(array('kode_register'=>$kode_register));
				$this->copy_data_to_temp($kode_register);
				$temp_register_data_perusahaan['sts_eva']='1';
				$temp_register_data_perusahaan['sts_transf']='1';
				$this->crude('insert','temp_register_data_perusahaan',$temp_register_data_perusahaan,array('kode_register'=>$kode_register));
				$url = base_url() . 'register/index';
				header( "Location: $url" );
			}else{
				echo '<script>
				alert("Data Anda sedang dalam proses evaluasi, untuk sementara waktu tidak dapat diakses !");
				window.location.href=\'<?php echo base_url();?>register/index/new\'
				</script>';
				// $url = base_url() . 'welcome/id_register';
				// header( "Location: $url" );
			}
		}else{
			$url = base_url() . 'welcome/id_register/failed_login';
			header( "Location: $url" );
		}
	}
	private function copy_data_to_temp($kode_register){
		$master_perusahaan=$this->db_models->result_array('master_perusahaan',array('kode_register'=>$kode_register));
		$temp_register_data_perusahaan=$master_perusahaan[0];
		unset($temp_register_data_perusahaan['kode_vendor']);
		unset($temp_register_data_perusahaan['tgl_terbit_kode_vendor']);
		unset($temp_register_data_perusahaan['hasil_eva']);
		unset($temp_register_data_perusahaan['id']);
		$temp_register_data_perusahaan['kode_prov']=$this->db_models->row('tr_lokasi_prov',array('nama'=>$temp_register_data_perusahaan['prov']),'id_prov');
		$temp_register_data_perusahaan['kode_kab']=$this->db_models->row('tr_lokasi_kab',array('nama'=>$temp_register_data_perusahaan['kab']),'id_kab');
		$temp_register_data_perusahaan['kode_kec']=$this->db_models->row('tr_lokasi_kec',array('nama'=>$temp_register_data_perusahaan['kec']),'id_kec');
		unset($temp_register_data_perusahaan['prov']);
		unset($temp_register_data_perusahaan['kab']);
		unset($temp_register_data_perusahaan['kec']);
		$temp_register_data_perusahaan['sts_transf']='1';
		$this->crude('insert','temp_register_data_perusahaan',$temp_register_data_perusahaan,array('kode_register'=>$kode_register));
		
		$temp_register_data_pic=$this->db_models->result_array('master_pic',array('kode_register'=>$kode_register));
		unset($temp_register_data_pic[0]['id']);
		$this->crude('insert','temp_register_data_pic',$temp_register_data_pic[0],array('kode_register'=>$kode_register));

		$master_berkas=$this->db_models->result_array('master_berkas',array('kode_register'=>$kode_register));
		$temp_register_berkas_administrasi=array();
		$temp_register_berkas_perijinan=array();
		for($i=0;$i < sizeof($master_berkas);$i++){
			if(substr($master_berkas[$i]['kode_dokumen'],0,4)=='adms'){
				$temp_register_berkas_administrasi=$master_berkas[$i];
				unset($temp_register_berkas_administrasi['sts_eva']);
				unset($temp_register_berkas_administrasi['hasil_eva']);
				unset($temp_register_berkas_administrasi['id']);
				unset($temp_register_berkas_administrasi['catatan']);
				$kode_dokumen=$temp_register_berkas_administrasi['kode_dokumen'];
				$this->crude('insert','temp_register_berkas_administrasi',$temp_register_berkas_administrasi,array('kode_register'=>$kode_register,'kode_dokumen'=>$kode_dokumen));
			}else if(substr($master_berkas[$i]['kode_dokumen'],0,4)=='ijin'){
				$temp_register_berkas_perijinan=$master_berkas[$i];
				unset($temp_register_berkas_perijinan['sts_eva']);
				unset($temp_register_berkas_perijinan['hasil_eva']);
				unset($temp_register_berkas_perijinan['id']);
				unset($temp_register_berkas_perijinan['nomor_pengesahan']);
				unset($temp_register_berkas_perijinan['tgl_pengesahan']);
				unset($temp_register_berkas_perijinan['catatan']);
				$kode_dokumen=$temp_register_berkas_perijinan['kode_dokumen'];
				$this->crude('insert','temp_register_berkas_perijinan',$temp_register_berkas_perijinan,array('kode_register'=>$kode_register,'kode_dokumen'=>$kode_dokumen));
				
				$master_ijin=$this->db_models->result_array('master_ijin',array('kode_reg'=>$kode_register,'kode_dokumen'=>$kode_dokumen));
				$temp_register_berkas_perijinan_klasifikasi=array();
				for($j=0;$j < sizeof($master_ijin);$j++){
					$temp_register_berkas_perijinan_klasifikasi=$master_ijin[$j];
					$temp_register_berkas_perijinan_klasifikasi['kode_register']=$temp_register_berkas_perijinan_klasifikasi['kode_reg'];
					unset($temp_register_berkas_perijinan_klasifikasi['id']);
					unset($temp_register_berkas_perijinan_klasifikasi['kategori']);
					unset($temp_register_berkas_perijinan_klasifikasi['sts_eva']);
					unset($temp_register_berkas_perijinan_klasifikasi['kode_reg']);
					unset($temp_register_berkas_perijinan_klasifikasi['kode_file']);
					unset($temp_register_berkas_perijinan_klasifikasi['klasifikasi']);
					$kode_kbli=$temp_register_berkas_perijinan_klasifikasi['kode_kbli'];
					$this->crude('insert','temp_register_berkas_perijinan_klasifikasi',$temp_register_berkas_perijinan_klasifikasi,array('kode_register'=>$kode_register,'kode_dokumen'=>$kode_dokumen,'kode_kbli'=>$kode_kbli));
				}
			}
		}

		$temp_register_pengalaman=$this->db_models->result_array('master_pengalaman',array('kode_register'=>$kode_register));
		for($i=0;$i < sizeof($temp_register_pengalaman);$i++){
			unset($temp_register_pengalaman[$i]['id']);
			$temp_register_pengalaman[$i]['nama_dokumen_kontrak']=$this->db_models->row('master_berkas',array('kode_file'=>$temp_register_pengalaman[$i]['kode_dokumen_kontrak']),'nama_file');
			$temp_register_pengalaman[$i]['nama_dokumen_bast1']=$this->db_models->row('master_berkas',array('kode_file'=>$temp_register_pengalaman[$i]['kode_dokumen_bast1']),'nama_file');
			$this->crude('insert','temp_register_pengalaman',$temp_register_pengalaman[$i],array('kode_register'=>$kode_register));
		}
		$temp_register_minat_pekerjaan=$this->db_models->result_array('master_minat_pekerjaan',array('kode_register'=>$kode_register));
		for($i=0;$i < sizeof($temp_register_minat_pekerjaan);$i++){
			unset($temp_register_minat_pekerjaan[$i]['id']);
			$this->crude('insert','temp_register_minat_pekerjaan',$temp_register_minat_pekerjaan[$i],array('kode_register'=>$kode_register,'kode_minat'=>$temp_register_minat_pekerjaan[$i]['kode_minat']));
		}
		$temp_register_bidang_pekerjaan=$this->db_models->result_array('master_bidang_pekerjaan',array('kode_register'=>$kode_register));
		for($i=0;$i < sizeof($temp_register_bidang_pekerjaan);$i++){
			unset($temp_register_bidang_pekerjaan[$i]['id']);
			$this->crude('insert','temp_register_bidang_pekerjaan',$temp_register_bidang_pekerjaan[$i],array('kode_register'=>$kode_register,'kode_bidang'=>$temp_register_bidang_pekerjaan[$i]['kode_bidang']));
		}
	}
	private function crude($aksi,$tabel,$data,$where){
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
