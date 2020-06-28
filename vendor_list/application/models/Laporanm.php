<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporanm extends CI_Model {
	private $temp = array();
	function __construct() {
		parent::__construct();
	}

	public function get_list_thbl()
	{
		$query = $this->db->query("SELECT 
			THBL_PERIODE as id,  
			CONCAT(DATE_FORMAT(STR_TO_DATE(RIGHT(THBL_PERIODE,2),'%m'),'%M'),' - ', left(THBL_PERIODE,4)) as isi 
			FROM akbi_ja_kontraktor_pdpt_bln
			ORDER BY THBL_PERIODE ASC
		");
		$dropdowns = $query->result();
		if(! $dropdowns){
			$finaldropdown[''] = " - Data tidak ada - ";
			return $finaldropdown;
		}
		else{
			foreach ($dropdowns as $dropdown){
				$dropdownlist[$dropdown->id] = $dropdown->isi;
			}
			$finaldropdown = $dropdownlist;
			$finaldropdown[''] = " - Pilih - ";
			return $finaldropdown;
		}
    }
    
    public function thbl_last(){
        $hasil = $this->db->query("SELECT 
            DATE_FORMAT(STR_TO_DATE(max(THBL_PERIODE),'%Y%m'),'%M %Y') as THBL 
            FROM `tp_ja_coa`
		");
		return $hasil->row('THBL');
        
    }
	
	public function get_info_coa_seg1(){
		$hasil = $this->db->query("SELECT 
				a.COA_SEG1 AS id, 
				b.KETERANGAN as info 
			from temp_akbi_gab_seg_1 as a left join tr_coa_seg_1 as b on (a.COA_SEG1 = b.KODE_AKUN)
			group by a.COA_SEG1
			order by a.COA_SEG1 asc

		");
		return $hasil->result();
	}
	
	public function get_akbi_gab_seg_1x($awal, $akhir,$pilih){
		$hasil = $this->db->query("SELECT 
			COA_SEG1, SUM(BOL) AS BOL, SUM(BOTL) AS BOTL, SUM(BPO) AS BPO, SUM(SAR) AS SAR, SUM(PDPT) AS PDPT,
			SUM(BPP) AS BPP, 
			SUM(HASIL_1) AS HASIL_1, 
			SUM(HASIL_2) AS HASIL_2
			FROM temp_akbi_gab_seg_1
			WHERE THBLREK >= '$awal' AND THBLREK <= '$akhir' AND COA_SEG1 = '$pilih'
			GROUP BY COA_SEG1
		");
		return $hasil->row();
	}

	public function xxxget_akbi_gab_seg_1($awal, $akhir){
		$hasil = $this->db->query("SELECT 
			COA_SEG1, SUM(BOL) AS BOL, SUM(BOTL) AS BOTL, SUM(BPO) AS BPO, SUM(SAR) AS SAR, SUM(PDPT) AS PDPT,
			(SUM(BOL) + SUM(BOTL)) AS BPP, 
			(SUM(PDPT) - (SUM(BOL) + SUM(BOTL))) AS HASIL_1, 
			(SUM(PDPT) - (SUM(BOL) + SUM(BOTL))) - (SUM(SAR) + SUM(BPO)) AS HASIL_2
			FROM (
					SELECT 
					COA_SEG1, SUM(BOL) AS BOL, SUM(BOTL) AS BOTL, SUM(BPO) AS BPO, SUM(SAR) AS SAR, SUM(PDPT)+22 AS PDPT,
					(SUM(BOL) + SUM(BOTL)) AS BPP, 
					(SUM(PDPT)+22 - (SUM(BOL) + SUM(BOTL))) AS HASIL_1, 
					(SUM(PDPT)+22 - (SUM(BOL) + SUM(BOTL))) - (SUM(SAR) + SUM(BPO)) AS HASIL_2
				FROM akbi_gab_listrik_seg_1
				WHERE THBLREK >= '$awal' AND THBLREK <= '$akhir'
				UNION all
				SELECT 
				COA_SEG1, SUM(BOL) AS BOL, SUM(BOTL) AS BOTL, SUM(BPO) AS BPO, SUM(SAR) AS SAR, SUM(PDPT) AS PDPT,
				(SUM(BOL) + SUM(BOTL)) AS BPP, 
				(SUM(PDPT) - (SUM(BOL) + SUM(BOTL))) AS HASIL_1, 
				(SUM(PDPT) - (SUM(BOL) + SUM(BOTL))) - (SUM(SAR) + SUM(BPO)) AS HASIL_2
			FROM akbi_gab_ps_seg_1
			WHERE THBLREK >= '$awal' AND THBLREK <= '$akhir'
			union all 
			SELECT 
				COA_SEG1, SUM(BOL) AS BOL, SUM(BOTL) AS BOTL, SUM(BPO) AS BPO, SUM(SAR) AS SAR, SUM(PDPT) AS PDPT,
				(SUM(BOL) + SUM(BOTL)) AS BPP, 
				(SUM(PDPT) - (SUM(BOL) + SUM(BOTL))) AS HASIL_1, 
				(SUM(PDPT) - (SUM(BOL) + SUM(BOTL))) - (SUM(SAR) + SUM(BPO)) AS HASIL_2
			FROM akbi_gab_kontraktor_seg_1
			WHERE THBLREK >= '$awal' AND THBLREK <= '$akhir'
			) AS A
		group by COA_SEG1
		");
		return $hasil->row();
	}
	
	public function get_info_coa_seg2(){
		$hasil = $this->db->query("SELECT 
				a.COA_SEG2 AS id, 
				b.KETERANGAN as info 
			from temp_akbi_gab_seg_2 as a left join tr_coa_seg_2 as b on (a.COA_SEG2 = b.KODE_AKUN)
			group by a.COA_SEG2
			order by a.COA_SEG2 asc

		");
		return $hasil->result();
	}

	public function get_num_coa_seg2(){
		$hasil = $this->db->query("SELECT 
				a.COA_SEG2 AS id, 
				b.KETERANGAN as info 
			from temp_akbi_gab_seg_2 as a left join tr_coa_seg_2 as b on (a.COA_SEG2 = b.KODE_AKUN)
			group by a.COA_SEG2
			order by a.COA_SEG2 asc

		");
		return $hasil->num_rows();
	}

	public function get_akbi_gab_seg_2(){
		#cek tabel temp_akbi_gab_seg_2
		$cek_1 = $this->db->query("SELECT * 
			FROM information_schema.tables
			WHERE table_schema = 'epi_akbi' 
			AND table_name = 'temp_akbi_gab_seg_2'
			LIMIT 1
		")->num_rows();
		if ($cek_1 > 0) {
			$cek_2 = $this->db->query("SELECT MAX(THBLREK) AS THBLREK FROM temp_akbi_gab_seg_2")->row('THBLREK');
			$cek_3 = $this->db->query("SELECT MAX(THBL_PERIODE) AS THBLREK FROM tp_ja_coa")->row('THBLREK');

			if ($cek_2 != $cek_3) {
				$jalankan_1 = $this->db->query(" DROP TABLE temp_akbi_gab_seg_2 ");
				$jalankan_2 = $this->buat_temp_akbi_gab_seg_2();
			}
		} else {
			$jalankan_1 = $this->buat_temp_akbi_gab_seg_2();
		}		
	}

	private function buat_temp_akbi_gab_seg_2()
	{
		$jalankan = $this->db->query("CREATE TABLE temp_akbi_gab_seg_2 AS
			SELECT THBLREK, COA_SEG2, BOL, BOTL, BPO, SAR, PDPT, BPP, HASIL_1, HASIL_2, KET
			FROM (
				SELECT 
					THBLREK, COA_SEG2, BOL, BOTL, BPO, SAR, PDPT, 
					(BOL + BOTL) AS BPP, 
					(PDPT - (BOL + BOTL)) AS HASIL_1, 
					(PDPT - (BOL + BOTL)) - (SAR + BPO) AS HASIL_2, 
					'LISTRIK' AS KET
				FROM akbi_gab_listrik_seg_2
				UNION all
				SELECT 
					THBLREK, COA_SEG2, BOL, BOTL, BPO, SAR, PDPT, 
					(BOL + BOTL) AS BPP, 
					(PDPT - (BOL + BOTL)) AS HASIL_1, 
					(PDPT - (BOL + BOTL)) - (SAR + BPO) AS HASIL_2,  
					'PS' AS KET
				FROM akbi_gab_ps_seg_2
				union all
				SELECT 
					THBLREK, COA_SEG2, BOL, BOTL, BPO, SAR, PDPT,  
					(BOL + BOTL) AS BPP, 
					(PDPT - (BOL + BOTL)) AS HASIL_1, 
					(PDPT - (BOL + BOTL)) - (SAR + BPO) AS HASIL_2,  
					'KONTRAKTOR' AS KET
				FROM akbi_gab_kontraktor_seg_2
			) AS A
		");
		if ($jalankan) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_akbi_gab_seg_2x($awal, $akhir,$pilih){
		$hasil = $this->db->query("SELECT 
			COA_SEG2, SUM(BOL) AS BOL, SUM(BOTL) AS BOTL, SUM(BPO) AS BPO, SUM(SAR) AS SAR, SUM(PDPT) AS PDPT,
			SUM(BPP) AS BPP, 
			SUM(HASIL_1) AS HASIL_1, 
			SUM(HASIL_2) AS HASIL_2
			FROM temp_akbi_gab_seg_2
			WHERE THBLREK >= '$awal' AND THBLREK <= '$akhir' AND COA_SEG2 = '$pilih'
			GROUP BY COA_SEG2
		");
		return $hasil->row();
	}

	public function get_info_coa_seg3(){
		$hasil = $this->db->query("SELECT 
				a.COA_SEG3 AS id, 
				b.KETERANGAN as info 
			from temp_akbi_gab_seg_3 as a left join tr_coa_seg_3 as b on (a.COA_SEG3 = b.KODE_AKUN)
			group by a.COA_SEG3
			order by a.COA_SEG3 asc

		");
		return $hasil->result();
	}

	public function get_num_coa_seg3(){
		$hasil = $this->db->query("SELECT 
				a.COA_SEG3 AS id, 
				b.KETERANGAN as info 
			from temp_akbi_gab_seg_3 as a left join tr_coa_seg_3 as b on (a.COA_SEG3 = b.KODE_AKUN)
			group by a.COA_SEG3
			order by a.COA_SEG3 asc

		");
		return $hasil->num_rows();
	}

	public function get_akbi_gab_seg_3(){
		#cek tabel temp_akbi_gab_seg_3
		$cek_1 = $this->db->query("SELECT * 
			FROM information_schema.tables
			WHERE table_schema = 'epi_akbi' 
			AND table_name = 'temp_akbi_gab_seg_3'
			LIMIT 1
		")->num_rows();
		if ($cek_1 > 0) {
			$cek_2 = $this->db->query("SELECT MAX(THBLREK) AS THBLREK FROM temp_akbi_gab_seg_3")->row('THBLREK');
			$cek_3 = $this->db->query("SELECT MAX(THBL_PERIODE) AS THBLREK FROM tp_ja_coa")->row('THBLREK');

			if ($cek_2 != $cek_3) {
				$jalankan_1 = $this->db->query(" DROP TABLE temp_akbi_gab_seg_3 ");
				$jalankan_2 = $this->buat_temp_akbi_gab_seg_3();
			}
		} else {
			$jalankan_1 = $this->buat_temp_akbi_gab_seg_3();
		}		
	}

	private function buat_temp_akbi_gab_seg_3()
	{
		$jalankan = $this->db->query("CREATE TABLE temp_akbi_gab_seg_3 AS
			SELECT THBLREK, COA_SEG3, BOL, BOTL, BPO, SAR, PDPT, BPP, HASIL_1, HASIL_2, KET
			FROM (
				SELECT 
					THBLREK, COA_SEG3, BOL, BOTL, BPO, SAR, PDPT, 
					(BOL + BOTL) AS BPP, 
					(PDPT - (BOL + BOTL)) AS HASIL_1, 
					(PDPT - (BOL + BOTL)) - (SAR + BPO) AS HASIL_2, 
					'LISTRIK' AS KET
				FROM akbi_gab_listrik_seg_3
				UNION all
				SELECT 
					THBLREK, COA_SEG3, BOL, BOTL, BPO, SAR, PDPT, 
					(BOL + BOTL) AS BPP, 
					(PDPT - (BOL + BOTL)) AS HASIL_1, 
					(PDPT - (BOL + BOTL)) - (SAR + BPO) AS HASIL_2,  
					'PS' AS KET
				FROM akbi_gab_ps_seg_3
				union all
				SELECT 
					THBLREK, COA_SEG3, BOL, BOTL, BPO, SAR, PDPT,  
					(BOL + BOTL) AS BPP, 
					(PDPT - (BOL + BOTL)) AS HASIL_1, 
					(PDPT - (BOL + BOTL)) - (SAR + BPO) AS HASIL_2,  
					'KONTRAKTOR' AS KET
				FROM akbi_gab_kontraktor_seg_3
			) AS A
		");
		if ($jalankan) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_akbi_gab_seg_3x($awal, $akhir,$pilih){
		$hasil = $this->db->query("SELECT 
			COA_SEG3, SUM(BOL) AS BOL, SUM(BOTL) AS BOTL, SUM(BPO) AS BPO, SUM(SAR) AS SAR, SUM(PDPT) AS PDPT,
			SUM(BPP) AS BPP, 
			SUM(HASIL_1) AS HASIL_1, 
			SUM(HASIL_2) AS HASIL_2
			FROM temp_akbi_gab_seg_3
			WHERE THBLREK >= '$awal' AND THBLREK <= '$akhir' AND COA_SEG3 = '$pilih'
			GROUP BY COA_SEG3
		");
		return $hasil->row();
	}

	#-------------

	public function get_info_coa_seg4(){
		$hasil = $this->db->query("SELECT 
				a.COA_SEG4 AS id, 
				b.KETERANGAN as info 
			from temp_akbi_gab_seg_4 as a left join tr_coa_seg_4 as b on (a.COA_SEG4 = b.KODE_AKUN_BARU)
			group by a.COA_SEG4
			order by a.COA_SEG4 asc

		");
		return $hasil->result();
	}

	public function get_num_coa_seg4(){
		$hasil = $this->db->query("SELECT 
				a.COA_SEG4 AS id, 
				b.KETERANGAN as info 
			from temp_akbi_gab_seg_4 as a left join tr_coa_seg_4 as b on (a.COA_SEG4 = b.KODE_AKUN_BARU)
			group by a.COA_SEG4
			order by a.COA_SEG4 asc

		");
		return $hasil->num_rows();
	}

	public function get_akbi_gab_seg_4(){
		#cek tabel temp_akbi_gab_seg_4
		$cek_1 = $this->db->query("SELECT * 
			FROM information_schema.tables
			WHERE table_schema = 'epi_akbi' 
			AND table_name = 'temp_akbi_gab_seg_4'
			LIMIT 1
		")->num_rows();
		if ($cek_1 > 0) {
			$cek_2 = $this->db->query("SELECT MAX(THBLREK) AS THBLREK FROM temp_akbi_gab_seg_4")->row('THBLREK');
			$cek_3 = $this->db->query("SELECT MAX(THBL_PERIODE) AS THBLREK FROM tp_ja_coa")->row('THBLREK');

			if ($cek_2 != $cek_3) {
				$jalankan_1 = $this->db->query(" DROP TABLE temp_akbi_gab_seg_4 ");
				$jalankan_2 = $this->buat_temp_akbi_gab_seg_4();
			}
		} else {
			$jalankan_1 = $this->buat_temp_akbi_gab_seg_4();
		}		
	}

	private function buat_temp_akbi_gab_seg_4()
	{
		$jalankan = $this->db->query("CREATE TABLE temp_akbi_gab_seg_4 AS
			SELECT THBLREK, COA_SEG4, BOL, BOTL, BPO, SAR, PDPT, BPP, HASIL_1, HASIL_2, KET
			FROM (
				SELECT 
					THBLREK, COA_SEG4, BOL, BOTL, BPO, SAR, PDPT, 
					(BOL + BOTL) AS BPP, 
					(PDPT - (BOL + BOTL)) AS HASIL_1, 
					(PDPT - (BOL + BOTL)) - (SAR + BPO) AS HASIL_2, 
					'LISTRIK' AS KET
				FROM akbi_gab_listrik_seg_4
				UNION all
				SELECT 
					THBLREK, COA_SEG4, BOL, BOTL, BPO, SAR, PDPT, 
					(BOL + BOTL) AS BPP, 
					(PDPT - (BOL + BOTL)) AS HASIL_1, 
					(PDPT - (BOL + BOTL)) - (SAR + BPO) AS HASIL_2,  
					'PS' AS KET
				FROM akbi_gab_ps_seg_4
				union all
				SELECT 
					THBLREK, COA_SEG4, BOL, BOTL, BPO, SAR, PDPT,  
					(BOL + BOTL) AS BPP, 
					(PDPT - (BOL + BOTL)) AS HASIL_1, 
					(PDPT - (BOL + BOTL)) - (SAR + BPO) AS HASIL_2,  
					'KONTRAKTOR' AS KET
				FROM akbi_gab_kontraktor_seg_4
			) AS A
		");
		if ($jalankan) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_akbi_gab_seg_4x($awal, $akhir,$pilih){
		$hasil = $this->db->query("SELECT 
			COA_SEG4, SUM(BOL) AS BOL, SUM(BOTL) AS BOTL, SUM(BPO) AS BPO, SUM(SAR) AS SAR, SUM(PDPT) AS PDPT,
			SUM(BPP) AS BPP, 
			SUM(HASIL_1) AS HASIL_1, 
			SUM(HASIL_2) AS HASIL_2
			FROM temp_akbi_gab_seg_4
			WHERE THBLREK >= '$awal' AND THBLREK <= '$akhir' AND COA_SEG4 = '$pilih'
			GROUP BY COA_SEG4
		");
		return $hasil->row();
	}

	#-------------

	public function get_info_coa_seg5(){
		$hasil = $this->db->query("SELECT 
				a.COA_SEG5 AS id, 
				b.KETERANGAN as info 
			from temp_akbi_gab_seg_5 as a left join tr_coa_seg_5 as b on (a.COA_SEG5 = b.KODE_AKUN)
			group by a.COA_SEG5
			order by a.COA_SEG5 asc

		");
		return $hasil->result();
	}

	public function get_num_coa_seg5(){
		$hasil = $this->db->query("SELECT 
				a.COA_SEG5 AS id, 
				b.KETERANGAN as info 
			from temp_akbi_gab_seg_5 as a left join tr_coa_seg_5 as b on (a.COA_SEG5 = b.KODE_AKUN)
			group by a.COA_SEG5
			order by a.COA_SEG5 asc

		");
		return $hasil->num_rows();
	}

	public function get_akbi_gab_seg_5(){
		#cek tabel temp_akbi_gab_seg_5
		$cek_1 = $this->db->query("SELECT * 
			FROM information_schema.tables
			WHERE table_schema = 'epi_akbi' 
			AND table_name = 'temp_akbi_gab_seg_5'
			LIMIT 1
		")->num_rows();
		if ($cek_1 > 0) {
			$cek_2 = $this->db->query("SELECT MAX(THBLREK) AS THBLREK FROM temp_akbi_gab_seg_5")->row('THBLREK');
			$cek_3 = $this->db->query("SELECT MAX(THBL_PERIODE) AS THBLREK FROM tp_ja_coa")->row('THBLREK');

			if ($cek_2 != $cek_3) {
				$jalankan_1 = $this->db->query(" DROP TABLE temp_akbi_gab_seg_5 ");
				$jalankan_2 = $this->buat_temp_akbi_gab_seg_5();
			}
		} else {
			$jalankan_1 = $this->buat_temp_akbi_gab_seg_5();
		}		
	}

	private function buat_temp_akbi_gab_seg_5()
	{
		$jalankan = $this->db->query("CREATE TABLE temp_akbi_gab_seg_5 AS
			SELECT THBLREK, COA_SEG5, BOL, BOTL, BPO, SAR, PDPT, BPP, HASIL_1, HASIL_2, KET
			FROM (
				SELECT 
					THBLREK, COA_SEG5, BOL, BOTL, BPO, SAR, PDPT, 
					(BOL + BOTL) AS BPP, 
					(PDPT - (BOL + BOTL)) AS HASIL_1, 
					(PDPT - (BOL + BOTL)) - (SAR + BPO) AS HASIL_2, 
					'LISTRIK' AS KET
				FROM akbi_gab_listrik_seg_5
				UNION all
				SELECT 
					THBLREK, COA_SEG5, BOL, BOTL, BPO, SAR, PDPT, 
					(BOL + BOTL) AS BPP, 
					(PDPT - (BOL + BOTL)) AS HASIL_1, 
					(PDPT - (BOL + BOTL)) - (SAR + BPO) AS HASIL_2,  
					'PS' AS KET
				FROM akbi_gab_ps_seg_5
				union all
				SELECT 
					THBLREK, COA_SEG5, BOL, BOTL, BPO, SAR, PDPT,  
					(BOL + BOTL) AS BPP, 
					(PDPT - (BOL + BOTL)) AS HASIL_1, 
					(PDPT - (BOL + BOTL)) - (SAR + BPO) AS HASIL_2,  
					'KONTRAKTOR' AS KET
				FROM akbi_gab_kontraktor_seg_5
			) AS A
		");
		if ($jalankan) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_akbi_gab_seg_5x($awal, $akhir,$pilih){
		$hasil = $this->db->query("SELECT 
			COA_SEG5, SUM(BOL) AS BOL, SUM(BOTL) AS BOTL, SUM(BPO) AS BPO, SUM(SAR) AS SAR, SUM(PDPT) AS PDPT,
			SUM(BPP) AS BPP, 
			SUM(HASIL_1) AS HASIL_1, 
			SUM(HASIL_2) AS HASIL_2
			FROM temp_akbi_gab_seg_5
			WHERE THBLREK >= '$awal' AND THBLREK <= '$akhir' AND COA_SEG5 = '$pilih'
			GROUP BY COA_SEG5
		");
		return $hasil->row();
	}

	#-------------

	public function get_info_coa_seg6(){
		$hasil = $this->db->query("SELECT 
				a.COA_SEG6 AS id, 
				b.KETERANGAN as info 
			from temp_akbi_gab_seg_6 as a left join tr_coa_seg_6 as b on (a.COA_SEG6 = b.KODE_AKUN)
			group by a.COA_SEG6
			order by a.COA_SEG6 asc

		");
		return $hasil->result();
	}

	public function get_num_coa_seg6(){
		$hasil = $this->db->query("SELECT 
				a.COA_SEG6 AS id, 
				b.KETERANGAN as info 
			from temp_akbi_gab_seg_6 as a left join tr_coa_seg_6 as b on (a.COA_SEG6 = b.KODE_AKUN)
			group by a.COA_SEG6
			order by a.COA_SEG6 asc

		");
		return $hasil->num_rows();
	}

	public function get_akbi_gab_seg_6(){
		#cek tabel temp_akbi_gab_seg_6
		$cek_1 = $this->db->query("SELECT * 
			FROM information_schema.tables
			WHERE table_schema = 'epi_akbi' 
			AND table_name = 'temp_akbi_gab_seg_6'
			LIMIT 1
		")->num_rows();
		if ($cek_1 > 0) {
			$cek_2 = $this->db->query("SELECT MAX(THBLREK) AS THBLREK FROM temp_akbi_gab_seg_6")->row('THBLREK');
			$cek_3 = $this->db->query("SELECT MAX(THBL_PERIODE) AS THBLREK FROM tp_ja_coa")->row('THBLREK');

			if ($cek_2 != $cek_3) {
				$jalankan_1 = $this->db->query(" DROP TABLE temp_akbi_gab_seg_6 ");
				$jalankan_2 = $this->buat_temp_akbi_gab_seg_6();
			}
		} else {
			$jalankan_1 = $this->buat_temp_akbi_gab_seg_6();
		}		
	}

	private function buat_temp_akbi_gab_seg_6()
	{
		$jalankan = $this->db->query("CREATE TABLE temp_akbi_gab_seg_6 AS
			SELECT THBLREK, COA_SEG6, BOL, BOTL, BPO, SAR, PDPT, BPP, HASIL_1, HASIL_2, KET
			FROM (
				SELECT 
					THBLREK, COA_SEG6, BOL, BOTL, BPO, SAR, PDPT, 
					(BOL + BOTL) AS BPP, 
					(PDPT - (BOL + BOTL)) AS HASIL_1, 
					(PDPT - (BOL + BOTL)) - (SAR + BPO) AS HASIL_2, 
					'LISTRIK' AS KET
				FROM akbi_gab_listrik_seg_6
				UNION all
				SELECT 
					THBLREK, COA_SEG6, BOL, BOTL, BPO, SAR, PDPT, 
					(BOL + BOTL) AS BPP, 
					(PDPT - (BOL + BOTL)) AS HASIL_1, 
					(PDPT - (BOL + BOTL)) - (SAR + BPO) AS HASIL_2,  
					'PS' AS KET
				FROM akbi_gab_ps_seg_6
				union all
				SELECT 
					THBLREK, COA_SEG6, BOL, BOTL, BPO, SAR, PDPT,  
					(BOL + BOTL) AS BPP, 
					(PDPT - (BOL + BOTL)) AS HASIL_1, 
					(PDPT - (BOL + BOTL)) - (SAR + BPO) AS HASIL_2,  
					'KONTRAKTOR' AS KET
				FROM akbi_gab_kontraktor_seg_6
			) AS A
		");
		if ($jalankan) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_akbi_gab_seg_6x($awal, $akhir,$pilih){
		$hasil = $this->db->query("SELECT 
			COA_SEG6, SUM(BOL) AS BOL, SUM(BOTL) AS BOTL, SUM(BPO) AS BPO, SUM(SAR) AS SAR, SUM(PDPT) AS PDPT,
			SUM(BPP) AS BPP, 
			SUM(HASIL_1) AS HASIL_1, 
			SUM(HASIL_2) AS HASIL_2
			FROM temp_akbi_gab_seg_6
			WHERE THBLREK >= '$awal' AND THBLREK <= '$akhir' AND COA_SEG6 = '$pilih'
			GROUP BY COA_SEG6
		");
		return $hasil->row();
	}

	#-------------

	public function get_info_coa_seg7(){
		$hasil = $this->db->query("SELECT 
				a.COA_SEG7 AS id, 
				b.NAMA_GARDU as info 
			from temp_akbi_gab_seg_7 as a left join tr_coa_seg_7 as b on (a.COA_SEG7 = b.KODE_AKUN)
			group by a.COA_SEG7
			order by a.COA_SEG7 asc

		");
		return $hasil->result();
	}

	public function get_num_coa_seg7(){
		$hasil = $this->db->query("SELECT 
				a.COA_SEG7 AS id, 
				b.NAMA_GARDU as info 
			from temp_akbi_gab_seg_7 as a left join tr_coa_seg_7 as b on (a.COA_SEG7 = b.KODE_AKUN)
			group by a.COA_SEG7
			order by a.COA_SEG7 asc

		");
		return $hasil->num_rows();
	}

	public function get_akbi_gab_seg_7(){
		#cek tabel temp_akbi_gab_seg_7
		$cek_1 = $this->db->query("SELECT * 
			FROM information_schema.tables
			WHERE table_schema = 'epi_akbi' 
			AND table_name = 'temp_akbi_gab_seg_7'
			LIMIT 1
		")->num_rows();
		if ($cek_1 > 0) {
			$cek_2 = $this->db->query("SELECT MAX(THBLREK) AS THBLREK FROM temp_akbi_gab_seg_7")->row('THBLREK');
			$cek_3 = $this->db->query("SELECT MAX(THBL_PERIODE) AS THBLREK FROM tp_ja_coa")->row('THBLREK');

			if ($cek_2 != $cek_3) {
				$jalankan_1 = $this->db->query(" DROP TABLE temp_akbi_gab_seg_7 ");
				$jalankan_2 = $this->buat_temp_akbi_gab_seg_7();
			}
		} else {
			$jalankan_1 = $this->buat_temp_akbi_gab_seg_7();
		}		
	}

	public function buat_temp_akbi_gab_seg_7()
	{
		$jalankan = $this->db->query("CREATE TABLE temp_akbi_gab_seg_7 AS
			SELECT THBLREK, COA_SEG7, BOL, BOTL, BPO, SAR, PDPT, BPP, HASIL_1, HASIL_2, KET
			FROM (
				SELECT 
					THBLREK, COA_SEG7, BOL, BOTL, BPO, SAR, PDPT, 
					(BOL + BOTL) AS BPP, 
					(PDPT - (BOL + BOTL)) AS HASIL_1, 
					(PDPT - (BOL + BOTL)) - (SAR + BPO) AS HASIL_2, 
					'LISTRIK' AS KET
				FROM akbi_gab_listrik_seg_7
				UNION all
				SELECT 
					THBLREK, COA_SEG7, BOL, BOTL, BPO, SAR, PDPT, 
					(BOL + BOTL) AS BPP, 
					(PDPT - (BOL + BOTL)) AS HASIL_1, 
					(PDPT - (BOL + BOTL)) - (SAR + BPO) AS HASIL_2,  
					'PS' AS KET
				FROM akbi_gab_ps_seg_7
				union all
				SELECT 
					THBLREK, COA_SEG7, BOL, BOTL, BPO, SAR, PDPT,  
					(BOL + BOTL) AS BPP, 
					(PDPT - (BOL + BOTL)) AS HASIL_1, 
					(PDPT - (BOL + BOTL)) - (SAR + BPO) AS HASIL_2,  
					'KONTRAKTOR' AS KET
				FROM akbi_gab_kontraktor_seg_7
			) AS A
		");
		if ($jalankan) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_akbi_gab_seg_7x($awal, $akhir,$pilih){
		$hasil = $this->db->query("SELECT 
			COA_SEG7, SUM(BOL) AS BOL, SUM(BOTL) AS BOTL, SUM(BPO) AS BPO, SUM(SAR) AS SAR, SUM(PDPT) AS PDPT,
			SUM(BPP) AS BPP, 
			SUM(HASIL_1) AS HASIL_1, 
			SUM(HASIL_2) AS HASIL_2
			FROM temp_akbi_gab_seg_7
			WHERE THBLREK >= '$awal' AND THBLREK <= '$akhir' AND COA_SEG7 = '$pilih'
			GROUP BY COA_SEG7
		");
		return $hasil->row();
	}

	#-------------

	public function get_info_coa_seg8(){
		$hasil = $this->db->query("SELECT 
				a.COA_SEG8 AS id, 
				a.NAMA as info 
			from temp_akbi_gab_seg_8 as a 
			group by a.COA_SEG8
			order by a.COA_SEG8 asc

		");
		return $hasil->result();
	}

	public function get_num_coa_seg8(){
		$hasil = $this->db->query("SELECT 
				a.COA_SEG8 AS id, 
				a.NAMA as info 
			from temp_akbi_gab_seg_8 as a 
			group by a.COA_SEG8
			order by a.COA_SEG8 asc

		");
		return $hasil->num_rows();
	}

	public function get_akbi_gab_seg_8(){
		#cek tabel temp_akbi_gab_seg_8
		$cek_1 = $this->db->query("SELECT * 
			FROM information_schema.tables
			WHERE table_schema = 'epi_akbi' 
			AND table_name = 'temp_akbi_gab_seg_8'
			LIMIT 1
		")->num_rows();
		if ($cek_1 > 0) {
			$cek_2 = $this->db->query("SELECT MAX(THBLREK) AS THBLREK FROM temp_akbi_gab_seg_8")->row('THBLREK');
			$cek_3 = $this->db->query("SELECT MAX(THBL_PERIODE) AS THBLREK FROM tp_ja_coa")->row('THBLREK');

			if ($cek_2 != $cek_3) {
				$jalankan_1 = $this->db->query(" DROP TABLE temp_akbi_gab_seg_8 ");
				$jalankan_2 = $this->buat_temp_akbi_gab_seg_8();
			}
		} else {
			$jalankan_1 = $this->buat_temp_akbi_gab_seg_8();
		}		
	}
    
    public function buat_temp_akbi_gab_seg_8()
	{
		$jalankan = $this->db->query("CREATE TABLE temp_akbi_gab_seg_8 AS
			SELECT THBLREK, COA_SEG8, NAMA, BOL, BOTL, BPO, SAR, PDPT, BPP, HASIL_1, HASIL_2, KET
			FROM (
				SELECT 
					THBLREK, COA_SEG8, NAMA, BOL, BOTL, BPO, SAR, PDPT, 
					(BOL + BOTL) AS BPP, 
					(PDPT - (BOL + BOTL)) AS HASIL_1, 
					(PDPT - (BOL + BOTL)) - (SAR + BPO) AS HASIL_2, 
					'LISTRIK' AS KET
				FROM akbi_gab_listrik_seg_8
				UNION all
				SELECT 
					THBLREK, COA_SEG8, NAMA, BOL, BOTL, BPO, SAR, PDPT, 
					(BOL + BOTL) AS BPP, 
					(PDPT - (BOL + BOTL)) AS HASIL_1, 
					(PDPT - (BOL + BOTL)) - (SAR + BPO) AS HASIL_2,  
					'PS' AS KET
				FROM akbi_gab_ps_seg_8
				union all
				SELECT 
					THBLREK, COA_SEG8, NAMA, BOL, BOTL, BPO, SAR, PDPT,  
					(BOL + BOTL) AS BPP, 
					(PDPT - (BOL + BOTL)) AS HASIL_1, 
					(PDPT - (BOL + BOTL)) - (SAR + BPO) AS HASIL_2,  
					'KONTRAKTOR' AS KET
				FROM akbi_gab_kontraktor_seg_8
			) AS A
		");
		if ($jalankan) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_akbi_gab_seg_8x($awal, $akhir,$pilih){
		$hasil = $this->db->query("SELECT 
			COA_SEG8, SUM(BOL) AS BOL, SUM(BOTL) AS BOTL, SUM(BPO) AS BPO, SUM(SAR) AS SAR, SUM(PDPT) AS PDPT,
			SUM(BPP) AS BPP, 
			SUM(HASIL_1) AS HASIL_1, 
			SUM(HASIL_2) AS HASIL_2
			FROM temp_akbi_gab_seg_8
			WHERE THBLREK >= '$awal' AND THBLREK <= '$akhir' AND COA_SEG8 = '$pilih'
			GROUP BY COA_SEG8
		");
		return $hasil->row();
	}

	#-------------

	public function get_info_coa_seg9(){
		$hasil = $this->db->query("SELECT 
				a.COA_SEG9 AS id, 
				b.KETERANGAN as info 
			from temp_akbi_gab_seg_9 as a left join tr_coa_seg_9 as b on (a.COA_SEG9 = b.KODE_AKUN)
			group by a.COA_SEG9
			order by a.COA_SEG9 asc

		");
		return $hasil->result();
	}

	public function get_num_coa_seg9(){
		$hasil = $this->db->query("SELECT 
				a.COA_SEG9 AS id, 
				b.KETERANGAN as info 
			from temp_akbi_gab_seg_9 as a left join tr_coa_seg_9 as b on (a.COA_SEG9 = b.KODE_AKUN)
			group by a.COA_SEG9
			order by a.COA_SEG9 asc
		");
		return $hasil->num_rows();
	}

	public function get_akbi_gab_seg_9(){
		#cek tabel temp_akbi_gab_seg_9
		$cek_1 = $this->db->query("SELECT * 
			FROM information_schema.tables
			WHERE table_schema = 'epi_akbi' 
			AND table_name = 'temp_akbi_gab_seg_9'
			LIMIT 1
		")->num_rows();
		if ($cek_1 > 0) {
			$cek_2 = $this->db->query("SELECT MAX(THBLREK) AS THBLREK FROM temp_akbi_gab_seg_9")->row('THBLREK');
			$cek_3 = $this->db->query("SELECT MAX(THBL_PERIODE) AS THBLREK FROM tp_ja_coa")->row('THBLREK');

			if ($cek_2 != $cek_3) {
				$jalankan_1 = $this->db->query(" DROP TABLE temp_akbi_gab_seg_9 ");
				$jalankan_2 = $this->buat_temp_akbi_gab_seg_9();
			}
		} else {
			$jalankan_1 = $this->buat_temp_akbi_gab_seg_9();
		}		
	}

	public function buat_temp_akbi_gab_seg_9()
	{
		$jalankan = $this->db->query("CREATE TABLE temp_akbi_gab_seg_9 AS
			SELECT THBLREK, COA_SEG9, BOL, BOTL, BPO, SAR, PDPT, BPP, HASIL_1, HASIL_2, KET
			FROM (
				SELECT 
					THBLREK, COA_SEG9, BOL, BOTL, BPO, SAR, PDPT, 
					(BOL + BOTL) AS BPP, 
					(PDPT - (BOL + BOTL)) AS HASIL_1, 
					(PDPT - (BOL + BOTL)) - (SAR + BPO) AS HASIL_2, 
					'LISTRIK' AS KET
				FROM akbi_gab_listrik_seg_9
				UNION all
				SELECT 
					THBLREK, COA_SEG9, BOL, BOTL, BPO, SAR, PDPT, 
					(BOL + BOTL) AS BPP, 
					(PDPT - (BOL + BOTL)) AS HASIL_1, 
					(PDPT - (BOL + BOTL)) - (SAR + BPO) AS HASIL_2,  
					'PS' AS KET
				FROM akbi_gab_ps_seg_9
				union all
				SELECT 
					THBLREK, COA_SEG9, BOL, BOTL, BPO, SAR, PDPT,  
					(BOL + BOTL) AS BPP, 
					(PDPT - (BOL + BOTL)) AS HASIL_1, 
					(PDPT - (BOL + BOTL)) - (SAR + BPO) AS HASIL_2,  
					'KONTRAKTOR' AS KET
				FROM akbi_gab_kontraktor_seg_9
			) AS A
		");
		if ($jalankan) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_akbi_gab_seg_9x($awal, $akhir,$pilih){
		$hasil = $this->db->query("SELECT 
			COA_SEG9, SUM(BOL) AS BOL, SUM(BOTL) AS BOTL, SUM(BPO) AS BPO, SUM(SAR) AS SAR, SUM(PDPT) AS PDPT,
			SUM(BPP) AS BPP, 
			SUM(HASIL_1) AS HASIL_1,  
			SUM(HASIL_2) AS HASIL_2
			FROM temp_akbi_gab_seg_9
			WHERE THBLREK >= '$awal' AND THBLREK <= '$akhir' AND COA_SEG9 = '$pilih'
			GROUP BY COA_SEG9
		");
		return $hasil->row();
    }
    
    #-------------

	public function get_info_analisa_listrik(){
		$hasil = $this->db->query("SELECT 
				a.COA_SEG4 AS id, 
				b.KETERANGAN as info 
			from temp_analisa_listrik as a left join tr_coa_seg_4 as b on (a.COA_SEG4 = b.KODE_AKUN_BARU)
			group by a.COA_SEG4
			order by a.COA_SEG4 asc

		");
		return $hasil->result();
	}

	public function get_num_analisa_listrik(){
		$hasil = $this->db->query("SELECT 
				a.COA_SEG4 AS id, 
				b.KETERANGAN as info 
			from temp_analisa_listrik as a left join tr_coa_seg_4 as b on (a.COA_SEG4 = b.KODE_AKUN_BARU)
			group by a.COA_SEG4
			order by a.COA_SEG4 asc
		");
		return $hasil->num_rows();
	}

	public function get_akbi_analisa_listrik(){
		#cek tabel temp_akbi_gab_seg_9
		$cek_1 = $this->db->query("SELECT * 
			FROM information_schema.tables
			WHERE table_schema = 'epi_akbi' 
			AND table_name = 'temp_analisa_listrik'
			LIMIT 1
		")->num_rows();
		if ($cek_1 > 0) {
			$cek_2 = $this->db->query("SELECT MAX(THBLREK) AS THBLREK FROM temp_analisa_listrik")->row('THBLREK');
			$cek_3 = $this->db->query("SELECT MAX(THBL_PERIODE) AS THBLREK FROM tp_ja_coa")->row('THBLREK');

			if ($cek_2 != $cek_3) {
				$jalankan_1 = $this->db->query(" DROP TABLE temp_analisa_listrik ");
				$jalankan_2 = $this->buat_temp_analisa_listrik();
			}
		} else {
			$jalankan_1 = $this->buat_temp_analisa_listrik();
		}		
	}

	public function buat_temp_analisa_listrik()
	{
		$jalankan = $this->db->query("CREATE TABLE temp_analisa_listrik AS
			SELECT THBLREK, COA_SEG4, BOL, BOTL, BPO, SAR, PDPT, BPP, HASIL_1, HASIL_2, KET, KWH, BPP_KWH, LABA_KWH
			FROM (
				SELECT 
					THBLREK, COA_SEG4, BOL, BOTL, BPO, SAR, PDPT, 
					(BOL + BOTL) AS BPP, 
					(PDPT - (BOL + BOTL)) AS HASIL_1, 
					(PDPT - (BOL + BOTL)) - (SAR + BPO) AS HASIL_2, 
					'LISTRIK' AS KET, KWH,
					(BOL + BOTL) / KWH AS BPP_KWH,
					(((PDPT - (BOL + BOTL)) - (SAR + BPO)) / KWH)  AS LABA_KWH
				FROM akbi_gab_listrik_seg_4
				UNION all
				SELECT 
					THBLREK, COA_SEG4, BOL, BOTL, BPO, SAR, PDPT, 
					(BOL + BOTL) AS BPP, 
					(PDPT - (BOL + BOTL)) AS HASIL_1, 
					(PDPT - (BOL + BOTL)) - (SAR + BPO) AS HASIL_2,  
					'PS' AS KET, KWH,
					(BOL + BOTL) / KWH AS BPP_KWH,
					(((PDPT - (BOL + BOTL)) - (SAR + BPO)) / KWH) AS LABA_KWH
				FROM akbi_gab_ps_seg_4
			) AS A
		");
		if ($jalankan) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function get_akbi_analisa_listrikx($awal, $akhir,$pilih){
		$hasil = $this->db->query("SELECT 
			COA_SEG4, SUM(BOL) AS BOL, SUM(BOTL) AS BOTL, SUM(BPO) AS BPO, SUM(SAR) AS SAR, SUM(PDPT) AS PDPT,
			SUM(BPP) AS BPP, 
			SUM(HASIL_1) AS HASIL_1,  
			SUM(HASIL_2) AS HASIL_2,
            SUM(KWH) AS KWH,
            (SUM(BPP)/SUM(KWH)) AS BPP_KWH,
            (SUM(HASIL_2)/SUM(KWH)) AS LABA_KWH
			FROM temp_analisa_listrik
			WHERE THBLREK >= '$awal' AND THBLREK <= '$akhir' AND COA_SEG4 = '$pilih'
			GROUP BY COA_SEG4
		");
		return $hasil->row();
	}

    #-------------

    public function get_info_analisa_kontraktor(){
		$hasil = $this->db->query("SELECT 
				a.id_kontrak AS id, 
				a.nama_pekerjaan as info 
			from akbi_gab_kontraktor_evaluasi as a 			
			group by a.id_kontrak
			order by a.id_kontrak asc

		");
		return $hasil->result();
	}

	public function get_num_analisa_kontraktor(){
		$hasil = $this->db->query("SELECT 
				a.id_kontrak AS id, 
				a.nama_pekerjaan as info 
			from akbi_gab_kontraktor_evaluasi as a 			
			group by a.id_kontrak
			order by a.id_kontrak asc
		");
		return $hasil->num_rows();
	}

    public function get_akbi_analisa_kontraktorx($pilih){
		$hasil = $this->db->query("SELECT *
			FROM akbi_gab_kontraktor_evaluasi
			WHERE id_kontrak = '$pilih'
		");
		return $hasil->row();
	}
	
	public function get_akbi_gab_kontraktor_evaluasi(){
		$hasil = $this->db->query("SELECT *
			FROM akbi_gab_kontraktor_evaluasi
		");
		return $hasil->result();
	}
	
	public function get_analisa_pendapatan(){
		$hasil = $this->db->query("SELECT *
			FROM akbi_ja_rekap_seg45_pdpt_usaha_seg4
		");
		return $hasil->result();
	}
	
	public function get_analisa_biaya(){
		$hasil = $this->db->query("SELECT *
			FROM akbi_ja_rekap_seg45_biaya_usaha_seg5_rekap_kom
		");
		return $hasil->result();
	}










#----------------------------------------------------------------	

    public function cek_tp_tb($thbl_periode){
        $query = $this->db->query("SELECT * from tp_tb where THBL_PERIODE = '$thbl_periode' group by THBL_PERIODE ");
        return $query->num_rows();
    }

    var $column_order_tb = array('PERIODE_NAME','COA','DESCRIPTION','BEGINING_BALANCE','PERIOD_ACTIVITY','ENDING_BALANCE');
	var $column_search_tb = array('PERIODE_NAME','COA','DESCRIPTION','BEGINING_BALANCE','PERIOD_ACTIVITY','ENDING_BALANCE');
	var $order_tb = array('ID' => 'asc');

    function get_datatables_tb($thbl)
	{
		$this->_get_datatables_tb($thbl);
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
    }
    
    private function _get_datatables_tb($thbl='')
	{
		#$this->db->select("a.ID,a.THBLREK,a.ID_LANG,b.NAMA_LANG, a.RPTAG, a.RP_BK, (a.RPTAG + a.RP_BK) TOTAL_INVOICE, date(a.tgl_lunas) TGL_LUNAS, IF(a.STATUS_LUNAS=0,'BELUM LUNAS','LUNAS') STATUS_LUNAS, LOKET_LUNAS, USER_LUNAS ");
		$this->db->from("tp_tb");
		$this->db->where("THBL_PERIODE = '$thbl' ");
		$i = 0;
		foreach ($this->column_search_tb as $item)
		{
			if($_POST['search']['value'])
			{
				if($i===0)
				{
					$this->db->group_start();
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search_tb) - 1 == $i)
					$this->db->group_end();
			}
			$i++;
		}

		if(isset($_POST['order']))
		{
			$this->db->order_by($this->column_order_tb[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		}
		else if(isset($this->order_tb))
		{
			$order = $this->order_tb;
			$this->db->order_by(key($order), $order[key($order)]);
		}
    }
    
    function count_filtered_tb($thbl='')
	{
		$this->_get_datatables_tb($thbl);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all_tb($thbl='')
	{
		$this->db->from("tp_tb");
		$this->db->where("THBL_PERIODE = '$thbl' ");
		return $this->db->count_all_results();
	}

	public function get_list_thbl_tp_tb()
	{
		$query = $this->db->query("SELECT THBL_PERIODE as id, PERIODE_NAME as isi FROM tp_tb group by THBL_PERIODE ORDER BY THBL_PERIODE asc ");
		$dropdowns = $query->result();
		if(! $dropdowns){
			$finaldropdown[''] = " - Data tidak ada - ";
			return $finaldropdown;
		}
		else{
			foreach ($dropdowns as $dropdown){
				$dropdownlist[$dropdown->id] = $dropdown->isi;
			}
			$finaldropdown = $dropdownlist;
			$finaldropdown[''] = " - Pilih - ";
			return $finaldropdown;
		}
	}

	public function tp_tb_last_periode(){
        $query = $this->db->query("SELECT max(THBL_PERIODE) as thbl from tp_tb ");
        return $query->row('thbl');
	}
	
	public function cek_tp_ja_coa($thbl_periode){
        $query = $this->db->query("SELECT * from tp_ja_coa where PERIODE_NAME = '$thbl_periode' group by PERIODE_NAME ");
        return $query->num_rows();
	}
	
	public function get_list_thbl_tp_ja_coa()
	{
		$query = $this->db->query("SELECT THBL_PERIODE as id, PERIODE_NAME as isi FROM tp_ja_coa group by THBL_PERIODE ORDER BY THBL_PERIODE asc ");
		$dropdowns = $query->result();
		if(! $dropdowns){
			$finaldropdown[''] = " - Data tidak ada - ";
			return $finaldropdown;
		}
		else{
			foreach ($dropdowns as $dropdown){
				$dropdownlist[$dropdown->id] = $dropdown->isi;
			}
			$finaldropdown = $dropdownlist;
			$finaldropdown[''] = " - Pilih - ";
			return $finaldropdown;
		}
	}

	public function tp_ja_coa_last_periode(){
        $query = $this->db->query("SELECT max(THBL_PERIODE) as thbl from tp_ja_coa ");
        return $query->row('thbl');
	}

	var $column_order_ja = array('PERIODE_NAME','COA','DESCRIPTION','ENTERED_DR','ENTERED_CR');
	var $column_search_ja = array('PERIODE_NAME','COA','DESCRIPTION','ENTERED_DR','ENTERED_CR');
	var $order_ja = array('ID' => 'asc');

    function get_datatables_ja($thbl)
	{
		$this->_get_datatables_ja($thbl);
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
    }
    
    private function _get_datatables_ja($thbl='')
	{
		$this->db->from("tp_ja_coa");
		$this->db->where("THBL_PERIODE = '$thbl' ");
		$i = 0;
		foreach ($this->column_search_ja as $item)
		{
			if($_POST['search']['value'])
			{
				if($i===0)
				{
					$this->db->group_start();
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search_ja) - 1 == $i)
					$this->db->group_end();
			}
			$i++;
		}

		if(isset($_POST['order']))
		{
			$this->db->order_by($this->column_order_ja[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		}
		else if(isset($this->order_ja))
		{
			$order = $this->order_ja;
			$this->db->order_by(key($order), $order[key($order)]);
		}
    }
    
    function count_filtered_ja($thbl='')
	{
		$this->_get_datatables_ja($thbl);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all_ja($thbl='')
	{
		$this->db->from("tp_ja_coa");
		$this->db->where("THBL_PERIODE = '$thbl' ");
		return $this->db->count_all_results();
    }

    public function result_coa_seg_1(){
        $this->db->from("tr_coa_seg_1");
        $query = $this->db->get();
        return $query->result();
    }

    public function result_coa_seg_2(){
        $this->db->from("tr_coa_seg_2");
        $query = $this->db->get();
        return $query->result();
    }

    public function result_coa_seg_3(){
        $this->db->from("tr_coa_seg_3");
        $query = $this->db->get();
        return $query->result();
    }

    public function result_coa_seg_4(){
        $this->db->from("tr_coa_seg_4");
        $query = $this->db->get();
        return $query->result();
    }

    public function result_coa_seg_5(){
        $this->db->from("tr_coa_seg_5");
        $query = $this->db->get();
        return $query->result();
    }

    public function result_coa_seg_6(){
        $this->db->from("tr_coa_seg_6");
        $query = $this->db->get();
        return $query->result();
    }

    public function result_coa_seg_7(){
        $this->db->from("tr_coa_seg_7");
        $query = $this->db->get();
        return $query->result();
    }

    public function result_coa_seg_8(){
        $this->db->from("tr_coa_seg_8_jns_layanan");
        $query = $this->db->get();
        return $query->result();
    }

    public function result_coa_seg_9(){
        $this->db->from("tr_coa_seg_9");
        $query = $this->db->get();
        return $query->result();
    }
	
	public function row_coa_seg_4(){
        $this->db->from("tr_coa_seg_4");
        $query = $this->db->get();
        return $query->row();
    }

    public function row_coa_seg_5(){
        $this->db->from("tr_coa_seg_5");
        $query = $this->db->get();
        return $query->row();
    }
    








    




    #------------------------------------

	public function cek_kode_kategori_alat($kode){
        $query = $this->db->query("SELECT * from tr_kategori_alat where KODE = '$kode' ");
        return $query->num_rows();
    }
        
    public function cari_id_kat_alat($id)
    {
        $query = $this->db->query("SELECT * from tr_kategori_alat where ID = '$id' ");
        return $query->result();
    }

	

	public function cari_agenda($no_agenda)
	{
		$this->dbx = $this->load->database('dbx', TRUE);
		$query = $this->dbx->query("SELECT * from tp_agenda where no_agenda = '$no_agenda' ");
		return $query->result();
	}

	public function get_list_no_panel()
	{
		$this->dbx = $this->load->database('dbx', TRUE);
		$query = $this->dbx->query("SELECT no_panel as id, no_panel as isi FROM tr_panel group by no_panel ");
		$dropdowns = $query->result();
		if(! $dropdowns){
			$finaldropdown[''] = " - Data panel - ";
			return $finaldropdown;
		}
		else{
			foreach ($dropdowns as $dropdown){
				$dropdownlist[$dropdown->id] = $dropdown->isi;
			}
			$finaldropdown = $dropdownlist;
			$finaldropdown[''] = " - Pilih panel - ";
			return $finaldropdown;
		}
	}



}
?>
