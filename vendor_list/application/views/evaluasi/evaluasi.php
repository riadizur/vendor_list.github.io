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
						<i class="fa fa-globe"></i>Daftar Registrasi Calon Vendor
					</div>
					<div class="tools">
						<a href="https://ecopowerport.co.id/tata-cara-menjadi-vendor/"><font color="#ff0000"><strong><i class="fa fa-close"> CLOSE</i></strong></font>
						</a>
						<a></a>
					</div>
				</div>
				<div class="portlet-body">
					<div class="portlet-body form">
						<div class="tabbable-custom nav-justified">
							<ul class="nav nav-tabs nav-justified">
								<?php $lock=false;if($lock){ ?>
								<li class="active" id="tab_1_1_1_button">
									<a>Daftar Vendor</a>
								</li>
								<li id="tab_1_1_2_button">
									<a>Evaluasi Calon Vendor</a>
								</li>
								<?php }else { ?>
								<!-- <li  class="active" id="tab_1_1_1_button">
									<a href="#tab_1_1_1" role="tab" data-toggle="tab">Evaluasi Calon Vendor / Mitra</a>
								</li>
								<li id="tab_1_1_2_button">
									<a href="#tab_1_1_2" role="tab" data-toggle="tab">Daftar Vendor</a>
								</li> -->
								<?php } ?>
							</ul>
						</div>
						<div class="tab-content active">
							<div class="tab-pane" id="tab_1_1_2">
								<div class="portlet box green-soft">
									<div class="portlet-body">
										<div class="portlet-body form">
											<div class="row">
												<div class="col-md-12">
													<h4 class="text-info" >Tabel Daftar Vendor</h4>
													<div class="panel panel-success">
														<div class="panel-body form-horizontal">
															<div class="table-scrollable">
																<table class="table table-striped table-hover" id="tabel_daftar_vendor" width="100%">
																	<thead>
																		<th width="5%" class="align-middle text-center">No.</th>
																		<th width="40%" class="align-middle text-center">Nomor Registrasi</th>
																		<th width="40%" class="align-middle text-center">Nama Perusahaan</th>
																		<th width="10%" class="align-middle text-center">Domisili</th>
																		<th width="5%" class="align-middle text-center">Aksi</th>
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
							<div class="tab-pane active" id="tab_1_1_1">
								<div class="portlet box green-soft">
									<div class="portlet-body">
										<div class="portlet-body form">
											<div class="row">
												<div class="col-md-12">
													<!-- <h4 class="text-info" >Daftar Registrasi Calon Vendor</h4> -->
													<div class="panel panel-success">
														<div class="panel-body form-horizontal">
															<div class="table-scrollable">
																<table class="table table-striped table-hover" id="tabel_evaluasi" width="100%">
																	<thead>
																		<th width="5%" class="align-middle text-center">No.</th>
																		<th width="20%" class="align-middle text-center">Nomor Registrasi</th>
																		<th width="50%" class="align-middle text-center">Nama Perusahaan</th>
																		<th width="20%" class="align-middle text-center">Domisili</th>
																		<th width="5%" class="align-middle text-center">Aksi</th>
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal_detil" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle" align="center"><font color="001E23" size="5"><strong>Detil Data Perusahaan</strong></font></h5>
			</div>
			<div class="modal-body">
				<div class="portlet box green-soft">
					<div class="portlet-body">
						<div class="portlet-body form">
							<div class="row">
								<div class="col-md-6">
									<h4 class="text-info" >1. Data Perusahaan</h4>
									<div class="panel panel-success">
										<div class="panel-body form-horizontal">
											<div class="row">
												<label class="col-md-4 ">Kode Registrasi</label>
												<label class="col-md-8 "><div id="kode_reg">:</div></label>
											</div>
											<div class="row">
												<label class="col-md-4 ">Nama</label>
												<label class="col-md-8 "><div id="nama_pt">:</div></label>
											</div>
											<div class="row">
												<label class="col-md-4 ">Alamat</label>
												<label class="col-md-8 "><div id="alamat_pt">:</div></label>
											</div>
											<div class="row">
												<label class="col-md-4 ">Provinsi</label>
												<label class="col-md-8 "><div id="prov">:</div></label>
											</div>
											<div class="row">
												<label class="col-md-4 ">Kab / Kota</label>
												<label class="col-md-8 "><div id="kab">:</div></label>
											</div>
											<div class="row">
												<label class="col-md-4 ">Kecamatan</label>
												<label class="col-md-8 "><div id="kec">:</div></label>
											</div>
											<div class="row">
												<label class="col-md-4 ">Kode Pos</label>
												<label class="col-md-8 "><div id="kode_pos">:</div></label>
											</div>
											<div class="row">
												<label class="col-md-4 ">Email</label>
												<label class="col-md-8 "><div id="email_pt">:</div></label>
											</div>
											<div class="row">
												<label class="col-md-4 ">Nomor Telp.</label>
												<label class="col-md-8 "><div id="no_telp_pt">:</div></label>
											</div>
											<div class="row">
												<label class="col-md-4 ">Website</label>
												<label class="col-md-8 "><div id="web_pt">:</div></label>
											</div>
										</div>
									</div>
									<h4 class="text-info" >2. Data Pejabat Tertinggi</h4>
									<div class="panel panel-success">
										<div class="panel-body form-horizontal">
											<div class="row">
												<label class="col-md-4 ">Jabatan</label>
												<label class="col-md-8 "><div id="jab_tinggi">:</div></label>
											</div>
											<div class="row">
												<label class="col-md-4 ">Nama Pejabat</label>
												<label class="col-md-8 "><div id="nama_pej">:</div></label>
											</div>
										</div>
									</div>
								</div>
								<div class="clear-fix"></div>
								<div class="col-md-6">
									<h4 class="text-info" >3. Data PIC</h4>
									<div class="panel panel-success">
										<div class="panel-body form-horizontal">
											<center><img id="lokasi_file_foto" src="<?=base_url();?>/assets/file/vd_list/gambar.png" height="280px;" width="210px;"></center>
											<br>
											<div class="row">
												<label class="col-md-4 ">Nama</label>
												<label class="col-md-8 "><div id="nama_pic">:</div></label>
											</div>
											<div class="row">
												<label class="col-md-4 ">No. NIK</label>
												<label class="col-md-8 "><div id="no_nik_pic">:</div></label>
											</div>
											<div class="row">
												<label class="col-md-4 ">No. HP</label>
												<label class="col-md-8 "><div id="no_hp_pic">:</div></label>
											</div>
											<div class="row">
												<label class="col-md-4 ">Email</label>
												<label class="col-md-8 "><div id="email_pic">:</div></label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<h4 class="text-info">Minat Pekerjaan</h4>
									<div class="panel panel-success">
										<div class="panel-body form-horizontal">
											<div id=minat_pekerjaan></div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<h4 class="text-info" >Tabel Daftar Berkas Administrasi</h4>
									<div class="panel panel-success">
										<div class="panel-body form-horizontal">
											<div class="table-scrollable">
												<table class="table table-bordered table-hover" id="tabel_berkas_adm" width="100%">
													<thead>
														<tr>
															<th>No.</th>
															<th>Nama Berkas</th>
															<th>Nomor Dokumen</th>
															<th>Kategori</th>
															<th>Status Dokumen</th>
															<th>Aksi</th>
															<th>Kesesuaian Dokumen</th>
														</tr>
													</thead>
													<tbody>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<h4 class="text-info" >Tabel Daftar Berkas Perijinan</h4>
									<div class="panel panel-success">
										<div class="panel-body form-horizontal">
											<div class="table-scrollable">
												<table class="table table-bordered table-hover" id="tabel_berkas_ijin" width="100%">
													<thead>
														<tr>
															<th width="5%">No.</th>
															<th width="45%">Nama Berkas</th>
															<th width="10%">Nomor Dokumen</th>
															<th width="10%">Kategori</th>
															<th width="10%">Status Dokumen</th>
															<th width="5%" class="align-middle text-center">Aksi</th>
															<th width="15%" class="align-middle text-center">Kesesuaian Dokumen</th>
														</tr>
													</thead>
													<tbody>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<h4 class="text-info" >Tabel Daftar Pengalaman</h4>
									<div class="panel panel-success">
										<div class="panel-body form-horizontal">
											<div class="table-scrollable">
												<table class="table table-striped table-hover" id="tabel_pengalaman" width="100%">
													<thead>
														<tr>
															<th>No.</th>
															<th>Nama Pekerjaan</th>
															<th>Pemberi Pekerjaan</th>
															<th>Nilai</th>
															<th>Tahun</th>
															<th>Doc Kontrak</th>
															<th>Doc BAST</th>
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
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
				<button type="button" onclick="analyze($('#kode_reg').val())" class="btn btn-primary">OK</button>
				<button type="button" id="button_selesai" data-target="#modal_dokumen" data-toggle="modal" style="display:none;"></button>
				<button type="button" id="button_belum_lengkap" data-target="#modal_dokumen_belum_lengkap" data-toggle="modal" style="display:none;"></button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="detil_ijin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle" align="center"><font color="001E23" size="5"><strong>Daftar Klasifikasi Bidang Usaha</strong></font></h5>
			</div>
			<div class="modal-body">
				<div class="portlet box green-soft">
					<div class="portlet-body">
						<div class="portlet-body form">
							<div class="row">
								<div class="col-md-12">
									<div class="panel panel-success">
										<div class="panel-body form-horizontal">
											<div class="table-scrollable">
												<table class="table table-bordered table-hover" id="tabel_kbli" width="100%">
													<thead>
														<tr>
															<th width="5%">No.</th>
															<th width="10%">Kode KBLI</th>
															<th width="65%">Uraian</th>
															<th width="20%">Grade</th>
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
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="view_dokumen" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="form_tampil_doc">
					<div class="form-group">
						<label for="foto">View Dokumen</label><br>
						<embed id="file_doc" name="file_doc" width="100%" height="500"></embed>
					</div>
					<!-- <button type="cancle" class="btn btn-secondary float-right" data-dismiss="modal" id="btncloseview">Tutup</button> -->
				</form>
			</div>
			<div class="modal-footer">
				<button type="cancle" class="btn btn-secondary" data-dismiss="modal">close</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal_dokumen" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle" align="center"><font color="001E23" size="3"><strong>Vendor Di Setujui</strong></font></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<h5 class="modal-title" id="exampleModalCenterTitle" align="center">
				<strong><font color="FF1232" size="3">Mohon diingat Kode Vendor Anda :</font></strong></h5>
				<br>
				<h5 class="modal-title" id="kode_vendor" align="center"></h5>
				<br>
				<h5 class="modal-title" id="exampleModalCenterTitle" align="center">
				Anda masih dapat melakukan update data sebelum divalidasi <br>oleh Tim Pengadaan
				PT. Energi Pelabuhan Indonesi (PT.EPI) menggunakan nomor registrasi ini.
				</h5>
				<br>
				<h5 class="modal-title" id="exampleModalCenterTitle" align="center">
				Silahkan klik send email, untuk meneruskan pesan ini ke PIC vendor.
				</h5>
			</div>
			<div class="modal-footer">
				<!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button> -->
				<button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
				<button type="button" onclick="sendEmail('ok');alert('Email telah dikirim !');" class="btn btn-primary">Send Email To PIC</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal_dokumen_belum_lengkap" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle" align="center"><font color="001E23" size="3"><strong>Vendor Ditolak !</strong></font></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div id="peringatan_belum_lengkap"></div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
				<button type="button" onclick="sendEmail('no');alert('Email telah dikirim !');" class="btn btn-primary">Send Email To PIC</button>
				<!-- <button type="button" onclick="alert('halaman akan dialihkan !');window.location.href = 'https://ecopowerport.co.id/tata-cara-menjadi-vendor/';" class="btn btn-primary">close</button> -->
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
		var columnDef = [{
			"targets": [-1],
			"orderable": true,
			"className": "text-center",
			"targets": [0,4],
		}];
		load_tabel('tabel_evaluasi',{},columnDef,"300px");
	});
	function sendEmail(){

	}
	function detail_ijin(kode_file){
		load_tabel('tabel_kbli',{'kode_file':kode_file});
	}
	function ceklist(val,id,kode){
		$('#'+id).attr("checked",false);
		crude('update','master_berkas',{'kode_file':kode},{'sts_eva':val},'');
	}
	function load_dokumen(kode_file){
		$.ajax({
			url: "<?php echo site_url('evaluasi/load_data') ?>/",
			type: "POST",
			data: {
				kode_file: kode_file,
				data : 'berkas'
			},
			dataType: "JSON",
			success: function(datas) {
				$.map(datas, function(obj) {
					var file = obj.kode_file;
					var path ='';
					var kode_register = obj.kode_register;
					if(obj.kode_dokumen.substr(0,4)=='adms'){
						path = 'data_adms';
					}else if(obj.kode_dokumen.substr(0,4)=='admp'){
						path = 'data_pic';
					}else if(obj.kode_dokumen.substr(0,4)=='ijin'){
						path = 'data_ijin';
					}
					$('#nama_doc').val(obj.nama_doc)
					$('#file_doc').attr('src', "<?= base_url(); ?>assets/upload_file/"+kode_register+"/"+path+"/"+file);
				});
			},
			error: function(jqXHR, textStatus, errorThrown) {
				alert('Hubungi admin untuk akses data ini');

			}
		});
	}
	function analyze(kode_reg){
		var baseUrl = '<?=base_url()?>evaluasi/analyze';
		$.ajax({
			url: baseUrl,
			type: 'POST',
			dataType: 'json',
			data: {
				kode_register : kode_reg
			},
			success: function(datas) {
				if(datas[0].substring(0,3)=='EPI'){
					$('#kode_vendor').html('<strong><font color="001E23" size="4">'+datas+'</font></strong>');
					$('#button_selesai').click();
				}else {
					var peringatan='<h5 class="modal-title" style="margin-left:1em"  id="exampleModalCenterTitle" align="left"><strong><font color="3312FF" size="3">Dokumen Wajib Yang Belum Lengkap / Tidak Sesuai :</font></strong></h5>';
					var i=1;
					$.map(datas, function(obj) {
						peringatan+='<h5 class="modal-title" style="margin-left:4em" id="exampleModalCenterTitle" align="justify"><strong><font size="3">'+i+'.'+obj+'</font></strong></h5>';
						i++;
					});
					$('#peringatan_belum_lengkap').html(peringatan);
					$('#button_belum_lengkap').click();
				}
				// if(datas[0].substring(0,3)=='EPI'){
					
				// }else{	
					
				// }
				// $.map(datas, function(obj) {
					// alert(obj.);
				// }
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert('Ups Ada sedikit kesalahan.. Segera Hubungi Administrator ');
			} 
		});
	}
	function load_tabel(nama_tabel,where,columnDefs='',scrollY="400px"){
		var baseUrl = '<?=base_url()?>evaluasi/load_tabel';
		$('#'+nama_tabel).DataTable({
			// "scrollCollapse": true,
            // "scrollX": true,
			"scrollY": scrollY,
			"scrollX":  true,
			"scrollCollapse": true,
			"destroy": true,
			"paging": false,
			"ordering": true,
			"info": true,
			"autoWidth": true,
			"searching": true,
			"processing": true,
			"serverSide": false,
			"order": [],
			"ajax": {
				"url": baseUrl,
				"type": 'POST',
				"data" : {
					nama_tabel : nama_tabel,
					where : where
				}
			},
			"columnDefs": columnDefs,
		});
	}
	function crude(aksi,tabel,where='',data='',context){
			var baseUrl = '<?=base_url()?>evaluasi/crude';
			$.ajax({
				url: baseUrl,
				type: 'POST',
				dataType: 'json',
				data: {
					aksi : aksi,
					tabel : tabel,
					where : where,
					data : data
				},
				success: function(datas) {
					if(context!='no' && context!=''){
						alert(context+' telah di'+datas+' !');
					}
				},
				error: function(xhr, ajaxOptions, thrownError) {
					alert('Ups Ada sedikit kesalahan.. Segera Hubungi Administrator ');
				} 
			});
		}
	function load_detil(kode_register){
		$('#lokasi_file_foto').attr('src','<?=base_url();?>/assets/file/vd_list/gambar.png');
		var baseUrl = '<?php echo site_url('evaluasi/load_data') ?>/';
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
					$('#kode_reg').html(': '+obj.kode_register);
					$('#kode_reg').val(obj.kode_register);
					$('#nama_pt').html(': '+obj.nama_perusahaan);
					$('#alamat_pt').html(': '+obj.alamat);
					$('#prov').html(': '+obj.prov);
					$('#kab').html(': '+obj.kab);
					$('#kec').html(': '+obj.kec);
					$('#kode_pos').html(': '+obj.kode_pos);
					$('#jab_tinggi').html(': '+obj.jab_tertinggi);
					$('#nama_pej').html(': '+obj.nama_jab_tertinggi);
					$('#no_telp_pt').html(': '+obj.no_telp_perusahaan);
					$('#email_pt').html(': '+obj.email_perusahaan);
					$('#web_pt').html(': '+obj.website_perusahaan);
				});
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
				data : 'pic'
			},
			success: function(datas) {
				$.map(datas, function(obj) {
					$('#nama_pic').html(': '+obj.nama_pic);
					$('#no_nik_pic').html(': '+obj.nik_pic);
					$('#no_hp_pic').html(': '+obj.no_hp_pic);
					$('#email_pic').html(': '+obj.email_pic);
					if(obj.file_foto!='' && obj.file_foto!=null){
						$('#lokasi_file_foto').attr('src','<?=base_url();?>'+obj.file_foto);
					}
				});
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
				data : 'minat'
			},
			success: function(datas) {
				var peringatan='';
				var i=0;
				$.map(datas, function(obj) {
					if(i>0){
						peringatan+=', '+obj.minat;
					}else{
						peringatan=obj.minat;
					}
					i++;
				});
				peringatan+='.';
				$('#minat_pekerjaan').html('<strong>'+peringatan+'</strong>');
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert('Gagal update database, silahkan hubungi administrator !');
			}
		});
		var columnDef = [{
			"targets": [-1],
			"orderable": true,
			"className": "text-center",
			"targets": [0,4,5],
		}];
		load_tabel('tabel_berkas_adm',{'kode_register':kode_register},columnDef);
		load_tabel('tabel_berkas_ijin',{'kode_register':kode_register},columnDef);
		load_tabel('tabel_pengalaman',{'kode_register':kode_register},columnDef);
	}
</script>
</body>
</html>
