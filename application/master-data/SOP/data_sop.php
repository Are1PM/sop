<?php

if (isset($_GET['kode'])) {
     if ($_GET['kode'] == "0") {
          header('Location:?go=form-pilih-sop');
          exit;
     }
     $kode = $_GET['kode'];
     $query = "SELECT * FROM tb_sop s, tb_jurusan j WHERE s.kode_jurusan=j.kode_jurusan AND s.kode_jurusan='$kode'";
     $hasil = mysqli_query($conn, $query);
} else {
     header('Location:?go=form-pilih-sop');
}

if (isset($_SESSION['alert'])) {
     echo $_SESSION['alert'];
     unset($_SESSION['alert']);
}
?>

<div class="box">
     <div class="box-header">
          <a href="?go=tambah-sop" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah SOP</a>
     </div>
     <!-- /.box-header -->
     <div class="box-body">
          <table id="example1" class="table table-bordered table-striped table-hover">
               <thead>
                    <tr>
                         <th>No</th>
                         <th>Judul SOP</th>
                         <th>Versi</th>
                         <th>Tgl Upload</th>
                         <th>Jurusan/Prodi</th>
                         <th class="text-center">File</th>
                         <th class="text-center">Aksi</th>
                    </tr>
               </thead>
               <tbody>
                    <?php
                    $no = 1;
                    while ($data = mysqli_fetch_assoc($hasil)) :
                    ?>
                    <tr>
                         <td><?= $no ?></td>
                         <td><?= $data['judul'] ?></td>
                         <td><?= $data['versi'] ?></td>
                         <td><?= date('j - n - Y', strtotime($data['tgl_upload'])) ?></td>
                         <td><?= $data['jurusan'] ?></td>
                         <td class="text-center"><?php
                                                       if (($data['file']) != "") {
                                                            echo "<i class='fa fa- fa-check'></i>";
                                                       } else {
                                                            echo "<code>tidak ada</code>";
                                                       }

                                                       ?></td>
                         <td class="text-center">
                              <?php
                                   if ($_SESSION['user']['id_level'] != 3) {
                                   ?>
                              <a data-toggle="tooltip" title="Edit" class="btn btn-sm btn-primary"
                                   href="?go=ubah-sop&id=<?= $data['id_sop'] ?>">
                                   <i class="fa fa-edit"></i>
                              </a>

                              |
                              <?php
                                   }
                                   ?>
                              <a data-toggle="tooltip" title="Detail" class="btn btn-sm btn-warning"
                                   href="?go=detail-sop&id=<?= $data['id_sop'] ?>"
                                   data-data="SOP <?= ucwords(strtolower($data['judul'])) ?>">
                                   <i class="fa fa-eye"></i>
                              </a>
                              <?php
                                   if ($_SESSION['user']['id_level'] != 3) {
                                   ?>
                              |
                              <a data-toggle="tooltip" title="Hapus" class="btn btn-sm btn-danger tombol-hapus"
                                   href="?kode=<?= $_GET['kode'] ?>&go=hapus-sop&id=<?= $data['id_sop'] ?>"
                                   data-data="SOP <?= ucwords(strtolower($data['judul'])) ?>">
                                   <i class="fa fa-trash"></i>
                              </a>
                              <?php
                                   }
                                   ?>
                         </td>
                    </tr>
                    <?php
                         $no++;
                    endwhile;
                    ?>
               </tbody>

               <tfoot>
               </tfoot>
          </table>
     </div>
     <!-- /.box-body -->
</div>