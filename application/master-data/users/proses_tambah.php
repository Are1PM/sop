<?

if (isset($_POST['submit-data'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password1 = mysqli_real_escape_string($conn, $_POST['pass1']);
  $password2 = mysqli_real_escape_string($conn, $_POST['pass2']);
  $id_level = mysqli_real_escape_string($conn, $_POST['id_level']);


  if ($password1 == '') {

    $_SESSION['pesan-pass1'] = true;
    header('Location:?go=tambah-user');
  } else if ($password2 == '') {

    $_SESSION['pesan-pass2'] = true;
    header('Location:?go=tambah-user');
  } else if ($password1 != $password2) {

    $_SESSION['pesan-pass3'] = true;
    header('Location:?go=tambah-user');
  } else {

    $query = mysqli_query($conn, "INSERT INTO tb_user VALUES(null,'$username','$password1','$id_level')");
    // echo mysqli_error($conn);
    // die;
    if ($query) {
      $_SESSION['pesan'] = '<div class="flash" data-head="Berhasil" data-id="user ' . ucwords(strtolower($jurusan)) . '" data-flash="berhasil ditambahkan" data-alert="success"></div>';
    } else {
      $_SESSION['pesan'] = '<div class="flash" data-head="Gagal" data-id="user ' . ucwords(strtolower($jurusan)) . '" data-flash="berhasil ditambahkan" data-alert="error"></div>';
    }
    header('Location:?go=data-user');
  }
}
