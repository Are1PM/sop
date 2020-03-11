<?php

if (isset($_POST['tambah-sop'])) {

    $kode_jurusan = mysqli_escape_string($conn, $_POST['kode_jurusan']);
    $judul = mysqli_escape_string($conn, $_POST['judul']);
    $versi = mysqli_escape_string($conn, $_POST['versi']);
    $tgl = date("Y-m-d", strtotime($_POST['tgl_upload']));
    $tahun = date('Y', strtotime($tgl));
    $isi_sop = $_POST['isi_sop'];
    $id_user = $_SESSION['user']['id_user'];

    //cek kode jurusan
    if ($kode_jurusan == '') {
        header("Location:index.php?go=tambah-sop");
    }

    // Data File Upload
    $file = $_FILES['file']['name'];
    $tmp_file = $_FILES['file']['tmp_name'];


    //Simpan file
    if ($_FILES['file']['size'] > 0) {
        $simpan = move_uploaded_file($tmp_file, "assets/file/" . $file);
    }

    // Simpan Data sop
    $query = mysqli_query($conn, "INSERT INTO tb_sop VALUES(0,'$kode_jurusan','$judul','$isi_sop','$file','$tahun','$id_user','$versi','$tgl')");

    // Cek Simpan SOP
    if ($query) {
        $_SESSION['alert'] = '<div class="flash" data-head="Berhasil"
        data-id="SOP ' . $Judul . '" data-flash="berhasil ditambah" data-alert="success">
        </div>';
        header("Location:?kode=" . $kode_jurusan . "&go=data-sop");
    } else {
        echo "gagal => " . mysqli_error($conn);
        exit;
    }
} elseif (isset($_POST['ubah-sop'])) {

    $kode_jurusan = mysqli_escape_string($conn, $_POST['kode_jurusan']);
    $id_sop = $_POST['id_sop'];
    $judul = mysqli_escape_string($conn, $_POST['judul']);
    $versi = mysqli_escape_string($conn, $_POST['versi']);
    $tgl = date("Y-m-d h:i:s", strtotime($_POST['tgl_upload']));
    $tahun = date('Y', strtotime($tgl));
    $isi_sop = $_POST['isi_sop'];
    $id_user = $_SESSION['user']['id_user'];

    $q = mysqli_query($conn, "SELECT * FROM tb_sop WHERE id_sop=$id_sop");
    $dt = mysqli_fetch_assoc($q);

    if ($kode_jurusan == '') {
        header("Location:index.php?go=tambah-sop");
        exit;
    }


    // Data File Upload
    $file = $_FILES['file']['name'];
    $tmp_file = $_FILES['file']['tmp_name'];


    //Simpan file
    if ($_FILES['file']['size'] > 0) {
        if (file_exists("assets/file/" . $dt['file'])) {
            unlink("assets/file/" . $dt['file']);
        }

        $simpan = move_uploaded_file($tmp_file, "assets/file/" . $file);
    } else {
        $file = $dt['file'];
    }

    // Simpan Data sop
    $query = mysqli_query($conn, "UPDATE tb_sop SET kode_jurusan='$kode_jurusan',judul='$judul',isi_sop='$isi_sop',file='$file',tahun=$tahun,id_user='$id_user',versi='$versi',tgl_upload='$tgl' WHERE id_sop=$id_sop");

    // Cek Simpan SOP
    if ($query) {
        $_SESSION['alert'] = '<div class="flash" data-head="Berhasil"
        data-id="SOP ' . $Judul . '" data-flash="berhasil ditambah" data-alert="success">
        </div>';
        header("Location:?kode=" . $kode_jurusan . "&go=data-sop");
    } else {
        echo "gagal => " . mysqli_error($conn);
        exit;
    }
} else {
    header('Location:?go=data-sop');
}