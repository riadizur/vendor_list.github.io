<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Db_models extends CI_Model
{
	private $temp = array();
	function __construct() 
	{
		parent::__construct();
	}
	public function max_id_vendor(){
		$query = $this->db->query("SELECT max(substr(kode_vendor FROM 11 FOR 3)) FROM master_perusahaan");
        return $query->row('kode_vendor');
	}
	public function list_dropdown($nama_tabel, $data, $where, $adder = '', $lainnya='',$placeholder='--Pilih--')
	{
		$uraian='';
		$i=0;
		if(array_key_exists(2, $data)and is_array($data[1])){
			$uraian .='concat(';
			foreach($data[1] as $a){
				if($i<sizeof($data[1])-1){
					$uraian.=$data[1][$i] . ",'" . $data[2] . "',";
				}else{
					$uraian.=$data[1][$i];
					if(array_key_exists(3, $data)==1){
						$uraian.= ",'" . $data[3] . "'";
					} 
				}
				$i++;
			}
			$uraian .=')';
		}else{
			$uraian = $data[1];
		}
		if ($where == 'all') {
			$query = $this->db->query("SELECT $data[0] as id, $uraian as uraian FROM $nama_tabel $lainnya");
		} else {
			$query = $this->db->query("SELECT $data[0] as id, $uraian as uraian FROM $nama_tabel $where $lainnya");
		}
		$dropdowns = $query->result();
		if (!$dropdowns) {
			return $finaldropdown['0000']=$placeholder;
		} else {
			$dropdownlist['0000']=$placeholder;
			foreach ($dropdowns as $dropdown) { 
				$dropdownlist[$dropdown->id] = $adder . $dropdown->uraian;
			}
			$finaldropdown = $dropdownlist;
			return $finaldropdown;
		}
    }
    public function get($nama_tabel, $data, $where)
	{
		$select='';
		
		if(is_array($data)){
			for($i=0;$i<sizeof($data);$i++){
				if($i<sizeof($data)-1){
					$select.=$data[$i] . ",'";
				}else{
					$select.=$data[$i];
				}
				$i++;
			}
		}else{
			$select = $data;
        }
		if ($where == 'all') {
			$query = $this->db->query("SELECT $select FROM $nama_tabel");
		} else {
			$query = $this->db->query("SELECT $select FROM $nama_tabel $where");
		}
        $dropdowns = $query->result();
        return $dropdowns;
	}
	public function list_dropdown_query_result($query)
	{
		$query = $this->db->query($query);
		$dropdowns = $query->result();
		return $dropdowns;
	}
    public function list_dropdown_result($nama_tabel, $data, $where, $adder = '', $lainnya='')
	{
		$uraian='';
		$i=0;
		if(array_key_exists(2, $data) and is_array($data[1])){
			$uraian .='concat(';
			foreach($data[1] as $a){
				if($i<sizeof($data[1])-1){
					$uraian.=$data[1][$i] . ",'" . $data[2] . "',";
				}else{
					$uraian.=$data[1][$i];
				}
				$i++;
			}
			$uraian .=')';
		}else{
			$uraian = $data[1];
		}
		if ($where == 'all') {
			$query = $this->db->query("SELECT $data[0] as id, $uraian as uraian FROM $nama_tabel $lainnya");
		} else {
			$query = $this->db->query("SELECT $data[0] as id, $uraian as uraian FROM $nama_tabel $where $lainnya");
		}
		$dropdowns = $query->result();
		return $dropdowns;
	}
	public function list_dropdown_resultx($nama_tabel, $data, $where, $adder = '', $lainnya='')
	{
		$uraian='';
		$i=0;
		if(array_key_exists(2, $data) and is_array($data[1])){
			$uraian .='concat(';
			foreach($data[1] as $a){
				if($i<sizeof($data[1])-1){
					$uraian.=$data[1][$i] . ",'" . $data[2] . "',";
				}else{
					$uraian.=$data[1][$i];
				}
				$i++;
			}
			$uraian .=')';
		}else{
			$uraian = $data[1];
		}
		if(is_array($where)){
			$whereis ='where ';
			$i=0;
			foreach($where as $a){
				if($i*2<sizeof($where)-2){
					$whereis.=$where[$i*2] . "='" . $where[$i*2+1] . "' and";
					$i++;
				}else{
					$whereis.=$where[$i*2] . "='" . $where[$i*2+1] . "'";
					break;
				}
			}
		}else{ 
			$whereis = '';
		}
		if ($where == 'all') {
			$query = $this->db->query("SELECT $data[0] as id, $uraian as uraian FROM $nama_tabel $lainnya");
		} else {
			$query = $this->db->query("SELECT $data[0] as id, $uraian as uraian FROM $nama_tabel $whereis $lainnya");
		}
		$dropdowns = $query->result();
		return $dropdowns;
	}
	public function result_kolom($nama_tabel)
    {
        $query = $this->db->query("
            select TABLE_SCHEMA, TABLE_NAME, COLUMN_NAME, ORDINAL_POSITION
            from information_schema.columns
            where table_schema = 'epi_vendor'
            and table_name = '$nama_tabel'
            and COLUMN_NAME NOT IN ('id')
            order by ORDINAL_POSITION asc
        ");
        return $query->result();
	}
	public function cek($tabel,$where){
		$query=$this->db->get_where($tabel,$where);
		if($query->num_rows()>0){
			return TRUE;
		}else{
			return FALSE;
		}
	} 
	public function simpan($table, $data) 
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id(); 
	}
	public function get_data($tabel,$data,$where){
		$kolom ='';
		if(sizeof($data)>0){
			$i=0;
			foreach($data as $a){
				if($i<sizeof($data)-1){
					$kolom.=$data[$i] . ",";
				}else{
					$kolom.=$data[$i];
				}
				$i++;
			}
		}else{
			$kolom.=$data[1][0];
		}
		if ($where == 'all') {
			$query = $this->db->query("SELECT $kolom FROM $tabel");
		} else {
			$query = $this->db->query("SELECT $kolom FROM $tabel where kode='$where'");
		}
		$hasil = $query->result();
		return $hasil;
	}
	public function insert($tabel, $data)
	{
		$this->db->insert($tabel, $data);
	}
	public function update($tabel, $data, $where)
	{
		$this->db->update($tabel, $data, $where);
	}
	public function delete($tabel, $where)
	{
		$this->db->delete($tabel, $where);
	}
	public function result($nama_tabel, $where)
	{
		if($where!='all'){
			$query = $this->db->get_where($nama_tabel, $where);
		}else{
			$query = $this->db->get($nama_tabel);
		}
		return $query->result();
	}
	public function result_distinct($nama_tabel, $where,$distinct)
	{
		if($where!='all'){
			$query = $this->db->distinct()->select($distinct)->get_where($nama_tabel, $where);
		}else{
			$query = $this->db->distinct()->select($distinct)->get($nama_tabel);
		}
		return $query->result();
	}
	public function result_array($nama_tabel, $where)
	{
		if($where!='all'){
			$query = $this->db->get_where($nama_tabel, $where);
		}else{
			$query = $this->db->get($nama_tabel);
		}
		return $query->result_array();
	}
	public function row($nama_tabel, $where, $tampil)
	{
		$query = $this->db->get_where($nama_tabel, $where);
		return $query->row($tampil);
	}
	public function count($tabel,$where,$kolom){
		$query = $this->db->get_where($tabel,$where);
		return $query->num_rows();
	}
	public function sum($tabel,$kolom,$where){
		$query = $this->db->query("SELECT sum($kolom) as data from $tabel WHERE $where");
		return $query->row('data');
	}
	public function max($tabel,$kolom,$where){
		$query = $this->db->query("SELECT max($kolom) as max from $tabel WHERE $where");
		return $query->row('max');
	}
	public function next_id_new($tabel,$kolom, $where, $code_position, $index_position, $master_id){
		$query = $this->db->query("select if(max(if(left($kolom,$index_position)='$master_id',right($kolom,2),''))+1<10,
		concat('$master_id','0',max(if(left($kolom,3)='$master_id',right($kolom,2),''))+1),
		concat('$master_id',max(if(left($kolom,3)='$master_id',right($kolom,2),''))+1)) as $kolom
		from $tabel");
		return $query->row($kolom);
	}
	public function next_index($tabel,$kolom, $where, $code_position, $index_position, $master_id){
		$query = $this->db->where($where)->query("select max($code_position($kolom,$index_position)='$master_id')+1 as $kolom from $tabel");
		return $query->row($kolom);
	}
}