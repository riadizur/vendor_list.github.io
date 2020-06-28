
<style>
    .scroll{
        /* position:; */
        /* left:78%; */
        border-left:1px solid black;
        border-bottom:1px solid black;
        width:auto;
        /* top:14%; */
        height:300px;
        overflow:scroll;
        scroll-face-color:red;
    }
</style>
<div class="container-fluid">
    <?php
    $tr_minat = $this->db_models->result('tr_minat_pekerjaan',array());
    $i=0;
    foreach($tr_minat as $tm){
        $minat = $this->db_models->result('master_minat_pekerjaan',array('kode_minat'=>$tm->kode));
        if($i%3==0){ ?>
        <div class="col-md-12">
            <div class="col-md-4">
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i><?=$tm->nama;?>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <!-- <div class="scroller" style="height:300px" data-rail-visible="1" data-rail-color="yellow" data-handle-color="#a1b2bd"> -->
                        <div class="scroll">
                            <ol>
                                <?php foreach($minat as $m){ ?>
                                <li><?=$this->db_models->row('master_perusahaan',array('kode_register'=>$m->kode_register),'nama_perusahaan');?></li>
                                <?php } ?>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <?php }else{ ?>
            <div class="col-md-4">
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i><?=$tm->nama;?>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <!-- <div class="scroller" style="height:300px" data-rail-visible="1" data-rail-visible="1" data-rail-color="yellow" data-handle-color="#a1b2bd"> -->
                            <div class="scroll">
                            <ol>
                                <?php foreach($minat as $m){ ?>
                                <li><?=$this->db_models->row('master_perusahaan',array('kode_register'=>$m->kode_register),'nama_perusahaan');?></li>
                                <?php } ?>
                            </ol>
                            </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
            <?php } ?>
        <?php if($i%3==2){ ?>
        </div>
        <?php } $i++;?>
    <?php } ?>
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
		Layout.init();
		load_tabel_vendor();
	});
	function load_tabel_vendor(){
		var columnDef = [{
			"targets": [-1],
			"orderable": true,
			"className": "text-center",
			"targets": [0,4],
		}];
		load_tabel('tabel_vendor',{},columnDef,"300px");
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
</script>
</body>
</html>
