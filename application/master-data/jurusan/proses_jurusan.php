<?php

if (isset($_POST['simpan-data'])) {

     // Data Jurusan
     $kode_jurusan = $_POST['kode_jurusan'];
     $jurusan = $_POST['jurusan'];

     // Proses Tambah Data Jurusan
     $query = mysqli_query($conn, "INSERT INTO tb_jurusan VALUES('$kode_jurusan','$jurusan')");

     // Cek Keberhasilan
     if ($query) {
          $_SESSION['alert'] = '<div class="flash" data-head="Berhasil" data-id="Jurusan ' . ucwords(strtolower($jurusan)) . '"
     data-flash="berhasil ditambahkan" data-alert="success"></div>';
     } else {
          $_SESSION['alert'] = '<div class="flash" data-head="Gagal" data-id="Jurusan ' . ucwords(strtolower($jurusan)) . '"
     data-flash="berhasil ditambahkan" data-alert="error"></div>';
     }

     header("Location:?go=data-jurusan");
     //
} elseif (isset($_POST['ubah-data'])) {

     // Data Lama Jurusan
     $kode_lama = $_POST['kode_lama'];
     $jurusan_lama = $_POST['jurusan_lama'];

     // Data Baru Jurusan
     $kode_jurusan = $_POST['kode_jurusan'];
     $jurusan = $_POST['jurusan'];

     // Proses Ubah Data Jurusan
     $query = mysqli_query($conn, "UPDATE tb_jurusan SET kode_jurusan ='$kode_jurusan', jurusan='$jurusan' WHERE
kode_jurusan='$kode_lama'");

     // Cek Keberhasilan
     if ($query) {
          $_SESSION['alert'] = '<div class="flash" data-head="Berhasil"
     data-id="Jurusan ' . ucwords(strtolower($jurusan_lama)) . '" data-flash="berhasil diubah" data-alert="success">
</div>';
     } else {
          $_SESSION['alert'] = '<div class="flash" data-head="Gagal" data-id="Jurusan ' . ucwords(strtolower($jurusan_lama)) . '"
     data-flash="gagal diubah" data-alert="error"></div>';
     }

     header("Location:?go=data-jurusan");
}