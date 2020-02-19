<?php
if (isset($_POST['go-data'])) {
  $kode = $_POST['kode_prodi'];

  // query menampilkan data SOP jurusan

  #codn query disini

} else {
  header('Location:?go=data-sop');
}



?>
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Data SOP <?= $kode; ?></h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Judul SOP</th>
          <th>Isi SOP</th>
          <th>Jurusan/Prodi</th>
          <th>Versi</th>
          <th>Tgl/Tahun Apload</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
      <tfoot>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->
</div>