
<style type="text/css">
	.font_standar{
		font-size: 11px;
	}
	
</style>
<br>
<table width=100% border=0>
    <tr>
        <td width=60% colspan=2 style='font-size:14px;' valign=bottom> PANITIA PENGADAAN PT ENERGI PELABUHAN INDONESIA </td>
        <td width=20% rowspan=2><img src="<?php echo FCPATH.'assets/images/epi_1.png'; ?>" alt='logo' width='135' height='70' /></td>
    </tr>
    <!-- <tr>
        <td colspan=2 style='font-size:12px;' valign=top>Area Pelabuhan Tanjung Priok</td>
    </tr> -->
    <tr>
        <td colspan=3 style='font-size:14px;'> <center><u>HASIL EVALUASI DOKUMEN CALON VENDOR</u><br/></center></td>
    </tr>
    <!-- <tr>
        <td colspan=3 style='font-size:14px;'> <center><u>PT. ENERGI PELABUHAN INDONESIA</u><br/></center></td>
    </tr> -->
    <tr>
        <td colspan=3 style='font-size:12px;' ><center>Kode Registrasi : <?=$perusahaan['kode_register']?></center></td>
    </tr>
</table>
<table width=100% style="font-size: 10px;" >
	<tr>
		<td align="left" valign="top" width="90px">&nbsp;</td>
		<td align="left" valign="top" width="3px">&nbsp;</td>
		<td align="left" valign="top" width="150px">&nbsp;</td>
		<td align="left" valign="top" width="90px">&nbsp;</td>
		<td align="left" valign="top" width="3px">&nbsp;</td>
		<td align="left" valign="top" width="150px">&nbsp;</td>
	</tr>
    <tr>
		<td align="left" valign="top" colspan="3"> <u>DATA PERUSAHAAN</u> </td>
		<td align="left" valign="top" colspan="3"> <u>DATA PEJABAT TERTINGGI DAN PIC</u> </td>
	</tr>
    <tr>
		<td align="left" valign="top" >NAMA PERUSAHAAN</td>
		<td align="left" valign="top" >:</td>
		<td align="left" valign="top" ><?=$perusahaan['nama_perusahaan']?></td>	
		<td align="left" valign="top" >NAMA JABATAN</td>
		<td align="left" valign="top" >:</td>
		<td align="left" valign="top" ><?=$perusahaan['jab_tertinggi']?></td>	
	</tr>
    <tr>
		<td align="left" valign="top" >ALAMAT PERUSAHAAN</td>
		<td align="left" valign="top" >:</td>
		<td align="left" valign="top" ><?=$perusahaan['alamat'] . ', ' . $perusahaan['kec'] . ', ' . $perusahaan['kab'] . ', ' . $perusahaan['prov'] . '<br>kode pos ' . $perusahaan['kode_pos'];?></td>
		<td align="left" valign="top" >NAMA PEJABAT</td>
		<td align="left" valign="top" >:</td>
		<td align="left" valign="top" ><?=$perusahaan['nama_jab_tertinggi']?></td>	
	</tr>
    <tr>
		<td align="left" valign="top" >EMAIL PERUSAHAAN</td>
		<td align="left" valign="top" >:</td>
		<td align="left" valign="top" ><?=$perusahaan['email_perusahaan']?></td>
        <td align="left" valign="top" >NAMA PIC</td>
		<td align="left" valign="top" >:</td>
		<td align="left" valign="top" ><?=$pic['nama_pic']?></td>	
	</tr>
    <tr>
		<td align="left" valign="top" >NO. TELP PERUSAHAAN</td>
		<td align="left" valign="top" >:</td>
		<td align="left" valign="top" ><?=$perusahaan['no_telp_perusahaan']?></td>
        <td align="left" valign="top" >EMAIL PIC</td>
		<td align="left" valign="top" >:</td>
		<td align="left" valign="top" ><?=$pic['email_pic']?></td>
	</tr>
    <tr>
		<td align="left" valign="top" >WEBSITE</td>
		<td align="left" valign="top" >:</td>
		<td align="left" valign="top" ><?=$perusahaan['website_perusahaan']?></td>
        <td align="left" valign="top" >NO. TELP PIC</td>
		<td align="left" valign="top" >:</td>
		<td align="left" valign="top" ><?=$pic['no_hp_pic']?></td>		
	</tr>
</table>
<table width="100%" style="font-size: 10px;border-collapse: collapse;">
	<tr>
		<td align="left" valign="top" width="40%" style="border: 0px solid black;">&nbsp;</td>
        <td align="left" valign="top" width="40%" style="border: 0px solid black;">&nbsp;</td>
        <td align="left" valign="top" width="20%" style="border: 0px solid black;">&nbsp;</td>
	</tr>
	<tr>
		<td align="left" valign="top" style="border: 0px solid black;" colspan="3">A. MINAT PEKERJAAN</td>
	</tr>
    <?php for($i=0;$i<sizeof($minat);$i=$i+2){ ?>
	<tr>
		<td align="left" valign="top" style="border: 0px solid black;">
        <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php
            $uraian_minat = $this->db_models->row('tr_minat_pekerjaan',array('kode'=>$minat[$i]['kode_minat']),'nama');
            echo '- '.$uraian_minat;
        ?>
        </strong>
        </td>
		<td align="left" valign="top" style="border: 0px solid black;">
        <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php 
            $x=$i+1;
            if(sizeof($minat)>$x){
                $uraian_minat = $this->db_models->row('tr_minat_pekerjaan',array('kode'=>$minat[$x]['kode_minat']),'nama');
                echo '- '.$uraian_minat;
            }
        ?> 
        </strong>
        </td>
	</tr>
    <?php } ?>
</table>
<table style="font-size: 10px;border-collapse: collapse;">
    <tr>
		<td align="left" valign="top" width="30px" style="border: 0px solid black;">&nbsp;</td>
        <td align="left" valign="top" width="300px" style="border: 0px solid black;">&nbsp;</td>
        <td align="left" valign="top" width="70px" style="border: 0px solid black;">&nbsp;</td>
        <td align="left" valign="top" width="70px" style="border: 0px solid black;">&nbsp;</td>
        <td align="left" valign="top" width="70px" style="border: 0px solid black;">&nbsp;</td>
        <td align="left" valign="top" width="140px" style="border: 0px solid black;">&nbsp;</td>
	</tr>
	<tr>
		<td align="left" valign="top" style="border: 0px solid black;" colspan="4">B. HASIL EVALUASI BERKAS ADMINISTRASI</td>
	</tr>
	<tr>
		<td align="center" valign="top" style="border: 1px solid black;">NO</td>
        <td align="center" valign="top" style="border: 1px solid black;">NAMA DOKUMEN</td>
        <td align="center" valign="top" style="border: 1px solid black;">DOKUMEN WAJIB</td>
        <td align="center" valign="top" style="border: 1px solid black;">STATUS DOKUMEN</td>
        <td align="center" valign="top" style="border: 1px solid black;">KESESUAIAN DOKUMEN</td>
        <td align="center" valign="top" style="border: 1px solid black;">KETERANGAN</td>
	</tr>	
    <?php
    for($i=0;$i<sizeof($adm);$i++) {
        echo '
        <tr>
            <td align="center" valign="top" style="border: 1px solid black;">' . $i . '</td>
            <td align="left" valign="top" style="border: 1px solid black;">' . $adm[$i]["nama"] . '</td>
            <td align="center" valign="top" style="border: 1px solid black;">' . $adm[$i]["wajib"] . '</td>
            <td align="center" valign="top" style="border: 1px solid black;">' . $adm[$i]["status"] . '</td>
            <td align="center" valign="top" style="border: 1px solid black;">' . $adm[$i]["kesesuaian"] . '</td>
            <td align="left" valign="top" style="border: 1px solid black;">' . $adm[$i]["ket"] . '</td>
        </tr>
        ';
    }
    ?>
	
	<tr>
		<td align="left" valign="top" style="border: 1px solid black;">&nbsp;</td>
        <td align="left" valign="top" style="border: 1px solid black;">&nbsp;</td>
        <td align="left" valign="top" style="border: 1px solid black;">&nbsp;</td>
        <td align="left" valign="top" style="border: 1px solid black;">&nbsp;</td>
        <td align="left" valign="top" style="border: 1px solid black;">&nbsp;</td>
        <td align="left" valign="top" style="border: 1px solid black;">&nbsp;</td>
	</tr>
</table>
<table style="font-size: 10px;border-collapse: collapse;">
	<tr>
		<td align="left" valign="top" width="30px" style="border: 0px solid black;">&nbsp;</td>
        <td align="left" valign="top" width="300px" style="border: 0px solid black;">&nbsp;</td>
        <td align="left" valign="top" width="70px" style="border: 0px solid black;">&nbsp;</td>
        <td align="left" valign="top" width="70px" style="border: 0px solid black;">&nbsp;</td>
        <td align="left" valign="top" width="70px" style="border: 0px solid black;">&nbsp;</td>
        <td align="left" valign="top" width="140px" style="border: 0px solid black;">&nbsp;</td>
	</tr>
	<tr>
		<td align="left" valign="top" style="border: 0px solid black;" colspan="4">C. HASIL EVALUASI BERKAS PERIJINAN</td>
	</tr>
	<tr>
		<td align="center" valign="top" style="border: 1px solid black;">NO</td>
        <td align="center" valign="top" style="border: 1px solid black;">NAMA DOKUMEN</td>
        <td align="center" valign="top" style="border: 1px solid black;">DOKUMEN WAJIB</td>
        <td align="center" valign="top" style="border: 1px solid black;">STATUS DOKUMEN</td>
        <td align="center" valign="top" style="border: 1px solid black;">KESESUAIAN DOKUMEN</td>
        <td align="center" valign="top" style="border: 1px solid black;">KETERANGAN</td>
	</tr>	
    <?php
    $x = 1;
    for($i=1;$i<sizeof($ijin);$i++) {
        echo '
        <tr>
            <td align="center" valign="top" style="border: 1px solid black;">' . $i . '</td>
            <td align="left" valign="top" style="border: 1px solid black;">' . $ijin[$i]["nama"] . '</td>
            <td align="center" valign="top" style="border: 1px solid black;">' . $ijin[$i]["wajib"] . '</td>
            <td align="center" valign="top" style="border: 1px solid black;">' . $ijin[$i]["status"] . '</td>
            <td align="center" valign="top" style="border: 1px solid black;">' . $ijin[$i]["kesesuaian"] . '</td>
            <td align="left" valign="top" style="border: 1px solid black;">' . $ijin[$i]["ket"] . '</td>
        </tr>
        ';
    }
    ?>
	
	<tr>
		<td align="left" valign="top" style="border: 1px solid black;">&nbsp;</td>
        <td align="left" valign="top" style="border: 1px solid black;">&nbsp;</td>
        <td align="left" valign="top" style="border: 1px solid black;">&nbsp;</td>
        <td align="left" valign="top" style="border: 1px solid black;">&nbsp;</td>
        <td align="left" valign="top" style="border: 1px solid black;">&nbsp;</td>
        <td align="left" valign="top" style="border: 1px solid black;">&nbsp;</td>
	</tr>
</table>
<table style="font-size: 10px;border-collapse: collapse;">
	<tr>
		<td align="left" valign="top" width="136px" style="border: 0px solid black;">&nbsp;</td>
        <td align="left" valign="top" width="136px" style="border: 0px solid black;">&nbsp;</td>
        <td align="left" valign="top" width="136px" style="border: 0px solid black;">&nbsp;</td>
        <td align="left" valign="top" width="136px" style="border: 0px solid black;">&nbsp;</td>
        <td align="left" valign="top" width="136px" style="border: 0px solid black;">&nbsp;</td>
	</tr>
	<tr>
		<td align="center" valign="top" style="border: 1px solid black;" colspan="2">DISETUJUI</td>
		<td align="center" valign="top" style="border: 1px solid black;" colspan="2">DIPERIKSA</td>
		<td align="center" valign="top" style="border: 1px solid black;" >SURVEYOR</td>		
	</tr>
	<tr>
		<td align="center" valign="middle" style="border: 1px solid black;height:50px;" ></td>
		<td align="center" valign="middle" style="border: 1px solid black;" ></td>
		<td align="center" valign="middle" style="border: 1px solid black;" ></td>
		<td align="center" valign="middle" style="border: 1px solid black;" ></td>
		<td align="center" valign="middle" style="border: 1px solid black;" ></td>
	</tr>
	<tr>
		<td align="center" valign="top" style="border: 1px solid black;" ></td>
		<td align="center" valign="top" style="border: 1px solid black;" ></td>
		<td align="center" valign="top" style="border: 1px solid black;" ></td>
		<td align="center" valign="top" style="border: 1px solid black;" ></td>
		<td align="center" valign="top" style="border: 1px solid black;" ></td>
	</tr>
</table>
<br/>

<div style="position: absolute;  width: 50%;  bottom: 20px; border: 1px solid black;" width="680px">
    <p align="center" style="font-size: 10px; margin:0px; padding:5px;" valign="middle">
        Berkas ini dicetak secara otomatis melalui Aplikasi Vendor PT.ENERGI PELABUHAN INDONESIA, dinyatakan sah dan tidak memerlukan tanda tangan.
    </p>
</div>