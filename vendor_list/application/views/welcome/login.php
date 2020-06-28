<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/global/gcg/images/icon.ico"/>

  <title>Aplikasi Pengadaan PT.EPI</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>assets/global/gcg/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/global/gcg/css/epi.css" rel="stylesheet">

</head>

<body class="bg-gradient-light">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Aplikasi Pengadaan</h1>
                  </div>
                  <form class="user" action="<?php echo base_url();?>welcome/index" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control" autocomplete="off"  name="username" placeholder="Username...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" autocomplete="off"  name="password" placeholder="Password...">
                    </div>                    
                    <div class="form-group text-center">
                      <canvas id="textCanvas"></canvas>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" autocomplete="off"  id="captcha" name="captcha" placeholder="Tulis Captcha...">
                    </div>
                    <input type="hidden" name="randcaptcha" id="randcaptcha" value="<?php echo $cpt; ?>"/>
                    <button type="submit" class="btn btn-outline-success btn-user btn-block">Login</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>assets/global/gcg/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/global/gcg/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>assets/global/gcg/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url(); ?>assets/global/gcg/js/sb-admin-2.min.js"></script>

  <script>
    var inp = $("#randcaptcha").val();
		if(inp != ''){
			myFunction();
    }
    
    function myFunction() {
      var c = document.getElementById("textCanvas");
			var ctx = c.getContext("2d");
			ctx.canvas.width  = 150;
			ctx.canvas.height = 30;
			ctx.font = "28px Verdana";
			// Create gradient
			var gradient = ctx.createLinearGradient(0, 0, c.width, 0);
			gradient.addColorStop("0", "green");
			gradient.addColorStop("0.5", "green");
			gradient.addColorStop("1.0", "green");
			// Fill with gradient
			ctx.fillStyle = gradient;
			ctx.fillText(inp, 30, 30);
    }

  </script>

</body>

</html>
