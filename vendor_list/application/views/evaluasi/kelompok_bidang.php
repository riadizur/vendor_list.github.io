<div class="container-fluid">
	<div class="row ">	
		<div class="col-md-12">
			<div class="portlet box green-jungle">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-globe"></i>Daftar Registrasi Calon Vendor
					</div>
				</div>
				<div class="portlet-body">
					<div class="portlet-body form"> 
						<div class="row">
							<div class="col-md-4"></div>
							<div class="col-md-4">
								<h4 class="text-info"><strong>&nbsp;&nbsp;Filter Berdasarkan :</strong></h4>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4"></div>
							<div class="col-md-5">
								<label class="col-md-2 control-label align-left">Bidang :</label>
								<div class="col-md-10">
									<?=$dropdown_bidang;?>
								</div>
							</div>
							<div class="col-md-3">
								<label class="col-md-3 control-label align-left">Area :</label>
								<div class="col-md-9">
									<?=$dropdown_area;?>
								</div>
							</div>
						</div>
						<hr/>
						<div class="row">
							<div class="col-md-12">
								<div class="table-scrollable">
									<table class="table table-striped table-hover" id="tabel_bidang" width="100%">
										<thead>
											<th width="5%" class="align-middle text-center">No.</th>
											<th width="15%" class="align-middle text-center">Nomor Registrasi</th>
											<th width="15%" class="align-middle text-center">Kode Vendor</th>
											<th width="25%" class="align-middle text-center">Nama Perusahaan</th>
											<th width="35%" class="align-middle text-center">Domisili</th>
											<th width="5%" class="align-middle text-center">Aksi</th>
										</thead>
										<tbody>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<hr/>
						<div class="row">
							<div class="col-md-12">
								<button type="button" onclick="cetak_dokumen()" class="btn btn-success pull-right">Cetak <span class="fa fa-print"></span></button>
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

<script src="<?php echo base_url(); ?>assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>

<script src="<?php echo base_url(); ?>assets/vendor/select2/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/select2/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/md5.js"></script>




<!-- END PAGE LEVEL SCRIPTS -->

<script>
	$(document).ready(function() { 
		Layout.init();
		load_tabel_bidang('0000','0000');
		
	});
	function load_tabel_bidang(kode_bidang,prov){
		var columnDef = [{
			"targets": [-1],
			"orderable": true,
			"className": "text-center",
			"targets": [0,5],
		}];
		load_tabel('tabel_bidang',{'kode_bidang':kode_bidang,'prov':prov},columnDef);
	}
	var md5 = function(value) {
		return CryptoJS.MD5(value).toString();
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
	function cetak_dokumen(){
		var bidang=$('#dropdown_bidang').val();
		var area=$('#dropdown_area').val();
		window.open("<?=base_url();?>laporan/cetak_daftar_perusahaan/"+md5(bidang)+"/"+md5(area), '_blank');
	}
</script>
</body>
</html>
