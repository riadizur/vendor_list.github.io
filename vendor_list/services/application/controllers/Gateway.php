<?php defined('BASEPATH') OR exit('No direct script access allowed');
// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH.'/libraries/REST_Controller.php';

class Gateway extends REST_Controller
{
	function __construct()
    {
        // Construct our parent class
        parent::__construct();        
        // Configure limits on our controller methods. Ensure
        // you have created the 'limits' table and enabled 'limits'
        // within application/config/rest.php
		$this->methods['inquiryTagihan_post']['limit'] = 10000000000000000000; //100 requests per hour per user/key
        $this->methods['payment_post']['limit']        = 10000000000000000000; //100 requests per hour per user/key		
					
    }
	function inquiryTagihan_post(){		
		$this->load->model("Gateway_act","model");
		$input = file_get_contents('php://input');
		list($result,$status) = $this->model->SetInquiryTagihan($input);
		$this->format = 'xml';
		$this->response($result,$status);
	}
	function payment_post(){		
		$this->load->model("Gateway_act","model");		
		$input = file_get_contents('php://input');
		list($result,$status) = $this->model->SetPayment($input);
		$this->format = 'xml';
		$this->response($result,$status);
	}
	function reversal_post(){		
		$this->load->model("Gateway_act","model");		
		$input = file_get_contents('php://input');
		list($result,$status) = $this->model->SetReversal($input);
		$this->format = 'xml';
		$this->response($result,$status);
	}
}