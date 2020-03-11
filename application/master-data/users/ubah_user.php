<?php
$data = '';
if (isset($_GET['id'])) {
     $id_user = $_GET['id'];
     $q1 = mysqli_query($conn, "SELECT * FROM tb_user WHERE id_user='$id_user'");


     if ($_SESSION['user']['id_level'] == 1) {
          $q2 = mysqli_query($conn, 'SELECT * FROM tb_level WHERE id_level<>1');
     } elseif ($_SESSION['user']['id_level'] == 2) {
          $q2 = mysqli_query($conn, 'SELECT * FROM tb_level WHERE id_level=3');
     } else {
          header("Location:?go=error");
     }

     $data = mysqli_fetch_array($q1);
     // print_r($query);
} else {
     header("Location:?go=error");
}

?>

<div class="box box-primary">
     <div class="box-header with-border">
     </div>
     <!-- /.box-header -->
     <!-- form start -->
     <form method="POST" action="?go=proses-user">
          <div class="box-body">
               <div class="form-group">
                    <label for="username">Username</label>
                    <input type="hidden" name="id_user" value="<?= $data['id_user'] ?>">
                    <input type="text" name="username" value="<?= $data['username'] ?>" class="form-control"
                         id="username" placeholder="masukan username" autocomplete="off">
               </div>

               <!-- ERROR PASSWORD KOSONG -->
               <?php
               if (isset($_SESSION['pesan-pass1'])) :
               ?>
               <div class="form-group has-error">
                    <label class="control-label" for="pass1">Password</label>
                    <input type="password" name="pass1" class="form-control" id="pass1" placeholder="masukan password">
                    <span class="help-block">Password tidak boleh kosong!</span>
               </div>
               <?php
                    unset($_SESSION['pesan-pass1']);
               else :
               ?>
               <div class="form-group">
                    <label for="pass1">Password</label>
                    <input type="password" name="pass1" value="<?= $data['password'] ?>" class="form-control" id="pass1"
                         placeholder="masukan password">
               </div>
               <?php endif; ?>

               <!-- ERROR ULANGI PASSWORD -->
               <?php
               // ERORR 2
               if (isset($_SESSION['pesan-pass2'])) :
               ?>
               <div class="form-group has-error">
                    <label class="control-label" for="pass2">Ulangi Password</label>
                    <input type="password" name="pass2" class="form-control" id="pass2" placeholder="ulangi password">
                    <span class="help-block">Password tidak boleh kosong!</span>
               </div>
               <?php
                    unset($_SESSION['pesan-pass2']);
               // ERORR 3
               elseif (isset($_SESSION['pesan-pass3'])) :
               ?>
               <div class="form-group has-error">
                    <label class="control-label" for="pass2">Ulangi Password</label>
                    <input type="password" name="pass2" class="form-control" id="pass2" placeholder="ulangi password">
                    <span class="help-block">Password tidak sama!</span>
               </div>
               <?php
                    unset($_SESSION['pesan-pass3']);

               // TIDAK ADA ERROR
               else :
               ?>
               <div class="form-group">
                    <label for="pass2">Ulangi Password</label>
                    <input type="password" name="pass2" value="<?= $data['password'] ?>" class="form-control" id="pass2"
                         placeholder="ulangi password">
               </div>

               <?php endif; ?>
               <div class="form-group">

                    <label>Level</label>
                    <select class="form-control select2" name="id_level" style="width: 100%;">
                         <option selected="selected">--pilih--</option>
                         <?php
                         while ($dt = mysqli_fetch_array($q2)) {
                              echo "<option value=" . $dt['id_level'] . " " . (($data['id_level'] == $dt['id_level']) ? 'selected' : '') . ">"
                                   . $dt['level'] . "
                    </option>";
                         }

                         ?>

                    </select>

               </div>
               <!-- /.box-body -->

               <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="ubah-data">Simpan</button>
               </div>
     </form>
</div>