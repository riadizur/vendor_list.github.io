<div class="container-fluid">
	<div class="row ">	
		<div class="col-md-12">
			<div class="portlet box green-jungle">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-globe"></i>Daftar Project
					</div>
				</div>
				<div class="portlet-body">
					<div class="portlet-body form">
						<div class="row">
							<div class="col-md-12">
								<div class="table-scrollable">
									<table class="table table-striped table-hover" id="tabel_kontraktor" width="100%">
										<thead>
											<th width="5%" class="align-middle text-center">No.</th>
											<th width="10%" class="align-middle text-center">Kode Project</th>
											<th width="15%" class="align-middle text-center">Nama Project</th>
											<th width="20%" class="align-middle text-center">Lokasi Project</th>
											<th width="10%" class="align-middle text-center">Divisi</th>
											<th width="10%" class="align-middle text-center">Aksi</th>
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
<div class="modal fade" id="publish" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle" align="center"><font color="001E23" size="3"><strong>Pengaturan Publish</strong></font></h5>
			</div>
			<div class="modal-body">
				<div class="panel panel-success">
					<div class="panel-body form-horizontal">
						<div class="row">
							<div id='kode_project'></div>
							<div id='keperluan'></div>
							<label class="col-md-2 control-label align-left">Mode Publish :</label>
							<div class="col-md-3">
								<input type="checkbox" class="icheck" name="mode_publish" id="mode_publish_1" onclick="mode_publish($(this).val())" value="1" checked> Sesuai Kode KBLI Project<br>
								<input type="checkbox" class="icheck" name="mode_publish" id="mode_publish_2" onclick="mode_publish($(this).val())" value="2"> Semua Perusahaan </input>
							</div>
							<div class="col-md-3">
								<input type="checkbox" class="icheck" name="mode_publish" id="mode_publish_3" onclick="mode_publish($(this).val())" value="3"> Custom Kode KBLI<br> </input>
								<input type="checkbox" class="icheck" name="mode_publish" id="mode_publish_4" onclick="mode_publish($(this).val())" value="4"> Custom Perusahaan </input>
							</div>
							<div class="col-md-4" id="form_custom_kbli" style="display:none;">
								<label class="row control-label align-left">Pilih KBLI :</label>
								<div class="row">
									<div class="col-md-1"></div>
									<div class="col-md-11">
										<?=$dropdown_kbli;?>
									</div>
								</div>
							</div>
						</div>
						<hr/>
						<div class="row" id="form_daftar_kbli" style="display:none;">
							<h4 class="text-info" >Daftar KBLI</h4>
							<div class="table-scrollable">
								<table class="table table-striped table-hover" id="tabel_kbli" width="100%">
									<thead>
										<th width="5%" class="align-middle text-center">No.</th>
										<th width="15%" class="align-middle text-center">Kode KBLI</th>
										<th width="80%" class="align-middle text-center">Klasifikasi Pekerjaan</th>
									</thead>
									<tbody>
									</tbody>
								</table>
							</div>
						</div>
						<div class="row" id="form_daftar_kbli_custom" style="display:none;">
							<h4 class="text-info" >Daftar KBLI</h4>
							<div class="table-scrollable">
								<table class="table table-striped table-hover" id="tabel_kbli_custom" width="100%">
									<thead>
										<th width="5%" class="align-middle text-center">No.</th>
										<th width="15%" class="align-middle text-center">Kode KBLI</th>
										<th width="70%" class="align-middle text-center">Klasifikasi Pekerjaan</th>
										<th width="10%" class="align-middle text-center">Aksi</th>
									</thead>
									<tbody>
									</tbody>
								</table>
							</div>
						</div>
						<div class="row" id="form_custom_perusahaan" style="display:none;">
							<h4 class="text-info" >Dafar Perusahaan</h4>
							<div class="table-scrollable">
								<table class="table table-striped table-hover" id="tabel_publish_custom" width="100%">
									<thead>
										<th width="5%" class="align-middle text-center">No.</th>
										<th width="85%" class="align-middle text-center">Nama Perusahaan</th>
										<th width="10%" class="align-middle text-center">Pilih</th>
									</thead>
									<tbody>
									</tbody>
								</table>
							</div>
						</div>
						<div class="row" id="form_perusahaan">
							<h4 class="text-info" >Dafar Perusahaan</h4>
							<div class="table-scrollable">
								<table class="table table-striped table-hover" id="tabel_publish" width="100%">
									<thead>
										<th width="5%" class="align-middle text-center">No.</th>
										<th width="95%" class="align-middle text-center">Nama Perusahaan</th>
									</thead>
									<tbody>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" id="close_publish" data-dismiss="modal">close</button>
				<button type="button" onclick="publish()" class="btn btn-primary">Publish</button>
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
<script src="<?php echo base_url(); ?>assets/vendor/jquery.form.js"></script> 
<!-- END PAGE LEVEL SCRIPTS -->

<script>
	$(document).ready(function() { 
		Layout.init();
		var columnDef = [{
			"targets": [-1],
			"orderable": true,
			"className": "text-right",
			"targets": [4],
			"className": "text-center",
			"targets": [0,5],
		}];
		load_tabel('tabel_kontraktor',{'keperluan':'KT'},columnDef,"430px");
		// $('#publish').on('show.bs.modal', function () {
		// 	load_tabel('tabel_kbli',{'keperluan':'PS',},columnDef,"370px");
		// });
	});
	function publish(){
		if($("#mode_publish_1").prop('checked')){
			publish_ajax('sesuai_kbli');
		}else if($("#mode_publish_2").prop('checked')){
			publish_ajax('semua_perusahaan');
		}else if($("#mode_publish_3").prop('checked')){
			publish_ajax('custom_kbli');
		}else{
			publish_ajax('custom_perusahaan',data);
		}
	}
	function publish_ajax(mode,data=[]){
		$.ajax({
			url: "<?php echo site_url('pengadaan/publish') ?>/",
			type: "POST",
			data: {
				mode: mode,
				data: {
					kode_vendor : data,
					kode_project : $('#kode_project').val(),
					keperluan : $('#keperluan').val()
				},
			},
			dataType: "JSON",
			success: function(datas) {
				if(datas=='ok'){
					alert('Project telah di publish !');					
					$('#close_publish').click();
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				alert('Hubungi admin untuk akses data ini');

			}
		});
	}
	function add_kbli(){
		var klasifikasi_text=$('#<?=$nama_dropdown_kbli?> option:selected').text().split(' - ');
		var bidang_pekerjaan=klasifikasi_text[1];
		var kode_kbli=klasifikasi_text[0];
		var data={
			kode_kbli : kode_kbli,
			bidang_pekerjaan : bidang_pekerjaan,
			separator : ', '
		}
		crude('add','tp_master_project',{'kode_project':$('#kode_project').val()},data,'KBLI');
	}
	function mode_publish(val){
		var kode_project=$('#kode_project').val();
		var keperluan=$('#keperluan').val();
		$("input[name='mode_publish']").prop('checked',false);
		$("#mode_publish_"+val).prop('checked',true);
		if(val==3){
			$('#form_daftar_kbli').hide();
			$('#form_custom_kbli').show();
			$('#form_daftar_kbli_custom').show();
			$('#form_custom_perusahaan').hide();
			$('#form_perusahaan').show();
			load_tabel('tabel_kbli_custom',{'keperluan':keperluan,'kode_project':kode_project},'',"200px");
			load_tabel('tabel_publish',{'keperluan':keperluan,'kode_project':kode_project,'mode':'custom'},'',"300px");
		}else if(val==4){
			$('#form_custom_perusahaan').show();
			$('#form_perusahaan').hide();
			$('#form_custom_kbli').hide();
			$('#form_daftar_kbli').hide();
			$('#form_daftar_kbli_custom').hide();
			load_tabel('tabel_publish_custom',{'keperluan':keperluan,'kode_project':kode_project},'',"300px");
		}else if(val==2){
			load_tabel('tabel_publish','all','',"300px");
			$('#form_custom_perusahaan').hide();
			$('#form_perusahaan').show();
			$('#form_custom_kbli').hide();
			$('#form_daftar_kbli').hide();
			$('#form_daftar_kbli_custom').hide();
		}else{
			load_tabel('tabel_publish',{'keperluan':keperluan,'kode_project':kode_project},'',"300px");
			$('#form_custom_perusahaan').hide();
			$('#form_perusahaan').show();
			$('#form_custom_kbli').hide();
			$('#form_daftar_kbli').show();
			$('#form_daftar_kbli_custom').hide();
		}
	}
	function load_publish_tabel(){
		var kode_project=$('#kode_project').val();
		var keperluan=$('#keperluan').val();
		load_tabel('tabel_kbli',{'keperluan':keperluan,'kode_project':kode_project},'',"200px");
		load_tabel('tabel_publish',{'keperluan':keperluan,'kode_project':kode_project,'mode':'custom'},'',"300px");
	}
	function load_publish_setting(keperluan,kode_project){
		$("input[name='mode_publish']").prop('checked',false);
		$("#mode_publish_1").prop('checked',true);
		$('#form_daftar_kbli').show();
		$('#kode_project').val(kode_project);
		$('#keperluan').val(keperluan);
		load_tabel('tabel_kbli',{'keperluan':keperluan,'kode_project':kode_project},'',"200px");
		load_tabel('tabel_publish',{'keperluan':keperluan,'kode_project':kode_project},'',"300px");
	}
	function sendEmail(jen_mail,kode_register,email,subject){
		$.ajax({
			url: "<?php echo site_url('welcome/mail') ?>/",
			type: "POST",
			data: {
				jen_mail: jen_mail,
				kode_register : kode_register,
				EMAIL : email,
				subject : subject
			},
			dataType: "JSON",
			success: function(datas) {
				if(datas=='ok'){
					alert('Email telah dikirim !');
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				alert('Hubungi admin untuk akses data ini');

			}
		});
	}
	function load_tabel(nama_tabel,where,columnDefs='',scrollY="400px"){
		var baseUrl = '<?=base_url()?>pengadaan/load_tabel';
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
	function crude(aksi,tabel,where='',data='',context){
		var baseUrl = '<?=base_url()?>register/crude';
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
					if(datas!='' && datas !=null){
						alert(context+' telah di'+datas+' !');
					}else{
						alert(context+' gagal di'+aksi+' !');
					}
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert('Ups Ada sedikit kesalahan.. Segera Hubungi Administrator ');
			} 
		});
	}
</script>
</body>
</html>
