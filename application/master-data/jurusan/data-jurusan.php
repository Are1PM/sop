<?
include 'koneksi.php';


if (isset($_POST['submit-data'])) {
  $kode_jurusan = $_POST['kode_jurusan'];
  $jurusan = $_POST['jurusan'];
  $query = mysqli_query($conn, "INSERT INTO tb_jurusan VALUES('$kode_jurusan','$jurusan')");
  if ($query) {
    echo '<div class="flash" data-head="Berhasil" data-id="Jurusan ' . ucwords(strtolower($jurusan)) . '" data-flash="berhasil ditambahkan" data-alert="success"></div>';
  } else {
    echo '<div class="flash" data-head="Gagal" data-id="Jurusan ' . ucwords(strtolower($jurusan)) . '" data-flash="berhasil ditambahkan" data-alert="error"></div>';
  }
} else if (isset($_POST['ubah-data'])) {
  $kode_lama = $_POST['kode_lama'];
  $jurusan_lama = $_POST['jurusan_lama'];
  $kode_jurusan = $_POST['kode_jurusan'];
  $jurusan = $_POST['jurusan'];
  $query = mysqli_query($conn, "UPDATE tb_jurusan SET kode_jurusan ='$kode_jurusan', jurusan='$jurusan' WHERE kode_jurusan='$kode_lama'");
  if ($query) {
    echo '<div class="flash" data-head="Berhasil" data-id="Jurusan ' . ucwords(strtolower($jurusan_lama)) . '" data-flash="berhasil diubah" data-alert="success"></div>';
  } else {
    echo '<div class="flash" data-head="Gagal" data-id="Jurusan ' . ucwords(strtolower($jurusan_lama)) . '" data-flash="gagal diubah" data-alert="error"></div>';
  }
}
$query = "SELECT * FROM tb_jurusan";
$hasil = mysqli_query($conn, $query);

?>
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Data Jurusan/Prodi</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>NO</th>
          <th>Kode Jurusan</th>
          <th>Jurusan/Prodi</th>
          <th class="text-center">ACTION</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        while ($data = mysqli_fetch_assoc($hasil)) :
        ?>
          <tr>
            <td><?= $no ?></td>
            <td><?= $data['kode_jurusan'] ?></td>
            <td><?= $data['jurusan'] ?></td>
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

    </table>
  </div>
  <!-- /.box-body -->
</div>