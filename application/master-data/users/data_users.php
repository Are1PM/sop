<?php

$query = "SELECT * FROM tb_user u LEFT JOIN tb_level l ON l.id_level=u.id_level";
$hasil = mysqli_query($conn, $query);

?>
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Data User</h3><br>
    <a href="?go=tambah-user" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah User</a>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Username</th>
          <th>Level</th>
          <th>Action</th>
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
              <a class="btn btn-sm btn-primary" href="#">
                <i class="fa fa-edit"></i> Edit
              </a>
              |
              <a class="btn btn-sm btn-danger -tombol-hapus" href="#" data-data="Jurusan <?= ucwords(strtolower($data['username'])) ?>">
                <i class="fa fa-trash"></i> hapus
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