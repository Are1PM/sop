<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Aplikasi Buku Saku SOP</title>
</head>
<?php
include("template/head.php");
if (!isset($_SESSION['login'])) :

  include("template/login.php");

else :
?>

  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">A<b></b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>BUKU SAKU</b> SOP </span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>

          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">Alexan</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                    <p>
                      Alexander Pierce - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="?go=sign-out" class="btn btn-default btn-flat">Sign out</a>
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
        <?php include 'template/sidebar-menu.php'; ?>
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Buku Saku SOP
            <small>Admin</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <?php


          if (isset($_GET['go'])) {
            if ($_GET['go'] == "beranda") {
              include("template/beranda.php");
            } elseif ($_GET['go'] == "tambah-jurusan") {
              include("application/master-data/jurusan/tambah-jurusan.php");
            } elseif ($_GET['go'] == "ubah-jurusan") {
              include("application/master-data/jurusan/ubah-jurusan.php");
            } elseif ($_GET['go'] == "hapus-jurusan") {
              include("application/master-data/jurusan/hapus-jurusan.php");
            } elseif ($_GET['go'] == "data-jurusan") {
              include("application/master-data/jurusan/data-jurusan.php");
            } elseif ($_GET['go'] == "tambah-sop") {
              include("application/master-data/SOP/tambah_sop.php");
            } elseif ($_GET['go'] == "proses-sop") {
              include("application/master-data/SOP/proses_sop.php");
            } elseif ($_GET['go'] == "data-sop") {
              include("application/master-data/SOP/data_sop.php");
            } elseif ($_GET['go'] == "form-pilih-sop") {
              include("application/master-data/SOP/form_pilih_sop.php");
            } elseif ($_GET['go'] == "sign-out") {
              include("template/action_logout.php");
            }
          }

          ?>
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <?php include("template/footer.php"); ?>
      <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->
  <?php
endif;
include_once('template/javascript.php');
  ?>
  </body>

</html>
<?php
ob_end_flush();
?>