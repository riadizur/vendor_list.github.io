<?php
Class Cetakm extends ci_model{
	function mpdf($judul='',$isi='',$kertas='A4-P',$bmargin='',$tmargin='',$Emailto='',$Subject='',$Message='',$Attach='',$FooteR=''){
		ob_clean();
        ini_set("memory_limit","-1");
		set_time_limit(0);
		$this->load->library('mpdf');

		if ($kertas=='A4-P'){
			$uk_kertas	= array(210,297); //A4 Potrait
		}elseif ($kertas=='A4-L'){
			$uk_kertas	= array(297,210); //A4 Landscape
		}elseif ($kertas=='F4-P'){
			$uk_kertas	= array(210,330); //F4 Potrait
		}elseif ($kertas=='F4-L'){
			$uk_kertas	= array(330,210); //F4 Landscape
		}

		$this->mpdf = new mPDF($judul,'utf-8',$uk_kertas);
		$this->mpdf->SetBottomMargin($bmargin);
		$this->mpdf->SetTopMargin($tmargin);
		$this->mpdf->SetHTMLFooter($FooteR);
		$this->mpdf->writeHTML($isi);
		$this->mpdf->Output($judul.'.pdf','I');

		#UNTUK EMAIL
		if($Emailto != ''){
			$location = './upload/';
			$this->mpdf->Output($location.$judul.'.pdf', 'F');
			if($Attach == 'EMPTY' OR $Attach == ''){
				$Attach = '';
			}else{
				$Attach = FCPATH.'upload/'.$judul.'.pdf';
			}
			$this->load->model("Mailm_gmail");
			$this->Mailm_gmail->send_mail($Subject,$Emailto,$Attach,$Message);
		}

    }

	function mpdf_billing($judul='',$isi='',$kertas='A4-P',$bmargin='',$tmargin='',$Emailto='',$Subject='',$Message='',$Attach='',$FooteR='',$Via=''){
		ob_clean();
        ini_set("memory_limit","-1");
		set_time_limit(0);
		$this->load->library('mpdf');

		if ($kertas=='A4-P'){
			$uk_kertas	= array(210,297); //A4 Potrait
		}elseif ($kertas=='A4-L'){
			$uk_kertas	= array(297,210); //A4 Landscape
		}elseif ($kertas=='F4-P'){
			$uk_kertas	= array(210,330); //F4 Potrait
		}elseif ($kertas=='F4-L'){
			$uk_kertas	= array(330,210); //F4 Landscape
		}

		$this->mpdf = new mPDF($judul,'utf-8',$uk_kertas);
		$this->mpdf->SetBottomMargin($bmargin);
		$this->mpdf->SetTopMargin($tmargin);
		$this->mpdf->SetHTMLFooter($FooteR);
		$this->mpdf->writeHTML($isi);

		$location = './upload/';
		$this->mpdf->Output($location.$judul.'.pdf', 'F');
		$Attach = FCPATH.'upload/'.$judul.'.pdf';
		if($Via == 'gmail'){
			$this->load->model("Mailm_gmail");
			$this->Mailm_gmail->send_mail($Subject,$Emailto,$Attach,$Message);
		}else{
			$this->load->model("Mailm");
			$this->Mailm->send_mail($Subject,$Emailto,$Attach,$Message);
		}

    }

	function mpdf_informasi($Emailto='',$Subject='',$Message='',$Attach='',$Via='')
		{
			ob_clean();
	        ini_set("memory_limit","-1");
			set_time_limit(0);

			if($Via == 'gmail'){
				$this->load->model("Mailm_gmail");
				$this->Mailm_gmail->send_mail($Subject,$Emailto,$Attach,$Message);
			}else{
				$this->load->model("Mailm");
				$this->Mailm->send_mail($Subject,$Emailto,$Attach,$Message);
			}

	  }

}
