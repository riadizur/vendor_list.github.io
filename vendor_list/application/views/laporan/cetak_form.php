
<style type="text/css">
	.font_standar{
		font-size: 11px;
	}
	
</style>
<table width=100% >
	<tr>
		<td align="right"><img src="<?php echo FCPATH.'assets/images/epi_1.png'; ?>" alt='logo' width='150' height='75'></td>
	</tr>	
</table>
<table width=100% style="font-size: 12px;" >
	<tr>
		<td align="center"> <u><b>RENCANA ANGGARAN BIAYA</b></u> </td>
	</tr>	
</table>
<br/>
<table style="font-size: 9px;">
	<tr>
		<td align="left" valign="top" width="150px">&nbsp;</td>
		<td align="left" valign="top" width="5px">&nbsp;</td>
		<td align="left" valign="top" width="300px">&nbsp;</td>
	</tr>
	<tr>
		<td align="left" valign="top">JENIS TRANSAKSI</td>
		<td align="left" valign="top">:</td>
		<td align="left" valign="top"><b><?php echo $dtar->JNS_TRANSAKSI;?></b></td>
	</tr>	
	<tr>
		<td align="left" valign="top">ID LANGGANAN</td>
		<td align="left" valign="top">:</td>
		<td align="left" valign="top"><?php echo ($dtar->ID_LANG == '0')? "-":$dtar->ID_LANG;?></td>
	</tr>	
	<tr>
		<td align="left" valign="top">NAMA </td>
		<td align="left" valign="top">:</td>
		<td align="left" valign="top"><?php echo $dtar->NAMA_LANG;?></td>
	</tr>
	<?php
	switch ($dtar->JNS_TRANSAKSI) {
		case 'PERUBAHAN DAYA':
			echo $output_tarif_daya = '
			<tr>
				<td align="left" valign="top">TARIF / DAYA LAMA</td>
				<td align="left" valign="top">:</td>
				<td align="left" valign="top">'.$dtar->TARIF_LAMA.' / '.number_format($dtar->DAYA_LAMA).' VA</td>
			</tr>
			<tr>
				<td align="left" valign="top">TARIF / DAYA BARU</td>
				<td align="left" valign="top">:</td>
				<td align="left" valign="top">'.$dtar->TARIF_BARU.' / '.number_format($dtar->DAYA_BARU).' VA</td>
			</tr>
			';
			break;

		default:
			echo $output_tarif_daya = '
			<tr>
				<td align="left" valign="top">TARIF / DAYA</td>
				<td align="left" valign="top">:</td>
				<td align="left" valign="top">'.$dtar->TARIF_BARU.' / '.number_format($dtar->DAYA_BARU).' VA</td>
			</tr>
			';
			break;
	}
	?>
	<tr>
		<td align="left" valign="top">ALAMAT </td>
		<td align="left" valign="top">:</td>
		<td align="left" valign="top"><?php echo $dtar->ALAMAT_LANG;?></td>
	</tr>
	<tr>
		<td align="left" valign="top">GOLONGAN</td>
		<td align="left" valign="top">:</td>
		<td align="left" valign="top">Test</td>
	</tr>
</table>
<table class="font_standar " style="font-size: 10px;border-collapse: collapse;padding:10px;" >
	<tr>
		<td align="left" valign="top" width="10px">&nbsp;</td>
		<td align="left" valign="top" width="50px">&nbsp;</td>
		<td align="left" valign="top" width="200px">&nbsp;</td>
		<td align="left" valign="top" width="50px">&nbsp;</td>
		<td align="left" valign="top" width="90px">&nbsp;</td>
		<td align="left" valign="top" width="90px">&nbsp;</td>
		<td align="left" valign="top" width="90px">&nbsp;</td>
		<td align="left" valign="top" width="90px">&nbsp;</td>
		<td align="left" valign="top" width="55px">&nbsp;</td>
		<td align="left" valign="top" width="55px">&nbsp;</td>
		<td align="left" valign="top" width="55px">&nbsp;</td>
		<td align="left" valign="top" width="55px">&nbsp;</td>
		<td align="left" valign="top" width="100px">&nbsp;</td>
		<td align="left" valign="top" width="100px">&nbsp;</td>
	</tr>
	<tr>
		<td align="center" valign="middle" style="border: 1px solid black;" rowspan="3">
			<b>NO</b> 
		</td>
		<td align="center" valign="middle" style="border: 1px solid black;" rowspan="3">
			<b>KODE</b>
		</td>
		<td align="center" valign="middle" style="border: 1px solid black;" rowspan="3">
			<b>JENIS PEKERJAAN</b>
		</td>
		<td align="center" valign="middle" style="border: 1px solid black;" rowspan="3">
			<b>SATUAN</b>
		</td>
		<td align="center" valign="middle" style="border: 1px solid black;" colspan="4">
			<b>HARGA SATUAN</b>
		</td>
		<td align="center" valign="middle" style="border: 1px solid black;" colspan="4">
			<b>JUMLAH VOLUME</b>
		</td>
		<td align="center" valign="middle" style="border: 1px solid black;" colspan="2" rowspan="2">
			<b>TOTAL (Rp)</b>
		</td>
	</tr>
	<tr>
		<td align="center" valign="middle" style="border: 1px solid black;" rowspan="2">
			<b>BAHAN (Rp)</b>
		</td>
		<td align="center" valign="middle" style="border: 1px solid black;" colspan="3">
			<b>JASA (Rp)</b>
		</td>
		<td align="center" valign="middle" style="border: 1px solid black;" rowspan="2">
			<b>BAHAN </b>
		</td>
		<td align="center" valign="middle" style="border: 1px solid black;" colspan="3">
			<b>JASA</b>
		</td>
	</tr>
	<tr>
		<td align="center" valign="middle" style="border: 1px solid black;">
			<b>PASANG</b>
		</td>
		<td align="center" valign="middle" style="border: 1px solid black;">
			<b>BONGKAR</b>
		</td>
		<td align="center" valign="middle" style="border: 1px solid black;">
			<b>LAIN-LAIN</b>
		</td>
		<td align="center" valign="middle" style="border: 1px solid black;">
			<b>PASANG</b>
		</td>
		<td align="center" valign="middle" style="border: 1px solid black;">
			<b>BONGKAR</b>
		</td>
		<td align="center" valign="middle" style="border: 1px solid black;">
			<b>LAIN-LAIN</b>
		</td>
		<td align="center" valign="middle" style="border: 1px solid black;">
			<b>MATERIAL</b>
		</td>
		<td align="center" valign="middle" style="border: 1px solid black;">
			<b>JASA</b>
		</td>
	</tr>

	<?php
	$x = 1;
	foreach ($dtrdr as $r) {
		
		echo '
	<tr>
		<td align="center" valign="top" style="border: 1px solid black;">
			'.$x.'
		</td>
		<td align="center" valign="top" style="border: 1px solid black;">
			'.$r->KODE_ITEM.'
		</td>
		<td align="left" valign="top" style="border: 1px solid black;">
			'.$r->NAMA_ITEM.'
		</td>
		<td align="center" valign="top" style="border: 1px solid black;">
			'.$r->SATUAN.'
		</td>
		<td align="right" valign="top" style="border: 1px solid black;">
			'.number_format($r->HS_MATERIAL,2).'
		</td>
		<td align="right" valign="top" style="border: 1px solid black;">
			'.number_format($r->HS_JASA_PASANG,2).'
		</td>
		<td align="right" valign="top" style="border: 1px solid black;">
			'.number_format($r->HS_JASA_BONGKAR,2).'
		</td>
		<td align="right" valign="top" style="border: 1px solid black;">
			'.number_format($r->HS_JASA_LAIN2,2).'
		</td>
		<td align="right" valign="top" style="border: 1px solid black;">
			'.number_format($r->VOL_MATERIAL,2).'
		</td>
		<td align="right" valign="top" style="border: 1px solid black;">
			'.number_format($r->VOL_JASA_PASANG,2).'
		</td>
		<td align="right" valign="top" style="border: 1px solid black;">
			'.number_format($r->VOL_JASA_BONGKAR,2).'
		</td>
		<td align="right" valign="top" style="border: 1px solid black;">
			'.number_format($r->VOL_JASA_LAIN2,2).'
		</td>
		<td align="right" valign="top" style="border: 1px solid black;">
			'.number_format($r->JLH_MATERIAL,2).'
		</td>
		<td align="right" valign="top" style="border: 1px solid black;">
			'.number_format($r->JLH_JASA,2).'
		</td>
	</tr>
		';

		$x++;
	}
	?>
	<tr>
		<td align="center" valign="top" style="border: 1px solid black;">
			&nbsp;
		</td>
		<td align="center" valign="top" style="border: 1px solid black;">
			&nbsp;
		</td>
		<td align="left" valign="top" style="border: 1px solid black;">
			&nbsp;
		</td>
		<td align="center" valign="top" style="border: 1px solid black;">
			&nbsp;
		</td>
		<td align="right" valign="top" style="border: 1px solid black;">
			&nbsp;
		</td>
		<td align="right" valign="top" style="border: 1px solid black;">
			&nbsp;
		</td>
		<td align="right" valign="top" style="border: 1px solid black;">
			&nbsp;
		</td>
		<td align="right" valign="top" style="border: 1px solid black;">
			&nbsp;
		</td>
		<td align="right" valign="top" style="border: 1px solid black;">
			&nbsp;
		</td>
		<td align="right" valign="top" style="border: 1px solid black;">
			&nbsp;
		</td>
		<td align="right" valign="top" style="border: 1px solid black;">
			&nbsp;
		</td>
		<td align="right" valign="top" style="border: 1px solid black;">
			&nbsp;
		</td>
		<td align="right" valign="top" style="border: 1px solid black;">
			&nbsp;
		</td>
		<td align="right" valign="top" style="border: 1px solid black;">
			&nbsp;
		</td>
	</tr>

	<tr>
		<td align="center" valign="top" style="border: 1px solid black; border-left:0px;border-bottom:0px;" colspan="9">
			&nbsp;
		</td>

		<td align="left" valign="top" style="border: 1px solid black;" colspan="2">
			JUMLAH
		</td>
		<td align="right" valign="top" style="border: 1px solid black;">
			Rp.
		</td>
		<td align="right" valign="top" style="border: 1px solid black;">
		 	<?php echo number_format($dtrr->TOT_MATERIAL,2); ?>
		</td>
		<td align="right" valign="top" style="border: 1px solid black;">
		<?php echo number_format($dtrr->TOT_JASA,2); ?>
		</td>
	</tr>
	<tr>
		<td align="center" valign="top" style="border: 1px solid black; border-left:0px;border-bottom:0px;border-top:0px;" colspan="9">
			&nbsp;
		</td>

		<td align="left" valign="top" style="border: 1px solid black;" colspan="2">
			TOTAL
		</td>
		<td align="right" valign="top" style="border: 1px solid black;">
			Rp.
		</td>
		<td align="right" valign="top" style="border: 1px solid black;" colspan="2">
			<?php echo number_format($dtrr->TOTAL_1,2); ?>
		</td>
	</tr>
	<tr>
		<td align="center" valign="top" style="border: 1px solid black; border-left:0px;border-bottom:0px;border-top:0px;" colspan="9">
			&nbsp;
		</td>

		<td align="left" valign="top" style="border: 1px solid black;" colspan="2">
			ROK 
		</td>
		<td align="right" valign="top" style="border: 1px solid black;">
			Rp.
		</td>
		<td align="right" valign="top" style="border: 1px solid black;" colspan="2">
			<?php echo number_format(($dtrr->ROK_15 + $dtrr->PPN_10),2); ?>
		</td>
	</tr>
	<tr>
		<td align="center" valign="top" style="border: 1px solid black; border-left:0px;border-bottom:0px;border-top:0px;" colspan="9">
			&nbsp;
		</td>

		<td align="left" valign="top" style="border: 1px solid black;" colspan="2">
			TOTAL (Pembulatan)
		</td>
		<td align="right" valign="top" style="border: 1px solid black;">
			Rp.
		</td>
		<td align="right" valign="top" style="border: 1px solid black;" colspan="2">
			<?php echo number_format($dtrr->TOTAL_AKHIR,2); ?>
		</td>
	</tr>
	
</table>
<table class="font_standar " style="font-size: 10px;border-collapse: collapse;padding:10px;" >
	<tr>
		<td align="left" valign="top" width="20px">&nbsp;</td>
		<td align="left" valign="top" width="100px">&nbsp;</td>
		<td align="left" valign="top" width="150px">&nbsp;</td>
		<td align="left" valign="top" width="130px">&nbsp;</td>
		<td align="left" valign="top" width="300px">&nbsp;</td>
		<td align="left" valign="top" width="220px">&nbsp;</td>
	</tr>
	<tr>
		<td align="center" valign="top" style="border: 1px solid black;" colspan="4">APPROVAL PATH</td>
		<td align="center" valign="top" style="border: 0px solid black;">&nbsp;</td>
		<td align="center" valign="top" style="border: 0px solid black;">&nbsp;</td>
	</tr>
    <tr>
		<td align="center" valign="top" style="border: 1px solid black;">No</td>
		<td align="center" valign="top" style="border: 1px solid black;">Jabatan</td>
		<td align="center" valign="top" style="border: 1px solid black;">Nama</td>
		<td align="center" valign="top" style="border: 1px solid black;">Tanggal</td>
		<td align="center" valign="top" style="border: 0px solid black;"></td>
		<td align="center" valign="top" style="border: 0px solid black;">&nbsp;</td>
	</tr>
	<tr>
		<td align="center" valign="top" style="border: 1px solid black;">1</td>
		<td align="left" valign="top" style="border: 1px solid black;">Surveyor</td>
		<td align="left" valign="top" style="border: 1px solid black;"><?php echo $dtrr->PETUGAS_SURVEY; ?></td>
		<td align="center" valign="top" style="border: 1px solid black;"><?php echo $dtrr->TGL_SURVEY; ?></td>
		<td align="center" valign="top" style="border: 0px solid black;"></td>
		<td align="center" valign="top" style="border: 0px solid black;">&nbsp;</td>
	</tr>
	<tr>
		<td align="center" valign="top" style="border: 1px solid black;">2</td>
		<td align="left" valign="top" style="border: 1px solid black;">Spv. Teknik</td>
		<td align="left" valign="top" style="border: 1px solid black;"><?php echo $dtrr->APPROVE_SPV_TEK; ?></td>
		<td align="center" valign="top" style="border: 1px solid black;"><?php echo $dtrr->TGL_APPROVE_SPV_TEK; ?></td>
		<td align="center" valign="top" style="border: 0px solid black;"></td>
		<td align="center" valign="top" style="border: 0px solid black;">&nbsp;</td>
	</tr>
	<tr>
		<td align="center" valign="top" style="border: 1px solid black;">3</td>
		<td align="left" valign="top" style="border: 1px solid black;">Spv. Operasi</td>
		<td align="left" valign="top" style="border: 1px solid black;"><?php echo $dtrr->APPROVE_SPV_OPS; ?></td>
		<td align="center" valign="top" style="border: 1px solid black;"><?php echo $dtrr->TGL_APPROVE_SPV_OPS; ?></td>
		<td align="center" valign="top" style="border: 0px solid black;"></td>
		<td align="center" valign="top" style="border: 0px solid black;"></td>
	</tr>
	<tr>
		<td align="center" valign="top" style="border: 1px solid black;">4</td>
		<td align="left" valign="top" style="border: 1px solid black;">Man. Teknik</td>
		<td align="left" valign="top" style="border: 1px solid black;"><?php echo $dtrr->APPROVE_MAN_TEK; ?></td>
		<td align="center" valign="top" style="border: 1px solid black;"><?php echo $dtrr->TGL_APPROVE_MAN_TEK; ?></td>
		<td align="center" valign="top" style="border: 0px solid black;"></td>
		<td align="center" valign="top" style="border: 0px solid black;"></td>
	</tr>
	<tr>
		<td align="center" valign="top" style="border: 1px solid black;">5</td>
		<td align="left" valign="top" style="border: 1px solid black;">Man. Operasi</td>
		<td align="left" valign="top" style="border: 1px solid black;"><?php echo $dtrr->APPROVE_MAN_OPS; ?></td>
		<td align="center" valign="top" style="border: 1px solid black;"><?php echo $dtrr->TGL_APPROVE_MAN_OPS; ?></td>
		<td align="center" valign="top" style="border: 0px solid black;"></td>
		<td align="center" valign="top" style="border: 0px solid black;"></td>
	</tr>
	<tr>
		<td align="center" valign="top" style="border: 0px solid black;">&nbsp;</td>
		<td align="left" valign="top" style="border: 0px solid black;">&nbsp;</td>
		<td align="center" valign="top" style="border: 0px solid black;">&nbsp;</td>
		<td align="center" valign="top" style="border: 0px solid black;"></td>
		<td align="center" valign="top" style="border: 0px solid black;">&nbsp;</td>
		<td align="center" valign="top" style="border: 0px solid black;">&nbsp;</td>
	</tr>
</table>

<div style="position: absolute;  width: 50%;  bottom: 20px; border: 1px solid black;" width="1010px">
    <p align="center" style="font-size: 10px; margin:0px; padding:5px;" valign="middle">
        Berkas in dicetak melalui Aplikasi Survey Entry On Site (ASEOS), dinyatakan sah dan tidak memerlukan tanda tangan
    </p>
</div>
