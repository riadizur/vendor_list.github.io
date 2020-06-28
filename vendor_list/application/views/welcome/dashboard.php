<link href="<?php echo base_url(); ?>assets/global/gcg/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/global/gcg/vendor/select2/select2.min.css" rel="stylesheet">

<style>
	p.small {
		line-height: 0.7;
	}

	p.big {
		line-height: 1.8;
	}
	#peta {
		height: 600px; 
		min-width: 310px; 
		max-width: 1360px; 
		margin: 0 auto; 
	}
	.loading {
		margin-top: 10em;
		text-align: center;
		color: gray;
	}
</style>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card shadow">
				<div class="card-body">
					<div class="row">
						<div id="peta"></div>
					</div>
					<div class="row">
						<label>Total Vendor : <?=$total_vendor;?></label>
					</div>
					<div class="row">
						<div class="col-md-12">
                            <div id="chart_7" class="chart" style="height: 400px;"></div>
						</div>
						<div class="col-md-12">
                            <div id="linked" class="chart" style="height: 800px;"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
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

<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script src="https://code.highcharts.com/mapdata/countries/id/id-all.js"></script>

<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>\
<script src="https://www.amcharts.com/lib/4/plugins/forceDirected.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

<script>
	$(document).ready(function() {
		Layout.init();
		$('#run').click(function () {     
			var geojson = $.parseJSON($('#geojson').val());

			// Initiate the chart
			$('#peta').slideDown().highcharts('Map', {
				series: [{
					mapData: geojson
				}]
			});    
		});
		grafik();
		linked();
	});

	var data = [
		['id-3700', 20],
		['id-ac', <?=$prov_id['11'];?>], //aceh
		['id-jt', <?=$prov_id['33'];?>], 
		['id-be', <?=$prov_id['17'];?>], //
		['id-bt', <?=$prov_id['36'];?>],
		['id-kb', <?=$prov_id['61'];?>],
		['id-bb', <?=$prov_id['19'];?>],
		['id-ba', <?=$prov_id['51'];?>],
		['id-ji', <?=$prov_id['35'];?>],
		['id-ks', <?=$prov_id['63'];?>],
		['id-nt', <?=$prov_id['53'];?>],
		['id-se', <?=$prov_id['73'];?>],
		['id-kr', <?=$prov_id['21'];?>],
		['id-ib', <?=$prov_id['91'];?>],
		['id-su', <?=$prov_id['12'];?>],
		['id-ri', <?=$prov_id['14'];?>],
		['id-sw', <?=$prov_id['71'];?>],
		['id-ku', <?=$prov_id['65'];?>],
		['id-la', <?=$prov_id['82'];?>],
		['id-sb', <?=$prov_id['13'];?>],
		['id-ma', <?=$prov_id['81'];?>],
		['id-nb', <?=$prov_id['52'];?>],
		['id-sg', <?=$prov_id['74'];?>],
		['id-st', <?=$prov_id['72'];?>],
		['id-pa', <?=$prov_id['92'];?>],
		['id-jr', <?=$prov_id['32'];?>],
		['id-ki', <?=$prov_id['64'];?>],
		['id-1024', <?=$prov_id['18'];?>], //lampung
		['id-jk', <?=$prov_id['31'];?>], //jakarta
		['id-go', <?=$prov_id['75'];?>],
		['id-yo', <?=$prov_id['34'];?>],
		['id-sl', <?=$prov_id['16'];?>],
		['id-sr', <?=$prov_id['76'];?>],
		['id-ja', <?=$prov_id['15'];?>],
		['id-kt', <?=$prov_id['62'];?>]
	];

	// Create the chart
	Highcharts.mapChart('peta', {
		chart: {
			map: 'countries/id/id-all'
		},
		title: {
			text: 'PETA PERSEBARAN VENDOR'
		},
		subtitle: {
			text: 'PT. ENERGI PELABUHAN INDONESIA (PT.EPI)'
		},
		mapNavigation: {
			enabled: true,
			buttonOptions: {
				verticalAlign: 'bottom'
			}
		},
		colorAxis: {
			min: 0
		},
		series: [{
			data: data,
			name: 'Jumlah Vendor',
			states: {
				hover: {
					color: '#33DA55'
				}
			},
			dataLabels: {
				enabled: false,
				format: '{point.name}'
			}
		}]
	});
	function grafik(){
		var chart = am4core.create("chart_7", am4charts.PieChart);
		// Add data
		chart.data = [
		<?php
		$minat=$this->db_models->result('tr_minat_pekerjaan',array());
		foreach($minat as $m){ ?>
		{
		<?php $jumlah=$this->db_models->count('master_minat_pekerjaan',array('kode_minat'=>$m->kode),'kode_register');?>
		"jenis_pekerjaan": "<?=$m->nama.' ('.$jumlah.') ';?>",
		"banyak_peminat": <?=$jumlah;?>
		},
		<?php }?>
		];

		// Add and configure Series
		var pieSeries = chart.series.push(new am4charts.PieSeries());
		pieSeries.dataFields.value = "banyak_peminat";
		pieSeries.dataFields.category = "jenis_pekerjaan";
	}
	function linked(){
		am4core.useTheme(am4themes_animated);
		// Themes end

		var chart = am4core.create("linked", am4plugins_forceDirected.ForceDirectedTree);

		var networkSeries = chart.series.push(new am4plugins_forceDirected.ForceDirectedSeries())
		networkSeries.dataFields.linkWith = "linkWith";
		networkSeries.dataFields.name = "name";
		networkSeries.dataFields.id = "name";
		networkSeries.dataFields.value = "value";
		networkSeries.dataFields.children = "children";

		networkSeries.nodes.template.label.text = "{name}"
		networkSeries.fontSize = 8;
		networkSeries.linkWithStrength = 0;

		var nodeTemplate = networkSeries.nodes.template;
		nodeTemplate.tooltipText = "{name}";
		nodeTemplate.fillOpacity = 1;
		nodeTemplate.label.hideOversized = true;
		nodeTemplate.label.truncate = true;

		var linkTemplate = networkSeries.links.template;
		linkTemplate.strokeWidth = 1;
		var linkHoverState = linkTemplate.states.create("hover");
		linkHoverState.properties.strokeOpacity = 1;
		linkHoverState.properties.strokeWidth = 2;

		nodeTemplate.events.on("over", function (event) {
			var dataItem = event.target.dataItem;
			dataItem.childLinks.each(function (link) {
				link.isHover = true;
			})
		})

		nodeTemplate.events.on("out", function (event) {
			var dataItem = event.target.dataItem;
			dataItem.childLinks.each(function (link) {
				link.isHover = false;
			})
		})

		networkSeries.data = [  
			<?php
			$minat=$this->db_models->result('tr_minat_pekerjaan',array());
			$sudah_ada=array();
			foreach($minat as $m){ ?>
			{  
				"name":"<?=$m->nama;?>",
				"value":<?=$this->db_models->count('master_minat_pekerjaan',array('kode_minat'=>$m->kode),'kode_register');?>,
				"linkWith":[  
					<?php
					$peminat=$this->db_models->result('master_minat_pekerjaan',array('kode_minat'=>$m->kode));
					foreach($peminat as $pm){
						$minatlain=$this->db_models->count('master_minat_pekerjaan',array('kode_register'=>$pm->kode_register),'kode_register');
						if($minatlain>1){?>
							"<?=$this->db_models->row('master_perusahaan',array('kode_register'=>$pm->kode_register),'nama_perusahaan');?>",
						<?php } 
					} ?>
				],
				"children":[  
					<?php 
					foreach($peminat as $pm){ 
						$ada=FALSE;
						for($x=0;$x<sizeof($sudah_ada);$x++){
							if($pm->kode_register==$sudah_ada[$x]){
								$ada=TRUE;
								break;
							}
						}
						if(!$ada){
							$sudah_ada[sizeof($sudah_ada)]=$pm->kode_register;
							?>
							{
								"name":"<?=$this->db_models->row('master_perusahaan',array('kode_register'=>$pm->kode_register),'nama_perusahaan');?>",
								"value":<?=$this->db_models->count('master_minat_pekerjaan',array('kode_register'=>$pm->kode_register),'kode_register');?>
							},
					<?php
						}
					} ?>
				]
			},
		<?php } ?>
			];
	}
</script>