<?php
$query = mysqli_query($conn, 'SELECT * FROM tb_level');
?>
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Tambah Jurusan/Prodi</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form method="POST" action="?go=data-jurusan">
    <div class="box-body">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control" id="username" placeholder="masukan username" autocomplete="off">
      </div>
      <div class="form-group">
        <label for="pass1">Password</label>
        <input type="password" name="kode_jurusan" class="form-control" id="pass1" placeholder="masukan password">
      </div>
      <div class="form-group">
        <label for="pass2">Ulangi Password</label>
        <input type="password" name="jurusan" class="form-control" id="pass2" placeholder="ulangi password">
      </div>
      <div class="form-group">
        <div class="form-group">
          <label>Level</label>
          <select class="form-control select2" name="level" style="width: 100%;">
            <option selected="selected">--pilih--</option>
            <?php
            while ($data = mysqli_fetch_array($query)) {
              echo "<option value=" . $data['id_level'] . ">" . $data['level'] . "</option>";
            }

            ?>

          </select>
        </div>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary" name="submit-data">Simpan</button>
      </div>
  </form>
</div>