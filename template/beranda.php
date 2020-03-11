<?php
$q = mysqli_query($conn, "SELECT (SELECT COUNT(*) FROM tb_jurusan) as jurusan, (SELECT COUNT(*) FROM tb_user WHERE id_level=3 ) as pengguna, (SELECT COUNT(*) FROM tb_user WHERE id_level=2 ) as operator,(SELECT COUNT(*) FROM tb_sop) as sop");

$jumlah = mysqli_fetch_array($q);
?>
<!-- Info boxes -->
<div class="row">
     <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
               <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

               <div class="info-box-content">
                    <span class="info-box-text">Jurusan</span>
                    <span class="info-box-number"><?= $jumlah['jurusan'] ?></span>
               </div>
               <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
     </div>
     <!-- /.col -->
     <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
               <span class="info-box-icon bg-green"><i class="fa fa-cogs"></i></span>

               <div class="info-box-content">
                    <span class="info-box-text">SOP</span>
                    <span class="info-box-number"><?= $jumlah['sop'] ?></span>
               </div>
               <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
     </div>
     <!-- /.col -->

     <!-- fix for small devices only -->
     <div class="clearfix visible-sm-block"></div>


     <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
               <span class="info-box-icon bg-red"><i class="fa fa-user"></i></span>

               <div class="info-box-content">
                    <span class="info-box-text">Operator</span>
                    <span class="info-box-number"><?= $jumlah['operator'] ?></span>
               </div>
               <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
     </div>
     <!-- /.col -->
     <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
               <span class="info-box-icon bg-yellow"><i class="fa fa-users"></i></span>

               <div class="info-box-content">
                    <span class="info-box-text">Pengguna</span>
                    <span class="info-box-number"><?= $jumlah['pengguna'] ?></span>
               </div>
               <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
     </div>
     <!-- /.col -->
</div>