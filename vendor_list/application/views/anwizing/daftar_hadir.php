<div class="container-fluid">
	<div class="content">
		<div class="row ">	
			<div class="portlet box green-jungle">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-globe"></i>Daftar Project
					</div>
				</div>
				<div class="portlet-body">
					<div class="portlet-body form">
						<div class="form-body">
							<div id="daftar_project">
								<div class="row">
									<div class="col-md-12">
										<div class="table-responsive">
											<table class="table table-striped table-hover" id="tabel_project" width="100%">
												<thead>
													<th width="5%" class="align-middle text-center">No.</th>
													<th width="15%" class="align-middle text-center">Keperluan</th>
													<th width="40%" class="align-middle text-center">Nama project</th>
													<th width="15%" class="align-middle text-center">Tanggal Anwizing</th>
													<th width="15%" class="align-middle text-center">Jumlah Peserta</th>
													<th width="10%" class="align-middle text-center">Aksi</th>
												</thead>
												<tbody>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div id="detail_project"  style="display:none;">
								<div class="row">
									<div class="col-md-12">
									<button type="button" class="btn blue pull-left" onclick="back();"><span class="glyphicon glyphicon-arrow-left"></span> Back</button>
									</div>
									<br>
									<br>
									<hr>
								</div>
								<div class="row">
									<div class="col-md-8">
										<div class="row">
											<div class="col-md-12"> 
												<h4 class="text-info" >Detail Project</h4>
												<div id="kode_project"></div>
												<div class="panel panel-success">
													<div class="panel-body form-horizontal">
														<!-- <div class="row">
															<label class="col-md-4 control-label align-left">Pilih Project<span class="text-danger"><small>*</small></span></label>
															<div class="col-md-8">
																<?php //=$dropdown_daftar_project;?>
															</div>
														</div> -->
														<div id="data_project"></div>
													</div>
												</div>
											</div>
										</div> 
									</div>
									<div class="col-md-4">
										<h4 class="text-info" >Daftar Hadir</h4>
										<div class="panel panel-success">
											<div class="panel-body form-horizontal">
												<div class="table-responsive">
													<table class="table table-striped table-hover" id="tabel_kehadiran" width="100%">
														<thead>
															<th width="5%" class="align-middle text-center">No.</th>
															<th width="55%" class="align-middle text-center">Nama Perusahan</th>
															<th width="20%" class="align-middle text-center">Status</th>
															<th width="20%" class="align-middle text-center">Kehadiran</th>
														</thead>
														<tbody>
														</tbody>
													</table>
												</div>
												<br>
												<button type="button" id="btnSave" onclick="simpan();" class="btn blue pull-right">SIMPAN</a></button>
											</div>
										</div>
									</div>
										<!-- <button type="button" id="btnSave" class="btn blue pull-right" data-target="#modal_dokumen" data-toggle="modal">Selesai</button> -->
								</div>
								<div id="form_boq" style="display:none;">
									<hr>
									<h4 class="text-info" align="center">DaftarBoQ</h4>
									<hr/>
									<div class="row">
										<div class="panel panel-success">
											<div class="panel-body form-horizontal">
												<div class="table-responsive">
													<table class="table table-striped table-hover" id="tabel_boq" width="100%">
														<thead>
															<th width="5%" class="align-middle text-center">No.</th>
															<th width="30%" class="align-middle text-center">Nama Barang</th>
															<th width="20%" class="align-middle text-center">Merek</th>
															<th width="20%" class="align-middle text-center">Tipe</th>
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
								<div id="form_rks" style="display:none;">
									<hr>
									<h4 class="text-info" align="center">Dokumen RKS</h4>
									<hr/>
									<div class="row">
										<embed id="file_doc" name="file_doc" width="100%" height="500"></embed>
									</div>
								</div>
								<hr>
								<h4 class="text-info" align="center">ANWIZING</h4>
								<hr/>
								<div class="row">
									<div class="col-md-8">
										<h4 class="text-info">Daftar Pertanyaan</h4>
										<div class="panel panel-success">
											<div class="panel-body form-horizontal">
												<div class="table-responsive">
													<table class="table table-striped table-hover" id="tabel_anwizing" width="100%">
														<thead>
															<th width="5%" class="align-middle text-center">No.</th>
															<th width="25%" class="align-middle text-center">Nama Perusahan</th>
															<th width="30%" class="align-middle text-center">pertanyaan</th>
															<th width="20%" class="align-middle text-center">Jawaban</th>
															<th width="10%" class="align-middle text-center">Aksi</th>
														</thead>
														<tbody>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<h4 class="text-info">Kolom Jawaban</h4>
										<div class="panel panel-success">
											<div class="panel-body form-horizontal">
												<div class="row">
													<div id="pertanyaan"></div>
													<div id="id_pertanyaan"></div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<textarea rows="5" cols="100%" style="resize:none;overflow-y:scroll;" class="col-md-12" id="kolom_jawaban"></textarea>
													</div>
												</div>
												<br>
												<div class="row">
													<div class="col-md-12">
														<button type="button" id="btnSave" onclick="kirim();" class="btn blue pull-right">Kirim</a></button>
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
function back(){
	$('#detail_project').hide();
	$('#daftar_project').show();
	$('#kode_project').val('');
}
function daftar_hadir(kode_project,keperluan,file_rks){
	$('#kode_project').val(kode_project);
	$('#detail_project').show();
	$('#daftar_project').hide();
	var baseUrl = '<?php echo site_url('anwizing/load_data') ?>/';
	$.ajax({
		url: baseUrl,
		dataType: 'json',
		type: 'POST', 
		data: {
			kode_project: kode_project,
			data: 'project'
		},
		success: function(datas) { 
			var data='';
			$.map(datas, function(obj) {
				data+='<div class="row"><label class="col-md-4 control-label align-left">Kode Project</label><label class="col-md-8 control-label align-left">: '+obj.kode_project+'</label></div>';
				data+='<div class="row"><label class="col-md-4 control-label align-left">Nama Project</label><label class="col-md-8 control-label align-left">: '+obj.nama_project+'</label></div>';
				data+='<div class="row"><label class="col-md-4 control-label align-left">Lokasi Project</label><label class="col-md-8 control-label align-left">: '+obj.lokasi_project+', '+obj.kec+', '+obj.kab+', '+obj.prov+'</label></div>';
				data+='<div class="row"><label class="col-md-4 control-label align-left">Divisi</label><label class="col-md-8 control-label align-left">: '+obj.divisi+'</label></div>';
				data+='<div class="row"><label class="col-md-4 control-label align-left">Durasi</label><label class="col-md-8 control-label align-left">: '+obj.durasi+' Hari</label></div>';
				data+='<div class="row"><label class="col-md-4 control-label align-left">Metode Pengadaan</label><label class="col-md-8 control-label align-left">: '+obj.metode_pengadaan+'</label></div>';
				data+='<div class="row"><label class="col-md-4 control-label align-left">Jenis Pengadaan</label><label class="col-md-8 control-label align-left">: '+obj.jenis_pengadaan+'</label></div>';
				data+='<div class="row"><label class="col-md-4 control-label align-left">Bidang Pekerjaan</label><label class="col-md-8 control-label align-left">: '+obj.bidang_pekerjaan+'</label></div>';
			});
			$('#data_project').html(data);
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert('Gagal update database, silahkan hubungi administrator !');
		}
	});
	load_tabel('tabel_kehadiran',{'kode_project':kode_project},'','300px');
	load_tabel('tabel_anwizing',{'kode_project':kode_project},'','300px');
	if(keperluan=='PS'){
		$('#form_rks').show();
		$('#form_boq').hide();
		$('#file_doc').attr('src','<?=base_url();?>assets/upload_file/registrasi_project/dokumen/'+file_rks);
	}else{
		$('#form_rks').hide();
		$('#form_boq').show();
		load_tabel('tabel_boq',{'kode_project':kode_project},'','300px');
	}
}
function kirim(){
	var id=$('#id_pertanyaan').val();
	var date=new Date();
	var data={
		'jawaban':$('#kolom_jawaban').val(),
		'waktu_jawaban': data,
		'user_jawaban' :'<?=$this->session->userdata('nama');?>'
	}
	crude('update','tp_anwizing_chat',{'id': id},data,'');
	load_tabel('tabel_anwizing',{'kode_project':$('#kode_project').val()},'','300px');
	$('#id_pertanyaan').val('');
	$('#pertanyaan').html('');
	$('#kolom_jawaban').val('');
}
function jawab(pertanyaan,id){
	var pertanyaan = '<label class="col-md-12 control-label align-left"><strong>Pertanyaan :</strong><br><p align=justify>'+pertanyaan+'</p><strong>Jawaban:</strong></label>';
	$('#pertanyaan').html(pertanyaan);
	$('#id_pertanyaan').val(id);
}
function load_tabel(nama_tabel,where,columnDefs='',scrollY="400px"){
	var baseUrl = '<?=base_url()?>anwizing/load_tabel';
	$('#'+nama_tabel).DataTable({
		"scrollCollapse": true,
		"scrollX": false,
		"scrollY": scrollY,
		"destroy": true,
		"paging": false,
		"ordering": true,
		"info": false,
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
</script>
<script>
	$(document).ready(function() {
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
		var columnDef = [{
			"targets": [-1],
			"orderable": true,
			"className": "text-center",
			"targets": [0,3,4,5],
		}];
		load_tabel('tabel_project',{'sts_publish':'1'},columnDef,'450px');
		// load_tabel('tabel_kehadiran',{'kode_project':$('#<?php //=$nama_dropdown_daftar_project;?>').val()},'','350px');
		// load_tabel('tabel_daftar_entry_boq',{'kode_project':$('#kode_project').val()},'','200px');
	});
</script>
<?=$ready_jquery;?>
<?=$register_jquery;?>
<?=$crude_jquery;?>
<?php //=$load_tabel_jquery;?>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
