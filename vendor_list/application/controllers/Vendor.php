<?php
defined('BASEPATH') or exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, x-xsrf-token");

class Vendor extends CI_Controller {
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
        $this->load->view('vendor/home');
	}
	public function blast_email(){
		$all=$this->db_models->result('master_perusahaan',array());
		$x=1;
		foreach($all as $a){
			$email_pic=strtolower($this->db_models->row('master_pic',array('kode_register'=>$a->kode_register),'email_pic'));
			$this->mailm->send_notification('perbaikan_data',$a->kode_register,$email_pic,'Kelengkapan Data Bidang Usaha','');
			echo 'Done send message to '.$email_pic.'<br>';
			$x++;
		}
	} 
}