<?php
if (isset($_POST['tambah_sop'])) {
    header('Location:?go=data-sop&kode_prodi' . $_POST['jurusan']);
} else {
    header('Location:?go=data-sop');
}
