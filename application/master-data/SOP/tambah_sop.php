<?php
include 'koneksi.php';
$query = mysqli_query($conn, 'SELECT * FROM tb_jurusan');
?>

<div class="row">
  <div class="col-md-12">

    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Tambah SOP</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" action="?go=proses-sop" method="post">
        <div class="box-body">
          <div class="form-group">
            <label>Jurusan/Prodi</label>
            <select class="form-control select2" name="kode_jurusan" style="width: 100%;">
              <option selected="selected">--pilih--</option>
              <?php
              while ($data = mysqli_fetch_array($query)) {
                echo "<option value=" . $data['kode_jurusan'] . ">" . $data['jurusan'] . "</option>";
              }

              ?>

            </select></div>
          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan jurusan">
          </div>
          <div class="form-group">
            <label for="versi">Versi</label>
            <input type="text" class="form-control" name="versi" id="versi" placeholder="Masukkan versi">
          </div>
          <div class="form-group">
            <label>Tgl</label>

            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" name="tgl" class="form-control pull-right" id="datepicker">
            </div>
            <!-- /.input group -->
          </div>

          <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" name="tgl" id="exampleInputFile">
          </div>
          <div class="form-group">
            <a id="tombol-ketik" class="btn btn-success">
              <i class="fa  fa-keyboard-o"></i> Ketik
            </a>
          </div>

          <div id="ckedit" class="form-group">
            <textarea id="editor1" name="isi_sop" rows="10" cols="80">
                          </textarea>
          </div>


        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary" name="tambah-sop">Simpan</button>
        </div>
      </form>
    </div>
  </div>


</div>
<!-- /.box -->