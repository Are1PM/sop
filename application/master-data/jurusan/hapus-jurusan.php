<?php
include 'koneksi.php';
if (isset($_GET['kd'])) {
  $kode_jurusan = $_GET['kd'];
  $query = mysqli_query($conn, "DELETE FROM tb_jurusan WHERE kode_jurusan='$kode_jurusan'");
  if ($query) {
    echo "<script>document.location.href = '?go=data-jurusan'</script>";
  }
}
