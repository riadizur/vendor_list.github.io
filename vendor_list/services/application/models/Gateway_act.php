<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gateway_act extends CI_Model{
	public function SetInquiryTagihan($input){
		$func = &get_instance();
        $func->load->model("main", "main", true);
		date_default_timezone_set('Asia/Jakarta');
        $status = "400";
        $desc 	= "data tidak valid";
		$arrResult = array();
		$arrdata = $func->main->xml2array($input);
		if(is_array($arrdata)){
			if(count($arrdata) > 0){
				$a1 = date("H");
				$b1 = date("i");
				$c1 = date("s");
				$a2 = substr($arrdata['IDPEL'],0,2);
				$b2 = substr($arrdata['IDPEL'],2,3);
				$c2 = substr($arrdata['IDPEL'],5,2);
				$d2 = substr($arrdata['IDPEL'],7,3);
				$e2 = substr($arrdata['IDPEL'],10,2);
				$a3 = date("d");
				$b3 = date("m");
				$c3 = substr(date("Y"),0,2);
				$d3 = substr(date("Y"),2,4);
				$rand = $c3.$a2.$b1.$d2.$a3.$e2.$a1.$c2.$b3.$b2.$c1.$d3;
				$epirefno = $rand;
				#$epirefno = date("His").$arrdata['IDPEL'].date('Ymd').rand(11111,99999);
				$update_request = array(
					"GSPREFNO" => $arrdata['REFNO'],
					"KDSWITCHING" => $arrdata['KDSWITCHING'],
					"KDBANK" => $arrdata['KDBANK'],
					"KDPP" => $arrdata['KDPP'],
					"KDLOKET" => $arrdata['KDLOKET'],
					"TRANSACTIONDATE" => $arrdata['TRANSACTIONDATE'],
					"TRANSACTIONTIME" => $arrdata['TRANSACTIONTIME'],
					"PAYMENT_MEDIA_CODE" => $arrdata['PAYMENT_MEDIA_CODE'],
					"EPIREFNO" => $epirefno
				);
				$this->db->update("epi_cargo.ws_epi",$update_request,array('ID_LANG'=>$arrdata['IDPEL']));
				$this->db->where("(STATUS_LUNAS='0')");
				$query = $this->db->query("
					select 
						ID_LANG as IDPEL,
						THBLREK as BLTH,
						SUBSTR(TARIF,1,2) as KDPEMBPP,
						NAMA,
						KD_AREA as UNITUP,
						TARIF,
						DAYA,
						ROUND(STAND_AWAL_LWBP) as SLALWBP,
						ROUND(STAND_AKHIR_LWBP) as SAHLWBP,
						ROUND(STAND_AWAL_WBP) as SLAWBP,
						ROUND(STAND_AKHIR_WBP) as SAHWBP,
						ROUND(STAND_AWAL_KVARH) as SLAKVARH,
						ROUND(STAND_AKHIR_KVARH) as SAHKARH,
						RPTAG,
						RPPPN,
						RPMAT,
						RPBPJU,
						KOGOL,
						RPPTL,
						RPTRAFO,
						RPANGSURAN as RPANGSA,
						RP_BK as RPBK,
						DATE_FORMAT(NOW(),'%Y%m%d%H%i%s') as TGLSYSTEM,
						DATE_FORMAT(TGLJTTEMPO,'%Y%m%d') as TGLJTTEMPO,
						'0' as RPTB,
						' ' as KDANGSA,
						' ' as KDANGSB,
						'0' as RPANGSB,
						' ' as KDANGSC,
						'0' as RPANGSC,
						'0' as RPREDUKSI,
						'0' as RPSUBSIDI,
						' ' as PEMDA
					from epi_cargo.ws_epi 
					where ID_LANG='".$arrdata['IDPEL']."' AND STATUS_LUNAS='0'
				");
				if($query->num_rows() > 0){

					$arrResult["ROW"] = $query->result_array();

					$no=0;
					foreach ($query->result_array() as $row) {
						$kdaya = "";
						if($row['DAYA'] < 1000000){
							$kdaya = "K";
							$daya = $row['DAYA'];
						}else{
							$kdaya = "M";
							$daya = $row['DAYA'];
						}
						$arrResult["ROW"][$no]["KDAYA"] = $kdaya;
						$arrResult["ROW"][$no]["DAYA"] = $daya;
						$no++;
					}
	        		$status = "200";
	        		$desc 	= "berhasil";
				}else{
					$query2 = $this->db->query("
						select 
							ID_LANG as IDPEL
						from epi_cargo.ws_epi 
						where ID_LANG='".$arrdata['IDPEL']."'
					");
					if($query2->num_rows() > 0){
						$status = "400";
		        		$desc 	= "IDPEL tidak memiliki tagihan / sudah lunas";
					}else{
						$status = "400";
		        		$desc 	= "IDPEL tidak ditemukan";
					}
					
		        	$arrResult["status"] = $status;
					$arrResult["desc"] 	 = $desc;
				}
			}
		}

		$result = $func->main->array2xmlAsXml($arrResult,'RESPONSE',true);
		$func->main->set_log($arrdata["IDPEL"],date('Y-m-d H:i:s'),'SetInquiryTagihan',$arrdata,$arrResult,$desc);			
		return array($result,$status);
	}

	public function SetPayment($input){
		$func = &get_instance();
        $func->load->model("main", "main", true);
		
		date_default_timezone_set('Asia/Jakarta');
        $status = "400";
        $desc 	= "data tidak valid";
		$arrdata = $func->main->xml2array($input);
		
		if(is_array($arrdata)){
			if(count($arrdata) > 0){
				$arrResult = array();

				$epirefno = $this->db->query("select EPIREFNO from epi_cargo.ws_epi where ID_LANG='".$arrdata['IDPEL']."' AND STATUS_LUNAS='0' and SETTLEMENT_FLAG='0' limit 1");

				if($epirefno->num_rows() > 0){
					$arrResult["ROW"][0]["KDRESPONSE"] = "0000";
					$arrResult["ROW"][0]["EPIREFNO"] = $epirefno->row()->EPIREFNO;
					$arrResult["ROW"][0]["TGLSYSTEM"] = date("YmdHis");
					$status = "200";
		        	$desc 	= "berhasil";

					$query_lunas_ws = $this->db->query("select ID,ID_LANG,THBLREK,GSPREFNO from epi_cargo.ws_epi where ID_LANG='".$arrdata['IDPEL']."' and GSPREFNO='".$arrdata['REFNO']."' AND STATUS_LUNAS='0'");
					foreach($query_lunas_ws->result() as $row){
						$data_update_lunas_ws['BLTHMIN'] = $arrdata['BLTHMIN'];
						$data_update_lunas_ws['BLTHMAX'] = $arrdata['BLTHMAX'];
						$data_update_lunas_ws['LEMBAR'] = $arrdata['LEMBAR'];
						$data_update_lunas_ws['KDPEMBPP'] = $arrdata['KDPEMBPP'];
						$data_update_lunas_ws['JENISTRANS_PAYMENT'] =$arrdata['JENISTRANS_PAYMENT'];
						$data_update_lunas_ws['KDSWITCHING'] = $arrdata['KDSWITCHING'];
						$data_update_lunas_ws['RPADMIN'] = $arrdata['RPADMIN'];
						$data_update_lunas_ws['KDBANK'] = $arrdata['KDBANK'];
						$data_update_lunas_ws['KDPP'] = $arrdata['KDPP'];
						$data_update_lunas_ws['SETTLEMENT_FLAG'] = "1";
						$data_update_lunas_ws['SETTLEMENT_DATE'] = $arrdata['SETTLEMENT_DATE'];
						$data_update_lunas_ws['TGLBAYAR'] 	= date('Ymd');
						$data_update_lunas_ws['JAMBAYAR'] 	= date('His');
						$data_update_lunas_ws['STATUS_LUNAS'] = '1';
						$data_update_lunas_ws['USER_LUNAS'] = "BUKOPIN";
						$data_update_lunas_ws['TGL_LUNAS'] = date('Y-m-d H:i:s');
						$this->db->update("epi_cargo.ws_epi",$data_update_lunas_ws,array('ID'=>$row->ID));

						$data_insert['ID_LANG'] = $row->ID_LANG;
						$data_insert['THBLREK'] = $row->THBLREK;
						$data_insert['TGL_LUNAS'] = date('Ymd');
						$data_insert['USER_LUNAS'] = 'BUKOPIN';
						$data_insert['LOKET'] = $arrdata['KDLOKET'];
						$data_insert['STATUS'] = '1';
						$data_insert['EPIREFNO'] = $epirefno->row()->EPIREFNO;
						$data_insert['GSPREFNO'] = $row->GSPREFNO;
						$this->db->insert("epi_cargo.ws_dpp",$data_insert);
					}
				}else{
					$arrResult["ROW"][0]["KDRESPONSE"] = "0005";
					$arrResult["ROW"][0]["EPIREFNO"] = ' ';
					$arrResult["ROW"][0]["TGLSYSTEM"] = date("YmdHis");
					$status = "400";
		        	$desc 	= "gagal";
				}
			}
		}

		$result = $func->main->array2xmlAsXml($arrResult,'RESULTS',true);
		$func->main->set_log($arrdata["IDPEL"],date('Y-m-d H:i:s'),'SetPayment',$arrdata,$arrResult,$desc);
		return array($result,$status);
	}

	public function SetReversal($input){
		$func = &get_instance();
        $func->load->model("main", "main", true);
		date_default_timezone_set('Asia/Jakarta');
        $status = "400";
        $desc 	= "data tidak valid";
		$arrdata = $func->main->xml2array($input);
		if(is_array($arrdata)){
			if(count($arrdata) > 0){
				$arrResult = array();

				$epirefno = $this->db->query("select EPIREFNO from epi_cargo.ws_epi where ID_LANG='".$arrdata['IDPEL']."' and GSPREFNO='".$arrdata['REFNO']."' and SETTLEMENT_FLAG='1' limit 1");

				if($epirefno->num_rows() > 0){
					$arrResult["ROW"][0]["KDRESPONSE"] = "0000";
					$arrResult["ROW"][0]["EPIREFNO"] = $epirefno->row()->EPIREFNO;
					$arrResult["ROW"][0]["TGLSYSTEM"] = date("YmdHis");
					$status = "200";
		        	$desc 	= "berhasil";

					$query_lunas_ws = $this->db->query("select ID,ID_LANG,THBLREK from epi_cargo.ws_epi where ID_LANG='".$arrdata['IDPEL']."' and (THBLREK>='".$arrdata['BLTHMIN']."' and THBLREK<='".$arrdata['BLTHMAX']."') and GSPREFNO='".$arrdata['REFNO']."'");
					foreach($query_lunas_ws->result() as $row){
						$data_update_lunas_ws['SETTLEMENT_FLAG'] = '0';
						$data_update_lunas_ws['TGLBAYAR'] 	= '';
						$data_update_lunas_ws['JAMBAYAR'] 	= '';
						$data_update_lunas_ws['TGLREV'] 	= date('Ymd');
						$data_update_lunas_ws['JAMREV'] 	= date('His');
						$data_update_lunas_ws['STATUS_LUNAS'] = '0';
						$data_update_lunas_ws['TGL_LUNAS'] = '0000-00-00 00:00:00';
						$this->db->update("epi_cargo.ws_epi",$data_update_lunas_ws,array('ID'=>$row->ID));

						$this->db->delete("epi_cargo.ws_dpp",array("ID_LANG"=>$row->ID_LANG,"THBLREK"=>$row->THBLREK));
					}
				}else{
					$arrResult["ROW"][0]["KDRESPONSE"] = "0005";
					$arrResult["ROW"][0]["EPIREFNO"] = ' ';
					$arrResult["ROW"][0]["TGLSYSTEM"] = date("YmdHis");
					$status = "400";
		        	$desc 	= "gagal";
				}
					
			}
		}

		$result = $func->main->array2xmlAsXml($arrResult,'RESPONSE',true);
		$func->main->set_log($arrdata["IDPEL"],date('Y-m-d H:i:s'),'SetReversal',$arrdata,$arrResult,$desc);
		return array($result,$status);
	}
}