<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/global/gcg/images/icon.ico" />

  <title>Aplikasi Pengadaan PT.EPI</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>assets/global/gcg/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>assets/global/gcg/css/sb-admin-2.min.css" rel="stylesheet">  
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
<link href="<?php echo base_url(); ?>assets/global/css/components-rounded.css	" id="style_components" rel="stylesheet" type="text/css"/>
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

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="shadow navbar-nav bg-gradient-light sidebar sidebar-light accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(); ?>welcome/dashboard">
        <img src="<?php echo base_url(); ?>assets/global/gcg/images/epi_1.png" height="50px" width="130px;">
        <!-- <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/global/gcg/images/epi_1.png" /> -->
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <?php
      $amenu['uri'] = $this->uri->uri_string;
      $amenu['active'] = $this->menum->active_menu();
      $amenu['uri1'] =  $this->uri->segment(1);
      $amenu['uri2'] =  $this->uri->segment(2);
      ?>
      <li class="nav-item <?php echo @($amenu['uri1'] == 'welcome') ? "active" : "" ?>">
        <a class="nav-link" href="<?php echo base_url(); ?>welcome/dashboard">
          <i class="fas fa-fw fa-tachometer-alt text-success"></i>
          <span>Welcome</span></a>
      </li>

      <?php
      foreach ($prev['hasil'] as $menu) {
        $issub = count($menu['child']) > 0;
      ?>
        <li class="nav-item <?php echo @($amenu['active'][0]['menu'] == $menu['menu']) ? "active" : "" ?>">

          <a class="nav-link <?php if ($issub) {
                                echo @($amenu['active'][0]['menu'] == $menu['menu']) ? "text-success" : "collapsed";
                              } ?>" href="<?php echo @($menu['controller']) ? base_url() . '' . $menu['controller'] : "#" ?>" <?php if ($issub) { ?>data-toggle="collapse" data-target="#collapse<?php echo preg_replace('/[^A-Za-z0-9\-]/', '_', $menu['menu']); ?>" aria-expanded="true" aria-controls="collapse<?php echo preg_replace('/[^A-Za-z0-9\-]/', '_', $menu['menu']); ?>" <?php } ?>>
            <i class="<?php echo $menu['ikons']; ?> text-success"></i>
            <span><?php echo $menu['menu']; ?></span>
          </a>
          <?php
          if ($issub) {
            $colapse_1 =  "collapse" . preg_replace('/[^A-Za-z0-9\-]/', '_', $menu['menu']) . "";
          ?>
            <div id="collapse<?php echo preg_replace('/[^A-Za-z0-9\-]/', '_', $menu['menu']); ?>" class="collapse <?php echo @($amenu['active'][0]['menu'] == $menu['menu']) ? "show" : "" ?>" aria-labelledby="heading<?php echo preg_replace('/[^A-Za-z0-9\-]/', '_', $menu['menu']); ?>" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">

                <?php
                foreach ($menu['child'] as $submenu) {
                  $issub2 = count($submenu['child']) > 0;
                ?>
                  <a class="collapse-item <?php if ($issub) {
                                            echo @($amenu['active'][1]['menu'] == $submenu['menu']) ? "text-success" : "collapsed";
                                          } ?> <?php echo @($amenu['active'][1]['menu'] == $submenu['menu']) ? "active text-success" : "" ?>" href="<?php echo @($submenu['controller']) ? base_url() . '' . $submenu['controller'] : "#"; ?>" <?php if ($issub2) { ?>data-toggle="collapse" data-target="#collapse<?php echo preg_replace('/[^A-Za-z0-9\-]/', '_', $submenu['menu']); ?>" aria-expanded="true" aria-controls="collapse<?php echo preg_replace('/[^A-Za-z0-9\-]/', '_', $submenu['menu']); ?>" <?php } ?>>
                    <i class="<?php echo $submenu['ikons']; ?> text-success"></i>
                    <?php echo $submenu['menu']; ?>
                  </a>
                  <?php
                  if ($issub2) {
                  ?>
                    <div id="collapse<?php echo preg_replace('/[^A-Za-z0-9\-]/', '_', $submenu['menu']); ?>" class="collapse <?php echo @($amenu['active'][1]['menu'] == $submenu['menu']) ? "show" : "" ?>" aria-labelledby="heading<?php echo preg_replace('/[^A-Za-z0-9\-]/', '_', $submenu['menu']); ?>" data-parent="#<?= $colapse_1; ?>">
                      <div class="bg-white py-2 collapse-inner rounded">


                        <?php
                        foreach ($submenu['child'] as $submenu2) {
                          $issub3 = count($submenu2['child']) > 0;
                        ?>
                          <a class="collapse-item <?php echo @($amenu['active'][2]['menu'] == $submenu2['menu']) ? "active text-success" : "" ?>" href="<?php echo @($submenu2['controller']) ? base_url() . '' . $submenu2['controller'] : "javascript:;"; ?>">
                            <i class="<?php echo $submenu2['ikons']; ?> text-success"></i> <?php echo $submenu2['menu']; ?>
                          </a>
                        <?php
                        }
                        ?>


                      </div>
                    </div>
                  <?php
                  }
                  ?>
                <?php
                }
                ?>
              </div>
            </div>
          <?php
          }
          ?>

        </li>

      <?php
      }
      ?>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content"> 

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">

              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline small">
                  <?php echo $this->session->userdata('nama'); ?>
                </span>
                <img class="img-profile rounded-circle" src="<?php echo base_url(); ?>assets/images/avatar.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo base_url(); ?>welcome/logout">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>

              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->