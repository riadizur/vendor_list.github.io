<!DOCTYPE html>
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Registrasi Vendor List PT. EPI</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="<?php echo base_url(); ?>assets/global/css/OpenSansGoogle.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo base_url(); ?>assets/global/plugins/select2/select2.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/admin/pages/css/login-soft.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo base_url(); ?>assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?php echo base_url(); ?>assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/layouts/layout5/css/layout.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/layouts/layout5/css/custom.min.css" rel="stylesheet" type="text/css" />

<link href="<?php echo base_url(); ?>assets/vendor/select2/select2.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/vendor/select2/select2.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/vendor/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet">

<!-- Spinner -->
<link href="<?php echo base_url(); ?>assets/olshop/Styler/css/theme.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>assets/olshop/Styler/plugins/jquery/jquery-1.11.3.min.js"></script>

<link rel="shortcut icon" href="favicon.ico"/>
<style>
    .content {
        max-width: 1100px;
        margin: auto;
		
    }
</style>
</head>
<!-- END HEAD -->

<!-- <div id="page-preloader" ><span class="spinner"></span></div> -->
<div id="page-preloader"><span class="spinner"></span></div>
<div class="page-header navbar navbar-fixed-top" role="navigation">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner container">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="http://ecopowerport.co.id">
			<img src="<?=base_url();?>/assets/admin/layout2/img/logo_epi.png" alt="logo" class="logo-defaul" height="40" width="72"/>
			</a>
		</div> 
		<!-- BEGIN PAGE TOP -->
		<div class="page-top">
			<!-- BEGIN HEADER SEARCH BOX -->
			<!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
			<form class="search-form search-form-expanded pull-right" action="extra_search.html" method="GET">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search..." name="query">
					<span class="input-group-btn">
					<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
					</span>
				</div>
			</form>
		</div>
	</div>
</div>
<body>	
<div class="page-container">
	<div class="content">
		<div class="row ">
			<hr><br>
		</div>
	</div>
</div>
<div class="page-container">
	<div class="content">
		<div class="row ">	
			<div class="portlet box green-jungle">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-globe"></i>Form Registrasi Vendor Baru
						
					</div>
					<div class="tools">
						<!-- <a href="https://ecopowerport.co.id/tata-cara-menjadi-vendor/"><font color="#ff0000"><strong><i class="fa fa-close"> CLOSE</i></strong></font></a> -->
						<a onclick="check_id();"><font color="#ff0000"><strong><i class="fa fa-close"> CLOSE</i></strong></font></a>
						<button type="button" id="button_close" data-target="#modal_close" data-toggle="modal" style="display:none;"></button>
						<a></a>
					</div>
				</div>
				<div class="portlet-body">
					<div class="portlet-body form">
						<form>
							<div class="tabbable-custom nav-justified">
								<ul class="nav nav-tabs nav-justified">
									<?php $lock=true;if($lock){ ?>
									<li class="active" id="tab_1_1_1_button">
										<a>Data Perusahaan </a>
									</li>
									<li id="tab_1_1_2_button">
										<a>Data PIC</a>
									</li>
									<li id="tab_1_1_3_button">
										<a>Berkas Administrasi</a>
									</li>
									<li id="tab_1_1_4_button">
										<a>Berkas Perijinan </a>
									</li>
									<li id="tab_1_1_5_button">
										<a>Pengalaman Proyek</a>
									</li>
									<li id="tab_1_1_6_button">
										<a>Minat Pekerjaan</a>
									</li>
									<?php }else { ?>
									<li class="active" id="tab_1_1_1_button">
										<a href="#tab_1_1_1" role="tab" data-toggle="tab">Data Perusahaan</a>
									</li>
									<li id="tab_1_1_2_button">
										<a href="#tab_1_1_2" role="tab" data-toggle="tab">Data PIC</a>
									</li>
									<li id="tab_1_1_3_button">
										<a href="#tab_1_1_3" role="tab" data-toggle="tab">Berkas Administrasi</a>
									</li>
									<li id="tab_1_1_4_button">
										<a href="#tab_1_1_4" role="tab" data-toggle="tab">Berkas Perijinan </a>
									</li>
									<li id="tab_1_1_5_button">
										<a href="#tab_1_1_5" role="tab" data-toggle="tab">Pengalaman Proyek</a>
									</li>
									<li id="tab_1_1_6_button">
										<a href="#tab_1_1_6" role="tab" data-toggle="tab">Minat Pekerjaan</a>
									</li>
									<?php } ?>
								</ul>
							</div>
							<div class="tab-content">
								<div class="tab-pane active" id="tab_1_1_1">
									<div class="portlet box green-soft">
										<div class="portlet-body">
											<div class="portlet-body form">
												<form action="#" id="data_perusahaan" class="form-horizontal" role="form" enctype="multipart/form-data">
													<div class="form-body">
														<div class="row">
															<div class="col-md-6">
																<div class="panel panel-success">
																	<div class="panel-body form-horizontal">
																		<div class="form-group">
																			<label class="col-md-4 control-label align-left">Kode Registrasi</label>
																			<div class="col-md-8">
																				<input type="text" name="id_vd" style="font-weight:bold;" id="id_vd" class="form-control input-sm" value="<?=$kode_register;?>" placeholder="<?=$kode_register;?>" readonly="true">
																				<span class="help-block"><small><small>Mohon Dicatat !</small></small></span>
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-md-4 control-label align-left">Bentuk Perusahaan<span class="text-danger"><small>*</small></span></label>
																			<div class="col-md-8">
																				<?=$dropdown_bentuk_prsh;?>
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-md-4 control-label align-left">Nama Perusahaan<span class="text-danger"><small>*<br>(Hanya Nama)</small></span></label>
																			<div class="col-md-8">
																				<input type="text" name="nama_pt" id="nama_pt" class="form-control input-sm" placeholder=" " required/>																		
																				<span>Status [<span class="text-success">optional</span>] : <small>
																					<?php
																					$status_prsh=$this->db_models->result('tr_status_prsh',array());
																					foreach($status_prsh as $sp){	?>
																					<input type="checkbox" onclick="status_prsh_checbox($(this).val());" name="status_prsh" id="<?=$sp->status_prsh;?>" value="<?=$sp->status_prsh?>"><?=$sp->status_prsh?>
																					<?php } ?>
																				</small></span>
																				<span class="help-block text-danger" id="alert1" style="display:none;"><small><small>* Form ini wajib diisi !</small></small></span>
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-md-4 control-label align-left">Alamat<span class="text-danger"><small>*</small></span></label>
																			<div class="col-md-8">
																				<input type="text" name="alamat_pt" id="alamat_pt" class="form-control input-sm" placeholder=" " required />
																				<span class="help-block text-danger" id="alert2" style="display:none;"><small><small>* Form ini wajib diisi !</small></small></span>
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-md-4 control-label align-left">Provinsi<span class="text-danger"><small>*</small></span></label>
																			<div class="col-md-8">
																				<?=$dropdown_provinsi;?>
																				<span class="help-block text-danger" id="alert3" style="display:none;"><small><small>* Anda belum memilih Provinsi !</small></small></span>
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-md-4 control-label align-left">Kota<span class="text-danger"><small>*</small></span></label>
																			<div class="col-md-8">
																				<?=$dropdown_kabupaten;?>
																				<span class="help-block text-danger" id="alert4" style="display:none;"><small><small>* Anda belum memilih Kabupaten !</small></small></span>
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-md-4 control-label align-left">Kecamatan<span class="text-danger"><small>*</small></span></label>
																			<div class="col-md-8">
																				<?=$dropdown_kecamatan;?>
																				<span class="help-block text-danger" id="alert5" style="display:none;"><small><small>* Anda belum memilih Kecamatan !</small></small></span>
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-md-4 control-label align-left">Kodepos<span class="text-danger"><small>*</small></span></label>
																			<div class="col-md-8">
																				<input type="text" name="kodepos" id="kodepos" class="form-control input-sm number" placeholder="" required>
																				<span class="help-block text-danger" id="alert6" style="display:none;"><small><small>* Form ini wajib diisi !</small></small></span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-6">
																<div class="panel panel-success">
																	<div class="panel-body form-horizontal">
																		<div class="form-group">
																			<label class="col-md-4 control-label align-left">Jabatan Tertinggi<span class="text-danger"><small>*</small></span></label>
																			<div class="col-md-8">
																				<input type="text" name="jab_tertinggi" id="jab_tertinggi" class="form-control input-sm" placeholder=" " required />
																				<span class="help-block"><small><small>(Sesuai Akta)</small></small></span>
																				<span class="help-block text-danger" id="alert7" style="display:none;"><small><small>* Form ini wajib diisi !</small></small></span>
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-md-4 control-label align-left">Nama Pejabat tertinggi<span class="text-danger"><small>*</small></span></label>
																			<div class="col-md-8">
																				<input type="text" name="nama_jab_tertinggi" id="nama_jab_tertinggi" class="form-control input-sm" placeholder=" " required />
																				<span class="help-block text-danger" id="alert8" style="display:none;"><small><small>* Form ini wajib diisi !</small></small></span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-6">
																<div class="panel panel-success">
																	<div class="panel-body form-horizontal">
																		<div class="form-group">
																			<label class="col-md-4 control-label align-left">Nomor Telepon Perusahaan<span class="text-danger"><small>*</small></span></label>
																			<div class="col-md-4">
																				<?=$dropdown_kode_area_telp_perusahaan?>
																				<span class="help-block text-danger" id="alert91" style="display:none;"><small><small>* Pilih kode Area !</small></small></span>
																			</div>
																			<div class="col-md-4">
																				<input type="text" name="no_tlp_pt" id="no_tlp_pt" class="form-control input-sm number" placeholder=" "   required>
																				<span class="help-block text-danger" id="alert9" style="display:none;"><small><small>* Form ini wajib diisi !</small></small></span>
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-md-4 control-label align-left">Email Perusahaan<span class="text-danger"><small>*</small></span></label>
																			<div class="col-md-8">
																				<input type="text" name="email_pt" id="email_pt" class="form-control input-sm" placeholder=" " required>
																				<span class="help-block text-danger" id="alert10" style="display:none;"><small><small>* Form ini wajib diisi !</small></small></span>
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-md-4 control-label align-left">Website Perusahaan</label>
																			<div class="col-md-8">
																				<input type="text" name="web_pt" id="web_pt" class="form-control input-sm" placeholder=" "   required>
																				<!-- <span class="help-block text-danger" id="alert11" style="display:none;"><small><small>* Form ini wajib diisi !</small></small></span> -->
																			</div>
																		</div>
																		
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="panel panel-success">
																<div class="panel-body form-horizontal">
																	<h4 class="text-info" >Bidang usaha saat ini  :</h4>
																	<hr/>
																	<div class="col-md-6">
																		<div class="input-group">
																			<div class="icheck-list">
																		<?php
																		$x=sizeof($list_bidang);
																		$y=$x%2;
																		if($y==0){
																			$nx=$x/2;
																			$ny=$nx+$nx;
																		}else{
																			$nx=intval($x/2)+1;
																			$ny=$nx+$nx-1;
																		}
																		for($i=0;$i<$nx; $i++){ 
																			$ceklist=$this->db_models->cek('temp_register_bidang_pekerjaan',array('kode_register'=>$kode_register,'kode_bidang'=>$list_bidang[$i]->kode))? 'checked': '';
																			echo '<label><input type="checkbox" class="icheck" id="checklist_bidang_' . $i . '" onclick="add_bidang_pekerjaan(' . $i . ')" value="' . $list_bidang[$i]->kode . '" '.$ceklist.'> ' . $list_bidang[$i]->nama . '</label>';
																		} ?>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="input-group">
																			<div class="icheck-list">
																		<?php
																		for($i=$nx;$i<$ny; $i++){ 
																			echo '<label><input type="checkbox" class="icheck" id="checklist_bidang_' . $i . '" onclick="add_bidang_pekerjaan(' . $i . ')" value="' . $list_bidang[$i]->kode . '"> ' . $list_bidang[$i]->nama . '</label>';
																		} ?>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<span class="help-block text-danger" id="alert81" style="display:none;"><small><small>* Bidang pekerjaan saat ini wajib dipilih !</small></small></span>
														</div>
													</div>
													<div class="form-actions">
														<button type="button" id="btnSave" onclick="next_1();" class="btn blue pull-right">Next</a></button>
														<!-- <button type="button" id="btnSave" class="btn blue pull-right" data-target="#modal_dokumen" data-toggle="modal">Selesai</button> -->
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab_1_1_2">
									<div class="portlet box green-soft">
										<div class="portlet-body">
											<div class="portlet-body form">
												<!-- <form action="#" id="data_pic" class="form-horizontal" role="form" enctype="multipart/form-data"> -->
													<!-- <div class="form-body"> -->
														<div class="row">
															<div class="col-md-6">
																<div class="panel panel-success">
																	<div class="panel-body form-horizontal">
																		<div class="form-group">
																			<label class="col-md-4 control-label align-left">Nama PIC<span class="text-danger"><small>*</small></span></label>
																			<div class="col-md-8">
																				<input type="text" name="nama_pic" id="nama_pic" class="form-control input-sm" placeholder=" " required />
																				<span class="help-block text-danger" id="alert12" style="display:none;"><small><small>* Form ini wajib diisi !</small></small></span>
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-md-4 control-label align-left">No. Handphone<span class="text-danger"><small>*</small></span></label>
																			<div class="col-md-4">
																				<?=$dropdown_kode_area_telp_pic?>
																				<span class="help-block text-danger" id="alert131" style="display:none;"><small><small>* Pilih kode Area !</small></small></span>
																			</div>
																			<div class="col-md-4">
																				<input type="text" name="no_hp_pic" id="no_hp_pic" class="form-control input-sm number" placeholder=" "   required>
																				<span class="help-block text-danger" id="alert13" style="display:none;"><small><small>* Form ini wajib diisi !</small></small></span>
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-md-4 control-label align-left">Email<span class="text-danger"><small>*</small></span></label>
																			<div class="col-md-8">
																				<input type="text" name="email_pic" id="email_pic" class="form-control input-sm" placeholder=" " required />
																				<span class="help-block text-danger" id="alert14" style="display:none;"><small><small>* Form ini wajib diisi !</small></small></span>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="panel panel-success">
																	<div class="panel-body form-horizontal">

																		<div class="form-group">
																			<label class="col-md-4 control-label align-left" id="identitas1">NIK<span class="text-danger"><small>*</small></span></label>
																			<div class="col-md-6">
																				<input type="text" name="nik_pic" id="nik_pic" class="form-control input-sm number" placeholder=" "   required>
																				<input type="text" name="nik_pic" id="no_passpor" style="display:none;" class="form-control input-sm" placeholder=" "   required>
																				<span class="help-block text-danger" id="alert15" style="display:none;"><small><small>* Form ini wajib diisi !</small></small></span>
																				<span class="help-block text-danger" id="alert151" style="display:none;"><small><small>* Nomor NIK Harus 16 Digit !</small></small></span>
																			</div>
																			<div class="col-md-2">
																				<div class="row">
																					<span><input type="checkbox" class="icheck" id="ktp" onclick="$('#ktp').attr('checked',true);$('#passpor').attr('checked',false); $('#identitas1').html('NIK'); $('#identitas2').html('NIK'); $('#nik_pic').removeClass('form-control input-sm'); $('#nik_pic').addClass('form-control input-sm number'); $('#nik_pic').show();$('#no_passpor').hide();" checked><small> KTP</small></span><br>
																					<span><input type="checkbox" class="icheck" id="passpor" onclick="$('#passport').attr('checked',true);$('#ktp').attr('checked',false); $('#identitas1').html('No Passpor'); $('#identitas2').html('Passpor'); $('#nik_pic').removeClass('form-control input-sm number'); $('#nik_pic').addClass('form-control input-sm');$('#nik_pic').hide();$('#no_passpor').show();$('#no_passpor').val($('#nik_pic').val());"><small> Passpor</small></span>
																				</div>
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-md-4 control-label align-left">Upload File <div id="identitas2">KTP</div><span class="text-danger"><small>*</small></span></label>
																			<div class="col-md-8">
																				<!-- <input type="file" id="file_ktp" name="file_ktp" class="form-control input-sm">
																				<span class="help-block text-danger" id="alert16" style="display:none;"><small><small>* Anda belum upload file KTP !</small></small></span>
																				<div class="col-md-12"> -->
																				<form id="upload_ktp_pic" action="<?=base_url()?>register/upload/data_pic" method="post" enctype="multipart/form-data">
																					<div class="row">
																						<input class="col-md-8" id="form_upload_ktp" type="file" name="myfile">
																						<input class="col-md-3" id="upload_ktp" type="submit" value="upload" style="display:none;">
																					</div>
																					<span class="help-block text-danger" id="alert16" style="display:none;"><small><small>* Anda belum upload file KTP !</small></small></span>
																				</form>
																				<div class="progress" style="display:none;" id="bar_ktp_bar">
																					<div class="progress-bar" id="bar_ktp" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
																					<div class="percent" id="percent_bar_ktp">0%</div >
																				</div>
																				<div id="file_ktp"></div>
																				<div id="nama_file_ktp"></div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-6">
																<div class="panel panel-success">
																	<div class="panel-body form-horizontal">
																		<h4 class="text-info" >Upload Foto PIC</h4>
																		<div class="form-group" id="form_pas_foto">
																			<?php
																			if(!(file_exists($lokasi_file_foto))){ ?>
																			<center><img id="lokasi_file_foto" src="<?=base_url();?>/assets/file/vd_list/gambar.png" height="300px;" width="225px;"></center>
																			<?php }else{ ?>
																			<center><img id="lokasi_file_foto" src="<?=base_url().$lokasi_file_foto;?>" height="300px;" width="225px;"></center>
																			<?php } ?>
																		</div>
																		<div class="form-group">
																			<div class="col-md-12">
																				<form id="upload_foto_pic" action="<?=base_url()?>register/upload/data_pic-foto" method="post" enctype="multipart/form-data">
																					<div class="row">
																						<input class="col-md-9" id="form_upload_fo_pic" type="file" name="myfile">
																						<input class="col-md-2" id="upload_fo_pic"type="submit" value="Upload" style="display:none;">
																					</div>
																				</form>
																				<div class="progress" style="display:none;" id="bar_foto_bar">
																					<div class="progress-bar" id="bar_foto" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
																					<div class="percent" id="percent_bar_foto">0%</div >
																				</div>
																				<div id="status_upload_foto_pic"></div>
																				<span class="help-block text-danger" id="alertfoto" style="display:none;"><small><small>* Anda belum upload file foto !</small></small></span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													<!-- </div> -->
													<div class="form-actions">
														<button type="button" id="btnUpdate" onclick="prev_2()" class="btn blue pull-left">Prev</button>
														<button type="button" id="btnSave" onclick="next_2()" class="btn blue pull-right">Next</button>
													</div>
												<!-- </form> -->
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab_1_1_3">
									<div class="portlet box green-soft">
										<div class="portlet-body">
											<div class="portlet-body form">
												<!-- <form action="#" id="data_perusahaan" class="form-horizontal" role="form" enctype="multipart/form-data">
													<div class="form-body"> -->
														<div class="row">
															<div class="col-md-12">
																<div class="panel panel-primary">
																	<div class="panel-body form-horizontal">
																		<div class="col-md-6">
																			<div class="panel panel-success">
																				<div class="panel-body form-horizontal">
																					<div class="form-group">
																						<label class="col-md-4 control-label align-left">Pilih Berkas<span class="text-danger"><small>*</small></span></label>
																						<div class="col-md-8">
																							<?=$dropdown_berkas_administrasi;?>
																							<span class="help-block text-danger" id="alertadm1" style="display:none;"><small><small>* Anda Belum Memilih Jenis Berkas !</small></small></span>
																						</div>
																					</div>
																					<div class="form-group">
																						<label class="col-md-4 control-label align-left">Nomor<span class="text-danger"><small>*</small></span></label>
																						<div class="col-md-8">
																							<input type="text" name="no_berkas_adm" id="no_berkas_adm" class="form-control input-sm" placeholder=" " required />
																							<span class="help-block text-danger" id="alertadm2" style="display:none;"><small><small>* Form ini wajib diisi !</small></small></span>
																						</div>
																						<!-- <div class="input-group col-md-3" style="display:none;">
																							<div class="icheck-list col-md-1">
																								<input type="checkbox" class="icheck" id="checkbox_nomor_adm" value="0">
																							</div>
																							<label class="col-md-2">Perlu Pengesahan</label>
																						</div> -->
																					</div>
																					<div class="form-group" id="form_nomor_pengesahan" style="display:none;">
																						<label class="col-md-4 control-label align-left">Nomor Pengesahan<span class="text-danger"><small>*</small></span></label>
																						<div class="col-md-8">
																							<input type="text" name="no_pengesahan_adm" id="no_pengesahan_adm" class="form-control input-sm" placeholder=" " required />
																							<span class="help-block text-danger" id="alertadm3" style="display:none;"><small><small>* Form ini wajib diisi !</small></small></span>
																						</div>
																					</div>
																					<div class="form-group" id="form_tgl_pengesahan" style="display:none;">
																						<label class="col-md-4 control-label align-left">Tanggal Pengesahan<span class="text-danger"><small>*</small></span></label>
																						<div class="col-md-8">
																							<input type="text" name="tgl_pengesahan_adm" id="tgl_pengesahan_adm" class="form-control input-sm datepicker" placeholder="Tanggal Pengesahan" required />
																							<span class="help-block text-danger" id="alertadm4" style="display:none;"><small><small>* Form ini wajib diisi !</small></small></span>
																						</div>
																					</div>
																					<div class="form-group">
																						<label class="col-md-4 control-label align-left">Tanggal Berlaku<span class="text-danger"><small>*</small></span></label>
																						<div class="col-md-4" id="form_tgl_berlaku_adm">
																							<input type="text" name="tgl_berlaku_adm" id="tgl_berlaku_adm" class="form-control input-sm datepicker" placeholder="Tanggal Berlaku " required />
																							<span class="help-block text-danger" id="alertadm53" style="display:none;"><small><small>* Belum diisi !</small></small></span>
																							<span class="help-block">
																								<div class="input-group">
																									<div class="icheck-list">
																										<div class="row">
																											<label>&nbsp;&nbsp;&nbsp;</label>
																											<label><input type="checkbox" class="icheck" id="checkbox_masa_adm" value="0"><small> Berlaku Selamanya</small></label>
																										</div>
																									</div>
																								</div>
																							</span>
																						</div>
																						<!-- <label class="col-md-1 control-label align-left" id="form_label_sd" for="file_akta_pendirian">sd</label> -->
																						<div class="col-md-4" id="form_tgl_expired_adm">
																							<input type="text" name="tgl_exp_adm" id="tgl_exp_adm" class="form-control input-sm datepicker" placeholder="Tanggal Expired " required />
																							<span class="help-block text-danger" id="alertadm52" style="display:none;"><small><small>* Belum diisi !</small></small></span>
																						</div>
																						<span class="help-block text-danger" id="alertadm51" style="display:none;"><small><small>* Dokumen sudah expired.</small></small></span>
																						<span class="help-block text-danger" id="alertadm54" style="display:none;"><small><small>* Masa berlaku kurang dari 3 bulan lagi</small></small></span>
																						<span class="help-block text-danger" id="alertadm55" style="display:none;"><small><small>* Format masa berlaku salah</small></small></span>
																					</div>
																					<div class="form-group">
																						<label class="col-md-4 control-label align-left">Upload File</label>
																						<div class="col-md-8">
																							<!-- <input type="file" id="file_ktp" name="file_ktp" class="form-control input-sm">
																							<span class="help-block text-danger" id="alert16" style="display:none;"><small><small>* Anda belum upload file KTP !</small></small></span>
																							<div class="col-md-12"> -->
																							<form id="upload_doc_adms" action="<?=base_url()?>register/upload/data_adms" method="post" enctype="multipart/form-data">
																								<div class="row">
																									<input class="col-md-8" id="form_upload_file_adms" type="file" name="myfile">
																									<input class="col-md-3" id="upload_file_adms" type="submit" value="Upload" style="display:none;">
																								</div>
																								<!-- <span class="help-block text-danger" id="alert16" style="display:none;"><small><small>* Anda belum upload file KTP !</small></small></span> -->
																							</form>
																							<div class="progress" style="display:none;" id="bar_adms_bar">
																								<div class="progress-bar" id="bar_adms" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
																								<div class="percent" id="percent_bar_adms">0%</div >
																							</div>
																							<span class="help-block text-danger" id="alertadm6" style="display:none;"><small><small>* Anda Belum Upload Berkas !</small></small></span>
																							<div id="file_adms"></div>
																							<div id="nama_file_adms"></div>
																						</div>
																					</div>
																					<!-- <div class="form-group">
																						<label class="col-md-4 control-label align-left" for="file_akta_pendirian">Upload Berkas</label>
																						<div class="col-md-8">
																							<input type="file" id="file_berkas_adm" name="file_berkas_adm" class="form-control input-sm">
																							<span class="help-block"></span>
																						</div>
																					</div> -->
																					<div class="form-group">
																						<div class="col-md-12">
																							<button type="button" id="btn_add_data_adm" onclick="add_data_adm()" class="btn blue pull-right">Tambahkan</button>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="panel panel-success">
																				<div class="panel-body form-horizontal">
																					<h4 class="text-info" >Daftar Dokumen Wajib :</h4>
																					<div class="table-scrollable">
																						<table class="table table-striped table-hover" id="tabel_daftar_adm_wajib" width="100%" cellspacing="0">
																							<thead>
																								<tr>
																									<th width='5%' class="align-middle text-center">No.</th>
																									<th width="70%" class="align-middle text-center">Dokumen Wajib</th>
																									<th width="25%" class="align-middle text-center">Status Upload</th>
																								</tr>
																							</thead>
																							<tbody>
																							</tbody>
																						</table>
																					</div>
																				</div>
																			</div>
																		</div>																	
																	</div>
																</div>
															</div>
															<div class="col-md-12">
																<div class="panel panel-success">
																	<div class="panel-body form-horizontal">
																		<h4 class="text-info" >Daftar Berkas Administrasi</h4>
																		<div class="table-responsive">
																			<table class="table table-striped table-hover" id="tabel_daftar_berkas_adm" width="100%">
																				<thead>
																					<th width="5%">No.</th>
																					<th width="40%">Jenis Berkas</th>
																					<th width="30%">Nama File</th>
																					<!-- <th>Nomor</th> -->
																					<th width="15%">Tanggal Berlaku</th>
																					<th width = "10%">Aksi</th>
																				</thead>
																				<tbody>
																				</tbody>
																			</table>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													<!-- </div> -->
													<div class="form-actions">
														<button type="button" id="btnUpdate" onclick="prev_3()" class="btn blue pull-left">Prev</button>
														<button type="button" id="btnSave" onclick="next_3()" class="btn blue pull-right">Next</button>
													</div>
												<!-- </form> -->
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab_1_1_4">
									<div class="portlet box green-soft">
										<div class="portlet-body">
											<div class="portlet-body form">
												<!-- <form action="#" id="berkas_perijinan" class="form-horizontal" role="form" enctype="multipart/form-data"> -->
													<!-- <div class="form-body"> -->
														<div class="row">
															<div class="col-md-12">
																<div class="panel panel-success">
																	<div class="panel-body form-horizontal">
																		<div class="col-md-6">
																			<h4 class="text-info" >Upload Berkas Perijinan</h4>
																			<div class="panel panel-success">
																				<div class="panel-body form-horizontal">
																					<div class="form-group">
																						<label class="col-md-4 control-label align-left">Jenis Berkas</label>
																						<div class="col-md-8">
																							<?=$dropdown_berkas_perijinan;?>
																							<span class="help-block"></span>
																						</div>
																					</div>
																					
																					<div class="form-group" id="form_sil" style="display:none;">
																						<label class="col-md-4 control-label align-left">Nama Perijinan</label>
																						<div class="col-md-8">
																							<input type="text" name="sil" id="sil"  class="form-control input-sm" placeholder=" " required />
																							<span class="help-block">
																								<div class="input-group">
																									<div class="icheck-list">
																										<div class="row">
																											<label>&nbsp;&nbsp;&nbsp;</label>
																											<label><input type="checkbox" class="icheck" id="perlu_kbli" onclick="check_kbli()" value="0"><small> Ada Kode KBLI&nbsp;&nbsp;</small></label>
																											<label style="display:none;" id="perlu_grade_form"><input type="checkbox" class="icheck" id="perlu_grade" onclick="check_kbli()" value="0"><small> Ada Grade</small></label>
																										</div>
																									</div>
																								</div>
																							</span>
																						</div>
																					</div>
																					<div class="form-group">
																						<label class="col-md-4 control-label align-left">Nomor</label>
																						<div class="col-md-8">
																							<input type="text" name="nomor_berkas_ijin" id="nomor_berkas_ijin"  class="form-control input-sm" placeholder=" " required />
																							<span class="help-block"></span>
																						</div>
																					</div>
																					<div class="form-group">
																						<label class="col-md-4 control-label align-left">Masa Aktif</label>
																						<div class="col-md-4" id="form_tgl_berlaku_berkas_ijin">
																							<input type="text" name="tgl_berlaku_berkas_ijin" id="tgl_berlaku_berkas_ijin" class="form-control input-sm datepicker" placeholder="Tanggal Berlaku " required />
																							<span class="help-block">
																								<div class="input-group">
																									<div class="icheck-list">
																										<div class="row">
																											<label>&nbsp;&nbsp;&nbsp;</label>
																											<label><input type="checkbox" class="icheck" id="checkbox_masa_ijin" value="0"><small> Aktif Selamanya</small></label>
																										</div>
																									</div>
																								</div>
																							</span>
																						</div>
																						<!-- <label class="col-md-1 control-label align-left" id="form_label_sd_ijin" for="tgl_exp_berkas_ijin">sd</label> -->
																						<div class="col-md-4" id="form_tgl_expired_adm">
																							<input type="text" name="tgl_exp_berkas_ijin" id="tgl_exp_berkas_ijin" class="form-control input-sm datepicker" placeholder="Tanggal Expired " required />
																							<span class="help-block"></span>
																						</div>
																					</div>
																					<div class="form-group">
																						<label class="col-md-4 control-label align-left">Upload File</label>
																						<div class="col-md-8">
																							<!-- <input type="file" id="file_ktp" name="file_ktp" class="form-control input-sm">
																							<span class="help-block text-danger" id="alert16" style="display:none;"><small><small>* Anda belum upload file KTP !</small></small></span>
																							<div class="col-md-12"> -->
																							<form id="upload_doc_ijin" action="<?=base_url()?>register/upload/data_ijin" method="post" enctype="multipart/form-data">
																								<div class="row">
																									<input class="col-md-8" id="form_upload_file_ijin" type="file" name="myfile">
																									<input class="col-md-3" id="upload_file_ijin" type="submit" value="Upload" style="display:none;">
																								</div>
																								<!-- <span class="help-block text-danger" id="alert16" style="display:none;"><small><small>* Anda belum upload file KTP !</small></small></span> -->
																							</form>
																							<div class="progress" style="display:none;" id="bar_ijin_bar">
																								<div class="progress-bar" id="bar_ijin" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
																								<div class="percent" id="percent_bar_adms">0%</div >
																							</div>
																							<div id="file_ijin"></div>
																							<div id="nama_file_ijin"></div>
																						</div>
																					</div>
																					<!-- <div class="form-group">
																						<label class="col-md-4 control-label align-left" for="file_siup">Upload Berkas</label>
																						<div class="col-md-8">
																							<input type="file" id="file_berkas_ijin" name="file_berkas_ijin" class="form-control input-sm">
																							<span class="help-block"></span>
																						</div>
																					</div> -->
																					<div class="form-group" id="button_add_berkas_1" style="display:none;">
																						<div class="col-md-12">
																							<button type="button" id="button_ijin" onclick="add_berkas_ijin_1()" class="btn blue pull-right">Tambahkan</button>
																						</div> 
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-6" id="<?=$form_klasifikasi;?>" style="display:none;">
																			<h4 class="text-info" >Tabel Daftar Klasifikasi Bidang Usaha</h4>
																			<div class="panel panel-success">
																				<div class="panel-body form-horizontal">
																					<div class="form-group"> 
																						<div class="col-md-6" id="<?=$form_kbli;?>">
																							<?=$dropdown_klasifikasi;?>
																							<span class="help-block"></span>
																						</div>
																						<div class="col-md-5" id="<?=$form_grade;?>">
																							<?=$dropdown_grade;?> 
																							<span class="help-block"></span>
																						</div>
																						<div class="col-md-1">
																							<button type="button" id="btnAdd_klasifikasi" onclick="add_klasifikasi()" class="btn green pull-right">+</button>
																						</div>
																					</div>
																					<div class="form-group" id="form_modal_usaha" style="display:none;" >
																						<label class="col-md-3 control-label align-left">Modal Usaha (Rp.)</label>
																						<div class="col-md-8">
																							<input type="text" name="modal_usaha_berkas_ijin" id="modal_usaha_berkas_ijin" class="form-control input-sm number" placeholder=" "   required>
																							<span class="help-block"></span>
																						</div>
																					</div>
																					<div class="table-scrollable">
																						<table class="table table-striped table-hover" id="tabel_daftar_bidang_usaha" width="100%" cellspacing="0">
																							<thead>
																								<tr>
																									<th width='50'>No.</th>
																									<th>Kode KBLI</th>
																									<th>Klasifikasi Bidang Usaha</th>
																									<th>Grade</th>
																									<th>Modal Usaha</th>
																									<th width = "70">Aksi</th>
																								</tr>
																							</thead>
																							<tbody>
																							</tbody>
																						</table>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="form-group" id="button_add_berkas_2" style="display:none;">
																			<div class="col-md-12">
																				<hr/>
																				<button type="button" id="button_ijin_2" onclick="add_berkas_ijin_2()" class="btn blue pull-right">Tambahkan</button>
																			</div> 
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-12">
																<h4 class="text-info" >Tabel Daftar Berkas Perijinan</h4>
																<div class="panel panel-success">
																	<div class="panel-body form-horizontal">
																		<div class="table-scrollable">
																			<table class="table table-striped table-hover" id="tabel_daftar_berkas_ijin" width="100%" cellspacing="0">
																				<thead>
																					<th width='50'>No.</th>
																					<th>Nama Perijinan</th>
																					<th>Nama File</th>
																					<th>Tanggal berlaku</th>
																					<th width = "70">Aksi</th>
																				</thead>
																				<tbody>
																				</tbody>
																			</table>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													<!-- </div> -->
													<div class="form-actions">
														<button type="button" id="btnUpdate" onclick="prev_4()" class="btn blue pull-left">Prev</button>
														<button type="button" id="btnSave" onclick="next_4()" class="btn blue pull-right">Next</button>
													</div>
												<!-- </form> -->
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab_1_1_5">
									<div class="portlet box green-soft">
										<div class="portlet-body">
											<div class="portlet-body form"> 
												<!-- <form action="#" id="pengalaman_proyek" class="form-horizontal" role="form" enctype="multipart/form-data"> -->
													<!-- <div class="form-body"> -->
														<div class="row">
															<div class="col-md-12">
																<div class="panel panel-primary">
																	<div class="panel-body form-horizontal">
																		<div class="col-md-6">
																			<div class="panel panel-success">
																				<div class="panel-body form-horizontal">
																					<div class="form-group">
																						<label class="col-md-4 control-label align-left">Jenis Pekerjaan</label>
																						<div class="col-md-8">
																							<?=$dropdown_jen_pekerjaan;?>
																							<span class="help-block"></span>
																						</div>
																					</div>
																					<div class="form-group">
																						<label class="col-md-4 control-label align-left">Nama Pekerjaan</label>
																						<div class="col-md-8">
																							<input type="text" name="nama_pekerjaan" id="nama_pekerjaan" class="form-control input-sm" placeholder=" " required />
																							<span class="help-block"></span>
																						</div>
																					</div>
																					<div class="form-group">
																						<label class="col-md-4 control-label align-left">Nilai</label>
																						<div class="col-md-8">
																							<input type="text" name="nilai_pekerjaan" id="nilai_pekerjaan" class="form-control input-sm number" placeholder=" " required />
																							<span class="help-block"></span>
																						</div>
																					</div>
																					<div class="form-group">
																						<label class="col-md-4 control-label align-left">Tahun</label>
																						<div class="col-md-8">
																							<input type="text" name="tahun_pekerjaan" id="tahun_pekerjaan" class="form-control input-sm tahun" placeholder=" " required />
																							<span class="help-block"></span>
																						</div>
																					</div>
																					<div class="form-group">
																						<label class="col-md-4 control-label align-left">Pemberi Pekerjaan</label>
																						<div class="col-md-8">
																							<input type="text" name="pemberi_pekerjaan" id="pemberi_pekerjaan" class="form-control input-sm" placeholder=" " required />
																							<span class="help-block"></span>
																						</div>
																					</div>
																					<div class="form-group">
																						<label class="col-md-4 control-label align-left">Upload Berkas Kontrak</label>
																						<div class="col-md-8">
																							<!-- <input type="file" id="file_ktp" name="file_ktp" class="form-control input-sm">
																							<span class="help-block text-danger" id="alert16" style="display:none;"><small><small>* Anda belum upload file KTP !</small></small></span>
																							<div class="col-md-12"> -->
																							<form id="upload_doc_pengalaman" action="<?=base_url()?>register/upload/data_pengalaman" method="post" enctype="multipart/form-data">
																								<div class="row">
																									<input class="col-md-8" type="file" name="myfile">
																									<input class="col-md-3" type="submit" value="Upload">
																								</div>
																								<!-- <span class="help-block text-danger" id="alert16" style="display:none;"><small><small>* Anda belum upload file KTP !</small></small></span> -->
																							</form>
																							<div class="progress" style="display:none;" id="bar_pengalaman_bar">
																								<div class="progress-bar" id="bar_pengalaman" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
																								<div class="percent" id="percent_bar_pengalaman">0%</div >
																							</div>
																							<div id="file_pengalaman"></div>
																							<div id="nama_file_pengalaman"></div>
																						</div>
																					</div>
																					<div class="form-group">
																						<label class="col-md-4 control-label align-left">Upload Berkas BAST1</label>
																						<div class="col-md-8">
																							<!-- <input type="file" id="file_ktp" name="file_ktp" class="form-control input-sm">
																							<span class="help-block text-danger" id="alert16" style="display:none;"><small><small>* Anda belum upload file KTP !</small></small></span>
																							<div class="col-md-12"> -->
																							<form id="upload_doc_bast1" action="<?=base_url()?>register/upload/data_pengalaman" method="post" enctype="multipart/form-data">
																								<div class="row">
																									<input class="col-md-8" type="file" name="myfile">
																									<input class="col-md-3" type="submit" value="Upload">
																								</div>
																								<!-- <span class="help-block text-danger" id="alert16" style="display:none;"><small><small>* Anda belum upload file KTP !</small></small></span> -->
																							</form>
																							<div class="progress" style="display:none;" id="bar_bast1_bar">
																								<div class="progress-bar" id="bar_bast1" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
																								<div class="percent" id="percent_bar_bast1">0%</div >
																							</div>
																							<div id="file_bast1"></div>
																							<div id="nama_file_bast1"></div>
																						</div>
																					</div>
																					<!-- <div class="form-group">
																						<label class="col-md-4 control-label align-left" for="file_siup">Upload Berkas Kontrak</label>
																						<div class="col-md-8">
																							<input type="file" id="file_berkas_bast" name="file_berkas_bast" class="form-control input-sm">
																							<span class="help-block"></span>
																						</div>
																					</div>
																					<div class="form-group">
																						<label class="col-md-4 control-label align-left" for="file_siup">Upload Berkas BAST1</label>
																						<div class="col-md-8">
																							<input type="file" id="file_berkas_bast" name="file_berkas_bast" class="form-control input-sm">
																							<span class="help-block"></span>
																						</div>
																					</div> -->
																					<div class="form-group">
																						<div class="col-md-12">
																							<button type="button" id="btnUpdate" onclick="add_pengalaman()" class="btn blue pull-right">Tambahkan</button>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="panel panel-success">
																				<div class="panel-body form-horizontal">
																					<h4 class="text-info" >Tabel Daftar Pengalaman Proyek</h4>
																					<div class="table-scrollable">
																						<table class="table table-striped table-hover" id="tabel_daftar_pengalaman" width="100%" cellspacing="0">
																							<thead>
																								<tr>
																									<th width='50'>No.</th>
																									<th>Kode KBLI</th>
																									<th>Nama Pekerjaan</th>
																									<th>Nilai</th>
																									<th>Tahun</th>
																									<th>Pemberi Pekerjaan</th>
																									<th>Status Berkas Kontrak</th>
																									<th>Status Berkas BAST1</th>
																									<th width = "70">Aksi</th>
																								</tr>
																							</thead>
																							<tbody>
																							</tbody>
																						</table>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div> 
													<!-- </div> -->
													<div class="form-actions">
														<button type="button" id="btnUpdate" onclick="prev_5()" class="btn blue pull-left">Prev</button>
														<button type="button" id="btnSave" onclick="next_5()" class="btn blue pull-right">Next</button>
													</div>
												<!-- </form> -->
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab_1_1_6">
									<div class="portlet box green-soft">
										<div class="portlet-body">
											<div class="portlet-body form">
												<form action="#" id="pengalaman_proyek" class="form-horizontal" role="form" enctype="multipart/form-data">
													<div class="form-body">
														<div class="row">
															<div class="col-md-12">
																<div class="panel panel-primary">
																	<div class="panel-body form-horizontal">
																		<div class="col-md-6">
																			<div class="panel panel-success">
																				<div class="panel-body form-horizontal">
																					<h4 class="text-info" >Pilih Jenis Pekerjaan yang diminati :</h4>
																					<hr/>
																					<div class="form-group">
																						<div class="col-md-2"></div>
																						<div class="col-md-10">
																							<div class="input-group">
																								<div class="icheck-list" id="check_minat">
																									<?php 
																									for($i=0;$i<sizeof($list_checkbox); $i++){ 
																										$ceklist_disable='';
																										// if($this->db_models->cek('temp_register_bidang_pekerjaan',array('kode_bidang'=>$list_checkbox[$i]->kode,'kode_register'=>$kode_register))){
																										// 	$ceklist_disable='checked disabled';
																										// }
																										echo '<label><input type="checkbox" class="icheck" id="checklist_minat_' . $i . '" onclick="add_minat_pekerjaan(' . $i . ')" value="' . $list_checkbox[$i]->kode . '" '.$ceklist_disable.'> ' . $list_checkbox[$i]->nama . '</label>';
																									} ?>
																								</div>
																							</div>
																						</div>
																					</div>
																					<hr/>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="panel panel-success">
																				<div class="panel-body form-horizontal">
																					<h4 class="text-info" >Tabel Daftar Pekerjaan yang diminati</h4>
																					<div class="table-scrollable">
																						<table class="table table-striped table-hover" id="tabel_daftar_minat" width="100%" cellspacing="0">
																							<thead>
																								<tr>
																									<th width='50'>No.</th>
																									<th>Nama Pekerjaan</th>
																									<!-- <th width = "70">Aksi</th> -->
																								</tr>
																							</thead>
																							<tbody>
																							</tbody>
																						</table>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="form-actions">
														<button type="button" id="btnUpdate" onclick="prev_6()" class="btn blue pull-left">Prev</button>
														<button type="button" onclick="selesai();" id="btnSelesai" class="btn blue pull-right" style="display:none;">Selesai</button>
														<button type="button" id="button_selesai" data-target="#modal_dokumen" data-toggle="modal" style="display:none;"></button>
														<button type="button" id="button_belum_lengkap" data-target="#modal_dokumen_belum_lengkap" data-toggle="modal" style="display:none;"></button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal_close" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle" align="center"><font color="001E23" size="3"><strong>Registrasi Belum Selesai !</strong></font></h5>
			</div>
			<div class="modal-body">
				<h5 class="modal-title" id="exampleModalCenterTitle" align="center">
				<strong><font color="FF1232" size="3">Mohon diingat Kode Registrasi Anda :</font></strong></h5>
				<br>
				<h5 class="modal-title" id="exampleModalCenterTitle" align="center"><strong><font color="001E23" size="4"><?=$kode_register;?></font></strong></h5>
				<br>
				<h5 class="modal-title" id="exampleModalCenterTitle" align="center">
				Anda dapat melanjutkan registrasi, dengan menggunakan nomor registrasi diatas.
				</h5>
				<br>
				<h5 class="modal-title" id="exampleModalCenterTitle" align="center">
				Dengan mengakhiri proses ini, maka anda akan dialihkan ke halaman utama.
				</h5>
			</div>
			<div class="modal-footer">
				<!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button> -->
				<button type="button" id="button_akhiri_close" onclick="alert('halaman akan dialihkan !');window.location.href = 'https://ecopowerport.co.id/tata-cara-menjadi-vendor/';" class="btn btn-primary">Akhiri</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal_dokumen" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle" align="center"><font color="001E23" size="3"><strong>Terimakasih telah melakukan registrasi.</strong></font></h5>
			</div>
			<div class="modal-body">
				<h5 class="modal-title" id="exampleModalCenterTitle" align="center">
				<strong><font color="FF1232" size="3">Mohon diingat Kode Registrasi Anda :</font></strong></h5>
				<br>
				<h5 class="modal-title" id="exampleModalCenterTitle" align="center"><strong><font color="001E23" size="4"><?=$kode_register;?></font></strong></h5>
				<br>
				<h5 class="modal-title" id="exampleModalCenterTitle" align="center">
				Anda masih dapat melakukan update data sebelum divalidasi <br>oleh Tim Pengadaan
				PT. Energi Pelabuhan Indonesi (PT.EPI) menggunakan nomor registrasi ini.
				</h5>
				<br>
				<h5 class="modal-title" id="exampleModalCenterTitle" align="center">
				Dengan mengakhiri proses registrasi, maka anda akan dialihkan ke halaman utama.
				</h5>
			</div>
			<div class="modal-footer">
				<!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button> -->
				<button type="button" onclick="alert('halaman akan dialihkan !');window.location.href = 'https://ecopowerport.co.id/tata-cara-menjadi-vendor/';" class="btn btn-primary">Akhiri</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal_dokumen_belum_lengkap" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle" align="center"><font color="001E23" size="3"><strong>Harap Lengkapi Dokumen Berikut !</strong></font></h5>
			</div>
			<div class="modal-body">
				<div id="peringatan_belum_lengkap"></div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
				<!-- <button type="button" onclick="alert('halaman akan dialihkan !');window.location.href = 'https://ecopowerport.co.id/tata-cara-menjadi-vendor/';" class="btn btn-primary">close</button> -->
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal_berkas" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="judulModal" style="align:center;">Detail Berkas</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<embed id="file_doc" name="file_doc" width="100%" height="500"> </embed>
			</div>
			<div class="modal-footer">
				<button type="cancle" class="btn btn-secondary pull-right" data-dismiss="modal" id="btncloseview">Tutup</button>
			</div>
		</div>
	</div>
</div>
</body>
<!-- BEGIN COPYRIGHT -->
<div class="copyright" align="center">2020 &copy; PT EPI - Eco Power.</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url(); ?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/admin/pages/scripts/login-soft.js" type="text/javascript"></script>

<script src="<?php echo base_url(); ?>assets/vendor/select2/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/select2/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery.form.js"></script> 

<script>
	$(document).ready(function() {
		loading();
		Metronic.init(); // init metronic core components
		Layout.init(); // init current layout
		// Login.init();
		Demo.init();
		$.backstretch([
			"<?php echo base_url(); ?>assets/admin/pages/media/bg/epi1.jpeg",
			"<?php echo base_url(); ?>assets/admin/pages/media/bg/epi2.jpeg",
			"<?php echo base_url(); ?>assets/admin/pages/media/bg/epi3.jpeg"
			], {
			fade: 1000,
			duration: 8000
			}
		);
	});

</script>
<script>
function loading(){
	$('#page-loader').find('.spinner').show();
	var $preloader = $('#page-preloader'),
            $spinner = $preloader.find('.spinner');
        $spinner.fadeOut();
        $preloader.delay(350).fadeOut(800);
}
function loading1(){
	$('#page-loader').find('.spinner').show();
	var $preloader = $('#page-preloader'),
            $spinner = $preloader.find('.spinner');
        $spinner.fadeIn();
        $preloader.delay(150).fadeIn(350);
}
function status_prsh_checbox(val){
	$('input[name="status_prsh"]').each( function () {
		if($(this).val()==val){
			$('#uniform-'+val).children('span').addClass('checked');
		}else{
			$('#uniform-'+$(this).val()).children('span').removeClass();
		}
	});
}
function delete_berkas_adm(id){
	crude('delete','temp_register_berkas_administrasi',{'id':id},'','Berkas');
	load_tabel('tabel_daftar_berkas_adm','temp_register_berkas_administrasi',{'kode_register':'<?=$kode_register;?>'});
	load_form_administrasi($('#<?=$nama_dropdown_berkas_administrasi?>').val());
	load_dropdown_berkas_adms();
}
function delete_berkas_ijin(id){
	crude('delete','temp_register_berkas_perijinan',{'id':id},'','Berkas');
	load_tabel('tabel_daftar_berkas_ijin','temp_register_berkas_perijinan',{'kode_register':'<?=$kode_register;?>'});
	load_form_perijinan($('#<?=$nama_dropdown_berkas_perijinan?>').val());
}
function delete_pengalaman(id){
	crude('delete','temp_register_pengalaman',{'id':id},'','Berkas');
	load_tabel('tabel_daftar_pengalaman','temp_register_pengalaman',{'kode_register':'<?=$kode_register;?>'});
	load_form_pengalaman($('#<?=$nama_dropdown_jen_pekerjaan?>').val());
}
function delete_minat(id){
	crude('delete','temp_register_minat_pekerjaan',{'id':id},'','Berkas');
	load_tabel('tabel_daftar_minat','temp_register_minat_pekerjaan',{'kode_register':'<?=$kode_register;?>'});
	load_form_minat('<?=$kode_register?>');
}
function delete_klasifikasi(id){
	crude('delete','temp_register_berkas_perijinan_klasifikasi',{'id':id},'','Berkas');
	load_tabel('tabel_daftar_bidang_usaha','temp_register_berkas_perijinan_klasifikasi',{'kode_register':'<?=$kode_register;?>','kode_dokumen':$('#<?=$nama_dropdown_berkas_perijinan?>').val()});
}
function selesai(){
	loading1();
	var baseUrl = '<?php echo site_url('register/selesai') ?>/';
	$.ajax({
		url: baseUrl,
		dataType: 'json',
		type: 'POST', 
		data: {
			kode_register: '<?=$kode_register;?>'
		},
		success: function(datas) {
			if(datas=='ok'){
				$('#button_selesai').click();
			}else if(datas=='no'){
				alert('Dokumen Belum Lengkap Cek Kembali Data Anda !');
			}else{
				var peringatan='<h5 class="modal-title" style="margin-left:1em"  id="exampleModalCenterTitle" align="left"><strong><font color="3312FF" size="3">Dokumen Wajib Yang Belum Lengkap :</font></strong></h5>';
				var i=1;
				$.map(datas, function(obj) {
					peringatan+='<h5 class="modal-title" style="margin-left:4em" id="exampleModalCenterTitle" align="justify"><strong><font size="3">'+i+'.'+obj+'</font></strong></h5>';
					i++;
				});
				$('#peringatan_belum_lengkap').html(peringatan);
				$('#button_belum_lengkap').click();
			}
			loading();
		},
		error: function(xhr, ajaxOptions, thrownError) {
			loading();
			alert('Gagal update database, silahkan hubungi administrator !');
		}
	});
}
function check_id(){
	var baseUrl = '<?php echo site_url('register/check_id') ?>/';
	$.ajax({
		url: baseUrl,
		dataType: 'json',
		type: 'POST', 
		data: {
			kode_register: '<?=$kode_register;?>'
		},
		success: function(datas) {
			if(datas=='ada'){
				$('#button_close').click();
			}else{
				$('#button_akhiri_close').click();
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert('Gagal update database, silahkan hubungi administrator !');
		}
	});
}
function load_tabel(nama_tabel,tabel,where){
	var baseUrl = '<?=base_url()?>register/load_tabel';
	$('#'+nama_tabel).DataTable({
		"destroy": true,
		"paging": true,
		"ordering": true,
		"info": true,
		"searching": true,
		"processing": true,
		"serverSide": false,
		"order": [],
		"ajax": {
			"url": baseUrl,
			"type": 'POST',
			"data" : {
				nama_tabel : nama_tabel,
				tabel : tabel,
				where : where
			}
		},
	});
}
function add_klasifikasi(){
	var data={
		kode_register : '<?=$kode_register;?>',
		kode_dokumen : $('#<?=$nama_dropdown_berkas_perijinan?>').val(),
		nomor_dokumen : $('#nomor_berkas_ijin').val(),
		kode_kbli : $('#<?=$nama_dropdown_klasifikasi?>').val(),
		kode_grade : $('#<?=$nama_dropdown_grade?>').val(),
		modal_usaha : $('#modal_usaha_berkas_ijin').val()
	}
	crude('insert','temp_register_berkas_perijinan_klasifikasi','',data,'Klasifikasi Pekerjaan');
	load_tabel('tabel_daftar_bidang_usaha','temp_register_berkas_perijinan_klasifikasi',{'kode_register':'<?=$kode_register;?>','kode_dokumen':$('#<?=$nama_dropdown_berkas_perijinan?>').val()});
}
function add_data_perusahaan(){
	var status_prsh ='';
	$("input[name='status_prsh']").each( function () {
       if($('#uniform-'+$(this).val()).children('span').attr('class')=='checked'){
		   status_prsh = $(this).val();
	   }
   	});
	var data={
		kode_register : '<?=$kode_register;?>',
		nama_perusahaan: $('#nama_pt').val().toUpperCase(),
		bentuk_prsh : $('#<?=$nama_dropdown_bentuk_prsh?>').val(),
		status_prsh : status_prsh,
		alamat : $('#alamat_pt').val(),
		kode_prov : $('#<?=$nama_dropdown_provinsi?>').val(),
		kode_kab : $('#<?=$nama_dropdown_kabupaten?>').val(),
		kode_kec : $('#<?=$nama_dropdown_kecamatan?>').val(),
		kode_pos : $('#kodepos').val(),
		jab_tertinggi : $('#jab_tertinggi').val(),
		nama_jab_tertinggi : $('#nama_jab_tertinggi').val(),
		no_telp_perusahaan : $('#<?=$nama_dropdown_kode_area_telp_perusahaan?>').val()+$('#no_tlp_pt').val(),
		email_perusahaan : $('#email_pt').val(),
		website_perusahaan : $('#web_pt').val()
		// waktu_update : $.now()
	}
	crude('insert','temp_register_data_perusahaan',{'kode_register':'<?=$kode_register;?>'},data,'');
}
function add_data_pic(){
	if($('#ktp').attr('checked')){ 
		jen_identitas = 'KTP';
	}else{
		jen_identitas = 'PASSPOR';
	}
	var data={
		kode_register : '<?=$kode_register;?>',
		nama_pic: $('#nama_pic').val(),
		no_hp_pic : $('#<?=$nama_dropdown_kode_area_telp_pic?>').val()+$('#no_hp_pic').val(),
		email_pic : $('#email_pic').val(),
		jen_identitas : jen_identitas,
		nik_pic : $('#nik_pic').val(),
		kode_file_ktp : $('#file_ktp').val(),
		nama_file_ktp : $('#nama_file_ktp').val(),
		file_foto : 'assets/upload_file/'+'<?=$kode_register;?>'+'/data_pic/foto.jpg'
		// waktu_update : $.now()
	}
	crude('insert','temp_register_data_pic',{'kode_register':'<?=$kode_register;?>'},data,'');
	
}
function cek(tabel,where){
	var baseUrl = '<?=base_url()?>register/cek';
	var data=false;
	$.ajax({
		url: baseUrl,
		type: 'POST',
		dataType: 'json',
		data: {
			tabel : tabel,
			where : where
		},
		success: function(datas) {
			data=datas;
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert('Ups Ada sedikit kesalahan.. Segera Hubungi Administrator ');
		}
	});
	alert(data);
	return data;
}
var x=0;
function add_bidang_pekerjaan(id){
	if($('#checklist_bidang_'+id).prop("checked") == true){
		x++;
		var data={
			kode_register : '<?=$kode_register;?>',
			kode_bidang : $('#checklist_bidang_'+id).val()
		}
		var data_minat={
			kode_register : '<?=$kode_register;?>',
			kode_minat : $('#checklist_bidang_'+id).val()
		}
		crude('insert','temp_register_bidang_pekerjaan','',data,'');
		crude('insert','temp_register_minat_pekerjaan','',data_minat,'');
		load_tabel('tabel_daftar_minat','temp_register_bidang_pekerjaan',{'kode_register':'<?=$kode_register;?>'});
	}else{
		x--;
		if($('#checklist_minat_'+id).prop('disabled')==true){
			$('#checklist_minat_'+id).prop('disabled',false);
		}
		if($('#checklist_minat_'+id).prop('checked')==true){
			$('#checklist_minat_'+id).prop('checked',false);
		}
		crude('delete','temp_register_bidang_pekerjaan',{'kode_register':'<?=$kode_register;?>','kode_bidang':$('#checklist_bidang_'+id).val()},data=[],'');
		crude('delete','temp_register_minat_pekerjaan',{'kode_register':'<?=$kode_register;?>','kode_minat':$('#checklist_bidang_'+id).val()},data=[],'');
		load_tabel('tabel_daftar_minat','temp_register_minat_pekerjaan',{'kode_register':'<?=$kode_register;?>'});
	}
	load_form_minat('<?=$kode_register?>');
}
function add_minat_pekerjaan(id){
	if($('#checklist_minat_'+id).prop("checked") == true){
		x++;
		var data={
			kode_register : '<?=$kode_register;?>',
			kode_minat : $('#checklist_minat_'+id).val()
		}
		crude('insert','temp_register_minat_pekerjaan','',data,'Minat Pekerjaan');
		load_tabel('tabel_daftar_minat','temp_register_minat_pekerjaan',{'kode_register':'<?=$kode_register;?>'});
	}else{
		x--;
		crude('delete','temp_register_minat_pekerjaan',{'kode_register':'<?=$kode_register;?>','kode_minat':$('#checklist_minat_'+id).val()},data=[]);
		load_tabel('tabel_daftar_minat','temp_register_minat_pekerjaan',{'kode_register':'<?=$kode_register;?>'});
	}
	load_form_minat('<?=$kode_register?>');
	// load_form_minat()
	// if(x>0){
	// 	$('#btnSelesai').show();
	// }else{
	// 	$('#btnSelesai').hide();
	// }
}
function add_berkas_ijin_2(){
	var kode_dokumen='';
	var uraian_dokumen='';
	if($('#<?=$nama_dropdown_berkas_perijinan?>').val()=='ijin_99'){
		kode_dokumen = 'ijin_99';
		uraian_dokumen = $('#sil').val();
	}else{
		kode_dokumen = $('#<?=$nama_dropdown_berkas_perijinan?>').val();
		uraian_dokumen = $('#<?=$nama_dropdown_berkas_perijinan?> option:selected').text();
	}
	var data={
		kode_register : '<?=$kode_register;?>',
		kode_dokumen: kode_dokumen,
		uraian_dokumen : uraian_dokumen,
		nomor_dokumen : $('#nomor_berkas_ijin').val(),
		tgl_berlaku : $('#tgl_berlaku_berkas_ijin').val(),
		tgl_berakhir : $('#tgl_exp_berkas_ijin').val(),
		kode_file : $('#file_ijin').val(),
		nama_file : $('#nama_file_ijin').val()
	}
	crude('insert','temp_register_berkas_perijinan',{'kode_register':'<?=$kode_register;?>','kode_dokumen': kode_dokumen},data,'Berkas Perijinan');
	load_tabel('tabel_daftar_berkas_ijin','temp_register_berkas_perijinan',{'kode_register':'<?=$kode_register;?>'});
}
function add_berkas_ijin_1(){
	var kode_dokumen='';
	var uraian_dokumen='';
	if($('#<?=$nama_dropdown_berkas_perijinan?>').val()=='ijin_99'){
		kode_dokumen = 'ijin_99';
		uraian_dokumen = $('#sil').val();
	}else{
		kode_dokumen = $('#<?=$nama_dropdown_berkas_perijinan?>').val();
		uraian_dokumen = $('#<?=$nama_dropdown_berkas_perijinan?> option:selected').text();
	}
	var data={
		kode_register : '<?=$kode_register;?>',
		kode_dokumen: kode_dokumen,
		uraian_dokumen : uraian_dokumen,
		nomor_dokumen : $('#nomor_berkas_ijin').val(),
		tgl_berlaku : $('#tgl_berlaku_berkas_ijin').val(),
		tgl_berakhir : $('#tgl_exp_berkas_ijin').val(),
		kode_file : $('#file_ijin').val(),
		nama_file : $('#nama_file_ijin').val()
	}
	crude('insert','temp_register_berkas_perijinan',{'kode_register':'<?=$kode_register;?>','kode_dokumen': kode_dokumen},data,'Berkas Perijinan');
	load_tabel('tabel_daftar_berkas_ijin','temp_register_berkas_perijinan',{'kode_register':'<?=$kode_register;?>'});
}
function add_pengalaman(){
	var data={
		kode_register : '<?=$kode_register;?>',
		kode_kbli : $('#<?=$nama_dropdown_jen_pekerjaan?>').val(),
		nama_pekerjaan : $('#nama_pekerjaan').val(),
		nilai : $('#nilai_pekerjaan').val(),
		tahun : $('#tahun_pekerjaan').val(),
		pemberi_pekerjaan : $('#pemberi_pekerjaan').val(),
		kode_dokumen_kontrak : $('#file_pengalaman').val(),
		nama_dokumen_kontrak : $('#nama_file_pengalaman').val(),
		kode_dokumen_bast1 : $('#file_bast1').val(),
		nama_dokumen_bast1 : $('#nama_file_bast1').val()
	}
	crude('insert','temp_register_pengalaman',data,data,'Pengalaman Proyek');
	load_tabel('tabel_daftar_pengalaman','temp_register_pengalaman',{'kode_register':'<?=$kode_register;?>'});
}
function add_berkas_adm(){
	var tgl_berakhir ='';
	if($('#checkbox_masa_adm').prop("checked") == true){
		tgl_berakhir='Berlaku selamanya';
	}else{
		tgl_berakhir=$('#tgl_exp_adm').val();
	}
	var data={
		kode_register : '<?=$kode_register;?>',
		kode_dokumen : $('#<?=$nama_dropdown_berkas_administrasi?>').val(),
		nomor_dokumen : $('#no_berkas_adm').val(),
		nomor_pengesahan : $('#no_pengesahan_adm').val(),
		tgl_pengesahan : $('#tgl_pengesahan_adm').val(),
		tgl_berlaku : $('#tgl_berlaku_adm').val(),
		tgl_berakhir : tgl_berakhir,
		kode_file : $('#file_adms').val(),
		nama_file : $('#nama_file_adms').val()
	}
	crude('insert','temp_register_berkas_administrasi',{'kode_register':'<?=$kode_register;?>','kode_dokumen':$('#<?=$nama_dropdown_berkas_administrasi?>').val()},data,'Berkas Administrasi');
	load_tabel('tabel_daftar_berkas_adm','temp_register_berkas_administrasi',{'kode_register':'<?=$kode_register;?>'});
}
function check_kbli(){
	if($('#perlu_kbli').prop("checked") == true){
		$('#perlu_grade_form').show();
		$('#<?=$form_klasifikasi;?>').show();
		$('#button_add_berkas_2').show();
		$('#button_add_berkas_1').hide();
		if($('#perlu_grade').prop("checked") == true){
			$('#<?=$form_kbli;?>').removeClass();
			$('#<?=$form_kbli;?>').addClass('col-md-6');
			$('#<?=$form_grade;?>').show();
			$('#kolom_grade').show();
			$('#kolom_grade').prop('disabled', false);
			$('#modal_usaha').show();
			$('#modal_usaha').prop('disabled', false);
			$('#form_modal_usaha').show();
		}else{
			$('#<?=$form_kbli;?>').removeClass();
			$('#<?=$form_kbli;?>').addClass('col-md-11');
			$('#<?=$form_grade;?>').hide();
			$('#kolom_grade').hide();
			$('#kolom_grade').prop('disabled', true);
			$('#modal_usaha').hide();
			$('#modal_usaha').prop('disabled', true);
			$('#form_modal_usaha').hide();
			$('#modal_usaha_berkas_ijin').val('');
		}
	}else{
		$('#<?=$form_klasifikasi;?>').hide();
		$('#perlu_grade_form').hide();
		$('#button_add_berkas_1').show();
		$('#button_add_berkas_2').hide();
	}
}
function check_sil(kode){
	if(kode=='ijin_99'){
		$('#form_sil').show();
	}else{
		$('#form_sil').hide();
	}
}
</script>
<script>
	function load_dropdown_berkas_adms(){
		var query="SELECT kode as id, uraian FROM tr_dokumen where kode_jen_dokumen = 'adms'";
		query+="and kode not in ( select kode_dokumen from temp_register_berkas_administrasi where kode_register = '<?=$kode_register;?>')";
		list_dropdown_query('<?=$nama_dropdown_berkas_administrasi;?>',query);
		$('#<?=$nama_dropdown_berkas_administrasi;?>').trigger('change');
	}
	function add_data_adm(){
		var x=validasi_berkas_adm();
		if(x){
			add_berkas_adm();
			$('#nama_file_adms').val('');
			$('#bar_adms_bar').hide();
			$('#form_upload_file_adms').val('');
			$('#btn_add_data_adm').html('Update');
			load_dropdown_berkas_adms();
		}
	}
	function list_dropdown_query(nama_dropdown,query){
			removeOptions(document.getElementById(nama_dropdown));
			// $.each(nama_dropdown, function(index, value){
				// removeOptions(document.getElementById(value));
			// });
			var baseUrl = '<?php echo site_url('register/list_dropdown_query') ?>/';
			var dropdown = [];
			// alert(query);
			$.ajax({
				url: baseUrl,
				type: 'POST',
				dataType: 'json',
				data: {
					query : query
				},
				success: function(datas) {
					$.map(datas, function(obj) {
						dropdown.push({
							'id': obj.id,
							'text': obj.uraian
						});
						return dropdown;
					});
					$('#' + nama_dropdown).select2({
						placeholder: 'pilih',
						data: dropdown,
						width: '100%'
					});
				},
				error: function(xhr, ajaxOptions, thrownError) {
					alert('Ups Ada sedikit kesalahan.. Segera Hubungi Administrator ');
				}
			});
		}
	function next_1(){
		var x=tab1_validation();
		if(x){
			// alert('Jika anda pindah kehalaman berikutnya, maka data halaman ini akan disimpan.\nApakah anda yakin akan menyimpan data ini ?')
			add_data_perusahaan();
			$('#tab_1_1_1_button').removeClass();
			$('#tab_1_1_1').removeClass();
			$('#tab_1_1_1').addClass('tab-pane');
			$('#tab_1_1_2_button').addClass('active');
			$('#tab_1_1_2').removeClass();
			$('#tab_1_1_2').addClass('tab-pane active');
		}else{
			alert('Tidak bisa melanjutkan kehalaman berikutnya.\nLengkapi data terlebih dahulu !');
		}
	}
	function next_2(){
		var x=tab2_validation();
		if(x){
			// alert('Jika anda pindah kehalaman berikutnya, maka data halaman ini akan disimpan.\nApakah anda yakin akan menyimpan data ini ?')
			add_data_pic();
			$('#tab_1_1_2_button').removeClass();
			$('#tab_1_1_2').removeClass();
			$('#tab_1_1_2').addClass('tab-pane');
			$('#tab_1_1_3_button').addClass('active');
			$('#tab_1_1_3').removeClass();
			$('#tab_1_1_3').addClass('tab-pane active');
		}else{
			alert('Tidak bisa melanjutkan kehalaman berikutnya.\nLengkapi data terlebih dahulu !');
		}
	}
	function next_3(){
		var baseUrl = '<?php echo site_url('register/validasi_berkas_adm') ?>/';
		$.ajax({
			url: baseUrl,
			dataType: 'json',
			type: 'POST',
			data: {
				kode_register:  '<?=$kode_register?>',
			},
			success: function(datas) {
				if(datas=='ok'){
					$('#tab_1_1_3_button').removeClass();
					$('#tab_1_1_3').removeClass();
					$('#tab_1_1_3').addClass('tab-pane');
					$('#tab_1_1_4_button').addClass('active');
					$('#tab_1_1_4').removeClass();
					$('#tab_1_1_4').addClass('tab-pane active');
				}else{
					var aler='Dokumen Wajib Belum Lengkap :\n';
					var i=1;
					$.map(datas, function(obj) {
						aler+=i+'. '+obj.doc+'\n';
						i++;
					});
					alert(aler);
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert('Gagal update database, silahkan hubungi administrator !');
			}
		});
	}
	function next_4(){
		var baseUrl = '<?php echo site_url('register/validasi_berkas_ijin') ?>/';
		$.ajax({
			url: baseUrl,
			dataType: 'json',
			type: 'POST',
			data: {
				kode_register:  '<?=$kode_register?>',
			},
			success: function(datas) {
				if(datas=='ok'){
					$('#tab_1_1_4_button').removeClass();
					$('#tab_1_1_4').removeClass();
					$('#tab_1_1_4').addClass('tab-pane');
					$('#tab_1_1_5_button').addClass('active');
					$('#tab_1_1_5').removeClass();
					$('#tab_1_1_5').addClass('tab-pane active');
				}else{
					var aler='Dokumen Wajib Belum Lengkap :\n';
					var i=1;
					$.map(datas, function(obj) {
						aler+=i+'. '+obj.doc+'\n';
						i++;
					});
					alert(aler);
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert('Gagal update database, silahkan hubungi administrator !');
			}
		});
	}
	function next_5(){
		$('#tab_1_1_5_button').removeClass();
		$('#tab_1_1_5').removeClass();
		$('#tab_1_1_5').addClass('tab-pane');
		$('#tab_1_1_6_button').addClass('active');
		$('#tab_1_1_6').removeClass();
		$('#tab_1_1_6').addClass('tab-pane active');
	}
	function prev_2(){
		var x=tab2_validation();
		if(x){
			// alert('Jika anda pindah kehalaman berikutnya, maka data halaman ini akan disimpan.\nApakah anda yakin akan menyimpan data ini ?')
			add_data_pic();
			$('#tab_1_1_2_button').removeClass();
			$('#tab_1_1_2').removeClass();
			$('#tab_1_1_2').addClass('tab-pane');
			$('#tab_1_1_1_button').addClass('active');
			$('#tab_1_1_1').removeClass();
			$('#tab_1_1_1').addClass('tab-pane active');
		}else{
			alert('Tidak bisa melanjutkan kehalaman berikutnya.\nLengkapi data terlebih dahulu !');
		} 
	}
	function prev_3(){
		$('#tab_1_1_3_button').removeClass();
		$('#tab_1_1_3').removeClass();
		$('#tab_1_1_3').addClass('tab-pane');
		$('#tab_1_1_2_button').addClass('active');
		$('#tab_1_1_2').removeClass();
		$('#tab_1_1_2').addClass('tab-pane active');	
	}
	function prev_4(){
		$('#tab_1_1_4_button').removeClass();
		$('#tab_1_1_4').removeClass();
		$('#tab_1_1_4').addClass('tab-pane');
		$('#tab_1_1_3_button').addClass('active');
		$('#tab_1_1_3').removeClass();
		$('#tab_1_1_3').addClass('tab-pane active');
	}
	function prev_5(){
		$('#tab_1_1_5_button').removeClass();
		$('#tab_1_1_5').removeClass();
		$('#tab_1_1_5').addClass('tab-pane');
		$('#tab_1_1_4_button').addClass('active');
		$('#tab_1_1_4').removeClass();
		$('#tab_1_1_4').addClass('tab-pane active');
	}
	function prev_6(){
		$('#tab_1_1_6_button').removeClass();
		$('#tab_1_1_6').removeClass();
		$('#tab_1_1_6').addClass('tab-pane');
		$('#tab_1_1_5_button').addClass('active');
		$('#tab_1_1_5').removeClass();
		$('#tab_1_1_5').addClass('tab-pane active');
	}
	function tab1_validation(){
		var x=true;
		var bidang=false;
		<?php
		for($i=0;$i<sizeof($list_bidang);$i++){?>
		if($('#checklist_bidang_<?=$i?>').prop('checked')){
			bidang=true;
		}
		<?php } ?>
		if(!bidang){
			$('#alert81').show();
			x=false;
		}else{
			$('#alert81').hide();
		}
		if($('#nama_pt').val()==''){
			$('#alert1').show();
			x=false;
		}else{
			$('#alert1').hide();
		}
		if($('#alamat_pt').val()==''){
			$('#alert2').show();
			x=false;
		}else{
			$('#alert2').hide();
		}
		if($('#<?=$nama_dropdown_provinsi?>').val()=='' || $('#<?=$nama_dropdown_provinsi?>').val()=='0000'){
			$('#alert3').show();
			x=false;
		}else{
			$('#alert3').hide();
		}
		if($('#<?=$nama_dropdown_kabupaten?>').val() === null || $('#<?=$nama_dropdown_kabupaten?>').val()=='-' || $('#<?=$nama_dropdown_kabupaten?>').val()=='0000'){
			$('#alert4').show();
			x=false;
		}else{
			$('#alert4').hide();
		}
		if($('#<?=$nama_dropdown_kecamatan?>').val()===null || $('#<?=$nama_dropdown_kecamatan?>').val()=='-' || $('#<?=$nama_dropdown_kecamatan?>').val()=='0000'){
			$('#alert5').show();
			x=false;
		}else{
			$('#alert5').hide();
		}
		if($('#kodepos').val()==''){
			$('#alert6').show();
			x=false;
		}else{
			$('#alert6').hide();
		}
		if($('#jab_tertinggi').val()==''){
			$('#alert7').show();
			x=false;
		}else{
			$('#alert7').hide();
		}
		if($('#nama_jab_tertinggi').val()==''){
			$('#alert8').show();
			x=false;
		}else{
			$('#alert8').hide();
		}
		if($('#<?=$nama_dropdown_kode_area_telp_perusahaan?>').val()===null || $('#<?=$nama_dropdown_kode_area_telp_perusahaan?>').val()=='0000'){
			$('#alert91').show();
			x=false;
		}else{
			$('#alert91').hide();
		}
		if($('#no_tlp_pt').val()==''){
			$('#alert9').show();
			x=false;
		}else{
			$('#alert9').hide();
		}
		if($('#email_pt').val()==''){
			$('#alert10').show();
			x=false;
		}else{
			$('#alert10').hide();
		}
		// if($('#web_pt').val()==''){
		// 	$('#alert11').show();
		// 	x=false;
		// }else{
		// 	$('#alert11').hide();
		// }
		return x;
	}
	function tab2_validation(){
		var x=true;
		if($('#nama_pic').val()==''){
			$('#alert12').show();
			x=false;
		}else{
			$('#alert12').hide();
		}
		if($('#<?=$nama_dropdown_kode_area_telp_pic?>').val()===null || $('#<?=$nama_dropdown_kode_area_telp_pic?>').val()=='0000'){
			$('#alert131').show();
			x=false;
		}else{
			$('#alert131').hide();
		}
		if($('#no_hp_pic').val()==''){
			$('#alert13').show();
			x=false;
		}else{
			$('#alert13').hide();
		}
		if($('#email_pic').val()==''){
			$('#alert14').show();
			x=false;
		}else{
			$('#alert14').hide();
		}
		if($('#nik_pic').val() =='' && $('#ktp').attr('checked')){
			$('#alert15').show();
			$('#alert151').hide();
			x=false;
		}else{
			$('#alert15').hide();
			if($('#nik_pic').val().length != 16 && $('#ktp').attr('checked')){
				$('#alert151').show();
				x=false;
			}else{
				$('#alert151').hide();
			}
		}
		if($('#no_passpor').val() =='' && $('#passpor').attr('checked')){
			$('#alert15').show();
			x=false;
		}else{
			$('#alert15').hide();
		}
		if($('#file_ktp').val()==''){
			$('#alert16').show();
			x=false;
		}else{
			$('#alert16').hide();
		}
		// if($('#status_upload_foto_pic').val()==''){
		// 	$('#alertfoto').show();
		// 	x=false;
		// }else{
		// 	$('#alertfoto').hide();
		// }
		return x;
	}
	function validasi_berkas_adm(){
		var x=true;
		if($('#<?=$nama_dropdown_berkas_administrasi?>').val()=='0000'){
			$('#alertadm1').show();
			x=false;
		}else{
			$('#alertadm1').hide();
		}
		if($('#no_berkas_adm').val()==''){
			$('#alertadm2').show();
			x=false;
		}else{
			$('#alertadm2').hide();
		}
		if($("#form_nomor_pengesahan").is(":visible")){
			if($('#no_pengesahan_adm').val()==''){
				$('#alertadm3').show();
				x=false;
			}else{
				$('#alertadm3').hide();
			}
			if($('#tgl_pengesahan_adm').val()==''){
				$('#alertadm4').show();
				x=false;
			}else{
				$('#alertadm4').hide();
			}
		}else{
			$('#alertadm3').hide();
			$('#alertadm4').hide();
		}
		if($('#form_tgl_expired_adm').is(":visible")){
		// if($('#checkbox_masa_adm').val()
			if($('#tgl_exp_adm').val()==''){
				$('#alertadm52').show();
				$('#alertadm51').hide();
				$('#alertadm54').hide();
				x=false;
			}else{
				$('#alertadm52').hide();
				var date_mulai = Date.parse($('#tgl_berlaku_adm').val());
				var date1 = Date.parse($('#tgl_exp_adm').val());
				var date = Date();
				var date2 = Date.parse(date);
				if(date1<date2){
					$('#alertadm51').show();
					$('#alertadm54').hide();
					x=false;
				}else if(date1<(date2+7884000)){
					$('#alertadm54').show();
					$('#alertadm51').hide();
					x=false;
				}else{
					$('#alertadm51').hide();
					$('#alertadm54').hide();
				}
			}
		}else{
			$('#alertadm52').hide();
			$('#alertadm51').hide();
			$('#alertadm54').hide()
		}
		if($('#tgl_berlaku_adm').val()==''){
			$('#alertadm53').show();
			$('#alertadm55').hide();
			x=false;
		}else{
			$('#alertadm53').hide();
			var date_mulai = Date.parse($('#tgl_berlaku_adm').val());
			var date1 = Date.parse($('#tgl_exp_adm').val());
			if(date1<date_mulai){
				$('#alertadm55').show();
				$('#alertadm51').hide();
				$('#alertadm54').hide()
				x=false;
			}else{
				$('#alertadm55').hide();
			}
		}
		if($('#nama_file_adms').val() ==''){
			$('#alertadm6').show();
			x=false;
		}else{
			$('#alertadm6').hide();
		}
		return x;
	}
	function load_form_data_perusahaan(kode_register){
		var baseUrl = '<?php echo site_url('register/load_data') ?>/';
		$.ajax({
			url: baseUrl,
			dataType: 'json',
			type: 'POST',
			data: {
				kode_register: kode_register,
				data : 'perusahaan'
			},
			success: function(datas) {
				$.map(datas, function(obj) {
					$('#nama_pt').val(obj.nama_perusahaan);
					$('#alamat_pt').val(obj.alamat);
					$('#<?=$nama_dropdown_bentuk_prsh?>').val(obj.bentuk_prsh).trigger("change");
					$('input[name="status_prsh"]').each( function () {
						if($(this).val()==obj.status_prsh){
		  					 $('#uniform-'+obj.status_prsh).children('span').addClass('checked');
						}else{
							$('#uniform-'+$(this).val()).children('span').removeClass();
						}
					});
					$('#<?=$nama_dropdown_provinsi?>').val(obj.kode_prov).trigger("change");
					$('#<?=$nama_dropdown_kabupaten?>').val(obj.kode_kab).trigger("change");
					$('#<?=$nama_dropdown_kecamatan?>').val(obj.kode_kec).trigger("change")	;
					
					$('#kodepos').val(obj.kode_pos);
					$('#jab_tertinggi').val(obj.jab_tertinggi);
					$('#nama_jab_tertinggi').val(obj.nama_jab_tertinggi);
					$('#<?=$nama_dropdown_kode_area_telp_perusahaan?>').val(obj.no_telp_perusahaan.substring(0, 3)).trigger('change');
					$('#no_tlp_pt').val(obj.no_telp_perusahaan.substring(3, obj.no_telp_perusahaan.length));
					$('#email_pt').val(obj.email_perusahaan);
					$('#web_pt').val(obj.website_perusahaan);
				});
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert('Gagal update database, silahkan hubungi administrator !');
			}
		});
	}
	function load_form_data_pic(kode_register){
		var baseUrl = '<?php echo site_url('register/load_data') ?>/';
		$.ajax({
			url: baseUrl,
			dataType: 'json',
			type: 'POST',
			data: {
				kode_register: kode_register,
				data : 'pic'
			},
			success: function(datas) {
				$.map(datas, function(obj) {
					$('#nama_pic').val(obj.nama_pic);
					$('#<?=$nama_dropdown_kode_area_telp_pic?>').val(obj.no_hp_pic.substring(0, 3)).trigger('change');
					$('#no_hp_pic').val(obj.no_hp_pic.substring(3, obj.no_hp_pic.length));
					$('#email_pic').val(obj.email_pic);
					$('#nik_pic').val(obj.nik_pic);
					$('#file_ktp').val(obj.kode_file_ktp);
					$('#nama_file_ktp').val(obj.kode_file_ktp);
				});
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert('Gagal update database, silahkan hubungi administrator !');
			}
		});

	}
	function cek_pengesahan_adm(kode_dokumen){
		var baseUrl = '<?php echo site_url('register/load_data') ?>/';
		$.ajax({
			url: baseUrl,
			dataType: 'json',
			type: 'POST',
			data: {
				data : 'cek_sah',
				kode_register:  '<?=$kode_register?>',
				kode : kode_dokumen
			},
			success: function(datas) {
				if(datas=='1'){
					$('#form_nomor_pengesahan').show();
					$('#form_tgl_pengesahan').show();
				}else{
					$('#form_nomor_pengesahan').hide();
					$('#form_tgl_pengesahan').hide();
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert('Gagal update database, silahkan hubungi administrator !');
			}
		});
	}
	function load_form_administrasi(kode_dokumen){
		var baseUrl = '<?php echo site_url('register/load_data') ?>/';
		$.ajax({
			url: baseUrl,
			dataType: 'json',
			type: 'POST',
			data: {
				data : 'adms',
				kode_register:  '<?=$kode_register?>',
				kode_dokumen : kode_dokumen
			},
			success: function(datas) {
				if(datas!='' && datas!=null){
					$.map(datas, function(obj) {
						$('#no_berkas_adm').val(obj.nomor_dokumen);
						$('#no_pengesahan_adm').val(obj.nomor_pengesahan);
						$('#tgl_pengesahan_adm').val(obj.tgl_pengesahan);
						$('#tgl_berlaku_adm').val(obj.tgl_berlaku);
						$('#file_adms').val(obj.kode_file);
						$('#form_upload_file_adms').val('');
						if(obj.tgl_berakhir=='' || obj.tgl_berakhir==null ||  obj.tgl_berakhir=='0000-00-00'){
							if(!$('#checkbox_masa_adm').prop("checked")){
								$('#checkbox_masa_adm').click();
								$('#tgl_exp_adm').val('');
							}
							
						}else{
							$('#tgl_exp_adm').val(obj.tgl_berakhir);
						}
					});
					$('#btn_add_data_adm').html('Update');
				}else{
					$('#no_berkas_adm').val('');
					$('#no_pengesahan_adm').val('');
					$('#tgl_pengesahan_adm').val('');
					$('#tgl_berlaku_adm').val('');
					$('#file_adms').val('');
					$('#nama_file_adms').val('');
					if($('#checkbox_masa_adm').prop("checked")){
						$('#checkbox_masa_adm').click();
					}
					$('#tgl_exp_adm').val('');
					$('#btn_add_data_adm').html('Tambahkan');
				}
				load_tabel('tabel_daftar_berkas_adm','temp_register_berkas_administrasi',{'kode_register':'<?=$kode_register?>'});
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert('Gagal update database, silahkan hubungi administrator !');
			}
		});
	}
	function load_form_perijinan(kode_dokumen){
		var baseUrl = '<?php echo site_url('register/load_data') ?>/';
		$.ajax({
			url: baseUrl,
			dataType: 'json',
			type: 'POST',
			data: {
				data : 'ijin',
				kode_register:  '<?=$kode_register?>',
				kode_dokumen : kode_dokumen
			},
			success: function(datas) {
				if(datas!='' && datas!=null){
					$.map(datas, function(obj) {
						$('#nomor_berkas_ijin').val(obj.nomor_dokumen);
						$('#tgl_berlaku_berkas_ijin').val(obj.tgl_berlaku);
						$('#file_ijin').val(obj.kode_file);
						$('#nama_file_ijin').val(obj.nama_file);
						if(obj.tgl_berakhir=='' ||obj.tgl_berakhir==null){
							if(!$('#checkbox_masa_ijin').prop("checked")){
								$('#checkbox_masa_ijin').click();
								$('#tgl_exp_berkas_ijin').val('');
							}
						}else{
							$('#tgl_exp_berkas_ijin').val(obj.tgl_berakhir);
						}
					});
				}else{
					$('#nomor_berkas_ijin').val('');
					$('#tgl_berlaku_berkas_ijin').val('');
					$('#file_ijin').val('');
					$('#nama_file_ijin').val('');
					if($('#checkbox_masa_ijin').prop("checked")){
						$('#checkbox_masa_ijin').click();
					}
					$('#tgl_exp_berkas_ijin').val('');
				}
				load_tabel('tabel_daftar_bidang_usaha','temp_register_berkas_perijinan_klasifikasi',{'kode_register':'<?=$kode_register;?>','kode_dokumen':$('#<?=$nama_dropdown_berkas_perijinan?>').val()});
				load_tabel('tabel_daftar_berkas_ijin','temp_register_berkas_perijinan',{'kode_register':'<?=$kode_register?>'});
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert('Gagal update database, silahkan hubungi administrator !');
			}
		});
	}
	function load_view_berkas_adm(kode_file) {
		$.ajax({
			url: "<?php echo site_url('register/load_data') ?>/",
			type: "POST",
			data: {
				data : 'berkas_adm',
				kode_file: kode_file,
			},
			dataType: "JSON",
			success: function(datas) {
				$.map(datas, function(obj) {
					var file = obj.kode_file;
					$('#nama_doc').val(obj.nama_file)
					$('#file_doc').attr('src', "<?= base_url(); ?>assets/upload_file/<?=$kode_register?>/data_adms/" + file);
				});
				// $('#modal_view').click();
			},
			error: function(jqXHR, textStatus, errorThrown) {
				alert('Hubungi admin untuk akses data ini');
			}
		});
	}
	function load_view_berkas_ijin(kode_file) {
		$.ajax({
			url: "<?php echo site_url('register/load_data') ?>/",
			type: "POST",
			data: {
				data : 'berkas_ijin',
				kode_file: kode_file,
			},
			dataType: "JSON",
			success: function(datas) {
				$.map(datas, function(obj) {
					var file = obj.kode_file;
					$('#nama_doc').val(obj.nama_file)
					$('#file_doc').attr('src', "<?= base_url(); ?>assets/upload_file/<?=$kode_register?>/data_ijin/" + file);
				});
				// $('#modal_view').click();
			},
			error: function(jqXHR, textStatus, errorThrown) {
				alert('Hubungi admin untuk akses data ini');
			}
		});
	}
	function load_form_pengalaman(kode_kbli){
		var baseUrl = '<?php echo site_url('register/load_data') ?>/';
		$.ajax({
			url: baseUrl,
			dataType: 'json',
			type: 'POST',
			data: {
				data : 'kbli',
				kode_register:  '<?=$kode_register?>',
				kode_kbli : kode_kbli
			},
			success: function(datas) {
				if(datas!='' && datas!=null){
					$.map(datas, function(obj) {
						$('#nama_pekerjaan').val(obj.nama_pekerjaan);
						$('#nilai_pekerjaan').val(obj.nilai);
						$('#tahun_pekerjaan').val(obj.tahun);
						$('#pemberi_pekerjaan').val(obj.pemberi_pekerjaan);
						$('#file_pengalaman').val(obj.kode_dokumen_kontrak);
						$('#nama_file_pengalaman').val(obj.nama_dokumen_kontrak);
						$('#file_bast1').val(obj.kode_dokumen_bast1);
						$('#nama_file_bast1').val(obj.nama_dokumen_bast1);
					});
				}else{
					$('#nama_pekerjaan').val('');
					$('#nilai_pekerjaan').val('');
					$('#tahun_pekerjaan').val('');
					$('#pemberi_pekerjaan').val('');
					$('#file_pengalaman').val('');
					$('#nama_file_pengalaman').val('');
					$('#file_bast1').val('');
					$('#nama_file_bast1').val('');
				}
				load_tabel('tabel_daftar_pengalaman','temp_register_pengalaman',{'kode_register':'<?=$kode_register?>'});
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert('Gagal update database, silahkan hubungi administrator !');
			}
		});
	}
	function load_form_minat(kode_register){
		var baseUrl = '<?php echo site_url('register/load_data') ?>/';
		$.ajax({
			url: baseUrl,
			dataType: 'json',
			type: 'POST',
			data: {
				kode_register: kode_register,
				data : 'minat'
			},
			success: function(datas) {
				if(datas!='' && datas!=null){
					$.map(datas, function(obj) {
						var id = $('#check_minat').find("input[value='"+obj.kode_minat+"']").attr('id');
						if(!$('#'+id).prop("checked")){
							$('#'+id).prop("checked",true);
						}
					});
					$('#btnSelesai').show();
				}else{
					$('#btnSelesai').hide();
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert('Gagal update database, silahkan hubungi administrator !');
			}
		});
		$.ajax({
			url: baseUrl,
			dataType: 'json',
			type: 'POST',
			data: {
				kode_register: kode_register,
				data : 'minat_bidang'
			},
			success: function(datas) {
				if(datas!='' && datas!=null){
					$.map(datas, function(obj) {
						var id = $('#check_minat').find("input[value='"+obj.kode_bidang+"']").attr('id');
						if(!$('#'+id).prop("disabled")){
							$('#'+id).prop("disabled",true);
						}
						if(!$('#'+id).prop("checked")){
							$('#'+id).prop("checked",true);
						}
					});
					$('#btnSelesai').show();
				}else{
					$('#btnSelesai').hide();
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert('Gagal update database, silahkan hubungi administrator !');
			}
		});
	}

</script>
<script>
	$(document).ready(function() {
		Metronic.init(); // init metronic core components
		Layout.init(); // init current layout
		Login.init();
		Demo.init();
		$.backstretch([
			"<?php echo base_url(); ?>assets/admin/pages/media/bg/epi1.jpeg",
			"<?php echo base_url(); ?>assets/admin/pages/media/bg/epi2.jpeg",
			"<?php echo base_url(); ?>assets/admin/pages/media/bg/epi3.jpeg"
			], {
			fade: 1000,
			duration: 8000
			}
		);
		load_dropdown_berkas_adms();
		$('#form_upload_ktp').on('change',function(){
			$('#upload_ktp').click();
		});
		$('#form_upload_fo_pic').on('change',function(){
			$('#upload_fo_pic').click();
		});
		$('#form_upload_file_adms').on('change',function(){
			$('#upload_file_adms').click();
			$('#alertadm6').hide();
		});
		$('#form_upload_file_ijin').on('change',function(){
			$('#upload_file_ijin').click();
		});
		$('#upload_doc_bast1').ajaxForm({
			beforeSend: function() {
				$('#file_bast1').empty();
				var percentVal = '0%';
				$('#bar_bast1').width(percentVal);
				$('#percent_bar_bast1').html(percentVal);
			},
			uploadProgress: function(event, position, total, percentComplete) {
				var percentVal = percentComplete + '%';
				$('#bar_bast1').width(percentVal);
				$('#percent_bar_bast1').html(percentVal);
				$('#bar_bast1_bar').show();
			},
			complete: function(xhr) {
				try{
					var obj = JSON.parse(xhr.responseText); 
					$('#file_bast1').val(obj.kode_file);
					$('#nama_file_bast1').val(obj.nama_file);
					alert('Sukses !');
				}catch(err){
					alert(xhr.responseText);
				}
			}
		});
		$('#upload_doc_pengalaman').ajaxForm({
			beforeSend: function() {
				$('#file_pengalaman').empty();
				var percentVal = '0%';
				$('#bar_pengalaman').width(percentVal);
				$('#percent_bar_pengalaman').html(percentVal);
			},
			uploadProgress: function(event, position, total, percentComplete) {
				var percentVal = percentComplete + '%';
				$('#bar_pengalaman').width(percentVal);
				$('#percent_bar_pengalaman').html(percentVal);
				$('#bar_pengalaman_bar').show();
			},
			complete: function(xhr) {
				try{
					var obj = JSON.parse(xhr.responseText); 
					$('#file_pengalaman').val(obj.kode_file);
					$('#nama_file_pengalaman').val(obj.nama_file);
					alert('Sukses !');
				}catch(err){
					alert(xhr.responseText);
				}
			}
		});
		$('#upload_doc_ijin').ajaxForm({
			beforeSend: function() {
				$('#file_ijin').empty();
				var percentVal = '0%';
				$('#bar_ijin').width(percentVal);
				$('#percent_bar_ijin').html(percentVal);
			},
			uploadProgress: function(event, position, total, percentComplete) {
				var percentVal = percentComplete + '%';
				$('#bar_ijin').width(percentVal);
				$('#percent_bar_ijin').html(percentVal);
				$('#bar_ijin_bar').show();
			},
			complete: function(xhr) {
				try{
					var obj = JSON.parse(xhr.responseText); 
					$('#file_ijin').val(obj.kode_file);
					$('#nama_file_ijin').val(obj.nama_file);
					alert('Sukses !');
				}catch(err){
					alert(xhr.responseText);
				}
			}
		});
		$('#upload_doc_adms').ajaxForm({
			beforeSend: function() {
				$('#file_adms').empty();
				var percentVal = '0%';
				$('#bar_adms').width(percentVal);
				$('#percent_bar_adms').html(percentVal);
			},
			uploadProgress: function(event, position, total, percentComplete) {
				var percentVal = percentComplete + '%';
				$('#bar_adms').width(percentVal);
				$('#percent_bar_adms').html(percentVal);
				$('#bar_adms_bar').show();
			},
			complete: function(xhr) {
				try{
					var obj = JSON.parse(xhr.responseText); 
					$('#file_adms').val(obj.kode_file);
					$('#nama_file_adms').val(obj.nama_file);
					alert('Sukses !');
				}catch(err){
					alert(xhr.responseText);
				}
			}
		});
		$('#upload_ktp_pic').ajaxForm({
			beforeSend: function() {
				$('#file_ktp').empty();
				var percentVal = '0%';
				$('#bar_ktp').width(percentVal);
				$('#percent_bar_ktp').html(percentVal);
			},
			uploadProgress: function(event, position, total, percentComplete) {
				var percentVal = percentComplete + '%';
				$('#bar_ktp').width(percentVal);
				$('#percent_bar_ktp').html(percentVal);
				$('#bar_ktp_bar').show();
			},
			complete: function(xhr) {
				try{
					var obj = JSON.parse(xhr.responseText); 
					$('#file_ktp').val(obj.kode_file);
					$('#nama_file_ktp').val(obj.nama_file);
					alert('Sukses !');
				}catch(err){
					alert(xhr.responseText);
				}
			}
		});
		$('#upload_foto_pic').ajaxForm({
			beforeSend: function() {
				$('#status_upload_foto_pic').empty();
				var percentVal = '0%';
				$('#bar_foto').width(percentVal);
				$('#percent_bar_foto').html(percentVal);
			},
			uploadProgress: function(event, position, total, percentComplete) {
				var percentVal = percentComplete + '%';
				$('#bar_foto').width(percentVal);
				$('#percent_bar_foto').html(percentVal);
				$('#bar_foto_bar').show();
			},
			complete: function(xhr) {
				try{
					var obj = JSON.parse(xhr.responseText); 
					alert('Sukses !');
					$('#lokasi_file_foto').attr("src","<?=base_url();?>/assets/upload_file/<?=$kode_register;?>/data_pic/foto.jpg");
				}catch(err){
					alert(xhr.responseText);
				}
			}
		});
		$('.datepicker').datepicker({
			autoclose: true,
			format: "yyyy-mm-dd",
			todayHighlight: true,
			orientation: "top auto",
			todayBtn: true,
			todayHighlight: true,
		});
		$('.tahun').datepicker({
			autoclose: true,
			format: "yyyy",
			todayHighlight: true,
			orientation: "top auto",
			todayBtn: true,
			todayHighlight: true,
		});
		$(".mask_decimal").inputmask({
			'alias': 'decimal',
			rightAlign: true,
			'groupSeparator': '.',
			'autoGroup': true
		});
		$(".number").inputmask({
			'alias': 'numeric',
			rightAlign: false,
			'autoGroup': false
		});
		$(".phone_number").inputmask({
			'alias': 'numeric',
			rightAlign: false,
			scale: 4,
			'groupSeparator': '.',
			'autoGroup': true
		});
		$('#checkbox_masa_ijin').click(function(){
			if($(this).prop("checked") == true){
				$('#tgl_exp_berkas_ijin').hide();
				$('#form_tgl_berlaku_berkas_ijin').removeClass();
				$('#form_tgl_berlaku_berkas_ijin').addClass('col-md-8');
				$('#form_label_sd_ijin').hide();
			}else{
				$('#form_tgl_berlaku_berkas_ijin').removeClass();
				$('#form_tgl_berlaku_berkas_ijin').addClass('col-md-4');
				$('#form_label_sd_ijin').show();
				$('#tgl_exp_berkas_ijin').show();
			}
		});
		$('#checkbox_masa_adm').click(function(){
			if($(this).prop("checked") == true){
				$('#form_tgl_expired_adm').hide();
				$('#form_tgl_berlaku_adm').removeClass();
				$('#form_tgl_berlaku_adm').addClass('col-md-8');
				$('#form_label_sd').hide();
			}else{
				$('#form_tgl_berlaku_adm').removeClass();
				$('#form_tgl_berlaku_adm').addClass('col-md-4');
				$('#form_label_sd').show();
				$('#form_tgl_expired_adm').show();
			}
		});
		// $('#checkbox_nomor_adm').click(function(){
		// 	if($(this).prop("checked") == false){
		// 		$('#form_nomor_pengesahan').hide();
		// 		$('#form_tgl_pengesahan').hide();
		// 	}else{
		// 		$('#form_nomor_pengesahan').show();
		// 		$('#form_tgl_pengesahan').show();
		// 	}
		// });
		<?php
			if($temp){
				echo "
				load_form_data_perusahaan('" . $kode_register ."');
				load_form_data_pic('" . $kode_register ."');
				load_form_minat('" . $kode_register ."');
				load_tabel('tabel_daftar_adm_wajib','tr_dokumen',{'wajib':'1', 'kode_jen_dokumen':'adms'});
				load_tabel('tabel_daftar_berkas_ijin','temp_register_berkas_perijinan',{'kode_register':'" . $kode_register . "'});
				load_tabel('tabel_daftar_berkas_adm','temp_register_berkas_administrasi',{'kode_register':'" . $kode_register . "'});
				load_tabel('tabel_daftar_pengalaman','temp_register_pengalaman',{'kode_register':'" . $kode_register . "'});
				load_tabel('tabel_daftar_minat','temp_register_minat_pekerjaan',{'kode_register':'" . $kode_register . "'});
				";
			}
		?>
	});
</script>
<?=$ready_jquery;?>
<?=$register_jquery;?>
<?=$crude_jquery;?>
<?=$load_tabel_jquery;?>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
