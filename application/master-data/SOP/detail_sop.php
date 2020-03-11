<?php
if (isset($_GET['id'])) {
     $id = mysqli_real_escape_string($conn, $_GET['id']);
     $q = mysqli_query($conn, "SELECT * FROM tb_sop INNER JOIN tb_jurusan, tb_user WHERE id_sop=$id");
     $data = mysqli_fetch_assoc($q);
} else {
     header('Location:?go=data-sop');
}
?>
<div class="row">
     <div class="col-md-3">
          <a href="?go=ubah-sop&id=<?= $data['id_sop'] ?>" class="btn btn-primary btn-block margin-bottom">Edit</a>
          <div class="box box-primary">
               <div class="box-header with-border">
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                    <strong><i class="fa fa-book margin-r-5"></i> Jurusan/Prodi</strong>

                    <p class="text-muted">
                         <?= $data['jurusan']; ?>
                    </p>

                    <hr>

                    <strong><i class="fa fa-user margin-r-5"></i> Diupload Oleh</strong>

                    <p class="text-muted"><?= $data['username'] ?></p>

                    <hr>

                    <strong><i class="fa fa-pencil margin-r-5"></i> Tanggal Upload</strong>

                    <p>
                         <?= date("j - n - Y", strtotime($data['tgl_upload'])) ?>
                    </p>

                    <hr>

                    <strong><i class="fa fa-file-text-o margin-r-5"></i>Versi</strong>

                    <p><?= $data['versi'] ?></p>
               </div>
               <!-- /.box-body -->
          </div>

     </div>
     <!-- /.col -->
     <div class="col-md-9">
          <div class="box box-primary">
               <div class="box-header with-border">
                    <h3 class="box-title">SOP : <?= $data['judul'] ?></h3>
                    <div class="box-tools pull-right">
                         <a href="index.php?kode=<?= $data['kode_jurusan'] ?>&go=data-sop" class="btn btn-success"
                              data-toggle="tooltip" title="Kembali"><i class="fa fa-chevron-left"></i> Kembali</a>

                    </div>
               </div>
               <!-- /.box-header -->
               <div class="box-body no-padding">
                    <!-- /.mailbox-read-info -->
                    <div class="mailbox-controls with-border text-center">
                         <div class="btn-group">
                              <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip"
                                   data-container="body" title="Delete">
                                   <i class="fa fa-trash-o"></i></button>
                              <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip"
                                   data-container="body" title="Reply">
                                   <i class="fa fa-reply"></i></button>
                              <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip"
                                   data-container="body" title="Forward">
                                   <i class="fa fa-share"></i></button>
                         </div>
                         <!-- /.btn-group -->
                         <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
                              <i class="fa fa-print"></i></button>
                    </div>
                    <!-- /.mailbox-controls -->
                    <div class="mailbox-read-message">
                         <?php
                         $type = explode(".", $data['file']);
                         // print_r(end($type));
                         if (end($type) == "pdf") :

                         ?>
                         <embed src="assets/file/<?= $data['file'] ?>" width="100%" height="600px">

                         <?php
                         else :
                         ?>
                         <iframe
                              src="http://docs.google.com/gview?url=http://127.0.0.1/sop/assets/file/<?= $data['file'] ?>&amp;embedded=true"
                              frameborder="0" width="100%" height="600px"></iframe>
                         <?php
                         endif;
                         ?>
                    </div>
                    <!-- /.mailbox-read-message -->
               </div>
               <!-- /.box-body -->

               <!-- /.box-footer -->
               <div class="box-footer">

               </div>
               <!-- /.box-footer -->
          </div>
          <!-- /. box -->
     </div>
     <!-- /.col -->
</div>