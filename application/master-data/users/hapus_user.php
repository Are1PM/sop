<?php
if (isset($_GET['id'])) {
  $id_user = $_GET['id'];
  $query = mysqli_query($conn, "DELETE FROM tb_user WHERE id_user='$id_user'");

  if ($query) {
    $_SESSION['alert'] = '<div class="flash" data-head="Berhasil"
     data-id="Data user" data-flash="berhasil dihapus" data-alert="success">
</div>';
  } else {
    $_SESSION['alert'] = '<div class="flash" data-head="Gagal"
    data-id="Data user" data-flash="gagal dihapus" data-alert="error">
</div>';
  }
}
header('Location:?go=data-user');