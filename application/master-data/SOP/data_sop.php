<?php
include 'koneksi.php';

if (isset($_POST['go-data'])) {
  $kode = $_POST['kode_prodi'];
  $query = "SELECT * FROM tb_sop s, tb_jurusan j WHERE s.kode_jurusan=j.kode_jurusan AND s.kode_jurusan='$kode'";
  $hasil = mysqli_query($conn, $query);
} else {
  header('Location:?go=form-pilih-sop');
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
        <?php
        $no = 1;
        while ($data = mysqli_fetch_assoc($hasil)) :
        ?>
          <tr>
            <td><?= $no ?></td>
            <td><?= $data['judul'] ?></td>
            <td><?= $data['isi_sop'] ?></td>
            <td><?= $data['jurusan'] ?></td>
            <td><?= $data['versi'] ?></td>
            <td><?= $data['tgl_upload'] ?></td>
            <td class="text-center">
              <a class="btn btn-sm btn-primary" href="?go=ubah-jurusan&kd=<?= $data['kode_jurusan'] ?>">
                <i class="fa fa-edit"></i> Edit
              </a>
              |
              <a class="btn btn-sm btn-danger tombol-hapus" href="?go=hapus-jurusan&kd=<?= $data['kode_jurusan'] ?>" data-data="Jurusan <?= ucwords(strtolower($data['jurusan'])) ?>">
                <i class="fa fa-trash"></i> hapus
              </a>
            </td>
          </tr>
        <?php
          $no++;
        endwhile;
        ?>
      </tbody>

      <tfoot>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->
</div>