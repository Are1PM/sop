<?php
if (isset($_GET['id'])) {
     $id_sop = $_GET['id'];
     $q1 = mysqli_query($conn, "SELECT * FROM tb_sop WHERE id_sop='$id_sop'");
     $q2 = mysqli_query($conn, 'SELECT * FROM tb_jurusan');

     $data = mysqli_fetch_array($q1);
     // print_r($query);
}


?>

<div class="row">
     <div class="col-md-12">

          <div class="box box-primary">
               <div class="box-header with-border">
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <form role="form" action="?go=proses-sop" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                         <div class="form-group">
                              <label>Jurusan/Prodi</label>
                              <select class="form-control select2" name="kode_jurusan" style="width: 100%;">
                                   <option value="" selected="selected">--pilih--</option>
                                   <?php
                                   while ($dt = mysqli_fetch_array($q2)) {
                                        echo "<option value=" . $dt['kode_jurusan'] . " " . (($data['kode_jurusan'] == $dt['kode_jurusan']) ? "selected" : "") . ">" . $dt['jurusan'] . "</option>";
                                   }

                                   ?>

                              </select>
                              <input type="hidden" name="id_sop" value="<?= $data['id_sop'] ?>">
                         </div>
                         <div class="form-group">
                              <label for="judul">Judul</label>
                              <input type="text" class="form-control" name="judul" value="<?= $data['judul'] ?>"
                                   id="judul" placeholder="Masukkan jurusan">
                         </div>
                         <div class="form-group">
                              <label for="versi">Versi</label>
                              <input type="text" class="form-control" name="versi" value="<?= $data['versi'] ?>"
                                   id="versi" placeholder="Masukkan versi">
                         </div>
                         <div class="form-group">
                              <label>Tgl</label>

                              <div class="input-group date">
                                   <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                   </div>
                                   <input type="text" name="tgl_upload"
                                        value="<?= date("j-n-Y", strtotime($data['tgl_upload'])) ?>"
                                        class="form-control pull-right" id="datepicker">
                              </div>
                              <!-- /.input group -->
                         </div>

                         <div class="form-group">
                              <label for="file">File input</label>
                              <input type="file" name="file" id="file">
                         </div>
                         <div class="form-group">
                              <a id="tombol-ketik" class="btn btn-success">
                                   <i class="fa  fa-keyboard-o"></i> Ketik
                              </a>
                         </div>

                         <div id="ckedit" class="form-group">
                              <textarea id="editor1" name="isi_sop" rows="10" cols="80">
                                   <?= $data['isi_sop'] ?>
                              </textarea>
                         </div>


                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                         <button type="submit" class="btn btn-primary" name="ubah-sop">Simpan</button>
                         <a href="?kode=<?= $data['kode_jurusan'] ?>&go=data-sop" class="btn btn-danger">Kembali</a>
                    </div>
               </form>
          </div>
     </div>


</div>
<!-- /.box -->