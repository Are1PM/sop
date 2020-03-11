<?php
if (isset($_GET['kd'])) {
     $kode_jurusan = $_GET['kd'];
     $query = mysqli_query($conn, "SELECT * FROM tb_jurusan WHERE kode_jurusan='$kode_jurusan'");
     $data = mysqli_fetch_array($query);
}

?>
<div class="box box-primary">
     <div class="box-header with-border">
          <h3 class="box-title">Ubah Jurusan/Prodi</h3>
     </div>
     <!-- /.box-header -->
     <!-- form start -->
     <form method="POST" action="?go=proses-jurusan">
          <div class="box-body">
               <div class="form-group">
                    <label for="exampleInputjurusan/prodi">Kode Jurusan</label>
                    <input type="hidden" name="kode_lama" value="<?= $data['kode_jurusan'] ?>">
                    <input type="text" name="kode_jurusan" class="form-control" id="examplejurusan/prodi"
                         placeholder="masukan kode jurusan" value="<?= $data['kode_jurusan'] ?>">
               </div>
               <div class="form-group">
                    <label for="exampleInputjurusan/prodi">Jurusan/prodi</label>
                    <input type="hidden" name="jurusan_lama" value="<?= $data['jurusan'] ?>">
                    <input type="text" name="jurusan" class="form-control" id="examplejurusan/prodi"
                         placeholder="masukan jurusan/prodi" value="<?= $data['jurusan'] ?>">
               </div>
               <!-- /.box-body -->

               <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="ubah-data">Submit</button>
               </div>
     </form>
</div>