
<style type="text/css">
	.font_standar{
		font-size: 11px;
	}
	
</style>
<br>
<table width=100% border=0>
    <tr>
        <td width=60% colspan=2 style='font-size:14px;' valign=bottom><?=$judul?></td>
        <td width=20% rowspan=2><img src="<?php echo FCPATH.'assets/images/epi_1.png'; ?>" alt='logo' width='135' height='70' /></td>
    </tr>
    <tr>
        <td width=60% colspan=2 style='font-size:14px;' valign=bottom><?=$minat.$area?></td>
    </tr>
</table>
<br>
<table style="font-size: 10px;border-collapse: collapse;">
    <tr>
		<td align="left" valign="top" width="30px" style="border: 0px solid black;">&nbsp;</td>
        <td align="left" valign="top" width="120px" style="border: 0px solid black;">&nbsp;</td>
        <td align="left" valign="top" width="200px" style="border: 0px solid black;">&nbsp;</td>
        <td align="left" valign="top" width="350px" style="border: 0px solid black;">&nbsp;</td>
	</tr>
	<tr>
		<td align="center" valign="top" style="border: 1px solid black;">NO</td>
        <td align="center" valign="top" style="border: 1px solid black;">KODE REGISTER</td>
        <td align="center" valign="top" style="border: 1px solid black;">NAMA PERUSAHAAN</td>
        <td align="center" valign="top" style="border: 1px solid black;">ALAMAT</td>
	</tr>	
    <?php
    echo json_encode($data);
    for($i=0;$i<sizeof($data);$i++) {
        $x=$i+1;
        echo '
        <tr>
            <td align="center" valign="top" style="border: 1px solid black;">' . $x . '</td>
            <td align="left" valign="top" style="border: 1px solid black;">' . $data[$i][0] . '</td>
            <td align="left" valign="top" style="border: 1px solid black;">' . $data[$i][1] . '</td>
            <td align="justify" valign="top" style="border: 1px solid black;">' . $data[$i][2] . '</td>
        </tr>
        ';
    }
    ?>
</table>
<br/>

<div style="position: absolute;  width: 50%;  bottom: 20px; border: 1px solid black;" width="680px">
    <p align="center" style="font-size: 10px; margin:0px; padding:5px;" valign="middle">
        Berkas ini dicetak secara otomatis melalui Aplikasi Vendor PT.ENERGI PELABUHAN INDONESIA, dinyatakan sah dan tidak memerlukan tanda tangan.
    </p>
</div>