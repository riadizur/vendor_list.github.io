<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Main extends CI_Model{
	
	function call_api($method, $url, $data = false)
	{
		$curl = curl_init();	
		switch ($method)
		{
			case "POST":
				curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
				curl_setopt($curl, CURLOPT_POST, 1);
				if ($data)
					curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
				break;
			case "PUT":
				curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
				curl_setopt($curl, CURLOPT_PUT, 1);				
				if ($data)
					curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
				break;
			default:
				curl_setopt($curl, CURLOPT_CUSTOMREQUEST, strtoupper($method));
				curl_setopt($curl, CURLOPT_HEADER, false);
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
				if ($data)
					$url = $url.'/'.$data;
				#curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json',"OAuth-Token: $token"));
		}
	
		// Optional Authentication
		//curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		//curl_setopt($curl, CURLOPT_USERPWD, "winzaldi:Bismillah01");
	
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		//curl_setopt($curl, CURLOPT_CONNECTTIMEOUT ,0); 
		//curl_setopt($curl, CURLOPT_TIMEOUT,60);
		$result = curl_exec($curl);	
		//echo $result; 
		//print_r($result); 
		//die();
		//echo curl_error($curl); die();
		curl_close($curl);	
		return $result;
	}
   
	function array2xmlAsString($array = array(), $header = "", $xmlVersion = ""){	
		$strXml = '';	
		if($xmlVersion != ""){ $strXml .= '<?xml version="1.0" ?>'; }
		if(is_array($array)){
			if($header != ""){ $strXml .='<'.$header.'>';}
			foreach($array as $key => $value){
				if(is_array($value)){					
					$a=1;
					foreach ($value as $key2 => $value2) {
						$b = str_pad($a,2,'0',STR_PAD_LEFT);
						if(is_numeric($key2) and is_array($value2)){
							$strXml .='<'.$key.$b.'>';
							foreach ($value2 as $key3 => $value3) {
								$strXml .= '<'.$key3.'>'. htmlspecialchars(trim($value3)).'</'.$key3.'>';	
							}
							$strXml .='</'.$key.$b.'>';
						}else{
							$strXml .= '<'.$key2.'>'. htmlspecialchars(trim($value2)).'</'.$key2.'>';	
						}
						$a++;
					}
				}else{
					$strXml .= '<'.$key.'>'. htmlspecialchars(trim($value)).'</'.$key.'>';
				}				
			}
			if($header != ""){ $strXml .= '</'.$header.'>';}
		}
		return $strXml;	
	}


	function xml2array($xmlstring=""){
		if($xmlstring != ""){
			$xml = simplexml_load_string($xmlstring, "SimpleXMLElement", LIBXML_NOCDATA);
			$json = json_encode($xml);
			$array = json_decode($json,TRUE);
		}
		return $array;
	}
	function array2xmlAsXml($array= array(), $header="", $print=false){
		$this->load->helper('my_xml_helper');
		$dom = xml_dom();
		$nodefirst = xml_add_child($dom,$header);
		foreach($array as $key => $value){
			if(is_array($value)){
				$start = 1;
				foreach($value as $keynd => $valuend){
					$count = str_pad($start,2,'0',STR_PAD_LEFT);
					if(is_numeric($keynd) and is_array($valuend)){
						//$itemno = $key.$count;	
						$itemno = $key;						
						$nodeseccond = xml_add_child($nodefirst,$itemno);						
						foreach ($valuend as $keyth => $valueth) {
							xml_add_child($nodeseccond,$keyth, $valueth);							
						}
					}
					else{
						xml_add_child($nodefirst,$keynd, $valuend);						
					}
					$start++;
				}
			}
			else{
				xml_add_child($nodefirst,$key, $value);
			}
		}
		if($print){
			return xml_print($dom,true);
		}else{
			return xml_print($dom);
		}
		
	}	
	
	function getUserIP()
	{
		$client  = @$_SERVER['HTTP_CLIENT_IP'];
		$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
		$remote  = $_SERVER['REMOTE_ADDR'];	
		if(filter_var($client, FILTER_VALIDATE_IP)){
			$ip = $client;
		}
		elseif(filter_var($forward, FILTER_VALIDATE_IP)){
			$ip = $forward;
		}
		else{
			$ip = $remote;
		}	
		return $ip;
	}

	function set_log($ID_LANG="",$TGL_KEJADIAN ="",$API='',$REQ='',$RES='',$STATUS=''){
		$this->load->database();
		date_default_timezone_set('Asia/Jakarta');
		$arr['ID_LANG'] = $ID_LANG;
		$arr['TGL_KEJADIAN'] = $TGL_KEJADIAN;
		$arr['API'] = $API;
		$arr['REQ'] = json_encode($REQ);
		$arr['RES'] =json_encode($RES);
		$arr['IP'] = $this->getUserIP();
		$arr['STATUS'] = $STATUS;
		$this->db->insert('epi_cargo.ws_log',$arr);
		return $this->db->insert_id();
	}	
	
	function update_log($id,$api="",$request ="", $response){
		date_default_timezone_set('Asia/Jakarta');
		$arr['api'] = $api;
		$arr['request'] = $request;
		$arr['response'] = $response;
		$this->db->update('t_log',$arr,array("id"=>$id,"api"=>$api));
	}
		
}