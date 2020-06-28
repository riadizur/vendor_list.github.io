<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mailm extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('db_models');
	}
	public function send_mail($subject,$Emailto,$attach,$message)
    {
		set_time_limit(0);
	
		$config = Array(
            'useragent' => 'ECO-PORT',
            'protocol' => 'SMTP',
			'mailpath'  => "\"C:\xampp\sendmail\sendmail.exe\" -t",
            'smtp_host' => 'ssl://mail.ecopowerport.co.id',
			'smtp_user' => 'no-reply@ecopowerport.co.id', 
            'smtp_pass' => 'EcoPower88201', 
            'smtp_port' => 465,
			'smtp_keepalive' => TRUE,
			'smtp_crypto' => 'SSL',
			'wordwrap'  => TRUE,
			'wrapchars' => 80,
            'mailtype' => 'html',
			'charset'   => 'utf-8',
			'validate'  => TRUE,
		    'crlf'      => "\r\n",
		    'newline'   => "\r\n",
        );
 
        $this->load->library('email', $config);
		$this->email->set_mailtype("html");
        $this->email->from('no-reply@ecopowerport.co.id', 'PT ENERGI PELABUHAN INDONESIA');    
        $this->email->to($Emailto);
        $this->email->cc('no-reply@ecopowerport.co.id');
        $this->email->attach($attach);
        $this->email->subject($subject);
        $this->email->message($message);
 
        if ($this->email->send())
        {
			$this->email->clear(TRUE);
			return true;
        }
        else
        {
            echo 'Error! email tidak dapat dikirim.'.$this->email->print_debugger();
			return false;
        }
		
    } 
	
	public function send_notification($jen_mail,$kode_register,$EMAIL,$subject,$attach)
	{		
		$sekarang = date("Y-m-d");
		$sekaranglog = date("Y-m-d H:i:s");
		$master_perusahaan=$this->db_models->result_array('master_perusahaan',array('kode_register'=>$kode_register));
		// $EMAIL=$this->db_models->row('master_pic',array('kode_register'=>$kode_register),'email_pic');
		$data['nama_pt'] = $master_perusahaan[0]['bentuk_prsh'].' '.$master_perusahaan[0]['nama_perusahaan'];
		$data['prov_pt'] = $master_perusahaan[0]['prov'];
		$kode_vendor = $master_perusahaan[0]['kode_register'];
		// $attach='';
		switch($jen_mail){
			case 'registrasi' : $data['isi']='Terima kasih telah melakukan registrasi vendor list PT. Energi Pelabuhan Indonesia dengan nomor registrasi <strong>' . $kode_register . '</strong>.<br></br>
								Selanjutnya berkas yang telah di upload akan diverifikasi oleh Panitia Pengadaan PT. Energi Pelabuhan Indonesia. Apabila berkas-berkas tersebut telah memenuhi syarat, maka akan diterbitkan ID Vendor. Namun apabila berkas-berkas anda tidak memenuhi syarat, maka akan diminta untuk melengkapi kembali.
								';break;
			case 'disetujui' : $data['isi']='Panitia Pengadaan PT. Energi Pelabuhan Indonesia telah melakukan verifikasi berkas-berkas yang di telah upload kedalam aplikasi vendor list dengan nomor registrasi <strong>' . $kode_register . '</strong>.<br></br>
								Dengan ini Panitia Pengadaan menyatakan bahwa berkas-berkas tersebut telah memenuhi syarat dan ketentuan yang dibutuhkan untuk menjadi Vendor / Mitra PT. Energi Pelabuhan Indonesia, adapun berkas yang telah diupload dan hasil verifikasi sebagaimana terlampir.
								Selanjutnya Panitia Pengadaan menerbitkan ID Vendor dengan Nomor: <div align="center"><font size="5"><strong>' . $kode_vendor . '</strong></font></div>.<br><div align="justify">
								ID Vendor ini digunakan untuk login ke aplikasi pengadaan melalui website PT. Energi Pelabuhan Indonesia dengan alamat <a href=www.ecopowerport.co.id/tata-cara-pengadaan>www.ecopowerport.co.id/tata-cara-pengadaan</a>.<br></br>
								Seluruh informasi terkait kode unik, verifikasi data, undangan akan alamat email PIC yang telah terdaftar, untuk itu segera lakukan perubahan data PIC apabila ada pergantian PIC Perusahaan.</div>
								';
								// $attach=FCPATH.'assets/upload_file/'.$kode_register.'/pdf/disetujui.pdf';
								break;
			case 'ditolak' : $data['isi']='Panitia Pengadaan PT. Energi Pelabuhan Indonesia telah melakukan verifikasi berkas-berkas yang di telah upload kedalam aplikasi vendor list dengan nomor registrasi <strong>' . $kode_register . '</strong>.<br></br>
								Dengan ini Panitia Pengadaan menyatakan bahwa ada berkas-berkas yang <strong>Belum Memenuhi</strong> syarat dan ketentuan yang dibutuhkan untuk menjadi Vendor / Mitra PT. Energi Pelabuhan Indonesia, adapun berkas yang telah diupload dan hasil verifikasi sebagaimana terlampir.<br></br>
								Selanjutya kami berharap agar berkas-berkas yang <strong>Belum Memenuhi</strong> syarat dan ketentuan segera dilengkapi.
								';
								// $attach=FCPATH.'assets/upload_file/'.$kode_register.'/pdf/disetujui.pdf';
								break;
			case 'ditolak' : $data['isi']='Panitia Pengadaan PT. Energi Pelabuhan Indonesia telah melakukan verifikasi berkas-berkas yang di telah upload kedalam aplikasi vendor list dengan nomor registrasi <strong>' . $kode_register . '</strong>.<br></br>
								Dengan ini Panitia Pengadaan menyatakan bahwa ada berkas-berkas yang <strong>Belum Memenuhi</strong> syarat dan ketentuan yang dibutuhkan untuk menjadi Vendor / Mitra PT. Energi Pelabuhan Indonesia, adapun berkas yang telah diupload dan hasil verifikasi sebagaimana terlampir.<br></br>
								Selanjutya kami berharap agar berkas-berkas yang <strong>Belum Memenuhi</strong> syarat dan ketentuan segera dilengkapi.
								';
								// $attach=FCPATH.'assets/upload_file/'.$kode_register.'/pdf/disetujui.pdf';
								break;
			case 'perbaikan_data' : $data['isi']='Terima kasih sudah melakukan Registrasi Perusahaan anda pada sistem kami.<br>
								Untuk melengkapi data perusahaan saudara, kami mohon untuk dapat memberikan data bidang usaha saat ini.<br><br>
								Dapat kami sampaikan pula, bahwa apabila bidang usaha saudara termasuk dalam jasa konstruksi, maka sistem kami akan mewajibkan untuk mengupload berkas ijin terkait seperti SBU, SIUJK/SIUJPTL lengkap dengan menginputkan kode KBLI nya.<br>
								Untuk itu mohon dipersiapkan dan segera melakukan upload berkas tersebut dengan mengakses  Aplikasi kami melalui link http://portal.ecopowerport.co.id:88/vendor_list/welcome/id_register/  dan menggunakan ID Registrasi : <strong>'.$kode_register.'</strong>.
								<br><br>Demikian kami sampaikan, terima kasih atas kerjasamanya.
								';
								// $attach=FCPATH.'assets/upload_file/'.$kode_register.'/pdf/disetujui.pdf';
								break;
		}
		$template=$this->load->view('laporan/template_notification',$data,true);
		$mail = $this->send_mail($subject,$EMAIL,$attach,$template);
		$penerima=$this->db_models->row('master_pic',array('kode_register'=>$kode_register),'nama_pic');
		if($penerima!='' and $penerima!=NULL){
			$penerima=$this->db_models->row('temp_register_data_pic',array('kode_register'=>$kode_register),'nama_pic');
		}
		$log_mail=array(
			'kode_register'=>$kode_register,
			'jen_email'=>'Notifikasi - '.$jen_mail,
			'penerima'=>$penerima,
			'email'=>$EMAIL,
			'subject'=>$subject,
			'isi'=>$data['isi'],
			'attachment'=>$attach,
			'tgl_kirim'=>$sekaranglog
		);
		$this->crude_tabel('insert','log_sentmail',$log_mail,array());
		// $this->dbx = $this->load->database('dbx', TRUE);
		// if($mail){					
		// 	$this->dbx->query("INSERT INTO log_sentmail (PENERIMA, SUBJECT, EMAIL, TGL_KIRIM, ATTACHMENT, NOTIFIKASI, STATUS) VALUES ('INTERNAL ASEOS','$subject','$EMAIL','$sekaranglog','','PERMOHONAN (INTERNAL ASEOS)', '200 Webmail' )  ");
		// }else{
		// 	$this->dbx->query("INSERT INTO log_sentmail (PENERIMA, SUBJECT, EMAIL, TGL_KIRIM, ATTACHMENT, NOTIFIKASI, STATUS) VALUES ('INTERNAL ASEOS','$subject','$EMAIL','$sekaranglog','','PERMOHONAN (INTERNAL ASEOS)', '500 Webmail' )  ");
		// }
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
				$this->db_models->insert($tabel, $data);
				break;
			default:
				break;
		}
	}
}
?>