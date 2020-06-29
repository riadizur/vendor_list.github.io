
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
									<table class="table table-striped table-hover" id="tabel_pemakaian_sendiri" width="100%">
										<thead>
											<th width="5%" class="align-middle text-center">No.</th>
											<th width="10%" class="align-middle text-center">Kode Project</th>
											<th width="10%" class="align-middle text-center">Keperluan</th>
											<th width="15%" class="align-middle text-center">Nama Project</th>
											<th width="20%" class="align-middle text-center">Lokasi Project</th>
											<th width="5%" class="align-middle text-center">Nilai OE</th>
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
						<div class="row" id="form_daftar_kbli">
							<h4 class="text-info" >Dafar KBLI</h4>
							<div class="table-scrollable">
								<table class="table table-striped table-hover" id="tabel_publish" width="100%">
									<thead>
										<th width="5%" class="align-middle text-center">No.</th>
										<th width="85%" class="align-middle text-center">Kode KBLI</th>
										<th width="85%" class="align-middle text-center">Klasifikasi Pekerjaan</th>
										<th width="85%" class="align-middle text-center">Aksi</th>
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
						<!-- <div class="row" id="form_perusahaan">
							<h4 class="text-info" >Dafar Perusahaan</h4>
							<div class="table-scrollable">
								<table class="table table-striped table-hover" id="tabel_publish" width="100%">
									<thead>
										<th width="5%" class="align-middle text-center">No.</th>
										<th width="85%" class="align-middle text-center">Nama Perusahaan</th>
									</thead>
									<tbody>
									</tbody>
								</table>
							</div>
						</div> -->
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
				<button type="button" onclick="" class="btn btn-primary">Publish</button>
				<!-- <button type="button" onclick="alert('halaman akan dialihkan !');window.location.href = 'https://ecopowerport.co.id/tata-cara-menjadi-vendor/';" class="btn btn-primary">close</button> -->
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="catatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle" align="center"><font color="001E23" size="3"><strong>Catatan</strong></font></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<textarea type="text" class="form-control" id="catatan" name="catatan"></textarea>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
				<button type="button" onclick="" class="btn btn-primary">OK</button>
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
		// $('#<?=$nama_dropdown_kbli?>').select2({
		// 	dropdownAutoWidth : true
		// });
		Layout.init();
		var columnDef = [{
			"targets": [-1],
			"orderable": true,
			"className": "text-right",
			"targets": [5],
			"className": "text-center",
			"targets": [0,7],
		}];
		load_tabel('tabel_pemakaian_sendiri',{'keperluan':'PS'},columnDef,"370px");
	});
	function mode_publish(val){
		$($("input[name='mode_publish']").prop('checked',false));
		$($("#mode_publish_"+val).prop('checked',true));
		if(val==3){
			$('#form_custom_kbli').show();
		}else{
			$('#form_custom_kbli').hide();
		}
		if(val==4){
			$('#form_custom_perusahaan').show();
			$('#form_perusahaan').hide()
		}else{
			$('#form_custom_perusahaan').hide();
			$('#form_perusahaan').show()
		}
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
	function detail_ijin(kode_file){
		load_tabel('tabel_kbli',{'kode_file':kode_file});
	}
	function ceklist(val,id,kode){
		$('#'+id).attr("checked",false);
		crude('update','master_berkas',{'kode_file':kode},{'hasil_eva':val},'');
	}
	function load_dokumen(kode_file){
		$('#file_doc').attr('src', "");
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
					$('#nama_doc').val(obj.nama_doc);
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
				try{
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
				}catch{

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
