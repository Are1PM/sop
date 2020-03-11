<?php
if (isset($_GET['kd'])) {
  $kode_jurusan = $_GET['kd'];
  $query = mysqli_query($conn, "DELETE FROM tb_jurusan WHERE kode_jurusan='$kode_jurusan'");

  if ($query) {
    $_SESSION['alert'] = '<div class="flash" data-head="Berhasil"
     data-id="Data Jurusan" data-flash="berhasil dihapus" data-alert="success">
</div>';
  }
}
header('Location:?go=data-jurusan');