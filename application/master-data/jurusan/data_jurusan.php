<?

$query = "SELECT * FROM tb_jurusan";
$hasil = mysqli_query($conn, $query);
if (isset($_SESSION['alert'])) {
     echo $_SESSION['alert'];
     unset($_SESSION['alert']);
}

?>
<div class="box">
     <div class="box-header">
          <div class="col-12 mt-3">
               <a href="?go=tambah-jurusan" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Jurusan/Prodi</a>
          </div>
     </div>
     <!-- /.box-header -->
     <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
               <thead>
                    <tr>
                         <th>NO</th>
                         <th>Kode Jurusan</th>
                         <th>Jurusan/Prodi</th>
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
                         <td><?= $data['kode_jurusan'] ?></td>
                         <td><?= $data['jurusan'] ?></td>
                         <td class="text-center">
                              <a data-toggle="tooltip" title="Edit" class="btn btn-sm btn-primary"
                                   href="?go=ubah-jurusan&kd=<?= $data['kode_jurusan'] ?>">
                                   <i class="fa fa-edit"></i>
                              </a>
                              |
                              <a data-toggle="tooltip" title="Hapus" class="btn btn-sm btn-danger tombol-hapus"
                                   href="?go=hapus-jurusan&kd=<?= $data['kode_jurusan'] ?>"
                                   data-data="Jurusan <?= ucwords(strtolower($data['jurusan'])) ?>">
                                   <i class="fa fa-trash"></i>
                              </a>
                         </td>
                    </tr>

                    <?php
                         $no++;
                    endwhile;
                    ?>
               </tbody>

          </table>
     </div>
     <!-- /.box-body -->
</div>