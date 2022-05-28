<?php date_default_timezone_set('Asia/Jakarta'); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DUK | Dinas Pertenakan dan Kesehatan Hewan Provinsi Riau</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/dist/img/riau.png">

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/skins/_all-skins.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- Morris chart -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/bower_components/morris.js/morris.css">

  <!-- Date Picker -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <style type="text/css">
    .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background-color: #fff;
    }

    .preloader .loading {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      font: 14px arial;
    }
  </style>
</head>

<body class="hold-transition skin-green sidebar-mini">

  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><img src="<?= base_url(); ?>assets/dist/img/riau.png" style="width: 60%;"></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><img src="<?= base_url(); ?>assets/dist/img/riau.png" style="width: 30px;"> DUK</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

          <ul class="nav navbar-nav">
            <?php
            $jk1 = '';
            if ($pegawai['jenis_kelamin'] == 'Laki-laki') {
              $jk1 = 'men';
            } else {
              $jk1 = 'women';
            }
            ?>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?= base_url(); ?>assets/dist/img/<?= $jk1 ?>.png" class="user-image" alt=".">
                <span class="hidden-xs"><?= $pegawai['pnama']; ?></span>
              </a>
              <ul class="dropdown-menu">

                <!-- User image -->
                <li class="user-header">
                  <img src="<?= base_url(); ?>assets/dist/img/<?= $jk1 ?>.png" class="img-circle" alt="User Image">
                  <p>
                    <?= $pegawai['pnama']; ?>
                    <small><?= $pegawai['email']; ?></small>
                  </p>
                </li>

                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="<?= base_url(); ?>user/data" class="btn btn-default btn-flat">Profil</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?= base_url(); ?>login/logout" onclick="return confirm('Apakah Anda yakin ingin keluar?')" class="btn btn-default btn-flat">Keluar</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>

        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?= base_url(); ?>assets/dist/img/<?= $jk1 ?>.png" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?= $pegawai['pnama']; ?></p>
            <a href="#">NIP : <?= $nik; ?></a>
          </div>
        </div>

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header"></li>

          <li id="mn1">
            <a href="<?= base_url(); ?>user">
              <i class="fa fa-dashboard"></i> <span>Beranda</span>
            </a>
          </li>

          <li id="mn2">
            <a href="<?= base_url(); ?>user/data">
              <i class="fa fa-user"></i> <span>Data Pegawai</span>
            </a>
          </li>

          <li id="mn4">
            <a href="<?= base_url(); ?>user/pengajuan_user">
              <i class="fa fa-file"></i> <span>Pengajuan Naik Pangkat/Gaji</span>
            </a>
          </li>

          <li id="mn3">
            <a href="<?= base_url(); ?>user/setting_user">
              <i class="fa fa-cogs"></i> <span>Pengaturan</span>
            </a>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
