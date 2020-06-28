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
<!-- END THEME STYLES -->

<!-- Quicklab Themes -->
<!-- <link href="<?php echo base_url(); ?>assets/quixlab/css/style.css" rel="stylesheet" type="text/css"/> -->

<link rel="shortcut icon" href="favicon.ico"/>
<style>
    .content {
        max-width: 1100px;
        margin: auto;
		
    }
</style>
</head>
<!-- END HEAD -->
<div class="page-header navbar navbar-fixed-top" role="navigation">
	<div class="page-header-inner container">
		<div class="page-logo">
			<a href="http://ecopowerport.co.id">
			<img src="<?=base_url();?>/assets/admin/layout2/img/logo_epi.png" alt="logo" class="logo-defaul" height="40" width="72"/>
			</a>
		</div> 
		<div class="page-top">
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
						<!-- <div class="tools">
							<a href="javascript:;" class="collapse">
							</a>
							<a href="#portlet-config" data-toggle="modal" class="config">
							</a>
							<a href="javascript:;" class="reload">
							</a>
							<a href="" class="fullscreen">
							</a>
							<a href="javascript:;" class="remove">
							</a>
						</div> -->
					</div>
				</div>
				<div class="portlet-body">
					<div class="portlet-body form">
						<form>
							<div class="tabbable-custom nav-justified">
								<ul class="nav nav-tabs nav-justified">
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
								</ul>
							</div>
							<div class="tab-content">
								<div class="tab-pane" id="tab_1_1_1">
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
																			<label class="col-md-4 control-label align-left">Kode Registrasi<span class="text-danger"><small>*</small></span></label>
																			<div class="col-md-8">
																				<input type="text" name="id_vd" id="id_vd" class="form-control input-sm" value="<?=$kode_register;?>" placeholder="<?=$kode_register;?>" readonly="true">
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-md-4 control-label align-left">Nama Perusahaan<span class="text-danger"><small>*</small></span></label>
																			<div class="col-md-8">
																				<input type="text" name="nama_pt" id="nama_pt" class="form-control input-sm" placeholder=" " required />
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
																			<label class="col-md-4 control-label align-left">Kecamatan<span class="text-danger"><small>*</small></label>
																			<div class="col-md-8">
																				<?=$dropdown_kecamatan;?>
																				<span class="help-block text-danger" id="alert5" style="display:none;"><small><small>* Anda belum memilih Kecamatan !</small></small></span>
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-md-4 control-label align-left">Kodepos<span class="text-danger"><small>*</small></label>
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
																			<div class="col-md-4">
																				<label class="control-label align-right">Jabatan Tertinggi<span class="text-danger"><small> (*Sesuai Akta)</small></label>
																			</div>
																			<div class="col-md-8">
																				<input type="text" name="jab_tertinggi" id="jab_tertinggi" class="form-control input-sm" placeholder=" " required />
																				<span class="help-block text-danger" id="alert7" style="display:none;"><small><small>* Form ini wajib diisi !</small></small></span>
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-md-4 control-label align-left">Nama Pejabat tertinggi<span class="text-danger"><small>*</small></label>
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
																			<label class="col-md-4 control-label align-left">Nomor Telepon Perusahaan<span class="text-danger"><small>*</small></label>
																			<div class="col-md-8">
																				<input type="text" name="no_tlp_pt" id="no_tlp_pt" class="form-control input-sm number" placeholder=" "   required>
																				<span class="help-block text-danger" id="alert9" style="display:none;"><small><small>* Form ini wajib diisi !</small></small></span>
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-md-4 control-label align-left">Email Perusahaan<span class="text-danger"><small>*</small></label>
																			<div class="col-md-8">
																				<input type="text" name="email_pt" id="email_pt" class="form-control input-sm" placeholder=" " required>
																				<span class="help-block text-danger" id="alert10" style="display:none;"><small><small>* Form ini wajib diisi !</small></small></span>
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-md-4 control-label align-left">Website Perusahaan<span class="text-danger"><small>*</small></label>
																			<div class="col-md-8">
																				<input type="text" name="web_pt" id="web_pt" class="form-control input-sm" placeholder=" "   required>
																				<span class="help-block text-danger" id="alert11" style="display:none;"><small><small>* Form ini wajib diisi !</small></small></span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
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
								<div class="tab-pane active" id="tab_1_1_2">
									<div class="portlet box green-soft">
										<div class="portlet-body">
											<div class="portlet-body form">
												<!-- <form action="#" id="data_pic" class="form-horizontal" role="form" enctype="multipart/form-data">
													<div class="form-body"> -->
														<div class="row">
															<div class="col-md-6">
																<div class="panel panel-success">
																	<div class="panel-body form-horizontal">
																		<div class="form-group">
																			<label class="col-md-4 control-label align-left">Nama PIC</label>
																			<div class="col-md-8">
																				<input type="text" name="nama_pic" id="nama_pic" class="form-control input-sm" placeholder=" ">
																				<span class="help-block text-danger" id="alert12" style="display:none;"><small><small>* Form ini wajib diisi !</small></small></span>
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-md-4 control-label align-left">No. Handphone</label>
																			<div class="col-md-8">
																				<input type="text" name="no_hp_pic" id="no_hp_pic" class="form-control input-sm number" placeholder=" ">
																				<span class="help-block text-danger" id="alert13" style="display:none;"><small><small>* Form ini wajib diisi !</small></small></span>
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-md-4 control-label align-left">Email</label>
																			<div class="col-md-8">
																				<input type="text" name="email_pic" id="email_pic" class="form-control input-sm" placeholder=" ">
																				<span class="help-block text-danger" id="alert14" style="display:none;"><small><small>* Form ini wajib diisi !</small></small></span>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="panel panel-success">
																	<div class="panel-body form-horizontal">
																		<div class="form-group">
																			<label class="col-md-4 control-label align-left">NIK</label>
																			<div class="col-md-8">
																				<input type="text" name="nik_pic" id="nik_pic" class="form-control input-sm" placeholder=" ">
																				<span class="help-block text-danger" id="alert15" style="display:none;"><small><small>* Form ini wajib diisi !</small></small></span>
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-md-4 control-label align-left" for="file_siup">Upload File KTP</label>
																			<div class="col-md-8">
																				<input type="file" id="file_ktp" name="file_ktp" class="form-control input-sm">
																				<span class="help-block text-danger" id="alert16" style="display:none;"><small><small>* Anda belum upload file KTP !</small></small></span>
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
																			<?php if(!(file_exists('assets/upload_file/' . $kode_register .'/data_pic/foto.jpg'))){ ?>
																			<center><img id="lokasi_file_foto" src="<?=base_url();?>/assets/file/vd_list/gambar.png" height="300px;" width="225px;"></center>
																			<?php }else{ ?>
																			<center><img id="lokasi_file_foto" src="<?=base_url();?>/assets/upload_file/<?=$kode_register?>/data_pic/foto.jpg" height="300px;" width="225px;"></center>
																			<?php } ?>
																		</div>
																		<div class="form-group">
																			<div class="col-md-12">
																				<form id="upload_foto_pic" action="<?=base_url()?>register/upload/data_pic-foto" method="post" enctype="multipart/form-data">
																					<div class="row">
																						<input class="col-md-9" type="file" name="myfile">
																						<input class="col-md-2" type="submit" value="Upload">
																					</div>
																				</form>
																				<div class="progress">
																					<div class="progress-bar" id="bar_foto_pic" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
																					<div class="percent" id="percent_foto_pic">0%</div >
																				</div>
																				<div id="status"></div>
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
												<form action="#" id="data_perusahaan" class="form-horizontal" role="form" enctype="multipart/form-data">
													<div class="form-body">
														<div class="row">
															<div class="col-md-12">
																<div class="panel panel-primary">
																	<div class="panel-body form-horizontal">
																		<div class="col-md-6">
																			<div class="panel panel-success">
																				<div class="panel-body form-horizontal">
																					<div class="form-group">
																						<label class="col-md-4 control-label align-left">Jenis Berkas</label>
																						<div class="col-md-8">
																							<?=$dropdown_berkas_administrasi;?>
																							<span class="help-block"></span>
																						</div>
																					</div>
																					<div class="form-group">
																						<label class="col-md-4 control-label align-left">Nomor</label>
																						<div class="col-md-8">
																							<input type="text" name="no_berkas_adm" id="no_berkas_adm" class="form-control input-sm number" placeholder=" " required />
																							<span class="help-block"></span>
																						</div>
																						<div class="input-group col-md-3" style="display:none;">
																							<div class="icheck-list col-md-1">
																								<input type="checkbox" class="icheck" id="checkbox_nomor_adm" value="0">
																							</div>
																							<label class="col-md-2">Perlu Pengesahan</label>
																						</div>
																					</div>
																					<div class="form-group" id="form_nomor_pengesahan" style="display:none;">
																						<label class="col-md-4 control-label align-left">Nomor Pengesahan</label>
																						<div class="col-md-8">
																							<input type="text" name="no_pengesahan_adm" id="no_pengesahan_adm" class="form-control input-sm number" placeholder=" " required />
																							<span class="help-block"></span>
																						</div>
																					</div>
																					<div class="form-group" id="form_tgl_pengesahan" style="display:none;">
																						<label class="col-md-4 control-label align-left">Tanggal Pengesahan</label>
																						<div class="col-md-8">
																							<input type="text" name="tgl_pengesahan_adm" id="tgl_pengesahan_adm" class="form-control input-sm datepicker" placeholder="Tanggal Pengesahan" required />
																							<span class="help-block"></span>
																						</div>
																					</div>
																					<div class="form-group">
																						<label class="col-md-4 control-label align-left">Tanggal Berlaku</label>
																						<div class="col-md-4" id="form_tgl_berlaku_adm">
																							<input type="text" name="tgl_berlaku_adm" id="tgl_berlaku_adm" class="form-control input-sm datepicker" placeholder="Tanggal Berlaku " required />
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
																							<span class="help-block"></span>
																						</div>
																					</div>
																					<div class="form-group">
																						<label class="col-md-4 control-label align-left" for="file_akta_pendirian">Upload Berkas</label>
																						<div class="col-md-8">
																							<input type="file" id="file_berkas_adm" name="file_berkas_adm" class="form-control input-sm">
																							<span class="help-block"></span>
																						</div>
																					</div>
																					<div class="form-group">
																						<div class="col-md-12">
																							<button type="button" onclick="add_berkas_adm()" class="btn blue pull-right">Tambahkan</button>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="panel panel-success">
																				<div class="panel-body form-horizontal">
																					<h4 class="text-info" >Pilih Daftar Berkas Administrasi</h4>
																					<div class="table-scrollable">
																						<table class="table table-striped table-hover" id="tabel_daftar_berkas_adm">
																							<thead>
																								<tr>
																									<th width='50'>No.</th>
																									<th>Nomor</th>
																									<th>Jenis Berkas</th>
																									<th>Tanggal Berlaku</th>
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
													</div>
													<div class="form-actions">
														<button type="button" id="btnUpdate" onclick="prev_3()" class="btn blue pull-left">Prev</button>
														<button type="button" id="btnSave" onclick="next_3()" class="btn blue pull-right">Next</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab_1_1_4">
									<div class="portlet box green-soft">
										<div class="portlet-body">
											<div class="portlet-body form">
												<form action="#" id="berkas_perijinan" class="form-horizontal" role="form" enctype="multipart/form-data">
													<div class="form-body">
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
																							<input type="text" name="nomor_berkas_ijin" id="nomor_berkas_ijin"  class="form-control input-sm number" placeholder=" " required />
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
																						<label class="col-md-4 control-label align-left">Modal Usaha (Rp.)</label>
																						<div class="col-md-8">
																							<input type="text" name="modal_usaha_berkas_ijin" id="modal_usaha_berkas_ijin" class="form-control input-sm number" placeholder=" "   required>
																							<span class="help-block"></span>
																						</div>
																					</div>
																					<div class="form-group">
																						<label class="col-md-4 control-label align-left" for="file_siup">Upload Berkas</label>
																						<div class="col-md-8">
																							<input type="file" id="file_berkasi_ijin" name="file_berkasi_ijin" class="form-control input-sm">
																							<span class="help-block"></span>
																						</div>
																					</div>
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
																					<div class="table-scrollable">
																						<table class="table table-striped table-hover" id="tabel_daftar_bidang_usaha">
																							<thead>
																								<tr>
																									<th width='50'>No.</th>
																									<th>Kode KBLI</th>
																									<th>Klasifikasi Bidang Usaha</th>
																									<th id="kolom_grade" style="display:none;" disabled>Grade</th>
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
																				<button type="button" id="button_ijin_2" onclick="add_berkas_ijin_2();" class="btn blue pull-right">Tambahkan</button>
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
																			<table class="table table-striped table-hover" id="tabel_daftar_berkas_ijin">
																				<thead>
																					<tr>
																						<th width='50'>No.</th>
																						<th>Nomor</th>
																						<th>Nama Perijinan</th>
																						<th>Tanggal berlaku</th>
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
													<div class="form-actions">
														<button type="button" id="btnUpdate" onclick="prev_4()" class="btn blue pull-left">Prev</button>
														<button type="button" id="btnSave" onclick="next_4()" class="btn blue pull-right">Next</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab_1_1_5">
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
																					</div>
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
																						<table class="table table-striped table-hover" id="tabel_daftar_pengalaman">
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
													</div>
													<div class="form-actions">
														<button type="button" id="btnUpdate" onclick="prev_5()" class="btn blue pull-left">Prev</button>
														<button type="button" id="btnSave" onclick="next_5()" class="btn blue pull-right">Next</button>
													</div>
												</form>
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
																						<div class="col-md-3"></div>
																						<div class="col-md-9">
																							<div class="input-group">
																								<div class="icheck-list">
																									<?php 
																									for($i=0;$i<sizeof($list_checkbox); $i++){ 
																										echo '<label><input type="checkbox" class="icheck" id="checklist_minat_' . $i . '" onclick="add_minat_pekerjaan(' . $i . ')" value="' . $list_checkbox[$i]->kode . '"> ' . $list_checkbox[$i]->nama . '</label>';
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
																						<table class="table table-striped table-hover" id="tabel_daftar_minat">
																							<thead>
																								<tr>
																									<th width='50'>No.</th>
																									<th>Nama Pekerjaan</th>
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
													</div>
													<div class="form-actions">
														<button type="button" id="btnUpdate" onclick="prev_6()" class="btn blue pull-left">Prev</button>
														<button type="button" id="btnSelesai" class="btn blue pull-right" data-target="#modal_dokumen" data-toggle="modal" style="display:none;">Selesai</button>
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
<script src="http://malsup.github.com/jquery.form.js"></script> 
<!-- END PAGE LEVEL SCRIPTS -->

<!-- Quicklabs -->
<!-- <script src="<?php //echo base_url(); ?>assets/quixlab/plugins/common/common.min.js"></script>
<script src="<?php //echo base_url(); ?>assets/quixlab/js/styleSwitcher.js" type="text/javascript"></script>
<script src="<?php //echo base_url(); ?>assets/quixlab/js/settings.js" type="text/javascript"></script>
<script src="<?php //echo base_url(); ?>assets/quixlab/js/gleek.js" type="text/javascript"></script>
<script src="<?php //echo base_url(); ?>assets/quixlab/js/custom.min.js" type="text/javascript"></script>

<script src="<?php //echo base_url(); ?>assets/quixlab/plugins/validation/jquery.validate.min.js"></script>
<script src="<?php //echo base_url(); ?>assets/quixlab/plugins/validation/jquery.validate-init.js"></script> -->
<script>
	$(document).ready(function() {
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
	var bar = $('.progress-bar');
	var percent = $('.percent');
	var status = $('#status');

	$('#upload_foto_pic').ajaxForm({
		beforeSend: function() {
			$('#status').empty();
			var percentVal = '0%';
			$('.progress-bar').width(percentVal);
			$('.percent').html(percentVal);
		},
		uploadProgress: function(event, position, total, percentComplete) {
			var percentVal = percentComplete + '%';
			$('.progress-bar').width(percentVal);
			$('.percent').html(percentVal);
		},
		complete: function(xhr) {
			$('#status').html(xhr.responseText);
			$('#lokasi_file_foto').attr("src","<?=base_url();?>/assets/upload_file/<?=$kode_register;?>/data_pic/foto.jpg");
		}
	});
</script>
<script>
// function selesai(){
// }
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
		kode_berkas : $('#<?=$nama_dropdown_berkas_perijinan?>').val(),
		nomor_siu : $('#nomor_siu').val(),
		kode_kbli : $('#<?=$nama_dropdown_klasifikasi?>').val(),
		kode_grade : $('#<?=$nama_dropdown_grade?>').val()
	}
	crude('insert','temp_register_berkas_perijinan_klasifikasi','',data,'Klasifikasi Pekerjaan');
	load_tabel('tabel_daftar_bidang_usaha','temp_register_berkas_perijinan_klasifikasi',{'kode_register':'<?=$kode_register;?>','kode_berkas':$('#<?=$nama_dropdown_berkas_perijinan?>').val()});
}
function add_data_perusahaan(){
	var data={
		kode_register : '<?=$kode_register;?>',
		nama_perusahaan: $('#nama_pt').val(),
		alamat : $('#alamat_pt').val(),
		kode_prov : $('#<?=$nama_dropdown_provinsi?>').val(),
		kode_kab : $('#<?=$nama_dropdown_kabupaten?>').val(),
		kode_kec : $('#<?=$nama_dropdown_kecamatan?>').val(),
		kode_pos : $('#kodepos').val(),
		jab_tertinggi : $('#jab_tertinggi').val(),
		nama_jab_tertinggi : $('#nama_jab_tertinggi').val(),
		no_telp_perusahaan : $('#no_tlp_pt').val(),
		email_perusahaan : $('#email_pt').val(),
		website_perusahaan : $('#web_pt').val()
		// waktu_update : $.now()
	} 
	// var reg=cek('temp_register_data_perusahaan',{'kode_register':'<?=$kode_register;?>'});
	// if(!reg){
		crude('insert','temp_register_data_perusahaan','',data,'Data Perusahaan');
	// }else{
	// 	crude('update','temp_register_data_perusahaan',{'kode_register':'<?=$kode_register;?>'},data,'Data Perusahaan');
	// }
}
function add_data_pic(){
	alert('Data PIC telah ditambahkan !');
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
	if(x>0){
		$('#btnSelesai').show();
	}else{
		$('#btnSelesai').hide();
	}
}
function add_berkas_ijin_2(){
	if($('#'+<?=$nama_dropdown_berkas_perijinan?>).val()=='ijin_99'){
		kode_berkas = $('#sil').val();
	}else{
		kode_berkas = $('#<?=$nama_dropdown_berkas_perijinan?>').val()
	}
	var data={
		kode_register : '<?=$kode_register;?>',
		kode_berkas: kode_berkas,
		nomor_berkas_ijin : $('#nomor_berkas_ijin').val(),
		tgl_berlaku : $('#tgl_berlaku_berkas_ijin').val(),
		tgl_berakhir : $('#tgl_exp_berkas_ijin').val(),
		modal_usaha : $('#modal_usaha_berkas_ijin').val(),
		file_berkas : $('#file_berkasi_ijin').val()
	}
	crude('insert','temp_register_berkas_perijinan','',data,'Berkas Perijinan');
	load_tabel('tabel_daftar_berkas_ijin','temp_register_berkas_perijinan',{'kode_register':'<?=$kode_register;?>'});
}
function add_berkas_ijin_1(){
	if($('#'+<?=$nama_dropdown_berkas_perijinan?>).val()=='ijin_99'){
		kode_berkas = $('#sil').val();
	}else{
		kode_berkas = $('#<?=$nama_dropdown_berkas_perijinan?>').val()
	}
	var data={
		kode_register : '<?=$kode_register;?>',
		kode_berkas: $('#<?=$nama_dropdown_berkas_perijinan?>').val(),
		nomor_berkas_ijin : $('#nomor_berkas_ijin').val(),
		tgl_berlaku : $('#tgl_berlaku_berkas_ijin').val(),
		tgl_berakhir : $('#tgl_exp_berkas_ijin').val(),
		modal_usaha : $('#modal_usaha_berkas_ijin').val(),
		file_berkas : $('#file_berkasi_ijin').val()
	}
	crude('insert','temp_register_berkas_perijinan','',data,'Berkas Perijinan');
	load_tabel('tabel_daftar_berkas_ijin','temp_register_berkas_perijinan',{'kode_register':'<?=$kode_register;?>'});
}
function add_pengalaman(){
	var data={
		kode_register : '<?=$kode_register;?>',
		kode_kbli : $('#<?=$nama_dropdown_jen_pekerjaan?>').val(),
		nama_pekerjaan : $('#nama_pekerjaan').val(),
		nilai : $('#nilai_pekerjaan').val(),
		tahun : $('#tahun_pekerjaan').val(),
		pemberi_pekerjaan : $('#pemberi_pekerjaan').val()
	}
	crude('insert','temp_register_pengalaman','',data,'Pengalaman Proyek');
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
		kode_berkas : $('#<?=$nama_dropdown_berkas_administrasi?>').val(),
		nomor_berkas_adm : $('#no_berkas_adm').val(),
		nomor_pengesahan : $('#no_pengesahan_adm').val(),
		tgl_pengesahan : $('#tgl_pengesahan_adm').val(),
		tgl_berlaku : $('#tgl_berlaku_adm').val(),
		tgl_berakhir : tgl_berakhir,
		file_berkas : $('#file_berkas_adm').val()
	}
	crude('insert','temp_register_berkas_administrasi','',data,'Berkas Administrasi');
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
		}else{
			$('#<?=$form_kbli;?>').removeClass();
			$('#<?=$form_kbli;?>').addClass('col-md-11');
			$('#<?=$form_grade;?>').hide();
			$('#kolom_grade').hide();
			$('#kolom_grade').prop('disabled', true);
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
	function next_1(){
		var x=tab1_validation();
		if(x){
			alert('Jika anda pindah kehalaman berikutnya, maka data halaman ini akan disimpan.\nApakah anda yakin akan menyimpan data ini ?')
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
			alert('Jika anda pindah kehalaman berikutnya, maka data halaman ini akan disimpan.\nApakah anda yakin akan menyimpan data ini ?')
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
		$('#tab_1_1_3_button').removeClass();
		$('#tab_1_1_3').removeClass();
		$('#tab_1_1_3').addClass('tab-pane');
		$('#tab_1_1_4_button').addClass('active');
		$('#tab_1_1_4').removeClass();
		$('#tab_1_1_4').addClass('tab-pane active');
	}
	function next_4(){
		$('#tab_1_1_4_button').removeClass();
		$('#tab_1_1_4').removeClass();
		$('#tab_1_1_4').addClass('tab-pane');
		$('#tab_1_1_5_button').addClass('active');
		$('#tab_1_1_5').removeClass();
		$('#tab_1_1_5').addClass('tab-pane active');
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
		$('#tab_1_1_2_button').removeClass();
		$('#tab_1_1_2').removeClass();
		$('#tab_1_1_2').addClass('tab-pane');
		$('#tab_1_1_1_button').addClass('active');
		$('#tab_1_1_1').removeClass();
		$('#tab_1_1_1').addClass('tab-pane active');
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
		if($('#<?=$nama_dropdown_kabupaten?>').val() === null || $('#<?=$nama_dropdown_kabupaten?>').val()=='-'){
			$('#alert4').show();
			x=false;
		}else{
			$('#alert4').hide();
		}
		if($('#<?=$nama_dropdown_kecamatan?>').val()===null || $('#<?=$nama_dropdown_kecamatan?>').val()=='-'){
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
		if($('#web_pt').val()==''){
			$('#alert11').show();
			x=false;
		}else{
			$('#alert11').hide();
		}
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
		if($('#nik_pic').val() ==''){
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
		return x;
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
		<?php
			if(!$new){
				echo "
				load_tabel('tabel_daftar_berkas_ijin','temp_register_berkas_perijinan',{'kode_register':'" . $kode_register . "'});
				load_tabel('tabel_daftar_berkas_adm','temp_register_berkas_administrasi',{'kode_register':'" . $kode_register . "'});
				load_tabel('tabel_daftar_pengalaman','temp_register_pengalaman',{'kode_register':'" . $kode_register . "'});
				load_tabel('tabel_daftar_minat','temp_register_minat_pekerjaan',{'kode_register':'" . $kode_register . "'});
				";
			}
		?>
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
		$('#checkbox_nomor_adm').click(function(){
			if($(this).prop("checked") == false){
				$('#form_nomor_pengesahan').hide();
				$('#form_tgl_pengesahan').hide();
			}else{
				$('#form_nomor_pengesahan').show();
				$('#form_tgl_pengesahan').show();
			}
		});
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
