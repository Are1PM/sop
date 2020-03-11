<?php
if (isset($_GET['id'])) {
  $id_sop = $_GET['id'];
  $q = mysqli_query($conn, "SELECT * FROM tb_sop WHERE id_sop='$id_sop'");
  if ($dt = mysqli_fetch_assoc($q)) {
    if (file_exists("assets/file/" . $dt['file'])) {
      unlink("assets/file/" . $dt['file']);
    }
  }

  $query = mysqli_query($conn, "DELETE FROM tb_sop WHERE id_sop='$id_sop'");


  if ($query) {
    $_SESSION['alert'] = '<div class="flash" data-head="Berhasil"
     data-id="Data SOP" data-flash="berhasil dihapus" data-alert="success">
</div>';
  }
}
header('Location:?kode=' . $_GET['kode'] . '&go=data-sop');