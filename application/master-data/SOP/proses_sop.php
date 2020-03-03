<?php
include 'koneksi.php';
if (isset($_POST['tambah-sop'])) {
    $kode_jurusan = mysqli_escape_string($conn, $_POST['kode_jurusan']);
    $judul = mysqli_escape_string($conn, $_POST['judul']);
    $versi = mysqli_escape_string($conn, $_POST['versi']);
    $tgl = $_POST['tgl'];
    $tahun = date('Y', strtotime($tgl));
    $isi_sop = $_POST['isi_sop'];
    $id_user = $_SESSION['user']['id_user'];
    if ($kode_jurusan == '') {
        header("Location:index?go=tambah-sop");
    }
    $query = mysqli_query($conn, "INSERT INTO tb_sop VALUES(0,'$kode_jurusan','$judul','$isi_sop','','$tahun','$id_user','$versi',now())");
    if ($query) {
?>
        <form id="formku" action="?go=data-sop" method="post">
            <input type="hidden" name="kode_prodi" value="<?= $kode_jurusan ?>">
            <input type="hidden" name="go-data">
        </form>

        <script type="text/javascript">
            function submitForm() {
                document.getElementById('formku').submit();
            }
            window.onload = submitForm;
        </script>

<?php
    } else {
        echo "gagal => " . mysqli_error($conn);
        exit;
    }
    // header('Location:?go=data-sop&kode_prodi' . $_POST['jurusan']);
} else {
    header('Location:?go=data-sop');
}
