<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title><?php echo $TitlE;?></title>
	</head>
	<body>
		<?php
			switch($CetaK){
				case 0:
					print $OutpuT;
				return;
				case 1:
					return $this->Cetakm->mpdf($TitlE,$OutpuT,$Kertas,$bmargin,$tmargin,$Emailto,$Subject,$Message,$Attach,$FooteR);
				return;
				case 2;
					$namafile	= str_replace(' ','_',$TitlE);
					header("Content-type: application/vnd-ms-excel");
					header("Content-Disposition: attachment; filename=$namafile.xls");
					header("Cache-Control: private",false);
					print $OutpuT;
					break;
				case 3;
					$namafile	= str_replace(' ','_',$TitlE);
					header("Cache-Control: no-cache, no-store, must-revalidate");
					header("Content-Type: application/vnd.ms-word");
					header("Content-Disposition: attachment; filename= $namafile.doc");
					print $OutpuT;
					break;
				case 4;
					$printer = printer_open("Brother MFC-J6710DW Printer");
					printer_write($printer, $OutpuT);
					printer_close($printer);
					break;
				case 5:
					return $this->Cetakm->mpdf_billing($TitlE,$OutpuT,$Kertas,$bmargin,$tmargin,$Emailto,$Subject,$Message,$Attach,$FooteR,$Via);
				return;
				case 6:
					return $this->Cetakm->mpdf_informasi($Emailto,$Subject,$Message,$Attach,$Via);
				return;
				default:
					print("Silhakan Pilihan Cetak");
				return;
			}
		?>
	</body>
</html>
