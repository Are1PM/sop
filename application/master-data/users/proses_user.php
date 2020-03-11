<?
if (isset($_POST['simpan-data'])) {

  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password1 = mysqli_real_escape_string($conn, $_POST['pass1']);
  $password2 = mysqli_real_escape_string($conn, $_POST['pass2']);
  $id_level = mysqli_real_escape_string($conn, $_POST['id_level']);

  // var_dump($id_level);
  // die;

  if ($username == '') {
    $_SESSION['form-error']['judul'] = 'username';
    $_SESSION['form-error']['isi'] = 'Username tidak boleh kosong!';

    //
  } elseif ($password1 == '') {
    $_SESSION['form-error']['judul'] = 'pass1';
    $_SESSION['form-error']['isi'] = 'Password tidak boleh kosong!';

    //
  } else if ($password2 == '') {
    $_SESSION['form-error']['judul'] = 'pass2';
    $_SESSION['form-error']['isi'] = 'Ulangi password tidak boleh kosong!';

    //
  } else if ($password1 != $password2) {
    $_SESSION['form-error']['judul'] = 'pass2';
    $_SESSION['form-error']['isi'] = 'Password tidak sama!';

    //
  } else if ($id_level == "") {
    $_SESSION['form-error']['judul'] = 'id_level';
    $_SESSION['form-error']['isi'] = 'Level tidak sama!';

    //
  } else {

    $query = mysqli_query($conn, "INSERT INTO tb_user VALUES(null,'$username','$password1','$id_level')");

    if ($query) {
      $_SESSION['alert'] = '<div class="flash" data-head="Berhasil" data-id="Data user ' . ucwords(strtolower($jurusan)) . '" data-flash="berhasil ditambahkan" data-alert="success"></div>';
    } else {
      $_SESSION['alert'] = '<div class="flash" data-head="Gagal" data-id="Data user ' . ucwords(strtolower($jurusan)) . '" data-flash="berhasil ditambahkan" data-alert="error"></div>';
    }
    header('Location:?go=data-user');
    exit;
  }
  // print_r($_SESSION['form-error']);
  // die;
  header('Location:?go=tambah-user');

  //END TAMBAH USER
} elseif (isset($_POST['ubah-data'])) {
  $id_user = mysqli_real_escape_string($conn, $_POST['id_user']);
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password1 = mysqli_real_escape_string($conn, $_POST['pass1']);
  $password2 = mysqli_real_escape_string($conn, $_POST['pass2']);
  $id_level = mysqli_real_escape_string($conn, $_POST['id_level']);


  if ($username == '') {
    $_SESSION['form-error']['judul'] = 'username';
    $_SESSION['form-error']['isi'] = 'Username tidak boleh kosong!';

    //
  } elseif ($password1 == '') {
    $_SESSION['form-error']['judul'] = 'pass1';
    $_SESSION['form-error']['isi'] = 'Password tidak boleh kosong!';

    //
  } else if ($password2 == '') {
    $_SESSION['form-error']['judul'] = 'pass2';
    $_SESSION['form-error']['isi'] = 'Ulangi password tidak boleh kosong!';

    //
  } else if ($password1 != $password2) {
    $_SESSION['form-error']['judul'] = 'pass2';
    $_SESSION['form-error']['isi'] = 'Password tidak sama!';

    //
  } else if ($id_level == "") {
    $_SESSION['form-error']['judul'] = 'id_level';
    $_SESSION['form-error']['isi'] = 'Level tidak sama!';

    //
  } else {

    $query = mysqli_query($conn, "UPDATE tb_user SET username='$username', password='$password1', id_level='$id_level' WHERE id_user=$id_user");

    if ($query) {
      $_SESSION['pesan'] = '<div class="flash" data-head="Berhasil" data-id="user ' . ucwords(strtolower($jurusan)) . '" data-flash="berhasil diubah" data-alert="success"></div>';
    } else {
      $_SESSION['pesan'] = '<div class="flash" data-head="Gagal" data-id="user ' . ucwords(strtolower($jurusan)) . '" data-flash="berhasil diubah" data-alert="error"></div>';
    }
    header('Location:?go=data-user');
    exit;
  }
  header('Location:?go=ubah-user&id=' . $id_user);
}