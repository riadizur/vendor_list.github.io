<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('monitoringm');
		$this->load->model('db_models');
		$this->load->library(array('PHPExcel', 'PHPExcel/IOFactory'));
		date_default_timezone_set('Asia/Jakarta');
	}

	public function cetak_daftar_perusahaan()
	{
		date_default_timezone_set('Asia/Jakarta');
		$sekarang = date('Y-m-d H:i:s');
		set_time_limit(0);

		$this->load->model("Cetakm");

		$kd_minat	= $this->uri->segment(3);
		$kd_prov = $this->uri->segment(4);
		$divisi = $this->uri->segment(5);
		$datas=array();
		//decode md5
		$minat = $this->db_models->result('tr_minat_pekerjaan',array());
		foreach($minat as $m){
			if(md5($m->kode)==$kd_minat){
				$kode_minat=$m->kode; 
				$nama_minat=' KELOMPOK MINAT '.strtoupper($m->nama); 
				break;
			}else{
				$kode_minat='0000';
				$nama_minat='SEMUA KELOMPOK MINAT';
			}
		}
		$prov = $this->db_models->result('tr_lokasi_prov',array());
		foreach($prov as $p){
			if(md5($p->nama)==$kd_prov){
				$kode_prov=$p->nama;
				$nama_prov=' DI AREA '.strtoupper($p->nama); 
				break;
			}else{
				$kode_prov='0000';
				$nama_prov=' DI SEMUA AREA';
			}
		}
		if($kode_minat=='0000'){
			if($kode_minat=='0000'){
				$hasil = $this->db_models->result('master_perusahaan',array());
			}else{
				$hasil = $this->db_models->result('master_perusahaan',array('prov'=>$kode_prov));
			}
			foreach ($hasil as $r) {
				$row = array();
				$row[] = $r->kode_register;
				$row[] = $r->nama_perusahaan;
				$row[] = $r->alamat.', '.$r->kec.', '.$r->kab.', '.$r->prov.', '.$r->kode_pos;
				$datas[] = $row;
			}
		}else{
			$pra_hasil = $this->db_models->result('master_minat_pekerjaan',array('kode_minat'=>$kode_minat));
			foreach($pra_hasil as $ph){
				$hasil=array();
				if($kode_prov=='0000'){
					$hasil= $this->db_models->result('master_perusahaan',array('kode_register'=>$ph->kode_register));
				}else{
					$pra_hasilx = $this->db_models->count('master_perusahaan',array('kode_register'=>$ph->kode_register,'prov'=>$kode_prov),'kode_register');
					if($pra_hasilx>0){
						$hasil= $this->db_models->result('master_perusahaan',array('kode_register'=>$ph->kode_register,'prov'=>$kode_prov),'kode_register');
					}
				}
				foreach($hasil as $r){
					$row = array();
					$row[] = $r->kode_register;
					$row[] = $r->nama_perusahaan;
					$row[] = $r->alamat.', '.$r->kec.', '.$r->kab.', '.$r->prov.', '.$r->kode_pos;
					$datas[] = $row;
				}
			}
		}

		$tahun	= date('Y');
		$bulan	= date('m');
		$cetak =1;
		$judul  = 'DAFTAR VENDOR PT. ENERGI PELABUHAN INDONESIA ';
		$judul_besar  = $judul . 'BULAN '.$bulan . ' TAHUN ' . $tahun;

		$data['judul']	= $judul;
		$data['tahun']	= $tahun;
		$data['bulan']	= $bulan;
		$data['minat'] = $nama_minat;
		$data['area'] = $nama_prov;
		$data['data']	= $datas;
		$Rpt = $this->load->view("laporan/cetak_daftar_perusahaan", $data,TRUE);

		$SenD["TitlE"]	= $judul_besar;
		$SenD["OutpuT"]	= $Rpt;
		$SenD["CetaK"]	= $cetak;
		$SenD["Kertas"]	= "A4-P";
		$SenD["tmargin"] = "10";
		$SenD["bmargin"] = "10";
		$this->load->view("laporan/Report", $SenD);
	}

	public function cetak_rkm_strategis()
	{
		date_default_timezone_set('Asia/Jakarta');
		$sekarang = date('Y-m-d H:i:s');
		set_time_limit(0);

		$this->load->model("Cetakm");

		$cetak	= $this->uri->segment(3);
		$cek_tahun = $this->uri->segment(4);
		$tipe = $this->uri->segment(5);

		if ($cek_tahun == 'x') {
			$tahun = $this->monitoringm->tahun_berjalan();
		} else {
			$tahun = $cek_tahun;
		}

		$query_data = $this->monitoringm->result_v_rkm_tab_register_list_tahun_strategis($tahun);

		$judul  = 'RKM STRATEGIS PT ENERGI PELABUHAN INDONESIA';
		$judul_besar  = $judul . ' ' . $tahun;

		$data['judul']	= $judul;
		$data['tahun']	= $tahun;
		$data['ttd']	= tanggal_ttd($sekarang);
		$data['data_ini']	= $query_data;
		$Rpt = $this->load->view("laporan/cetak_rkm_strategis", $data, TRUE);

		$SenD["TitlE"]	= $judul_besar;
		$SenD["OutpuT"]	= $Rpt;
		$SenD["CetaK"]	= $cetak;
		$SenD["Kertas"]	= "A4-L";
		$SenD["tmargin"] = "10";
		$SenD["bmargin"] = "10";
		$this->load->view("laporan/Report", $SenD);
	}

	public function cetak_rkm_strategis_word()
	{
		date_default_timezone_set('Asia/Jakarta');
		$sekarang = date('Y-m-d H:i:s');
		set_time_limit(0);

		$this->load->library('phpword');
		$this->load->model("Cetakm");

		$cek_tahun = $this->uri->segment(3);

		if ($cek_tahun == 'x') {
			$tahun = $this->monitoringm->tahun_berjalan();
		} else {
			$tahun = $cek_tahun;
		}

		$query_data = $this->monitoringm->result_v_rkm_tab_register_list_tahun_strategis($tahun);

		$judul  = 'RKM STRATEGIS PT ENERGI PELABUHAN INDONESIA';
		$judul_besar  = $judul . ' ' . $tahun;

		$data['judul']	= $judul;
		$data['tahun']	= $tahun;
		$data['ttd']	= tanggal_ttd($sekarang);
		$data['data_ini']	= $query_data;
		$Rpt = $this->load->view("laporan/cetak_rkm_strategis_word", $data, TRUE);

		$this->phpword->createDoc($Rpt, $judul_besar, 1);
	}

	public function cetak_rkm_strategis_excel()
	{
		date_default_timezone_set('Asia/Jakarta');
		$objPHPExcel    = new PHPExcel();
		$sekarang = date('Y-m-d H:i:s');

		$cek_tahun	= $this->uri->segment(3);

		if ($cek_tahun == 'x') {
			$tahun = $this->monitoringm->tahun_berjalan();
		} else {
			$tahun = $cek_tahun;
		}

		$style_header = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => true,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			)
		);

		$style_isi_kiri = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => false,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			)
		);

		$style_isi_tengah = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => false,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			)
		);

		$style_isi_kanan = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => false,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			),
			'numberformat' => array(
				'format' => PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED2
			),
		);

		$counter = 2;
		$ex = $objPHPExcel->setActiveSheetIndex(0);
		$ex->mergeCells('B' . $counter . ':K' . $counter);
		$ex->getStyle('B' . $counter . ':K' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('B' . $counter, 'RKM STRATEGIS PT ENERGI PELABUHAN INDONESIA TAHUN ' . $tahun);

		$counter = 4;
		$counter_next = $counter + 1;
		$ex = $objPHPExcel->setActiveSheetIndex(0);
		$ex->mergeCells('B' . $counter . ':B' . $counter_next);
		$ex->getStyle('B' . $counter . ':B' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('B' . $counter, 'NO');
		$ex->getColumnDimension('B')->setWidth(10);

		$ex->mergeCells('C' . $counter . ':C' . $counter_next);
		$ex->getStyle('C' . $counter . ':C' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('C' . $counter, 'TAHUN');
		$ex->getColumnDimension('C')->setWidth(10);

		$ex->mergeCells('D' . $counter . ':D' . $counter_next);
		$ex->getStyle('D' . $counter . ':D' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('D' . $counter, 'NO. REG. RKM');
		$ex->getColumnDimension('D')->setWidth(25);

		$ex->mergeCells('E' . $counter . ':E' . $counter_next);
		$ex->getStyle('E' . $counter . ':E' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('E' . $counter, 'DIVISI');
		$ex->getColumnDimension('E')->setWidth(30);

		$ex->mergeCells('F' . $counter . ':F' . $counter_next);
		$ex->getStyle('F' . $counter . ':F' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('F' . $counter, 'RENCANA PROGRAM');
		$ex->getColumnDimension('F')->setWidth(50);

		$ex->mergeCells('G' . $counter . ':G' . $counter_next);
		$ex->getStyle('G' . $counter . ':G' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('G' . $counter, 'OUTPUT PROGRAM');
		$ex->getColumnDimension('G')->setWidth(50);

		$ex->mergeCells('H' . $counter . ':I' . $counter);
		$ex->getStyle('H' . $counter . ':I' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('H' . $counter, 'TARGET');

		$ex->getStyle('H' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('H' . $counter_next, 'AWAL');
		$ex->getColumnDimension('H')->setWidth(15);

		$ex->getStyle('I' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('I' . $counter_next, 'AKHIR');
		$ex->getColumnDimension('I')->setWidth(15);

		$ex->mergeCells('J' . $counter . ':J' . $counter_next);
		$ex->getStyle('J' . $counter . ':J' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('J' . $counter, 'PROGRES TERAKHIR');
		$ex->getColumnDimension('J')->setWidth(30);

		$ex->mergeCells('K' . $counter . ':K' . $counter_next);
		$ex->getStyle('K' . $counter . ':K' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('K' . $counter, 'STATUS');
		$ex->getColumnDimension('K')->setWidth(15);

		$ex = $objPHPExcel->setActiveSheetIndex(0);
		$baris = 6;
		$hasil = $this->monitoringm->result_v_rkm_tab_register_list_tahun_strategis($tahun);
		foreach ($hasil as $row) :
			$ex->getStyle('B' . $baris)->applyFromArray($style_isi_tengah);
			$ex->setCellValue('B' . $baris, $baris - 5);
			$ex->getStyle('C' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('C' . $baris, $row->tahun);
			$ex->getStyle('D' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('D' . $baris, $row->no_register_rkm);
			$ex->getStyle('E' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('E' . $baris, $row->divisi);
			$ex->getStyle('F' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('F' . $baris, $row->rencana_program);
			$ex->getStyle('G' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('G' . $baris, $row->output_program);
			$ex->getStyle('F' . $baris . ':G' . $baris)->getAlignment()->setWrapText(true);
			$ex->getStyle('H' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('H' . $baris, $row->target_awal);
			$ex->getStyle('I' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('I' . $baris, $row->target_akhir);
			$ex->getStyle('J' . $baris)->applyFromArray($style_isi_tengah);
			$ex->setCellValue('J' . $baris, $row->tahapan_real_last);
			$ex->getStyle('K' . $baris)->applyFromArray($style_isi_tengah);
			$ex->setCellValue('K' . $baris, ($row->realisasi_bobot == '100') ? 'Selesai' : 'Belum');

			$baris = $baris + 1;
		endforeach;

		$objPHPExcel->getProperties()->setCreator("AMANRISIKO")
			->setLastModifiedBy("AMANRISIKO")
			->setTitle("Laporan RKM")
			->setSubject("Laporan RKM")
			->setDescription("Laporan RKM by EPI")
			->setKeywords("office 2007 openxml php")
			->setCategory("INFORMASI");
		$objPHPExcel->getActiveSheet()->setTitle('Laporan RKM');
		$TitlE 		= "Laporan RKM STRATEGIS PT EPI";
		$namafile	= str_replace(' ', '_', $TitlE);
		$objWriter  = IOFactory::createWriter($objPHPExcel, 'Excel2007');
		header('Last-Modified:' . gmdate("D, d M Y H:i:s") . 'GMT');
		header('Chace-Control: no-store, no-cache, must-revalation');
		header('Chace-Control: post-check=0, pre-check=0', FALSE);
		header('Pragma: no-cache');
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="' . $namafile . '.xlsx"');

		$objWriter->save('php://output');
	}

	//-----------------------------------------

	public function cetak_survei()
	{
		date_default_timezone_set('Asia/Jakarta');
		$sekarang = date('Y-m-d H:i:s');
		set_time_limit(0);

		$this->load->model("Cetakm");

		$cetak	= $this->uri->segment(3);
		$no_agenda = $this->uri->segment(4);

		$query_tp_agenda_row = $this->approvalm->cari_agenda_row($no_agenda);
		$query_tp_rab_row = $this->approvalm->cari_agenda_rab_row($no_agenda);
		$query_tp_rab_detil_result = $this->approvalm->cari_agenda_rab_detil_result($no_agenda);
		$query_tr_area_row = $this->approvalm->cari_tr_area_row($query_tp_agenda_row->KD_AREA);
		$query_tr_kab_row = $this->approvalm->cari_tr_kab_row($query_tp_agenda_row->KOTA_LANG);
		$query_tr_prov_row = $this->approvalm->cari_tr_prov_row($query_tp_agenda_row->PROV_LANG);

		if ($query_tp_agenda_row->ID_LANG != '0') {
			$query_dil_row = $this->approvalm->dil_listrik_ref_row($query_tp_agenda_row->ID_LANG);
		} else {
			$query_dil_row = [];
		}

		$data['dtar']	= $query_tp_agenda_row;
		$data['dtrr']	= $query_tp_rab_row;
		$data['dtrdr']	= $query_tp_rab_detil_result;
		$data['datar']	= $query_tr_area_row;
		$data['dtkr']	= $query_tr_kab_row;
		$data['dtpr']	= $query_tr_prov_row;
		$data['ddil']	= $query_dil_row;
		$data['tanggal']	= tanggal_ttd($sekarang);
		$Rpt = $this->load->view("laporan/cetak_survei", $data, TRUE);

		$SenD["TitlE"]	= $judul;
		$SenD["OutpuT"]	= $Rpt;
		$SenD["CetaK"]	= $cetak;
		$SenD["Kertas"]	= "A4-P";
		$SenD["tmargin"] = "5";
		$SenD["bmargin"] = "5";
		$this->load->view("laporan/Report", $SenD);
	}

	public function excel_rkm_ke_ipc()
	{
		date_default_timezone_set('Asia/Jakarta');
		$objPHPExcel    = new PHPExcel();
		$sekarang = date('Y-m-d H:i:s');

		$tahun	= $this->uri->segment(3);

		$style_header = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => true,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			)
		);

		$style_isi_kiri = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => false,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			)
		);

		$style_isi_tengah = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => false,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			)
		);

		$style_isi_kanan = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => false,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			),
			'numberformat' => array(
				'format' => PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED2
			),
		);

		$counter = 2;
		$ex = $objPHPExcel->setActiveSheetIndex(0);
		$ex->mergeCells('B' . $counter . ':D' . $counter);
		$ex->getStyle('B' . $counter . ':D' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('B' . $counter, 'Data Anak Perusahaan');

		$ex->getStyle('B3')->applyFromArray($style_isi_kiri);
		$ex->setCellValue('B3', 'Nama :');
		$ex->mergeCells('C3:D3');
		$ex->getStyle('C3:D3')->applyFromArray($style_isi_kiri);
		$ex->setCellValue('C3', 'PT Energi Pelabuhan Indonesia');

		$ex->getStyle('B4')->applyFromArray($style_isi_kiri);
		$ex->setCellValue('B4', 'Sing :');
		$ex->mergeCells('C4:D4');
		$ex->getStyle('C4:D4')->applyFromArray($style_isi_kiri);
		$ex->setCellValue('C4', 'EPI');

		$ex->getStyle('B5')->applyFromArray($style_isi_kiri);
		$ex->setCellValue('B5', 'Jenis :');
		$ex->mergeCells('C5:D5');
		$ex->getStyle('C5:D5')->applyFromArray($style_isi_kiri);
		$ex->setCellValue('C5', 'Bisnis Pendukung');

		$counter = 7;
		$counter_next = $counter + 1;
		$ex = $objPHPExcel->setActiveSheetIndex(0);
		$ex->mergeCells('B' . $counter . ':B' . $counter_next);
		$ex->getStyle('B' . $counter . ':B' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('B' . $counter, 'No');

		$ex->mergeCells('C' . $counter . ':C' . $counter_next);
		$ex->getStyle('C' . $counter . ':C' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('C' . $counter, 'Kode RKM');

		$ex->mergeCells('D' . $counter . ':D' . $counter_next);
		$ex->getStyle('D' . $counter . ':D' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('D' . $counter, 'Key Performance Indicator');

		$ex->mergeCells('E' . $counter . ':F' . $counter);
		$ex->getStyle('E' . $counter . ':F' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('E' . $counter, 'Corporate Roadmap');

		$ex->getStyle('E' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('E' . $counter_next, 'Strategi Perusahaan');

		$ex->getStyle('F' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('F' . $counter_next, 'Insiatif Strategis');

		$ex->mergeCells('G' . $counter . ':G' . $counter_next);
		$ex->getStyle('G' . $counter . ':G' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('G' . $counter, 'Rencana Program');

		$ex->mergeCells('H' . $counter . ':H' . $counter_next);
		$ex->getStyle('H' . $counter . ':H' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('H' . $counter, 'Tahapan & Deliverable');

		$ex->mergeCells('I' . $counter . ':I' . $counter_next);
		$ex->getStyle('I' . $counter . ':I' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('I' . $counter, 'Output Program');

		$ex->mergeCells('J' . $counter . ':K' . $counter);
		$ex->getStyle('J' . $counter . ':K' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('J' . $counter, 'Mulai');

		$ex->getStyle('J' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('J' . $counter_next, 'Bulan');

		$ex->getStyle('K' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('K' . $counter_next, 'Tahun');

		$ex->mergeCells('L' . $counter . ':M' . $counter);
		$ex->getStyle('L' . $counter . ':M' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('L' . $counter, 'Akhir');

		$ex->getStyle('L' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('L' . $counter_next, 'Bulan');

		$ex->getStyle('M' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('M' . $counter_next, 'Tahun');

		$ex->mergeCells('N' . $counter . ':N' . $counter_next);
		$ex->getStyle('N' . $counter . ':N' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('N' . $counter, 'Project Owner (Direktorat)');

		$ex->mergeCells('O' . $counter . ':T' . $counter);
		$ex->getStyle('O' . $counter . ':T' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('O' . $counter, 'Keterkaitan Stakeholder Internal PT Energi Pelabuhan Indonesia (EPI)');

		$ex->getStyle('O' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('O' . $counter_next, 'Stakeholder 1 (Direktorat)');

		$ex->getStyle('P' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('P' . $counter_next, 'Peran');

		$ex->getStyle('Q' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('Q' . $counter_next, 'Stakeholder 2 (Direktorat)');

		$ex->getStyle('R' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('R' . $counter_next, 'Peran');

		$ex->getStyle('S' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('S' . $counter_next, 'Stakeholder 3 (Direktorat)');

		$ex->getStyle('T' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('T' . $counter_next, 'Peran');

		$ex->mergeCells('U' . $counter . ':X' . $counter);
		$ex->getStyle('U' . $counter . ':X' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('U' . $counter, 'Keterkaitan Stakeholder Kantor Pusat');

		$ex->getStyle('U' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('U' . $counter_next, 'Stakeholder 1 ');

		$ex->getStyle('V' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('V' . $counter_next, 'Peran');

		$ex->getStyle('W' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('W' . $counter_next, 'Stakeholder 2 ');

		$ex->getStyle('X' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('X' . $counter_next, 'Peran');

		$ex->mergeCells('Y' . $counter . ':AB' . $counter);
		$ex->getStyle('Y' . $counter . ':AB' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('Y' . $counter, 'Keterkaitan Stakeholder Cabang Pelabuhan');

		$ex->getStyle('Y' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('Y' . $counter_next, 'Stakeholder 1 ');

		$ex->getStyle('Z' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('Z' . $counter_next, 'Peran');

		$ex->getStyle('AA' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('AA' . $counter_next, 'Stakeholder 2 ');

		$ex->getStyle('AB' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('AB' . $counter_next, 'Peran');

		$ex->mergeCells('AC' . $counter . ':AJ' . $counter);
		$ex->getStyle('AC' . $counter . ':AJ' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('AC' . $counter, 'Perkiraan Anggaran (Ribu)');

		$ex->getStyle('AC' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('AC' . $counter_next, 'Investasi');

		$ex->getStyle('AD' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('AD' . $counter_next, 'SPPD');

		$ex->getStyle('AE' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('AE' . $counter_next, 'Pelatihan');

		$ex->getStyle('AF' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('AF' . $counter_next, 'Konsultan');

		$ex->getStyle('AG' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('AG' . $counter_next, 'Jamuan Rapat');

		$ex->getStyle('AH' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('AH' . $counter_next, 'Kertas dan Alat-Alat Tulis');

		$ex->getStyle('AI' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('AI' . $counter_next, 'Rumah Tangga');

		$ex->getStyle('AJ' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('AJ' . $counter_next, 'Lain- Lain');

		$ex->mergeCells('AK' . $counter . ':AO' . $counter);
		$ex->getStyle('AK' . $counter . ':AO' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('AK' . $counter, 'Perkiraan Pendapatan (Ribu)');

		$ex->getStyle('AK' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('AK' . $counter_next, '2020');

		$ex->getStyle('AL' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('AL' . $counter_next, '2021');

		$ex->getStyle('AM' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('AM' . $counter_next, '2022');

		$ex->getStyle('AN' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('AN' . $counter_next, '2023');

		$ex->getStyle('AO' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('AO' . $counter_next, '2024');


		$ex = $objPHPExcel->setActiveSheetIndex(0);
		$baris = 9;
		$sql = "SELECT * from v_laporan_rkm_ke_ipc where tahun = '$tahun' order by no_urut asc";
		$hasil = $this->db->query($sql)->result();
		foreach ($hasil as $row) :
			$ex->getStyle('B' . $baris)->applyFromArray($style_isi_tengah);
			$ex->setCellValue('B' . $baris, $baris - 8);
			$ex->getStyle('C' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('C' . $baris, $row->kode_rkm);
			$ex->getStyle('D' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('D' . $baris, $row->ket_kpi);
			$ex->getStyle('E' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('E' . $baris, $row->ket_strategi_ipc);
			$ex->getStyle('F' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('F' . $baris, $row->ket_inisiatif);
			$ex->getStyle('G' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('G' . $baris, $row->rencana_program);
			$ex->getStyle('H' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('H' . $baris, $row->tahapan);
			$ex->getStyle('I' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('I' . $baris, $row->output_program);
			$ex->getStyle('J' . $baris)->applyFromArray($style_isi_tengah);
			$ex->setCellValue('J' . $baris, $row->mulai_bln);
			$ex->getStyle('K' . $baris)->applyFromArray($style_isi_tengah);
			$ex->setCellValue('K' . $baris, $row->mulai_thn);
			$ex->getStyle('L' . $baris)->applyFromArray($style_isi_tengah);
			$ex->setCellValue('L' . $baris, $row->akhir_bln);
			$ex->getStyle('M' . $baris)->applyFromArray($style_isi_tengah);
			$ex->setCellValue('M' . $baris, $row->akhir_thn);
			$ex->getStyle('N' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('N' . $baris, $row->project_owner);
			$ex->getStyle('O' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('O' . $baris, $row->epi_1);
			$ex->getStyle('P' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('P' . $baris, $row->epi_1_peran);
			$ex->getStyle('Q' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('Q' . $baris, $row->epi_2);
			$ex->getStyle('R' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('R' . $baris, $row->epi_2_peran);
			$ex->getStyle('S' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('S' . $baris, $row->epi_3);
			$ex->getStyle('T' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('T' . $baris, $row->epi_3_peran);
			$ex->getStyle('U' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('U' . $baris, $row->ipc_1);
			$ex->getStyle('V' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('V' . $baris, $row->ipc_1_peran);
			$ex->getStyle('W' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('W' . $baris, $row->ipc_2);
			$ex->getStyle('X' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('X' . $baris, $row->ipc_2_peran);
			$ex->getStyle('Y' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('Y' . $baris, $row->cabang_1);
			$ex->getStyle('Z' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('Z' . $baris, $row->cabang_1_peran);
			$ex->getStyle('AA' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('AA' . $baris, $row->cabang_2);
			$ex->getStyle('AB' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('AB' . $baris, $row->cabang_2_peran);
			$ex->getStyle('AC' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('AC' . $baris, $row->investasi);
			$ex->getStyle('AD' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('AD' . $baris, $row->sppd);
			$ex->getStyle('AE' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('AE' . $baris, $row->pelatihan);
			$ex->getStyle('AF' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('AF' . $baris, $row->konsultan);
			$ex->getStyle('AG' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('AG' . $baris, $row->jamuan_rapat);
			$ex->getStyle('AH' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('AH' . $baris, $row->atk);
			$ex->getStyle('AI' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('AI' . $baris, $row->rt);
			$ex->getStyle('AJ' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('AJ' . $baris, $row->lain2);
			$ex->getStyle('AK' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('AK' . $baris, $row->pendapatan_2020);
			$ex->getStyle('AL' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('AL' . $baris, '0');
			$ex->getStyle('AM' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('AM' . $baris, '0');
			$ex->getStyle('AN' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('AN' . $baris, '0');
			$ex->getStyle('AO' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('AO' . $baris, '0');

			$baris = $baris + 1;
		endforeach;

		$ex->getStyle('E4:H10')->getNumberFormat()->setFormatCode('#,##0');
		$ex->getStyle('I4:K10')->getNumberFormat()->setFormatCode('#,##0.00');

		$objPHPExcel->getProperties()->setCreator("AMANRISIKO")
			->setLastModifiedBy("AMANRISIKO")
			->setTitle("Laporan RKM")
			->setSubject("Laporan RKM")
			->setDescription("Laporan RKM by EPI")
			->setKeywords("office 2007 openxml php")
			->setCategory("INFORMASI");
		$objPHPExcel->getActiveSheet()->setTitle('Laporan RKM');
		$TitlE 		= "Laporan RKM ke IPC";
		$namafile	= str_replace(' ', '_', $TitlE);
		$objWriter  = IOFactory::createWriter($objPHPExcel, 'Excel2007');
		header('Last-Modified:' . gmdate("D, d M Y H:i:s") . 'GMT');
		header('Chace-Control: no-store, no-cache, must-revalation');
		header('Chace-Control: post-check=0, pre-check=0', FALSE);
		header('Pragma: no-cache');
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="' . $namafile . '.xlsx"');

		$objWriter->save('php://output');
	}

	public function export_excel_rcsa()
	{
		date_default_timezone_set('Asia/Jakarta');
		$objPHPExcel    = new PHPExcel();
		$sekarang = date('Y-m-d H:i:s');

		$this->load->model("monitoringm");

		$bulan	= $this->uri->segment(3);
		$cek_bulan	= $this->uri->segment(3);
		$cek_divisi	= $this->uri->segment(4);
		$tahun = substr($bulan, 0, 4);

		$style_header = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => true,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			)
		);

		$style_isi_kiri = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => false,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			)
		);

		$style_isi_tengah = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => false,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			)
		);

		$style_isi_kanan = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => false,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			),
			'numberformat' => array(
				'format' => PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED2
			),
		);

		$ex = $objPHPExcel->setActiveSheetIndex(0);

		$ex->mergeCells('B2:H2');
		$ex->getStyle('B2:H2')->applyFromArray($style_isi_kiri);
		$ex->setCellValue('B2', 'KERTAS KERJA RISK & CONTROL SELF ASSESSMENT (RCSA) TAHUN ' . $tahun);

		$ex->mergeCells('B3:H3');
		$ex->getStyle('B3:H3')->applyFromArray($style_isi_kiri);
		$ex->setCellValue('B3', 'PT ENERGI PELABUHAN INDONESIA');

		#---------------
		$ex->mergeCells('B5:N5');
		$ex->getStyle('B5:N5')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('B5', 'IDENTIFIKASI RISIKO');
		$ex->mergeCells('O5:T5');
		$ex->getStyle('O5:T5')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('O5', 'ANALISIS RISIKO');
		$ex->mergeCells('U5:AD5');
		$ex->getStyle('U5:AD5')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('U5', 'RENCANA PENANGANAN RISIKO');
		$ex->mergeCells('AE5:AI5');
		$ex->getStyle('AE5:AI5')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('AE5', 'MONITORING RISIKO');

		#---------------
		$ex->mergeCells('B6:B7');
		$ex->getStyle('B6:B7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('B6', 'No. Reg.');

		$ex->mergeCells('C6:D6');
		$ex->getStyle('C6:D6')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('C6', 'Pemangku Risiko');
		$ex->getStyle('C7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('C7', 'Direktur');
		$ex->getStyle('D7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('D7', 'PIC');

		$ex->mergeCells('E6:E7');
		$ex->getStyle('E6:E7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('E6', 'Sasaran Strategis');

		$ex->mergeCells('F6:F7');
		$ex->getStyle('F6:F7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('F6', 'KPI');

		$ex->mergeCells('G6:G7');
		$ex->getStyle('G6:G7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('G6', 'Klasifikasi Risiko');

		$ex->mergeCells('H6:H7');
		$ex->getStyle('H6:H7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('H6', 'Detail Risiko');

		$ex->mergeCells('I6:I7');
		$ex->getStyle('I6:I7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('I6', 'Penyebab Risiko');

		$ex->mergeCells('J6:J7');
		$ex->getStyle('J6:J7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('J6', 'Dampak Risiko');

		$ex->mergeCells('K6:K7');
		$ex->getStyle('K6:K7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('K6', 'Tipe Dampak');

		$ex->mergeCells('L6:N6');
		$ex->getStyle('L6:N6')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('L6', 'Pengukuran Risiko Inherent');
		$ex->getStyle('L7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('L7', 'Indeks Dampak');
		$ex->getStyle('M7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('M7', 'Indeks Kemungkinan');
		$ex->getStyle('N7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('N7', 'Tingkat Risiko');

		$ex->mergeCells('O6:O7');
		$ex->getStyle('O6:O7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('O6', 'Aktivitas Kontrol');

		$ex->mergeCells('P6:P7');
		$ex->getStyle('P6:P7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('P6', 'Pemilik Kontrol');

		$ex->mergeCells('Q6:Q7');
		$ex->getStyle('Q6:Q7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('Q6', 'Penilaian Efektifitas Kontrol');

		$ex->mergeCells('R6:T6');
		$ex->getStyle('R6:T6')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('R6', 'Pengukuran Risiko Residual');
		$ex->getStyle('R7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('R7', 'Indeks Dampak');
		$ex->getStyle('S7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('S7', 'Indeks Kemungkinan');
		$ex->getStyle('T7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('T7', 'Tingkat Risiko');

		$ex->mergeCells('U6:U7');
		$ex->getStyle('U6:U7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('U6', 'No');

		$ex->mergeCells('V6:V7');
		$ex->getStyle('V6:V7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('V6', 'Perlakukan Risiko');

		$ex->mergeCells('W6:X6');
		$ex->getStyle('W6:X6')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('W6', 'Penanganan Risiko');
		$ex->getStyle('W7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('W7', 'Inisiatif Strategis');
		$ex->getStyle('X7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('X7', 'Rencana Kerja Manajemen');

		$ex->mergeCells('Y6:Y7');
		$ex->getStyle('Y6:Y7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('Y6', 'Waktu Pelaksanaan');

		$ex->mergeCells('Z6:Z7');
		$ex->getStyle('Z6:Z7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('Z6', 'Unit Terkait');

		$ex->mergeCells('AA6:AA7');
		$ex->getStyle('AA6:AA7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('AA6', 'Perkiraan Biaya');

		$ex->mergeCells('AB6:AD6');
		$ex->getStyle('AB6:AD6')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('AB6', 'Target Nilai Risiko');
		$ex->getStyle('AB7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('AB7', 'Indeks Dampak');
		$ex->getStyle('AC7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('AC7', 'Indeks Kemungkinan');
		$ex->getStyle('AD7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('AD7', 'Tingkat Risiko');

		$ex->mergeCells('AE6:AE7');
		$ex->getStyle('AE6:AE7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('AE6', 'Realisasi Tindakan Penanganan Risiko');

		$ex->mergeCells('AF6:AF7');
		$ex->getStyle('AF6:AF7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('AF6', 'Keterangan Tambahan');

		$ex->mergeCells('AG6:AI6');
		$ex->getStyle('AG6:AI6')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('AG6', 'Pengukuran Ulang Risiko');
		$ex->getStyle('AG7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('AG7', 'Indeks Dampak');
		$ex->getStyle('AH7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('AH7', 'Indeks Kemungkinan');
		$ex->getStyle('AI7')->applyFromArray($style_isi_tengah);
		$ex->setCellValue('AI7', 'Tingkat Risiko');

		$ex = $objPHPExcel->setActiveSheetIndex(0);
		$baris = 8;

		if (empty($cek_bulan)) {
			$thbl = $this->monitoringm->row_v_monitoring_rkm_thbl_last();
		} else {
			$thbl = $cek_bulan;
		}

		if (empty($cek_divisi)) {
			$divisi = 'all';
		} else {
			$divisi = $cek_divisi;
		}

		$hasil = $this->monitoringm->result_mr_tab_renc_penanganan_thbl_dvisi($thbl, $divisi);
		foreach ($hasil as $row) :
			$ex->getStyle('B' . $baris)->applyFromArray($style_isi_tengah);
			$ex->setCellValue('B' . $baris, $row->no_register);
			$ex->getStyle('C' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('C' . $baris, 'Direktur ' . $this->monitoringm->row_rkm_ref_direktorat_kode_dir($row->direktorat, 'direktorat'));
			$ex->getStyle('D' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('D' . $baris, 'Divisi ' . $this->monitoringm->row_rkm_ref_divisi_kode_div($row->divisi, 'divisi'));
			$ex->getStyle('E' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('E' . $baris, $this->monitoringm->row_mr_ref_strategi_persh_ipc_kode($row->sasaran_strategis_ipc, 'strategi'));
			$ex->getStyle('F' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('F' . $baris, $this->monitoringm->row_mr_ref_kpi_kode_kpi($row->kpi, 'KPI'));
			$ex->getStyle('G' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('G' . $baris, $this->monitoringm->row_mr_ref_klasifikasi_sub_kode_subkl($row->klasifikasi, 'sub_klasifikasi'));
			$ex->getStyle('H' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('H' . $baris, $row->detail_resiko);
			$ex->getStyle('I' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('I' . $baris, $row->penyebab_resiko);
			$ex->getStyle('J' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('J' . $baris, $row->dampak_resiko);
			$ex->getStyle('K' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('K' . $baris, $this->monitoringm->row_mr_ref_dampak_kel_kode_dp($row->tipe_dampak, 'tipe_dp'));
			$ex->getStyle('L' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('L' . $baris, $this->monitoringm->row_mr_ref_dampak_kriteria_gab_kode_kdp($row->indeks_dampak, 'bobot_kdp'));
			$ex->getStyle('M' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('M' . $baris, $this->monitoringm->row_mr_ref_kemungkinan_gab_kode_km($row->indeks_kemungkinan, 'bobot_km'));
			$ex->getStyle('N' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('N' . $baris, $this->monitoringm->mr_ref_tingkat_dan_respon_teks($row->tingkat_risk_inherent));
			$ex->getStyle('O' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('O' . $baris, $row->aktifitas_kontrol);
			$ex->getStyle('P' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('P' . $baris, 'Divisi ' . $this->monitoringm->row_rkm_ref_divisi_kode_div($row->pemilik_kontrol, 'divisi'));
			$ex->getStyle('Q' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('Q' . $baris, $this->monitoringm->row_mr_ref_efektifitas_kontrol_kode($row->efektifitas_kontrol, 'kriteria'));
			$ex->getStyle('R' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('R' . $baris, $this->monitoringm->row_mr_ref_dampak_kriteria_gab_kode_kdp($row->indeks_dampak_residual, 'bobot_kdp'));
			$ex->getStyle('S' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('S' . $baris, $this->monitoringm->row_mr_ref_kemungkinan_gab_kode_km($row->indeks_kemungkinan_residual, 'bobot_km'));
			$ex->getStyle('T' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('T' . $baris, $this->monitoringm->mr_ref_tingkat_dan_respon_teks($row->tingkat_resiko_residual));
			$ex->getStyle('U' . $baris)->applyFromArray($style_isi_tengah);
			$ex->setCellValue('U' . $baris, $baris - 7);
			$ex->getStyle('V' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('V' . $baris, $this->monitoringm->row_mr_ref_perlakuan_risk_kode($row->perlakuan, 'perlakuan'));
			$ex->getStyle('W' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('W' . $baris, $this->monitoringm->row_mr_ref_strategi_persh_epi_kode($row->inisiatif_strategis, 'inisiatif'));
			$ex->getStyle('X' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('X' . $baris, $row->uraian);
			$ex->getStyle('Y' . $baris)->applyFromArray($style_isi_tengah);
			$ex->setCellValue('Y' . $baris, ($row->rencana_awal == $row->rencana_akhir) ? tanggal_ttd_2($row->rencana_awal) : tanggal_ttd_2($row->rencana_awal) . ' s/d ' . tanggal_ttd_2($row->rencana_akhir));
			$ex->getStyle('Z' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('Z' . $baris, $this->monitoringm->detil_unit_terkait($row->unit_terkait));
			$ex->getStyle('AA' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('AA' . $baris, number_format($row->perkiraan_biaya));
			$ex->getStyle('AB' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('AB' . $baris, $this->monitoringm->row_mr_ref_dampak_kriteria_gab_kode_kdp($row->indeks_dampak_target, 'bobot_kdp'));
			$ex->getStyle('AC' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('AC' . $baris, $this->monitoringm->row_mr_ref_kemungkinan_gab_kode_km($row->indeks_kemungkinan_target, 'bobot_km'));
			$ex->getStyle('AD' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('AD' . $baris, $this->monitoringm->mr_ref_tingkat_dan_respon_teks($row->tingkat_resiko_target));
			$ex->getStyle('AE' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('AE' . $baris, $row->realisasi_tindakan);
			$ex->getStyle('AF' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('AF' . $baris, $row->ket_tambahan);
			$ex->getStyle('AG' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('AG' . $baris, ($row->status_realisasi == 'SELESAI') ? $this->monitoringm->row_mr_ref_dampak_kriteria_gab_kode_kdp($row->indeks_dampak_target, 'bobot_kdp') : $this->monitoringm->row_mr_ref_dampak_kriteria_gab_kode_kdp($row->indeks_dampak, 'bobot_kdp'));
			$ex->getStyle('AH' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('AH' . $baris, ($row->status_realisasi == 'SELESAI') ?  $this->monitoringm->row_mr_ref_kemungkinan_gab_kode_km($row->indeks_kemungkinan_target, 'bobot_km') : $this->monitoringm->row_mr_ref_kemungkinan_gab_kode_km($row->indeks_kemungkinan, 'bobot_km'));
			$ex->getStyle('AI' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('AI' . $baris, ($row->status_realisasi == 'SELESAI') ?  $this->monitoringm->mr_ref_tingkat_dan_respon_teks($row->tingkat_resiko_target) : $this->monitoringm->mr_ref_tingkat_dan_respon_teks($row->tingkat_risk_inherent));


			$baris = $baris + 1;
		endforeach;

		$ex->getStyle('E4:H10')->getNumberFormat()->setFormatCode('#,##0');
		$ex->getStyle('I4:K10')->getNumberFormat()->setFormatCode('#,##0.00');

		$objPHPExcel->getProperties()->setCreator("AMANRISIKO")
			->setLastModifiedBy("AMANRISIKO")
			->setTitle("Laporan RCSA")
			->setSubject("Laporan RCSA")
			->setDescription("Laporan RCSA by EPI")
			->setKeywords("office 2007 openxml php")
			->setCategory("INFORMASI");
		$objPHPExcel->getActiveSheet()->setTitle('Laporan RCSA');
		$TitlE 		= "Laporan RCSA ke IPC " . $thbl;
		$namafile	= str_replace(' ', '_', $TitlE);
		$objWriter  = IOFactory::createWriter($objPHPExcel, 'Excel2007');
		header('Last-Modified:' . gmdate("D, d M Y H:i:s") . 'GMT');
		header('Chace-Control: no-store, no-cache, must-revalation');
		header('Chace-Control: post-check=0, pre-check=0', FALSE);
		header('Pragma: no-cache');
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="' . $namafile . '.xlsx"');

		$objWriter->save('php://output');
	}

	public function export_pdf_rcsa()
	{
		date_default_timezone_set('Asia/Jakarta');
		$sekarang = date('Y-m-d H:i:s');
		set_time_limit(0);

		$this->load->model("Cetakm");
		$this->load->model("monitoringm");

		//http://183.91.85.163:88/aseos/laporan/cetak_survei/1/882010121903280462

		$cetak	= $this->uri->segment(3);
		$bulan	= $this->uri->segment(4);
		$cek_bulan	= $this->uri->segment(4);
		$cek_divisi	= $this->uri->segment(5);
		$tahun = substr($bulan, 0, 4);

		if (empty($cek_bulan)) {
			$thbl = $this->monitoringm->row_v_monitoring_rkm_thbl_last();
		} else {
			$thbl = $cek_bulan;
		}

		if (empty($cek_divisi)) {
			$divisi = 'all';
		} else {
			$divisi = $cek_divisi;
		}

		$query_data = $this->monitoringm->result_mr_tab_renc_penanganan_thbl_dvisi($thbl, $divisi);

		$tahun	= substr($thbl, 0, 4);
		$bulan	= strtoupper(getBulan(substr($thbl, 4, 2)));
		$judul  = 'KERTAS KERJA RISK & CONTROL SELF ASSESSMENT (RCSA) TAHUN ' . $tahun;
		$judul_besar  = 'Laporan RCSA sampai ' . $thbl;

		$data['judul']	= $judul;
		$data['tahun']	= $tahun;
		$data['ttd']	= tanggal_ttd($sekarang);
		$data['bln']	= strtoupper(getBln(substr($thbl, 4, 2)));
		$data['data_ini']	= $query_data;
		$Rpt = $this->load->view("laporan/cetak_rcsa", $data, TRUE);

		$SenD["TitlE"]	= $judul_besar;
		$SenD["OutpuT"]	= $Rpt;
		$SenD["CetaK"]	= $cetak;
		$SenD["Kertas"]	= "A3-L";
		$SenD["tmargin"] = "10";
		$SenD["bmargin"] = "10";
		$this->load->view("laporan/Report", $SenD);
	}

	public function cetak_rkm_all_pdf()
	{
		date_default_timezone_set('Asia/Jakarta');
		$sekarang = date('Y-m-d H:i:s');
		set_time_limit(0);

		$this->load->model("Cetakm");

		$cetak	= $this->uri->segment(3);
		$cek_tahun = $this->uri->segment(4);
		$cek_divisi = $this->uri->segment(5);

		if ($cek_tahun == 'x') {
			$tahun = $this->monitoringm->tahun_berjalan();
		} else {
			$tahun = $cek_tahun;
		}

		if ($cek_divisi == 'x') {
			$divisi = 'all';
		} else {
			$divisi = $cek_divisi;
		}

		$query_data = $this->monitoringm->result_v_rkm_tab_register_list_tahun_divisi($tahun, $divisi);

		$judul  = 'RKM PT ENERGI PELABUHAN INDONESIA';
		$judul_besar  = $judul . ' ' . $tahun;

		$data['judul']	= $judul;
		$data['tahun']	= $tahun;
		$data['ttd']	= tanggal_ttd($sekarang);
		$data['data_ini']	= $query_data;
		$Rpt = $this->load->view("laporan/cetak_rkm_all_pdf", $data, TRUE);

		$SenD["TitlE"]	= $judul_besar;
		$SenD["OutpuT"]	= $Rpt;
		$SenD["CetaK"]	= $cetak;
		$SenD["Kertas"]	= "A4-L";
		$SenD["tmargin"] = "10";
		$SenD["bmargin"] = "10";
		$this->load->view("laporan/Report", $SenD);
	}

	public function cetak_rkm_all_word()
	{
		date_default_timezone_set('Asia/Jakarta');
		$sekarang = date('Y-m-d H:i:s');
		set_time_limit(0);

		$this->load->library('phpword');
		#$this->load->model("Cetakm");

		$cek_tahun = $this->uri->segment(3);
		$cek_divisi = $this->uri->segment(4);

		if ($cek_tahun == 'x') {
			$tahun = $this->monitoringm->tahun_berjalan();
		} else {
			$tahun = $cek_tahun;
		}

		if ($cek_divisi == 'x') {
			$divisi = 'all';
		} else {
			$divisi = $cek_divisi;
		}

		$query_data = $this->monitoringm->result_v_rkm_tab_register_list_tahun_divisi($tahun, $divisi);

		$judul  = 'RKM PT ENERGI PELABUHAN INDONESIA';
		$judul_besar  = $judul . ' ' . $tahun;

		$data['judul']	= $judul;
		$data['tahun']	= $tahun;
		$data['ttd']	= tanggal_ttd($sekarang);
		$data['data_ini']	= $query_data;
		$Rpt = $this->load->view("laporan/cetak_rkm_all_pdf", $data, TRUE);

		$this->phpword->createDoc($Rpt, $judul_besar, 1);
	}

	public function cetak_rkm_all_excel()
	{
		date_default_timezone_set('Asia/Jakarta');
		$objPHPExcel    = new PHPExcel();
		$sekarang = date('Y-m-d H:i:s');

		$cek_tahun = $this->uri->segment(3);
		$cek_divisi = $this->uri->segment(4);

		if ($cek_tahun == 'x') {
			$tahun = $this->monitoringm->tahun_berjalan();
		} else {
			$tahun = $cek_tahun;
		}

		if ($cek_divisi == 'x') {
			$divisi = 'all';
		} else {
			$divisi = $cek_divisi;
		}

		$style_header = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => true,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			)
		);

		$style_isi_kiri = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => false,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			)
		);

		$style_isi_tengah = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => false,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			)
		);

		$style_isi_kanan = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => false,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			),
			'numberformat' => array(
				'format' => PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED2
			),
		);

		$counter = 2;
		$ex = $objPHPExcel->setActiveSheetIndex(0);
		$ex->mergeCells('B' . $counter . ':N' . $counter);
		$ex->getStyle('B' . $counter . ':N' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('B' . $counter, 'RKM PT ENERGI PELABUHAN INDONESIA TAHUN ' . $tahun);

		$counter = 4;
		$counter_next = $counter + 1;
		$ex = $objPHPExcel->setActiveSheetIndex(0);
		$ex->mergeCells('B' . $counter . ':B' . $counter_next);
		$ex->getStyle('B' . $counter . ':B' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('B' . $counter, 'NO');
		$ex->getColumnDimension('B')->setWidth(10);

		$ex->mergeCells('C' . $counter . ':C' . $counter_next);
		$ex->getStyle('C' . $counter . ':C' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('C' . $counter, 'TAHUN');
		$ex->getColumnDimension('C')->setWidth(10);

		$ex->mergeCells('D' . $counter . ':D' . $counter_next);
		$ex->getStyle('D' . $counter . ':D' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('D' . $counter, 'NO. REG. RKM');
		$ex->getColumnDimension('D')->setWidth(25);

		$ex->mergeCells('E' . $counter . ':E' . $counter_next);
		$ex->getStyle('E' . $counter . ':E' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('E' . $counter, 'DIVISI');
		$ex->getColumnDimension('E')->setWidth(30);

		$ex->mergeCells('F' . $counter . ':F' . $counter_next);
		$ex->getStyle('F' . $counter . ':F' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('F' . $counter, 'RENCANA PROGRAM');
		$ex->getColumnDimension('F')->setWidth(50);

		$ex->mergeCells('G' . $counter . ':G' . $counter_next);
		$ex->getStyle('G' . $counter . ':G' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('G' . $counter, 'OUTPUT PROGRAM');
		$ex->getColumnDimension('G')->setWidth(50);

		$ex->mergeCells('H' . $counter . ':I' . $counter);
		$ex->getStyle('H' . $counter . ':I' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('H' . $counter, 'JADWAL');

		$ex->getStyle('H' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('H' . $counter_next, 'MULAI');
		$ex->getColumnDimension('H')->setWidth(15);

		$ex->getStyle('I' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('I' . $counter_next, 'AKHIR');
		$ex->getColumnDimension('I')->setWidth(15);

		$ex->mergeCells('J' . $counter . ':K' . $counter);
		$ex->getStyle('J' . $counter . ':K' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('J' . $counter, 'TAHAPAN');

		$ex->getStyle('J' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('J' . $counter_next, 'RENCANA');
		$ex->getColumnDimension('J')->setWidth(15);

		$ex->getStyle('K' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('K' . $counter_next, 'REALISASI');
		$ex->getColumnDimension('K')->setWidth(15);

		$ex->mergeCells('L' . $counter . ':L' . $counter_next);
		$ex->getStyle('L' . $counter . ':L' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('L' . $counter, 'PROGRES TERAKHIR');
		$ex->getColumnDimension('L')->setWidth(30);

		$ex->mergeCells('M' . $counter . ':M' . $counter_next);
		$ex->getStyle('M' . $counter . ':M' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('M' . $counter, 'STATUS');
		$ex->getColumnDimension('M')->setWidth(15);

		$ex->mergeCells('N' . $counter . ':N' . $counter_next);
		$ex->getStyle('N' . $counter . ':N' . $counter_next)->applyFromArray($style_header);
		$ex->setCellValue('N' . $counter, 'TGL SELESAI');
		$ex->getColumnDimension('N')->setWidth(15);

		$ex = $objPHPExcel->setActiveSheetIndex(0);
		$baris = 6;
		$hasil = $this->monitoringm->result_v_rkm_tab_register_list_tahun_strategis($tahun);
		foreach ($hasil as $row) :
			$ex->getStyle('B' . $baris)->applyFromArray($style_isi_tengah);
			$ex->setCellValue('B' . $baris, $baris - 5);
			$ex->getStyle('C' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('C' . $baris, $row->tahun);
			$ex->getStyle('D' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('D' . $baris, $row->no_register_rkm);
			$ex->getStyle('E' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('E' . $baris, $row->divisi);
			$ex->getStyle('F' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('F' . $baris, $row->rencana_program);
			$ex->getStyle('G' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('G' . $baris, $row->output_program);
			$ex->getStyle('F' . $baris . ':G' . $baris)->getAlignment()->setWrapText(true);
			$ex->getStyle('H' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('H' . $baris, $row->target_awal);
			$ex->getStyle('I' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('I' . $baris, $row->target_akhir);
			$ex->getStyle('J' . $baris)->applyFromArray($style_isi_tengah);
			$ex->setCellValue('J' . $baris, $row->target_jlh);
			$ex->getStyle('K' . $baris)->applyFromArray($style_isi_tengah);
			$ex->setCellValue('K' . $baris, $row->realisasi_jlh);
			$ex->getStyle('L' . $baris)->applyFromArray($style_isi_tengah);
			$ex->setCellValue('L' . $baris, $row->tahapan_real_last);
			$ex->getStyle('M' . $baris)->applyFromArray($style_isi_tengah);
			$ex->setCellValue('M' . $baris, ($row->realisasi_bobot == '100') ? 'Selesai' : 'Belum');
			$ex->getStyle('N' . $baris)->applyFromArray($style_isi_tengah);
			$ex->setCellValue('N' . $baris, ($row->realisasi_bobot == '100') ? tanggal_ttd_2($row->tgl_realisasi) : '');

			$baris = $baris + 1;
		endforeach;

		$objPHPExcel->getProperties()->setCreator("AMANRISIKO")
			->setLastModifiedBy("AMANRISIKO")
			->setTitle("Laporan RKM")
			->setSubject("Laporan RKM")
			->setDescription("Laporan RKM by EPI")
			->setKeywords("office 2007 openxml php")
			->setCategory("INFORMASI");
		$objPHPExcel->getActiveSheet()->setTitle('Laporan RKM');
		$TitlE 		= "Laporan RKM PT EPI";
		$namafile	= str_replace(' ', '_', $TitlE);
		$objWriter  = IOFactory::createWriter($objPHPExcel, 'Excel2007');
		header('Last-Modified:' . gmdate("D, d M Y H:i:s") . 'GMT');
		header('Chace-Control: no-store, no-cache, must-revalation');
		header('Chace-Control: post-check=0, pre-check=0', FALSE);
		header('Pragma: no-cache');
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="' . $namafile . '.xlsx"');

		$objWriter->save('php://output');
	}

	public function export_parameter_pdf()
	{
		date_default_timezone_set('Asia/Jakarta');
		$sekarang = date('Y-m-d H:i:s');
		set_time_limit(0);

		$this->load->model("Cetakm");

		$cetak	= $this->uri->segment(3);
		$cek_kode = $this->uri->segment(4);

		if ($cek_kode == 'x') {
			$kode_survey = $this->gcgm->last_gcg_surveyor_kode_survey();
		} else {
			$kode_survey = $cek_kode;
		}

		$tahun = substr($kode_survey, 0, 4);

		$query_data = $this->gcgm->result_v_gcg_transaksi_fu_parameter_kode_survey($kode_survey);
		$query_jumlah = $this->gcgm->result_v_gcg_transaksi_fu_parameter_hasil_kode_survey($kode_survey);

		$judul  = 'LAMPIRAN LAPORAN ASSESSMENT PENERAPAN<br> GOOD CORPORATE GOVERNANCE <br> PT ENERGI PELABUHAN INDONESIA TAHUN ';
		$judul_besar  = $judul . ' ' . $tahun;
		$judul_kecil  = 'LAMPIRAN GCG PT EPI PARAMETER ';

		$data['judul']	= $judul;
		$data['tahun']	= $tahun;
		$data['kode_survey']	= $kode_survey;
		$data['ttd']	= tanggal_ttd($sekarang);
		$data['data_ini']	= $query_data;
		$data['data_jumlah']	= $query_jumlah;
		$Rpt = $this->load->view("laporan/export_parameter_pdf", $data, TRUE);

		$SenD["TitlE"]	= $judul_kecil;
		$SenD["OutpuT"]	= $Rpt;
		$SenD["CetaK"]	= $cetak;
		$SenD["Kertas"]	= "A4-P";
		$SenD["tmargin"] = "10";
		$SenD["bmargin"] = "10";
		$this->load->view("laporan/Report", $SenD);
	}

	public function export_parameter_excel()
	{
		date_default_timezone_set('Asia/Jakarta');
		$objPHPExcel    = new PHPExcel();
		$sekarang = date('Y-m-d H:i:s');

		$cek_kode = $this->uri->segment(3);

		if ($cek_kode == 'x') {
			$kode_survey = $this->gcgm->last_gcg_surveyor_kode_survey();
		} else {
			$kode_survey = $cek_kode;
		}

		$tahun = substr($kode_survey, 0, 4);

		$style_header = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => true,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			)
		);

		$style_isi_kiri = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => false,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			)
		);

		$style_isi_tengah = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => false,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			)
		);

		$style_isi_kanan = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => false,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			),
			'numberformat' => array(
				'format' => PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED2
			),
		);

		$counter = 2;
		$ex = $objPHPExcel->setActiveSheetIndex(0);
		$ex->mergeCells('B' . $counter . ':F' . $counter);
		$ex->getStyle('B' . $counter . ':F' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('B' . $counter, 'LAMPIRAN LAPORAN ASSESSMENT PENERAPAN GOOD CORPORATE GOVERNANCE PT ENERGI PELABUHAN INDONESIA TAHUN ' . $tahun);

		$counter = 4;
		$counter_next = $counter + 1;
		$ex = $objPHPExcel->setActiveSheetIndex(0);

		$ex->getStyle('B' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('B' . $counter, 'No');
		$ex->getColumnDimension('B')->setWidth(10);

		$ex->getStyle('C' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('C' . $counter, 'Aspek Pengujian / Indikator');
		$ex->getColumnDimension('C')->setWidth(100);

		$ex->getStyle('D' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('D' . $counter, 'Bobot');
		$ex->getColumnDimension('D')->setWidth(20);

		$ex->getStyle('E' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('E' . $counter, 'Pemenuhan (%)');
		$ex->getColumnDimension('E')->setWidth(20);

		$ex->getStyle('F' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('F' . $counter, 'Skor');
		$ex->getColumnDimension('F')->setWidth(20);



		$ex = $objPHPExcel->setActiveSheetIndex(0);
		$baris = 6;
		$hasil = $this->gcgm->result_v_gcg_transaksi_fu_parameter_kode_survey($kode_survey);
		foreach ($hasil as $row) :
			$ex->getStyle('B' . $baris)->applyFromArray($style_isi_tengah);
			$ex->setCellValue('B' . $baris, $baris - 5);
			$ex->getStyle('C' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('C' . $baris, $row->no_parameter . '. ' . $row->aspek_pengujian_atau_indikator);
			$ex->getStyle('D' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('D' . $baris, $row->bobot);
			$ex->getStyle('E' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('E' . $baris, $row->pemenuhan);
			$ex->getStyle('F' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('F' . $baris, round($row->skor,2));

			$baris = $baris + 1;
		endforeach;

		$hasil = $this->gcgm->result_v_gcg_transaksi_fu_parameter_hasil_kode_survey($kode_survey);
		foreach ($hasil as $row) :
			$ex->getStyle('B' . $baris)->applyFromArray($style_isi_tengah);
			$ex->setCellValue('B' . $baris, '');
			$ex->getStyle('C' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('C' . $baris, 'Total');
			$ex->getStyle('D' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('D' . $baris, $row->jlh_bobot);
			$ex->getStyle('E' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('E' . $baris, $row->pemenuhan);
			$ex->getStyle('F' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('F' . $baris, round($row->jlh_skor,2));

			$baris = $baris + 1;
		endforeach;

		$objPHPExcel->getProperties()->setCreator("AMANRISIKO")
			->setLastModifiedBy("AMANRISIKO")
			->setTitle("Laporan GCG")
			->setSubject("Laporan GCG")
			->setDescription("Laporan GCG by EPI")
			->setKeywords("office 2007 openxml php")
			->setCategory("INFORMASI");
		$objPHPExcel->getActiveSheet()->setTitle('Laporan Parameter GCG');
		$TitlE 		= "Laporan GCG Parameter PT EPI";
		$namafile	= str_replace(' ', '_', $TitlE);
		$objWriter  = IOFactory::createWriter($objPHPExcel, 'Excel2007');
		header('Last-Modified:' . gmdate("D, d M Y H:i:s") . 'GMT');
		header('Chace-Control: no-store, no-cache, must-revalation');
		header('Chace-Control: post-check=0, pre-check=0', FALSE);
		header('Pragma: no-cache');
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="' . $namafile . '.xlsx"');

		$objWriter->save('php://output');
	}

	public function export_indikator_pdf()
	{
		date_default_timezone_set('Asia/Jakarta');
		$sekarang = date('Y-m-d H:i:s');
		set_time_limit(0);

		$this->load->model("Cetakm");

		$cetak	= $this->uri->segment(3);
		$cek_kode = $this->uri->segment(4);

		if ($cek_kode == 'x') {
			$kode_survey = $this->gcgm->last_gcg_surveyor_kode_survey();
		} else {
			$kode_survey = $cek_kode;
		}

		$tahun = substr($kode_survey, 0, 4);

		$query_data = $this->gcgm->result_v_gcg_transaksi_fu_indikator_kode_survey($kode_survey);
		$query_jumlah = $this->gcgm->result_v_gcg_transaksi_fu_indikator_hasil_kode_survey($kode_survey);

		$judul  = 'LAMPIRAN LAPORAN ASSESSMENT PENERAPAN<br> GOOD CORPORATE GOVERNANCE <br> PT ENERGI PELABUHAN INDONESIA TAHUN ';
		$judul_besar  = $judul . ' ' . $tahun;
		$judul_kecil  = 'LAMPIRAN GCG PT EPI INDIKATOR ';

		$data['judul']	= $judul;
		$data['tahun']	= $tahun;
		$data['kode_survey']	= $kode_survey;
		$data['ttd']	= tanggal_ttd($sekarang);
		$data['data_ini']	= $query_data;
		$data['data_jumlah']	= $query_jumlah;
		$Rpt = $this->load->view("laporan/export_indikator_pdf", $data, TRUE);

		$SenD["TitlE"]	= $judul_kecil;
		$SenD["OutpuT"]	= $Rpt;
		$SenD["CetaK"]	= $cetak;
		$SenD["Kertas"]	= "A4-P";
		$SenD["tmargin"] = "10";
		$SenD["bmargin"] = "10";
		$this->load->view("laporan/Report", $SenD);
	}

	public function export_indikator_excel()
	{
		date_default_timezone_set('Asia/Jakarta');
		$objPHPExcel    = new PHPExcel();
		$sekarang = date('Y-m-d H:i:s');

		$cek_kode = $this->uri->segment(3);

		// if ($cek_kode == 'x') {
		// 	$kode_survey = $this->gcgm->last_gcg_surveyor_kode_survey();
		// } else {
		// 	$kode_survey = $cek_kode;
		// }
		$kode_survey = '2020_1';
		$tahun = substr($kode_survey, 0, 4);

		$style_header = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => true,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			)
		);

		$style_isi_kiri = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => false,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			)
		);

		$style_isi_tengah = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => false,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			)
		);

		$style_isi_kanan = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => false,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			),
			'numberformat' => array(
				'format' => PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED2
			),
		);

		$counter = 2;
		$ex = $objPHPExcel->setActiveSheetIndex(0);
		$ex->mergeCells('B' . $counter . ':F' . $counter);
		$ex->getStyle('B' . $counter . ':F' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('B' . $counter, 'LAMPIRAN LAPORAN ASSESSMENT PENERAPAN GOOD CORPORATE GOVERNANCE PT ENERGI PELABUHAN INDONESIA TAHUN ' . $tahun);

		$counter = 4;
		$counter_next = $counter + 1;
		$ex = $objPHPExcel->setActiveSheetIndex(0);

		$ex->getStyle('B' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('B' . $counter, 'No');
		$ex->getColumnDimension('B')->setWidth(10);

		$ex->getStyle('C' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('C' . $counter, 'Aspek Pengujian / Indikator');
		$ex->getColumnDimension('C')->setWidth(50);

		$ex->getStyle('D' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('D' . $counter, 'Bobot');
		$ex->getColumnDimension('D')->setWidth(20);

		$ex->getStyle('E' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('E' . $counter, 'Pemenuhan (%)');
		$ex->getColumnDimension('E')->setWidth(20);

		$ex->getStyle('F' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('F' . $counter, 'Skor');
		$ex->getColumnDimension('F')->setWidth(20);

		$ex = $objPHPExcel->setActiveSheetIndex(0);
		$baris = 6;
		$aspek = $this->gcgm->result('v_gcg_transaksi_fu_aspek',array('kode_survey'=>$kode_survey));
		foreach ($aspek as $row_a) :
			$ex->getStyle('B' . $baris)->applyFromArray($style_isi_tengah);
			$ex->setCellValue('B' . $baris, '');
			$ex->getStyle('C' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('C' . $baris, $row_a->no_aspek.'. '.$row_a->aspek_pengujian_indikator);
			$ex->getStyle('D' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('D' . $baris, '');
			$ex->getStyle('E' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('E' . $baris, '');
			$ex->getStyle('F' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('F' . $baris, '');
			$baris = $baris + 1;
			$hasil = $this->gcgm->result('temp_gcg_transaksi_fu_indikator',array('kode_survey'=>$kode_survey,'no_aspek'=>$row_a->no_aspek));
			foreach ($hasil as $row) :
				$no_indikator=explode('.',$row->no_indikator);
				$ex->getStyle('B' . $baris)->applyFromArray($style_isi_tengah);
				$ex->setCellValue('B' . $baris, $no_indikator[1]);
				$ex->getStyle('C' . $baris)->applyFromArray($style_isi_kiri);
				$ex->setCellValue('C' . $baris, $row->aspek_pengujian_atau_indikator);
				$ex->getStyle('D' . $baris)->applyFromArray($style_isi_kanan);
				$ex->setCellValue('D' . $baris, $row->bobot);
				$ex->getStyle('E' . $baris)->applyFromArray($style_isi_kanan);
				$ex->setCellValue('E' . $baris, round($row->pemenuhan,2).'%');
				$ex->getStyle('F' . $baris)->applyFromArray($style_isi_kanan);
				$ex->setCellValue('F' . $baris, round($row->skor,2));

				$baris = $baris + 1;
			endforeach;
			$ex->getStyle('B' . $baris)->applyFromArray($style_isi_tengah);
			$ex->setCellValue('B' . $baris, '');
			$ex->getStyle('C' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('C' . $baris, 'Jumlah Aspek '.$row_a->no_aspek);
			$ex->getStyle('D' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('D' . $baris, $row_a->bobot);
			$ex->getStyle('E' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('E' . $baris, $row_a->pemenuhan.'%');
			$ex->getStyle('F' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('F' . $baris, round($row_a->skor,2));
			$baris = $baris + 1;
			$ex->getStyle('B' . $baris)->applyFromArray($style_isi_tengah);
			$ex->setCellValue('B' . $baris, '');
			$ex->getStyle('C' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('C' . $baris, '');
			$ex->getStyle('D' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('D' . $baris, '');
			$ex->getStyle('E' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('E' . $baris, '');
			$ex->getStyle('F' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('F' . $baris, '');
			$baris = $baris + 1;
		endforeach;
		$objPHPExcel->getActiveSheet()->getStyle('C1:C'.$objPHPExcel->getActiveSheet()->getHighestRow())->getAlignment()->setWrapText(true); 
		$objPHPExcel->getProperties()->setCreator("AMANRISIKO")
			->setLastModifiedBy("AMANRISIKO")
			->setTitle("Laporan GCG")
			->setSubject("Laporan GCG")
			->setDescription("Laporan GCG by EPI")
			->setKeywords("office 2007 openxml php")
			->setCategory("INFORMASI");
		$objPHPExcel->getActiveSheet()->setTitle('Laporan Indikator GCG');
		$TitlE 		= "Laporan GCG Indikator PT EPI";
		$namafile	= str_replace(' ', '_', $TitlE);
		$objWriter  = IOFactory::createWriter($objPHPExcel, 'Excel2007');
		header('Last-Modified:' . gmdate("D, d M Y H:i:s") . 'GMT');
		header('Chace-Control: no-store, no-cache, must-revalation');
		header('Chace-Control: post-check=0, pre-check=0', FALSE);
		header('Pragma: no-cache');
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="' . $namafile . '.xlsx"');

		$objWriter->save('php://output');
	}
	public function export_indikatorx_excel()
	{
		date_default_timezone_set('Asia/Jakarta');
		$objPHPExcel    = new PHPExcel();
		$sekarang = date('Y-m-d H:i:s');

		$cek_kode = $this->uri->segment(3);

		// if ($cek_kode == 'x') {
		// 	$kode_survey = $this->gcgm->last_gcg_surveyor_kode_survey();
		// } else {
		// 	$kode_survey = $cek_kode;
		// }
		$kode_survey = '2020_1';
		$tahun = substr($kode_survey, 0, 4);

		$style_header = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => true,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			)
		);

		$style_isi_kiri = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => false,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			)
		);

		$style_isi_tengah = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => false,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			)
		);

		$style_isi_kanan = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => false,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			),
			'numberformat' => array(
				'format' => PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED2
			),
		);

		$counter = 2;
		$ex = $objPHPExcel->setActiveSheetIndex(0);
		$ex->mergeCells('B' . $counter . ':F' . $counter);
		$ex->getStyle('B' . $counter . ':F' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('B' . $counter, 'LAMPIRAN LAPORAN ASSESSMENT PENERAPAN GOOD CORPORATE GOVERNANCE PT ENERGI PELABUHAN INDONESIA TAHUN ' . $tahun);

		$counter = 4;
		$counter_next = $counter + 1;
		$ex = $objPHPExcel->setActiveSheetIndex(0);

		$ex->getStyle('B' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('B' . $counter, 'No');
		$ex->getColumnDimension('B')->setWidth(10);

		$ex->getStyle('C' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('C' . $counter, 'Aspek Pengujian / Indikator');
		$ex->getColumnDimension('C')->setWidth(50);

		$ex->getStyle('D' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('D' . $counter, 'Nomor Parameter');
		$ex->getColumnDimension('D')->setWidth(20);

		$ex->getStyle('E' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('E' . $counter, 'Bobot');
		$ex->getColumnDimension('E')->setWidth(20);

		$ex->getStyle('F' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('F' . $counter, 'Pemenuhan (%)');
		$ex->getColumnDimension('F')->setWidth(20);

		$ex->getStyle('G' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('G' . $counter, 'Skor');
		$ex->getColumnDimension('G')->setWidth(20);

		$ex = $objPHPExcel->setActiveSheetIndex(0);
		$baris = 6;
		$aspek = $this->gcgm->result('v_gcg_transaksi_fu_aspek',array('kode_survey'=>$kode_survey));
		foreach ($aspek as $row_a) :
			$ex->getStyle('B' . $baris)->applyFromArray($style_isi_tengah);
			$ex->setCellValue('B' . $baris, '');
			$ex->getStyle('C' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('C' . $baris, $row_a->no_aspek.'. '.$row_a->aspek_pengujian_indikator);
			$ex->getStyle('D' . $baris)->applyFromArray($style_isi_tengah);
			$ex->setCellValue('D' . $baris, '');
			$ex->getStyle('E' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('E' . $baris, '');
			$ex->getStyle('F' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('F' . $baris, '');
			$ex->getStyle('G' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('G' . $baris, '');
			$baris = $baris + 1;
			$hasil = $this->gcgm->result('temp_gcg_transaksi_fu_indikator',array('kode_survey'=>$kode_survey,'no_aspek'=>$row_a->no_aspek));
			foreach ($hasil as $row) :
				$no_indikator=explode('.',$row->no_indikator);
				$ex->getStyle('B' . $baris)->applyFromArray($style_isi_tengah);
				$ex->setCellValue('B' . $baris, $no_indikator[1]);
				$ex->getStyle('C' . $baris)->applyFromArray($style_isi_kiri);
				$ex->setCellValue('C' . $baris, $row->aspek_pengujian_atau_indikator);
				$ex->getStyle('D' . $baris)->applyFromArray($style_isi_tengah);
				$min_par=$this->gcgm->min('temp_gcg_transaksi_fu_parameter',array('kode_survey'=>$kode_survey,'no_indikator'=>$row->no_indikator),'no_parameter');
				$max_par=$this->gcgm->max('temp_gcg_transaksi_fu_parameter',array('kode_survey'=>$kode_survey,'no_indikator'=>$row->no_indikator),'no_parameter');
				$min=explode('.',$min_par);
				$max=explode('.',$max_par);
				$ex->setCellValue('D' . $baris, $min[2].' s.d '.$max[2]);
				$ex->getStyle('E' . $baris)->applyFromArray($style_isi_kanan);
				$ex->setCellValue('E' . $baris, $row->bobot);
				$ex->getStyle('F' . $baris)->applyFromArray($style_isi_kanan);
				$ex->setCellValue('F' . $baris, round($row->pemenuhan,2).'%');
				$ex->getStyle('G' . $baris)->applyFromArray($style_isi_kanan);
				$ex->setCellValue('G' . $baris, round($row->skor,2));
				$baris = $baris + 1;
				$hasil_paramater = $this->gcgm->result('temp_gcg_transaksi_fu_parameter',array('kode_survey'=>$kode_survey,'no_indikator'=>$row->no_indikator));
				foreach ($hasil_paramater as $row_p) :
					$no_parameter=explode('.',$row_p->no_parameter);
					$ex->getStyle('B' . $baris)->applyFromArray($style_isi_tengah);
					$ex->setCellValue('B' . $baris, $no_parameter[2]);
					$ex->getStyle('C' . $baris)->applyFromArray($style_isi_kiri);
					$ex->setCellValue('C' . $baris, $row_p->aspek_pengujian_atau_indikator);
					$ex->getStyle('D' . $baris)->applyFromArray($style_isi_tengah);
					$ex->setCellValue('D' . $baris, '');
					$ex->getStyle('E' . $baris)->applyFromArray($style_isi_kanan);
					$ex->setCellValue('E' . $baris, $row_p->bobot);
					$ex->getStyle('F' . $baris)->applyFromArray($style_isi_kanan);
					$ex->setCellValue('F' . $baris, round($row_p->pemenuhan,2).'%');
					$ex->getStyle('G' . $baris)->applyFromArray($style_isi_kanan);
					$ex->setCellValue('G' . $baris, round($row_p->skor,2));
				$baris = $baris + 1;
				endforeach;
			endforeach;
			$ex->getStyle('B' . $baris)->applyFromArray($style_isi_tengah);
			$ex->setCellValue('B' . $baris, '');
			$ex->getStyle('C' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('C' . $baris, 'Jumlah Aspek '.$row_a->no_aspek);
			$ex->getStyle('D' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('D' . $baris, '');
			$ex->getStyle('E' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('E' . $baris, $row_a->bobot);
			$ex->getStyle('F' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('F' . $baris, $row_a->pemenuhan.'%');
			$ex->getStyle('G' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('G' . $baris, round($row_a->skor,2));
			$baris = $baris + 1;
			$ex->getStyle('B' . $baris)->applyFromArray($style_isi_tengah);
			$ex->setCellValue('B' . $baris, '');
			$ex->getStyle('C' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('C' . $baris, '');
			$ex->getStyle('D' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('D' . $baris, '');
			$ex->getStyle('E' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('E' . $baris, '');
			$ex->getStyle('F' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('F' . $baris, '');
			$ex->getStyle('G' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('G' . $baris, '');
			$baris = $baris + 1;
		endforeach;
		$objPHPExcel->getActiveSheet()->getStyle('C1:C'.$objPHPExcel->getActiveSheet()->getHighestRow())->getAlignment()->setWrapText(true); 
		$objPHPExcel->getProperties()->setCreator("AMANRISIKO")
			->setLastModifiedBy("AMANRISIKO")
			->setTitle("Laporan GCG")
			->setSubject("Laporan GCG")
			->setDescription("Laporan GCG by EPI")
			->setKeywords("office 2007 openxml php")
			->setCategory("INFORMASI");
		$objPHPExcel->getActiveSheet()->setTitle('Laporan Indikator GCG');
		$TitlE 		= "Laporan GCG Parameter PT EPI";
		$namafile	= str_replace(' ', '_', $TitlE);
		$objWriter  = IOFactory::createWriter($objPHPExcel, 'Excel2007');
		header('Last-Modified:' . gmdate("D, d M Y H:i:s") . 'GMT');
		header('Chace-Control: no-store, no-cache, must-revalation');
		header('Chace-Control: post-check=0, pre-check=0', FALSE);
		header('Pragma: no-cache');
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="' . $namafile . '.xlsx"');

		$objWriter->save('php://output');
	}


	public function export_aspek_pdf()
	{
		date_default_timezone_set('Asia/Jakarta');
		$sekarang = date('Y-m-d H:i:s');
		set_time_limit(0);

		$this->load->model("Cetakm");

		$cetak	= $this->uri->segment(3);
		$cek_kode = $this->uri->segment(4);

		if ($cek_kode == 'x') {
			$kode_survey = $this->gcgm->last_gcg_surveyor_kode_survey();
		} else {
			$kode_survey = $cek_kode;
		}

		$tahun = substr($kode_survey, 0, 4);

		$query_data = $this->gcgm->result_v_gcg_transaksi_fu_aspek_kode_survey($kode_survey);
		$query_jumlah = $this->gcgm->result_v_gcg_transaksi_fu_aspek_hasil_kode_survey($kode_survey);

		$judul  = 'LAMPIRAN LAPORAN ASSESSMENT PENERAPAN <br> GOOD CORPORATE GOVERNANCE <br> PT ENERGI PELABUHAN INDONESIA TAHUN ';
		$judul_besar  = $judul . ' ' . $tahun;
		$judul_kecil  = 'LAMPIRAN GCG PT EPI ASPEK ';

		$data['judul']	= $judul;
		$data['tahun']	= $tahun;
		$data['kode_survey']	= $kode_survey;
		$data['ttd']	= tanggal_ttd($sekarang);
		$data['data_ini']	= $query_data;
		$data['data_jumlah']	= $query_jumlah;
		$Rpt = $this->load->view("laporan/export_aspek_pdf", $data, TRUE);

		$SenD["TitlE"]	= $judul_kecil;
		$SenD["OutpuT"]	= $Rpt;
		$SenD["CetaK"]	= $cetak;
		$SenD["Kertas"]	= "A4-P";
		$SenD["tmargin"] = "10";
		$SenD["bmargin"] = "10";
		$this->load->view("laporan/Report", $SenD);
	}

	public function export_aspek_excel()
	{
		date_default_timezone_set('Asia/Jakarta');
		$objPHPExcel    = new PHPExcel();
		$sekarang = date('Y-m-d H:i:s');

		$cek_kode = $this->uri->segment(3);

		if ($cek_kode == 'x') {
			$kode_survey = $this->gcgm->last_gcg_surveyor_kode_survey();
		} else {
			$kode_survey = $cek_kode;
		}

		$tahun = substr($kode_survey, 0, 4);

		$style_header = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => true,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			)
		);

		$style_isi_kiri = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => false,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			)
		);

		$style_isi_tengah = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => false,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			)
		);

		$style_isi_kanan = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => false,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			),
			'numberformat' => array(
				'format' => PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED2
			),
		);

		$counter = 2;
		$ex = $objPHPExcel->setActiveSheetIndex(0);
		$ex->mergeCells('B' . $counter . ':F' . $counter);
		$ex->getStyle('B' . $counter . ':F' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('B' . $counter, 'LAMPIRAN LAPORAN ASSESSMENT PENERAPAN GOOD CORPORATE GOVERNANCE PT ENERGI PELABUHAN INDONESIA TAHUN ' . $tahun);

		$counter = 4;
		$counter_next = $counter + 1;
		$ex = $objPHPExcel->setActiveSheetIndex(0);

		$ex->getStyle('B' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('B' . $counter, 'No');
		$ex->getColumnDimension('B')->setWidth(10);

		$ex->getStyle('C' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('C' . $counter, 'Aspek Pengujian / Indikator');
		$ex->getColumnDimension('C')->setWidth(100);

		$ex->getStyle('D' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('D' . $counter, 'Bobot');
		$ex->getColumnDimension('D')->setWidth(20);

		$ex->getStyle('E' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('E' . $counter, 'Pemenuhan (%)');
		$ex->getColumnDimension('E')->setWidth(20);

		$ex->getStyle('F' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('F' . $counter, 'Skor');
		$ex->getColumnDimension('F')->setWidth(20);



		$ex = $objPHPExcel->setActiveSheetIndex(0);
		$baris = 6;
		$hasil = $this->gcgm->result_v_gcg_transaksi_fu_aspek_kode_survey($kode_survey);
		foreach ($hasil as $row) :
			$ex->getStyle('B' . $baris)->applyFromArray($style_isi_tengah);
			$ex->setCellValue('B' . $baris, $baris - 5);
			$ex->getStyle('C' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('C' . $baris, $row->no_aspek . '. ' . $row->aspek_pengujian_indikator);
			$ex->getStyle('D' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('D' . $baris, $row->bobot);
			$ex->getStyle('E' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('E' . $baris, $row->pemenuhan);
			$ex->getStyle('F' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('F' . $baris, round($row->skor,2));

			$baris = $baris + 1;
		endforeach;

		$hasil = $this->gcgm->result_v_gcg_transaksi_fu_aspek_hasil_kode_survey($kode_survey);
		foreach ($hasil as $row) :
			$ex->getStyle('B' . $baris)->applyFromArray($style_isi_tengah);
			$ex->setCellValue('B' . $baris, '');
			$ex->getStyle('C' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('C' . $baris, 'Total');
			$ex->getStyle('D' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('D' . $baris, $row->jlh_bobot);
			$ex->getStyle('E' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('E' . $baris, $row->pemenuhan);
			$ex->getStyle('F' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('F' . $baris, round($row->jlh_skor,2));

			$baris = $baris + 1;
		endforeach;

		$objPHPExcel->getProperties()->setCreator("AMANRISIKO")
			->setLastModifiedBy("AMANRISIKO")
			->setTitle("Laporan GCG")
			->setSubject("Laporan GCG")
			->setDescription("Laporan GCG by EPI")
			->setKeywords("office 2007 openxml php")
			->setCategory("INFORMASI");
		$objPHPExcel->getActiveSheet()->setTitle('Laporan Aspek GCG');
		$TitlE 		= "Laporan GCG Aspek PT EPI";
		$namafile	= str_replace(' ', '_', $TitlE);
		$objWriter  = IOFactory::createWriter($objPHPExcel, 'Excel2007');
		header('Last-Modified:' . gmdate("D, d M Y H:i:s") . 'GMT');
		header('Chace-Control: no-store, no-cache, must-revalation');
		header('Chace-Control: post-check=0, pre-check=0', FALSE);
		header('Pragma: no-cache');
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="' . $namafile . '.xlsx"');

		$objWriter->save('php://output');
	}

	public function export_rekomendasi_pdf()
	{
		date_default_timezone_set('Asia/Jakarta');
		$sekarang = date('Y-m-d H:i:s');
		set_time_limit(0);

		$this->load->model("Cetakm");

		$cetak	= $this->uri->segment(3);
		$cek_kode = $this->uri->segment(4);

		if ($cek_kode == 'x') {
			$kode_survey = $this->gcgm->last_gcg_surveyor_kode_survey();
		} else {
			$kode_survey = $cek_kode;
		}

		$tahun = substr($kode_survey, 0, 4);

		$query_data = $this->gcgm->result_v_gcg_transaksi_aoi_kode_survey($kode_survey);
		// $query_jumlah = $this->gcgm->result_v_gcg_transaksi_fu_parameter_hasil_kode_survey($kode_survey);

		$judul  = 'DAFTAR REKOMENDASI HASIL ASSESSMENT PENERAPAN GCG';
		$judul_besar  = $judul . ' ' . $tahun;
		$judul_kecil  = 'LAMPIRAN GCG PT EPI REKOMENDASI '; 

		$data['judul']	= $judul;
		$data['tahun']	= $tahun;
		$data['kode_survey']	= $kode_survey;
		$data['ttd']	= tanggal_ttd($sekarang);
		$data['data_ini']	= $query_data;
		// $data['data_jumlah']	= $query_jumlah;
		$Rpt = $this->load->view("laporan/export_rekomendasi_pdf", $data, TRUE);

		$SenD["TitlE"]	= $judul_kecil;
		$SenD["OutpuT"]	= $Rpt;
		$SenD["CetaK"]	= $cetak;
		$SenD["Kertas"]	= "A4-L";
		$SenD["tmargin"] = "10";
		$SenD["bmargin"] = "10";
		$this->load->view("laporan/Report", $SenD);
	}
	public function export_kertas_kerja_pdf()
	{
		date_default_timezone_set('Asia/Jakarta');
		$sekarang = date('Y-m-d H:i:s');
		set_time_limit(0);

		$this->load->model("Cetakm");

		$cetak	= $this->uri->segment(3);
		$cek_kode = $this->uri->segment(4); 

		if ($cek_kode == 'x') {
			$kode_survey = $this->gcgm->last_gcg_surveyor_kode_survey();
		} else {
			$kode_survey = $cek_kode;
		}

		$tahun = substr($kode_survey, 0, 4);

		// $query_jumlah = $this->gcgm->result_v_gcg_transaksi_fu_parameter_hasil_kode_survey($kode_survey);

		$judul  = 'KERTAS KERJA PENILAIAN / EVALUASI PENERAPAN GCG<br>PT ENERGI PELABUHAN INDONESIA';
		$judul_besar  = $judul . ' ' . $tahun;
		$judul_kecil  = 'LAMPIRAN GCG PT EPI - KERTAS KERJA'; 

		$data['judul']	= $judul;
		$data['tahun']	= $tahun;
		$data['kode_survey']	= $kode_survey;
		// $data['data_jumlah']	= $query_jumlah;
		$Rpt = $this->load->view("laporan/export_kertas_kerja_pdf", $data, TRUE);

		$SenD["TitlE"]	= $judul_kecil;
		$SenD["OutpuT"]	= $Rpt;
		$SenD["CetaK"]	= $cetak;
		$SenD["Kertas"]	= "A4-L";
		$SenD["tmargin"] = "10";
		$SenD["bmargin"] = "10";
		$this->load->view("laporan/Report", $SenD);
	}
	public function excel_kertas_kerja(){
		date_default_timezone_set('Asia/Jakarta');
		$objPHPExcel    = new PHPExcel();
		$sekarang = date('Y-m-d H:i:s');
		$kode_survey = '2020_1';
		$tahun = substr($kode_survey, 0, 4);

		$style_header = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => true,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			)
		);

		$style_isi_kiri = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => false,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			)
		);

		$style_isi_tengah = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => false,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			)
		);

		$style_isi_kanan = array(
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
				'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
			),
			'font' => array(
				'bold'  => false,
			),
			'borders' => array(
				'allborders' => array(
					'style' => PHPExcel_Style_Border::BORDER_THIN
				)
			),
			'numberformat' => array(
				'format' => PHPExcel_Style_NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED2
			),
		);

		$counter = 2;
		$ex = $objPHPExcel->setActiveSheetIndex(0);
		$ex->mergeCells('B' . $counter . ':F' . $counter);
		$ex->getStyle('B' . $counter . ':F' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('B' . $counter, 'LAMPIRAN LAPORAN ASSESSMENT PENERAPAN GOOD CORPORATE GOVERNANCE PT ENERGI PELABUHAN INDONESIA TAHUN ' . $tahun);

		$counter = 4;
		$counter_next = $counter + 1;
		$ex = $objPHPExcel->setActiveSheetIndex(0);

		$ex->getStyle('B' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('B' . $counter, 'No Aspek');
		$ex->getColumnDimension('B')->setWidth(10);

		$ex->getStyle('C' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('C' . $counter, 'No Indikator');
		$ex->getColumnDimension('C')->setWidth(15);

		$ex->getStyle('D' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('D' . $counter, 'No Parameter');
		$ex->getColumnDimension('D')->setWidth(15);

		$ex->getStyle('E' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('E' . $counter, 'Indikator / Parameter');
		$ex->getColumnDimension('E')->setWidth(100);

		$ex->getStyle('F' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('F' . $counter, 'Analisis Penerapan GCG (Kekuatan dan Kelemahan Penerapan GCG)');
		$ex->getColumnDimension('F')->setWidth(100);

		$ex->getStyle('G' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('G' . $counter, 'Identifikasi Hambatan dan Usulan Rekomendasi');
		$ex->getColumnDimension('G')->setWidth(100);
		
		$ex->getStyle('H' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('H' . $counter, 'Bobot');
		$ex->getColumnDimension('H')->setWidth(20);
		
		$ex->getStyle('I' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('I' . $counter, 'Pemenuhan');
		$ex->getColumnDimension('I')->setWidth(20);
		
		$ex->getStyle('J' . $counter)->applyFromArray($style_header);
		$ex->setCellValue('J' . $counter, 'Skor');
		$ex->getColumnDimension('J')->setWidth(20);

		$ex = $objPHPExcel->setActiveSheetIndex(0);
		$baris = 6;
		$hasil = $this->gcgm->result('temp_gcg_transaksi_fu_aspek',array('kode_survey'=>$kode_survey));
		foreach ($hasil as $row) :
			$ex->getStyle('B' . $baris)->applyFromArray($style_isi_tengah);
			$ex->setCellValue('B' . $baris, $row->no_aspek );
			$ex->mergeCells('C' . $baris . ':E' . $baris);
			$ex->getStyle('C' . $baris . ':E' . $baris)->applyFromArray($style_isi_kiri);
			// $ex->getStyle('C' . $baris)->applyFromArray($style_isi_kiri);
			// $ex->setCellValue('C' . $baris, '');
			// $ex->getStyle('D' . $baris)->applyFromArray($style_isi_kiri);
			// $ex->setCellValue('D' . $baris, '');
			// $ex->getStyle('C' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('C' . $baris, $row->aspek_pengujian_indikator);
			$ex->getStyle('F' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('F' . $baris, '');
			$ex->getStyle('G' . $baris)->applyFromArray($style_isi_kiri);
			$ex->setCellValue('G' . $baris, '');
			$ex->getStyle('H' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('H' . $baris, $row->bobot);
			$ex->getStyle('I' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('I' . $baris, $row->pemenuhan);
			$ex->getStyle('J' . $baris)->applyFromArray($style_isi_kanan);
			$ex->setCellValue('J' . $baris, round($row->skor,2));
			$baris = $baris + 1;
			$hasil_indikator = $this->gcgm->result('temp_gcg_transaksi_fu_indikator',array('no_aspek'=>$row->no_aspek,'kode_survey'=>$kode_survey));
			foreach ($hasil_indikator as $row_i) :
				$no_indikator=explode('.',$row_i->no_indikator);
				$ex->getStyle('B' . $baris)->applyFromArray($style_isi_tengah);
				$ex->setCellValue('B' . $baris, $row_i->no_aspek );
				$ex->getStyle('C' . $baris)->applyFromArray($style_isi_kiri);
				$ex->setCellValue('C' . $baris, $no_indikator[1]);
				// $ex->getStyle('D' . $baris)->applyFromArray($style_isi_kiri);
				// $ex->setCellValue('D' . $baris, '');
				$ex->mergeCells('D' . $baris . ':E' . $baris);
				$ex->getStyle('D' . $baris . ':E' . $baris)->applyFromArray($style_isi_kiri);
				// $ex->getStyle('D' . $baris)->applyFromArray($style_isi_kiri);
				$ex->setCellValue('D' . $baris, $row_i->aspek_pengujian_atau_indikator);
				$ex->getStyle('F' . $baris)->applyFromArray($style_isi_kiri);
				$ex->setCellValue('F' . $baris, '');
				$ex->getStyle('G' . $baris)->applyFromArray($style_isi_kiri);
				$ex->setCellValue('G' . $baris, '');
				$ex->getStyle('H' . $baris)->applyFromArray($style_isi_kanan);
				$ex->setCellValue('H' . $baris, $row_i->bobot);
				$ex->getStyle('I' . $baris)->applyFromArray($style_isi_kanan);
				$ex->setCellValue('I' . $baris, $row_i->pemenuhan);
				$ex->getStyle('J' . $baris)->applyFromArray($style_isi_kanan);
				$ex->setCellValue('J' . $baris, round($row_i->skor,2));
				$baris = $baris + 1;
				$hasil_parameter = $this->gcgm->result('temp_gcg_transaksi_fu_parameter',array('no_indikator'=>$row_i->no_indikator,'kode_survey'=>$kode_survey));
				foreach ($hasil_parameter as $row_p) :
					$no_parameter=explode('.',$row_p->no_parameter);
					$kekuatan='';
					$kelemahan='';
					$hambatan='';
					$rekomendasi='';
					$result = $this->gcgm->result('gcg_transaksi_fu',array('SUBSTRING_INDEX(kode_fu,\'.\',3)'=>$row_p->no_parameter,'kode_survey'=>$kode_survey));
					// echo $result;
					if(sizeof($result)>0){
						$kekuatan.='Kekuatan :' . PHP_EOL;
						$kelemahan.='Kekuatan :' . PHP_EOL;
						$hambatan.='Hambatan :' . PHP_EOL;
						$rekomendasi.='Rekomendasi :' . PHP_EOL;
						$no=1;
						foreach($result as $res){
							if($res->analisa_kekuatan!=''){
								$kekuatan.=$no.'. '.$res->analisa_kekuatan. PHP_EOL;
							}
							if($res->analisa_kelemahan!=''){
								$kelemahan.=$no.'. '.$res->analisa_kelemahan. PHP_EOL;
							}
							if($res->identifikasi_hambatan!=''){
								$hambatan.=$no.'. '.$res->identifikasi_rekomendasi. PHP_EOL;
							}
							if($res->identifikasi_rekomendasi!=''){
								$rekomendasi.=$no.'. '.$res->identifikasi_rekomendasi. PHP_EOL;
							}
							$no++;
						}
						$kekuatan.=PHP_EOL;
						$kelemahan.=PHP_EOL;
						$hambatan.=PHP_EOL;
						$rekomendasi.=PHP_EOL;
					}
					$kekuatan_kelemahan=$kekuatan . $kelemahan;
					$hambatan_rekomendasi=$hambatan . $rekomendasi;

					$ex->getStyle('B' . $baris)->applyFromArray($style_isi_tengah);
					$ex->setCellValue('B' . $baris, $row_p->no_aspek );
					$ex->getStyle('C' . $baris)->applyFromArray($style_isi_kiri);
					$ex->setCellValue('C' . $baris, $no_parameter[1]);
					$ex->getStyle('D' . $baris)->applyFromArray($style_isi_kiri);
					$ex->setCellValue('D' . $baris, $no_parameter[2]);
					$ex->getStyle('E' . $baris)->applyFromArray($style_isi_kiri);
					$ex->setCellValue('E' . $baris, $row_p->aspek_pengujian_atau_indikator);
					$ex->getStyle('F' . $baris)->applyFromArray($style_isi_kiri);
					$ex->setCellValue('F' . $baris, $kekuatan_kelemahan);
					$ex->getStyle('G' . $baris)->applyFromArray($style_isi_kiri);
					$ex->setCellValue('G' . $baris, $hambatan_rekomendasi);
					$ex->getStyle('H' . $baris)->applyFromArray($style_isi_kanan);
					$ex->setCellValue('H' . $baris, $row_p->bobot);
					$ex->getStyle('I' . $baris)->applyFromArray($style_isi_kanan);
					$ex->setCellValue('I' . $baris, $row_p->pemenuhan);
					$ex->getStyle('J' . $baris)->applyFromArray($style_isi_kanan);
					$ex->setCellValue('J' . $baris, round($row_p->skor,2));
					$baris = $baris + 1;
				endforeach;
			endforeach;
		endforeach;

		// $hasil = $this->gcgm->result_v_gcg_transaksi_fu_aspek_hasil_kode_survey($kode_survey);
		// foreach ($hasil as $row) :
		// 	$ex->getStyle('B' . $baris)->applyFromArray($style_isi_tengah);
		// 	$ex->setCellValue('B' . $baris, '');
		// 	$ex->getStyle('C' . $baris)->applyFromArray($style_isi_kiri);
		// 	$ex->setCellValue('C' . $baris, 'Total');
		// 	$ex->getStyle('D' . $baris)->applyFromArray($style_isi_kanan);
		// 	$ex->setCellValue('D' . $baris, $row->jlh_bobot);
		// 	$ex->getStyle('E' . $baris)->applyFromArray($style_isi_kanan);
		// 	$ex->setCellValue('E' . $baris, $row->pemenuhan);
		// 	$ex->getStyle('F' . $baris)->applyFromArray($style_isi_kanan);
		// 	$ex->setCellValue('F' . $baris, round($row->jlh_skor,2));

		// 	$baris = $baris + 1;
		// endforeach;
		$objPHPExcel->getActiveSheet()->getStyle('E1:E'.$objPHPExcel->getActiveSheet()->getHighestRow())->getAlignment()->setWrapText(true); 
		$objPHPExcel->getActiveSheet()->getStyle('F1:F'.$objPHPExcel->getActiveSheet()->getHighestRow())->getAlignment()->setWrapText(true); 
		$objPHPExcel->getActiveSheet()->getStyle('G1:G'.$objPHPExcel->getActiveSheet()->getHighestRow())->getAlignment()->setWrapText(true); 
		$objPHPExcel->getProperties()->setCreator("GCG")
			->setLastModifiedBy("GCG")
			->setTitle("Laporan GCG")
			->setSubject("Laporan GCG")
			->setDescription("Laporan GCG by EPI")
			->setKeywords("office 2007 openxml php")
			->setCategory("INFORMASI");
		$objPHPExcel->getActiveSheet()->setTitle('Laporan GCG - Kertas Kerja');
		$TitlE 		= "Laporan GCG - Kertas Kerja PT EPI";
		$namafile	= str_replace(' ', '_', $TitlE);
		$objWriter  = IOFactory::createWriter($objPHPExcel, 'Excel2007');
		header('Last-Modified:' . gmdate("D, d M Y H:i:s") . 'GMT');
		header('Chace-Control: no-store, no-cache, must-revalation');
		header('Chace-Control: post-check=0, pre-check=0', FALSE);
		header('Pragma: no-cache');
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="' . $namafile . '.xlsx"');

		$objWriter->save('php://output');
	}
	public function test(){
		$kode_survey='2020_1';
		$aspek = $this->gcgm->result('gcg_master_aspek',array('periode'=>$kode_survey));
		foreach($aspek as $a){ 
			$hasil_indikator = $this->gcgm->result('temp_gcg_transaksi_fu_indikator',array('no_aspek'=>$a->no_aspek,'kode_survey'=>$kode_survey));
			foreach ($hasil_indikator as $ha){
				$hasil_parameter = $this->gcgm->result('temp_gcg_transaksi_fu_parameter',array('no_indikator'=>$ha->no_indikator,'kode_survey'=>$kode_survey));
				foreach ($hasil_parameter as $hp){
					$no_parameter=explode('.',$hp->no_parameter);
					$kekuatan='';
					$kelemahan='';
					$hambatan='';
					$rekomendasi='';
					$result = $this->gcgm->result('gcg_transaksi_fu',array('SUBSTRING_INDEX(kode_fu,\'.\',3)'=>$hp->no_parameter,'kode_survey'=>$kode_survey));
					// echo $result;
					if(sizeof($result)>0){
						$kekuatan.='Kekuatan :<br><ul>';
						$kelemahan.='Kekuatan :<br><ul>';
						$hambatan.='Hambatan :<br><ul>';
						$rekomendasi.='Rekomendasi :<br><ul>';
						foreach($result as $res){
							if($res->analisa_kekuatan!=''){
								$kekuatan.='<li>'.$res->analisa_kekuatan.'</li>';
							}
							if($res->analisa_kelemahan!=''){
								$kelemahan.='<li>'.$res->analisa_kelemahan.'</li>';
							}
							if($res->identifikasi_hambatan!=''){
								$hambatan.='<li>'.$res->identifikasi_rekomendasi.'</li>';
							}
							if($res->identifikasi_rekomendasi!=''){
								$rekomendasi.='<li>'.$res->identifikasi_rekomendasi.'</li>';
							}
						}
						$kekuatan.='</ul>';
						$kelemahan.='</ul>';
						$hambatan.='</ul>';
						$rekomendasi.='</ul>';
					}
					$kekuatan_kelemahan=$kekuatan . '<br>' . $kelemahan . '<br>';
					$hambatan_rekomendasi=$hambatan . '<br>' . $rekomendasi . '<br>';
					echo $kekuatan_kelemahan.'<br></br>'.$hambatan_rekomendasi.'<br></br>';
				}
			}
		}
	}
	public function export_hasil_assessment_pdf()
	{
		date_default_timezone_set('Asia/Jakarta');
		$sekarang = date('Y-m-d H:i:s');
		set_time_limit(0);

		$this->load->model("Cetakm");

		$cetak	= $this->uri->segment(3);
		$cek_kode = $this->uri->segment(4);

		if ($cek_kode == 'x') {
			$kode_survey = $this->gcgm->last_gcg_surveyor_kode_survey();
		} else {
			$kode_survey = $cek_kode;
		}

		$tahun = substr($kode_survey, 0, 4);

		// $query_jumlah = $this->gcgm->result_v_gcg_transaksi_fu_parameter_hasil_kode_survey($kode_survey);

		$judul  = 'DAFTAR REKOMENDASI HASIL ASSESSMENT PENERAPAN GCG';
		$judul_besar  = $judul . ' ' . $tahun;
		$judul_kecil  = 'LAMPIRAN GCG PT EPI REKOMENDASI '; 

		$data['judul']	= $judul;
		$data['tahun']	= $tahun;
		$data['kode_survey']	= $kode_survey;
		$data['ttd']	= tanggal_ttd($sekarang);
		// $data['data_jumlah']	= $query_jumlah;
		$Rpt = $this->load->view("laporan/export_rekomendasi_pdf", $data, TRUE);

		$SenD["TitlE"]	= $judul_kecil;
		$SenD["OutpuT"]	= $Rpt;
		$SenD["CetaK"]	= $cetak;
		$SenD["Kertas"]	= "A4-L";
		$SenD["tmargin"] = "10";
		$SenD["bmargin"] = "10";
		$this->load->view("laporan/Report", $SenD);
	}
}
