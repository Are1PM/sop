<?php
session_start();
include("../koneksi.php");

if (isset($_POST['login'])) {
  $username = htmlspecialchars(trim($_POST['user']), ENT_QUOTES);
  $password = htmlspecialchars(trim($_POST['pass']), ENT_QUOTES);

  if ($username == "" && $password == "") {
    $_SESSION['pesan'] = "Username dan password anda tidak boleh kosong!";
  } elseif ($username == "") {
    $_SESSION['pesan'] = "Username anda tidak boleh kosong!";
  } elseif ($password == "") {
    $_SESSION['pesan'] = "Password anda tidak boleh kosong!";
  } else {
    $users = mysqli_query($conn, "SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
    $cek = mysqli_num_rows($users);

    if (!($cek > 0)) {
      $_SESSION['pesan'] = "Username atau password anda salah!";
    } else {
      $_SESSION['login'] = 'berhasil';
    }
  }
}

header("location:../index.php");
