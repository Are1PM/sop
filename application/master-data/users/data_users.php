<?php
if ($_SESSION['user']['id_level'] == 1) {
     $query = "SELECT * FROM tb_user u LEFT JOIN tb_level l ON l.id_level=u.id_level WHERE u.id_level<>1";
     $hasil = mysqli_query($conn, $query);
} elseif ($_SESSION['user']['id_level'] == 2) {
     $query = "SELECT * FROM tb_user u LEFT JOIN tb_level l ON l.id_level=u.id_level WHERE u.id_level=3";
     $hasil = mysqli_query($conn, $query);
} else {
     header("Location:?go=error");
}

if (isset($_SESSION['alert'])) {
     echo $_SESSION['alert'];
     unset($_SESSION['alert']);
}
?>
<div class="box">
     <div class="box-header">
          <div class="col-12 mt-3">
               <a href="?go=tambah-user" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah User</a>
          </div>
     </div>
     <!-- /.box-header -->
     <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
               <thead>
                    <tr>
                         <th>No</th>
                         <th>Username</th>
                         <th>Level</th>
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
                         <td><?= $data['username'] ?></td>
                         <td><?= $data['level'] ?></td>
                         <td class="text-center">
                              <a data-toggle="tooltip" title="Edit" class="btn btn-sm btn-primary"
                                   href="?go=ubah-user&id=<?= $data['id_user'] ?>">
                                   <i class="fa fa-edit"></i>
                              </a>
                              |
                              <a data-toggle="tooltip" title="Hapus" class="btn btn-sm btn-danger tombol-hapus"
                                   href="?go=hapus-user&id=<?= $data['id_user'] ?>"
                                   data-data="user <?= ucwords(strtolower($data['username'])) ?>">
                                   <i class="fa fa-trash"></i>
                              </a>
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