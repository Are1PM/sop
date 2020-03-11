<?php
// require "application/config/Auth.php";

if (isset($_GET['go'])) {
     if ($_GET['go'] == "beranda") {
          include("template/beranda.php");
     } elseif ($_GET['go'] == "data-jurusan") {
          include("application/master-data/jurusan/data_jurusan.php");
     } elseif ($_GET['go'] == "tambah-jurusan") {
          include("application/master-data/jurusan/tambah_jurusan.php");
     } elseif ($_GET['go'] == "ubah-jurusan") {
          include("application/master-data/jurusan/ubah_jurusan.php");
     } elseif ($_GET['go'] == "hapus-jurusan") {
          include("application/master-data/jurusan/hapus_jurusan.php");
     } elseif ($_GET['go'] == "proses-jurusan") {
          include("application/master-data/jurusan/proses_jurusan.php");

          // SOP
     } elseif ($_GET['go'] == "form-pilih-sop") {
          include("application/master-data/SOP/form_pilih_sop.php");
     } elseif ($_GET['go'] == "data-sop") {
          include("application/master-data/SOP/data_sop.php");
     } elseif ($_GET['go'] == "detail-sop") {
          include("application/master-data/SOP/detail_sop.php");
     } elseif ($_GET['go'] == "tambah-sop") {
          include("application/master-data/SOP/tambah_sop.php");
     } elseif ($_GET['go'] == "ubah-sop") {
          include("application/master-data/SOP/ubah_sop.php");
     } elseif ($_GET['go'] == "proses-sop") {
          include("application/master-data/SOP/proses_sop.php");
     } elseif ($_GET['go'] == "hapus-sop") {
          include("application/master-data/SOP/hapus_sop.php");

          //user
     } elseif ($_GET['go'] == "data-user") {
          include("application/master-data/users/data_users.php");
     } elseif ($_GET['go'] == "tambah-user") {
          include("application/master-data/users/tambah_user.php");
     } elseif ($_GET['go'] == "ubah-user") {
          include("application/master-data/users/ubah_user.php");
     } elseif ($_GET['go'] == "proses-user") {
          include("application/master-data/users/proses_user.php");
     } elseif ($_GET['go'] == "hapus-user") {
          include("application/master-data/users/hapus_user.php");

          // logout
     } elseif ($_GET['go'] == "sign-out") {
          include("template/action_logout.php");
     } elseif ($_GET['go'] == "error") {
          include("template/404.php");
     } else {
          include("template/404.php");
     }
} else {
     header("Location:index.php?go=beranda");
}