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

<!-- Template Quixlab -->
<!-- <link href="<?php//echo base_url(); ?>assets/quixlab/css/style.css" rel="stylesheet" type="text/css"/> -->

<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
	<a href="http://ecopowerport.co.id">
	<img src="<?php echo base_url(); ?>assets/admin/layout4/img/logo-big.png" alt=""/>
	</a>
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
	<form class="login-form" action="<?php echo base_url();?>welcome/cek_id_register" method="post">
        <!-- <h3 class="form-title" href="<?php// echo base_url();?>register/index/new" align="center"><font color="001E23"><strong>Registrasi Vendor Baru<strong></font></h3> -->
		
		<!-- <div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>Masukan ID Vendor </span>
		</div> -->
        <br>
        <div align="center">
            <button type="button" onclick="window.location.href='<?php echo base_url();?>register/index/new'" class="btn btn-outline-blue btn-lg btn-block"><font color="#00CED1" size="5"><strong>Registrasi</strong></font></button>
        </div>
        <br>
        <hr/>
		<div class="form-group">
            <h3 class="form-title small" align='center'><font color="#00CED1" size="3"><strong>Sudah Punya ID Registrasi ?</strong></font></h3>
			<div class="row">
				<div class="col-md-12">
				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
					<label class="control-label visible-ie8 visible-ie9">Masukkan Kode Registrasi</label>
					<div class="input-icon">
						<i class="fa fa-user"></i>
						<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Masukkan Kode Registrasi" name="id_registrasi"/>
					</div>
                    <div  align="right">
                    <!-- <span><h5><small>Masukan ID Registrasi</small></h5></span> -->
                    </div>
				</div>
                <!-- <button type="button" class="btn mb-1 btn-rounded btn-primary">Primary</button> -->
			</div>
            <br>
			<button type="submit" class="btn blue pull-right btn-block">OK <i class="m-icon-swapright m-icon-white"></i></button>
            </div>
        <br>
		<hr/>
		</div>
	</form>
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright" align="center">
	 2020 &copy; PT EPI - Eco Power.
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?php echo base_url(); ?>assets/global/plugins/respond.min.js"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
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
<!-- END PAGE LEVEL SCRIPTS --> 

<!-- Template Quixlab -->
<!-- <script src="<?php //echo base_url(); ?>assets/quixlab/js/styleSwitcher.js" type="text/javascript"></script>
<script src="<?php //echo base_url(); ?>assets/quixlab/js/settings.js" type="text/javascript"></script>
<script src="<?php //echo base_url(); ?>assets/quixlab/js/gleek.js" type="text/javascript"></script>
<script src="<?php //echo base_url(); ?>assets/quixlab/js/custom.min.js" type="text/javascript"></script> -->

<script>
jQuery(document).ready(function() {
    Metronic.init(); // init metronic core components
    Layout.init(); // init current layout
    Login.init();
    Demo.init();
    $.backstretch([
        "<?php echo base_url(); ?>assets/admin/pages/media/bg/epi1.jpeg"
        // "<?php //echo base_url(); ?>assets/admin/pages/media/bg/epi2.jpeg",
        // "<?php //echo base_url(); ?>assets/admin/pages/media/bg/epi3.jpeg"
        ], {
          fade: 1000,
          duration: 8000
        }
    );
});
var cek_kode_register = function (kode_register){
    var resp=[];
    var baseUrl = '<?=base_url()?>register/cek_session';
    $.ajax({
        url: baseUrl,
        type: 'POST',
        dataType: 'json',
        data: {
            tabel : 'master_data_perusahaan',
            where : {
                kode_register:kode_register
            },
            session : kode_register
        }
        // success: function(datas) {
            // if(datas=='y' || datas=='n'){
            //     $('#kode_register_hidden').val(datas);
            // }
        // },
        // error: function(xhr, ajaxOptions, thrownError) {
        //     alert('Ups Ada sedikit kesalahan.. Segera Hubungi Administrator ');
        // }
    });
    // if($('#kode_register_hidden').val()=='y' && $('#kode_register_hidden').val()!=''){
    //     $('#kode_register_hidden').val('');
    //     window.location.href = "<?=base_url()?>register/register";
    // }else{
    //     $('#kode_register_hidden').val('');
    //     alert('Kode Register Tidak Ditemukan !');
    // }
}
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
