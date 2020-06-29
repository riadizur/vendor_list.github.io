<div class="container-fluid">
	<div class="content">
		<div class="row ">	
			<div class="portlet box green-jungle">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-globe"></i>Form Registrasi Project
					</div>
				</div>
				<div class="portlet-body">
					<div class="portlet-body form">
						<div class="form-body">
							<div class="row">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-12"> 
											<div class="panel panel-success">
												<div class="panel-body form-horizontal">
													<h4 class="text-info" >Detail Project</h4>
													<div class="form-group">
														<label class="col-md-4 control-label align-left">Keperluan<span class="text-danger"><small>*</small></span></label>
														<div class="col-md-8">
															<?=$dropdown_keperluan;?>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-4 control-label align-left">Kode Project</label> 
														<div class="col-md-8">
															<input type="text" name="kode_project" style="font-weight:bold;" id="kode_project" class="form-control input-sm" value="" readonly="true">
														</div>
													</div>
													<div class="form-group"> 
														<label class="col-md-4 control-label align-left">Nama Project<span class="text-danger"><small>*</small></span></label>
														<div class="col-md-8">
															<input type="text" name="nama_project" id="nama_project" class="form-control input-sm" placeholder=" "/>
															<span class="help-block text-danger" id="alert1" style="display:none;"><small><small>* Form ini wajib diisi !</small></small></span>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-4 control-label align-left">Lokasi Project<span class="text-danger"><small>*</small></span></label>
														<div class="col-md-8">
															<input type="text" name="lokasi_project" id="lokasi_project" class="form-control input-sm" placeholder=" "/>
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
													<div class="form-group" style="display:none;" id="form_oe">
														<label class="col-md-4 control-label align-left">Nilai OE<span class="text-danger"><small>*</small></span></label>
														<div class="col-md-8">
															<input type="text" name="nilai_oe" id="nilai_oe" class="form-control input-sm number" placeholder=" "/>
															<span class="help-block text-danger" id="alert7" style="display:none;"><small><small>* Form ini wajib diisi !</small></small></span>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-4 control-label align-left">Divisi<span class="text-danger"><small>*</small></span></label>
														<div class="col-md-8">
															<?=$dropdown_divisi;?>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-4 control-label align-left">Durasi<span class="text-danger"><small>*</small></span></label>
														<div class="col-md-4">
															<input type="text" name="durasi" id="durasi" class="form-control input-sm number" placeholder=" ">
															<span class="help-block text-danger" id="alert9" style="display:none;"><small><small>* Form ini wajib diisi !</small></small></span>
														</div>
														<label class="col-md-4 control-label align-left">Hari&nbsp;</label>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="panel panel-success">
												<div class="panel-body form-horizontal">
													<div class="form-group">
														<label class="col-md-4 control-label align-left">Metode Pengadaan<span class="text-danger"><small>*</small></span></label>
														<div class="col-md-8">
															<?=$dropdown_metode_pengadaan;?>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-4 control-label align-left">Jenis Pengadaan</label>
														<div class="col-md-8">
															<?=$dropdown_jenis_pengadaan;?>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-4 control-label align-left">Bidang Pekerjaan</label>
														<div class="col-md-8">
															<?=$dropdown_klasifikasi;?>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div> 
								</div>
								<div class="col-md-6">
									<div class="panel panel-success">
										<div class="panel-body form-horizontal">
											<h4 class="text-info">Tanggal Rencana</h4>
											<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
													<div class="dashboard-stat blue-madison">
														<div class="panel-body form-horizontal">
															<label>Tgl Publish</label>
															<input type="text" name="tgl_rencana_publish" id="tgl_rencana_publish" class="form-control input-sm datetimepicker" placeholder="Select" required />
														</div>
													</div>
												</div>
												
												<div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
													<div class="dashboard-stat blue-madison">
														<div class="panel-body form-horizontal">
															<label>Publish Otomatis?</label>
															<br>
															<label><input type="checkbox" class="icheck" name="auto_publish" id="auto_publish_yes" onclick="$(this).attr('checked',true);$('#auto_publish_no').attr('checked',false);" value="1"><small> Ya</small></label>
															<label><input type="checkbox" class="icheck" name="auto_publish" id="auto_publish_no" onclick="$(this).attr('checked',true);$('#auto_publish_yes').attr('checked',false);" value="0" checked><small> Tidak</small></label>
														</div>
													</div>	
												</div>	
											</div>
											<br>
											<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
													<div class="dashboard-stat blue-madison">
														<div class="panel-body form-horizontal">
															<label>Tgl Anwizing</label>
															<input type="text" name="tgl_rencana_anwizing" id="tgl_rencana_anwizing" class="form-control input-sm datetimepicker" placeholder="Select" required />
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
													<div class="dashboard-stat blue-madison">
														<div class="panel-body form-horizontal">
															<label>Tgl Penawaran</label>
															<input type="text" name="tgl_rencana_penawaran" id="tgl_rencana_penawaran" class="form-control input-sm datetimepicker" placeholder="Select" required />
														</div>
													</div>	
												</div>
											</div>
											<br>
											<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
													<div class="dashboard-stat blue-madison">
														<div class="panel-body form-horizontal">
															<label>Tgl Negosiasi</label>
															<input type="text" name="tgl_rencana_negosiasi" id="tgl_rencana_negosiasi" class="form-control input-sm datetimepicker" placeholder="Select" required />
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
													<div class="dashboard-stat blue-madison">
														<div class="panel-body form-horizontal">
															<label>Tgl Penetapan</label>
															<input type="text" name="tgl_rencana_pengerjaan" id="tgl_rencana_pengerjaan" class="form-control input-sm datetimepicker" placeholder="Select" required />
														</div>
													</div>	
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6" id="form_upload_dokumen" style="display:none;">
									<div class="panel panel-success">
										<div class="panel-body form-horizontal">
											<h4 class="text-info" >Upload Dokumen</h4> 
											<div class="form-group">
												<label class="col-md-4 control-label align-left">Jenis Dokumen<span class="text-danger"><small>*</small></span></label>
												<div class="col-md-8">
													<?=$dropdown_jenis_dokumen;?>
												</div>
											</div>
											<div class="form-group" id="form_uraian_nota_dinas" style="display:none;">
												<label class="col-md-4 control-label align-left">Perihal<span class="text-danger"><small>*</small></span></label>
												<div class="col-md-8">
													<input type="text" name="perihal" id="perihal" class="form-control input-sm" placeholder=" ">
													<span class="help-block text-danger" id="alert9" style="display:none;"><small><small>* Form ini wajib diisi !</small></small></span>
												</div>
											</div>
											<div class="form-group" id="form_nomor_doc" style="display:none;">
												<label class="col-md-4 control-label align-left">Nomor Dokumen<span class="text-danger"><small>*</small></span></label>
												<div class="col-md-8">
													<input type="text" name="nomor_dokumen" id="nomor_dokumen" class="form-control input-sm number" placeholder=" ">
													<span class="help-block text-danger" id="alert9" style="display:none;"><small><small>* Form ini wajib diisi !</small></small></span>
												</div>
											</div>
											<div class="form-group" id="form_upload" style="display:none;">
												<label class="col-md-4"></label>
												<div class="col-md-8">
													<form id="form_upload_file" action="<?=base_url()?>pengadaan/upload/dokumen" method="post" enctype="multipart/form-data">
														<div class="row">
															<input class="col-md-9" id="upload_file" type="file" name="myfile">
															<input class="col-md-2" id="btn_submit_upload"type="submit" value="Upload" style="display:none;">
														</div>
													</form>
													<div class="progress" style="display:none;" id="bar_upload_bar">
														<div class="progress-bar" id="bar_upload" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
														<div class="percent" id="percent_bar_upload">0%</div >
													</div>
													<div id="status_upload"></div>
													<div id="nama_file"></div>
													<div id="kode_file"></div>
													<span class="help-block text-danger" id="alertfoto" style="display:none;"><small><small>* Anda belum upload file foto !</small></small></span>
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-12">
													<button type="button" id="upload_berkas" onclick="upload();" class="btn btn-success pull-right">UPLOAD</a></button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6" id="form_entri_boq" style="display:none;">
									<div class="portlet light bordered">
										<div class="portlet-body form-horizontal">
											<h4 class="text-info" >Entry BoQ</h4> 
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-4 control-label align-left">Jenis Barang</label>
													<div class="col-md-8">
														<?=$dropdown_jenis_barang;?>
													</div>
												</div>
												<div class="form-group" id="form_kel_barang">
													<label class="col-md-4 control-label align-left">Kelompok Barang</label>
													<div class="col-md-8">
														<?=$dropdown_kelompok_barang;?>
													</div>
												</div>
												<div class="form-group" id="form_kat_barang">
													<label class="col-md-4 control-label align-left">Nama Barang</label>
													<div class="col-md-8">
														<?=$dropdown_nama_barang;?>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-4 control-label align-left">Merk</label>
													<div class="col-md-8">
														<textarea type="text" id="merk_barang" name="merk_barang" class="form-control input-sm" placeholder=" "></textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-4 control-label align-left">Tipe</label>
													<div class="col-md-8">
														<?=$dropdown_tipe_barang;?>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-4 control-label align-left">Spesifikasi</label>
													<div class="col-md-8">
														<?=$dropdown_spesifikasi_barang;?>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-4 control-label align-left">Jumlah</label>
													<div class="col-md-3">
														<input type="text" id="jumlah_barang" name="jumlah_barang" class="form-control input-sm" placeholder=" ">
													</div>
													<label class="col-md-2 control-label align-left">Satuan</label>
													<div class="col-md-3">
														<?=$dropdown_satuan_barang;?>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-4 control-label align-left">Upload File Gambar</label>
													<div class="col-md-8">
														<input type="file" id="file_gambar" name="file_gambar" class="form-control input-sm">
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<a type="button" id="btnaddbarang" onclick="add_boq()" class="btn yellow pull-right"><i class="fa fa-plus"></i> Tambahkan</a>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="row" id="form_tabel_upload_dokumen" style="display:none;">
								<div class="col-md-12">
									<div class="panel panel-success">
										<div class="panel-body form-horizontal">
											<h4 class="text-info" >Dokumen Yang Sudah Diupload</h4>
											<div class="table-scrollable">
												<table class="table table-striped table-hover" id="tabel_daftar_berkas" width="100%">
													<thead>
														<th width="5%" class="align-middle text-center">No.</th>
														<th width="20%" class="align-middle text-center">Nama Dokumen</th>
														<th width="20%" class="align-middle text-center">Nama File</th>
														<th width="10%" class="align-middle text-center">Nomor</th>
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
							<div class="row" id="form_tabel_entry_boq" style="display:none;">
								<div class="col-md-12">
									<div class="panel panel-success">
										<div class="panel-body form-horizontal">
											<h4 class="text-info" >Tabel BoQ</h4>
											<div class="table-scrollable">
												<table class="table table-striped table-hover" id="tabel_daftar_entry_boq" width="100%">
													<thead>
														<th width="5%" class="align-middle text-center">No.</th>
														<th width="20%" class="align-middle text-center">Nama Barang</th>
														<th width="20%" class="align-middle text-center">Merek</th>
														<th width="10%" class="align-middle text-center">Tipe</th>
														<th width="10%" class="align-middle text-center">Spesifikasi</th>
														<th width="10%" class="align-middle text-center">Jumlah</th>
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
						<div class="form-actions">
							<button type="button" id="btnSave" onclick="simpan();" class="btn blue pull-right">SIMPAN</a></button>
							<!-- <button type="button" id="btnSave" class="btn blue pull-right" data-target="#modal_dokumen" data-toggle="modal">Selesai</button> -->
						</div>
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
				<h5 class="modal-title" id="exampleModalCenterTitle" align="center"><strong><font color="001E23" size="4"><?=$kode_project;?></font></strong></h5>
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
				<h5 class="modal-title" id="exampleModalCenterTitle" align="center"><strong><font color="001E23" size="4"><?=$kode_project;?></font></strong></h5>
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
<script src="<?php echo base_url(); ?>assets/vendor/datetimepicker/jquery.datetimepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/datetimepicker/build/jquery.datetimepicker.full.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery.form.js"></script> 
<!-- END PAGE LEVEL SCRIPTS --> 

<script>
function delete_berkas_pengadaan(id){
	alert('Apakah anda yakin akan menghapus dokumen ini ?');
	crude('delete','master_berkas_pengadaan',{'id': id},'','Dokumen');
	load_tabel('tabel_daftar_berkas',{'kode_project':$('#kode_project').val()},'','200px');
}
function upload(){
	var perihal='';
	if($('#perihal').val()!=''){
		perihal=' '+$('#perihal').val();
	}
	var date=new Date();
	var data={
		kode_project : $('#kode_project').val(),
		kode_dokumen_pengadaan : $('#<?=$nama_dropdown_jenis_dokumen;?>').val(),
		kode_file : $('#kode_file').val(),
		nama_file : $('#nama_file').val(),
		uraian_dokumen : $('#<?=$nama_dropdown_jenis_dokumen;?> option:selected').text()+perihal,
		nomor_dokumen : $('#nomor_dokumen').val(),
		tgl_upload : date
	}
	crude('insert','master_berkas_pengadaan',{'kode_project':$('#kode_project').val(),'uraian_dokumen': $('#<?=$nama_dropdown_jenis_dokumen;?> option:selected').text()+perihal},data,'Project');
	load_tabel('tabel_daftar_berkas',{'kode_project':$('#kode_project').val()},'','200px');
}
function simpan(){
	var d = new Date();

	var tahun = d.getFullYear();
	var data={
		tahun : tahun,
		kode_project: $('#kode_project').val(),
		keperluan : $('#<?=$nama_dropdown_keperluan?>').val(),
		nama_project : $('#nama_project').val(),
		lokasi_project : $('#lokasi_project').val(),
		kec : $('#<?=$nama_dropdown_kecamatan?> option:selected').text(),
		kab : $('#<?=$nama_dropdown_kabupaten?> option:selected').text(),
		prov : $('#<?=$nama_dropdown_provinsi?> option:selected').text(),
		nilai_oe : $('#nilai_oe').val(),
		divisi : $('#<?=$nama_dropdown_divisi?> option:selected').text(),
		durasi : $('#durasi').val(),
		metode_pengadaan : $('#<?=$nama_dropdown_metode_pengadaan?> option:selected').text(),
		jenis_pengadaan : $('#<?=$nama_dropdown_jenis_pengadaan?> option:selected').text(),
		kode_kbli : $('#<?=$nama_dropdown_klasifikasi?>').val(),
		bidang_pekerjaan : $('#<?=$nama_dropdown_klasifikasi?> option:selected').text(),
		tgl_rencana_publish : $('#tgl_rencana_publish').val(),
		tgl_rencana_anwizing : $('#tgl_rencana_anwizing').val(),
		tgl_rencana_penawaran : $('#tgl_rencana_penawaran').val(),
		tgl_rencana_negosiasi : $('#tgl_rencana_negosiasi').val(),
		tgl_rencana_pengerjaan : $('#tgl_rencana_pengerjaan').val(),
		auto_publish : $("input[name='auto_publish']:checked").val(),
		last_update : d.getFullYear() + '-' +('0' + (d.getMonth()+1)).slice(-2)+ '-' +  ('0' + d.getDate()).slice(-2) + ' '+d.getHours()+ ':'+('0' + (d.getMinutes())).slice(-2)+ ':'+d.getSeconds()
	}
	crude('insert','tp_master_project',{'kode_project':$('#kode_project').val()},data,'Project');
	reset(); 
}
function add_boq(){
	var d = new Date();

	var tahun = d.getFullYear();
	var data={
		kode_project: $('#kode_project').val(),
		kode_barang : $('#<?=$nama_dropdown_nama_barang?>').val(),
		nama_barang : $('#<?=$nama_dropdown_nama_barang?> option:selected').text(),
		merk_barang : $('#merk_barang').val(),
		tipe_barang : $('#<?=$nama_dropdown_tipe_barang?> option:selected').text(),
		spesifikasi_barang : $('#<?=$nama_dropdown_spesifikasi_barang?> option:selected').text(),
		jumlah_barang : $('#jumlah_barang').val(),
		satuan_barang : $('#<?=$nama_dropdown_satuan_barang?> option:selected').text(),
		file_foto : $('#file_gambar').val(),
	}
	crude('insert','tp_master_boq',{'kode_project':$('#kode_project').val()},data,'BoQ')
	load_tabel('tabel_daftar_entry_boq',{'kode_project':$('#kode_project').val()},'','200px');
}
function reset(){
	var date = new Date();
	kode_project = date.getTime();
	$('#kode_project').val(kode_project);
	$('#<?=$nama_dropdown_keperluan?>').val('').trigger('change');
	$('#nama_project').val('');
	$('#lokasi_project').val('');
	$('#<?=$nama_dropdown_kecamatan?>').val('0000').trigger('change');
	$('#<?=$nama_dropdown_kabupaten?>').val('0000').trigger('change');
	$('#<?=$nama_dropdown_provinsi?>').val('0000').trigger('change');
	$('#nilai_oe').val('');
	$('#<?=$nama_dropdown_divisi?>').val('0000').trigger('change');
	$('#durasi').val('');
	$('#<?=$nama_dropdown_metode_pengadaan?>').val('0000').trigger('change');
	$('#<?=$nama_dropdown_jenis_pengadaan?>').val('0000').trigger('change');
	$('#<?=$nama_dropdown_klasifikasi?>').val('0000').trigger('change');
}
var date = new Date;
var kode_project = date.getTime();
function show_id(id){
	var val=$('#<?=$nama_dropdown_keperluan?>').val();
	if(val!=''){
		$('#kode_project').val(id+'-'+kode_project);
		if(val=='PS'){
			$('#form_oe').show();
			$('#form_upload_dokumen').show();
			$('#form_entri_boq').hide();
			$('#form_tabel_upload_dokumen').show();
			$('#form_tabel_entry_boq').hide();
		}else{
			$('#form_oe').hide();
			$('#form_entri_boq').show();
			$('#form_upload_dokumen').hide();
			$('#form_tabel_entry_boq').show();
			$('#form_tabel_upload_dokumen').hide();
		}
	}else{
		$('#kode_project').val('');
		$('#form_oe').hide();
		$('#form_entri_boq').hide();
		$('#form_upload_dokumen').hide();
	}
}
function check_id(){
	var baseUrl = '<?php echo site_url('register/check_id') ?>/';
	$.ajax({
		url: baseUrl,
		dataType: 'json',
		type: 'POST', 
		data: {
			kode_project: '<?=$kode_project;?>'
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
function form_upload(kode){
	if(kode!='0000' && kode!=''){
		$('#form_upload').show();
		$('#form_nomor_doc').show();
		if(kode=='DOC4'){
			$('#form_uraian_nota_dinas').show();
		}else{
			$('#form_uraian_nota_dinas').hide();
		}
	}else{
		$('#form_upload').hide();
		$('#form_nomor_doc').hide();
		$('#form_uraian_nota_dinas').hide();
	}
}
function load_tabel(nama_tabel,where,columnDefs='',scrollY="400px"){
	var baseUrl = '<?=base_url()?>pengadaan/load_tabel';
	$('#'+nama_tabel).DataTable({
		// "scrollCollapse": true,
		// "scrollX": true,
		"scrollY": scrollY,
		// "scrollX":  scrollX,
		"scrollCollapse": true,
		"destroy": true,
		"paging": false,
		"ordering": true,
		"info": true,
		"autoWidth": true,
		"searching": false,
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
</script>
<script>
	function list_dropdown_query(nama_dropdown,query){
			removeOptions(document.getElementById(nama_dropdown));
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
	function load_form_data_perusahaan(kode_project){
		var baseUrl = '<?php echo site_url('register/load_data') ?>/';
		$.ajax({
			url: baseUrl,
			dataType: 'json',
			type: 'POST',
			data: {
				kode_project: kode_project,
				data : 'perusahaan'
			},
			success: function(datas) {
				$.map(datas, function(obj) {
					$('#nama_pt').val(obj.nama_perusahaan);
					$('#alamat_pt').val(obj.alamat);
					// list_dropdown('dropdown_kabupaten',[],'tr_lokasi_kab',['id_kab','nama'],'where id_prov='+obj.kode_prov,'','','Select');
					// list_dropdown('dropdown_kecamatan',[],'tr_lokasi_kec',['id_kec','nama'],'where id_kab='+obj.kode_kab,'','','Select');
					$('#<?=$nama_dropdown_provinsi?>').val(obj.kode_prov).trigger("change");
					$('#<?=$nama_dropdown_kabupaten?>').val(obj.kode_kab).trigger("change");
					$('#<?=$nama_dropdown_kecamatan?>').val(obj.kode_kec).trigger("change")	;
					
					$('#kodepos').val(obj.kode_pos);
					$('#jab_tertinggi').val(obj.jab_tertinggi);
					$('#nama_jab_tertinggi').val(obj.nama_jab_tertinggi);
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
</script>
<script>
	$(document).ready(function() {
		$('#<?=$nama_dropdown_klasifikasi?>').select2({dropdownAutoWidth : true});
		$('#<?=$nama_dropdown_klasifikasi?>').select2({dropdownAutoWidth : true});
		$('#<?=$nama_dropdown_metode_pengadaan?>').select2({dropdownAutoWidth : true});
		$('#<?=$nama_dropdown_jenis_pengadaan?>').select2({dropdownAutoWidth : true});
		$('#<?=$nama_dropdown_divisi?>').select2({dropdownAutoWidth : true});
		$('#<?=$nama_dropdown_provinsi?>').select2({dropdownAutoWidth : true});
		$('#<?=$nama_dropdown_kabupaten?>').select2({dropdownAutoWidth : true});
		$('#<?=$nama_dropdown_kecamatan?>').select2({dropdownAutoWidth : true});
		Layout.init();
		$('.datepicker').datepicker({
			autoclose: true,
			format: "yyyy-mm-dd",
			todayHighlight: true,
			orientation: "top auto",
			todayBtn: true,
			todayHighlight: true,
		});
		$('.datetimepicker').datetimepicker();
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
		$('#form_upload_file').ajaxForm({
			beforeSend: function() {
				$('#status_upload').empty();
				var percentVal = '0%';
				$('#bar_upload').width(percentVal);
				$('#percent_bar_upload').html(percentVal);
			},
			uploadProgress: function(event, position, total, percentComplete) {
				var percentVal = percentComplete + '%';
				$('#bar_upload').width(percentVal);
				$('#percent_bar_upload').html(percentVal);
				$('#bar_upload_bar').show();
			},
			complete: function(xhr) {
				try{
					var obj = JSON.parse(xhr.responseText);
					$('#nama_file').val(obj.nama_file);
					$('#kode_file').val(obj.kode_file);
					alert('Upload Sukses !');
				}catch(err){
					alert(xhr.responseText);
				}
			}
		});
		$('#form_upload_file').on('change',function(){
			$('#btn_submit_upload').click();
		});
		load_tabel('tabel_daftar_berkas',{'kode_project':$('#kode_project').val()},'','200px');
		load_tabel('tabel_daftar_entry_boq',{'kode_project':$('#kode_project').val()},'','200px');
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
