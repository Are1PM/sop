<?php
if ($_SESSION['user']['id_level'] == 1) {
     $query = mysqli_query($conn, 'SELECT * FROM tb_level WHERE id_level<>1');
} elseif ($_SESSION['user']['id_level'] == 2) {
     $query = mysqli_query($conn, 'SELECT * FROM tb_level WHERE id_level=3');
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
               <?php
               if ($_SESSION['form-error']['judul'] == 'username') :
               ?>
               <div class="form-group has-error">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="masukan username"
                         autocomplete="off">
                    <span class="help-block"><?= $_SESSION['form-error']['isi'] ?></span>
               </div>
               <?php
                    $_SESSION['form-error']['judul'] = "";
               else :
               ?>
               <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="masukan username"
                         autocomplete="off">
               </div>
               <?php
               endif;
               ?>

               <!-- ERROR PASSWORD -->
               <?php
               if ($_SESSION['form-error']['judul'] == 'pass1') :
               ?>
               <div class="form-group has-error">
                    <label class="control-label" for="pass1">Password</label>
                    <input type="password" name="pass1" class="form-control" id="pass1" placeholder="masukan password">
                    <span class="help-block"><?= $_SESSION['form-error']['isi'] ?></span>
               </div>
               <?php
                    $_SESSION['form-error']['judul'] = "";
               else :
               ?>
               <div class="form-group">
                    <label class="control-label" for="pass1">Password</label>
                    <input type="password" name="pass1" class="form-control" id="pass1" placeholder="masukan password">
               </div>
               <?php
               endif;
               ?>

               <!-- ERROR ULANG PASSWORD -->
               <?php
               if ($_SESSION['form-error']['judul'] == 'pass2') :
               ?>
               <div class="form-group has-error">
                    <label class="control-label" for="pass2">Ulangi Password</label>
                    <input type="password" name="pass2" class="form-control" id="pass2" placeholder="ulangi password">
                    <span class="help-block"><?= $_SESSION['form-error']['isi'] ?></span>
               </div>
               <?php
                    $_SESSION['form-error']['judul'] = "";
               else :
               ?>
               <div class="form-group">
                    <label class="control-label" for="pass2">Ulangi Password</label>
                    <input type="password" name="pass2" class="form-control" id="pass2" placeholder="ulangi password">
               </div>
               <?php
               endif;
               ?>

               <!-- FORM LEVEL -->
               <?php
               if ($_SESSION['form-error']['judul'] == 'id_level') :
               ?>
               <div class="form-group has-error">
                    <label>Level</label>
                    <select class="form-control select2" name="id_level" style="width: 100%;">
                         <option selected="selected" value="">--pilih--</option>
                         <?php
                              while ($data = mysqli_fetch_array($query)) {
                                   echo "<option value=" . $data['id_level'] . ">" . $data['level'] . "</option>";
                              }

                              ?>
                    </select>
                    <span class="help-block"><?= $_SESSION['form-error']['isi'] ?></span>
               </div>

               <?php
                    $_SESSION['form-error']['judul'] = "";
               else :
               ?>

               <div class="form-group">
                    <label>Level</label>
                    <select class="form-control select2" name="id_level" style="width: 100%;">
                         <option selected="selected" value="">--pilih--</option>
                         <?php
                              while ($data = mysqli_fetch_array($query)) {
                                   echo "<option value=" . $data['id_level'] . ">" . $data['level'] . "</option>";
                              }

                              ?>

                    </select>

               </div>
               <?php
               endif;
               ?>
               <!-- /.box-body -->

               <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="simpan-data">Simpan</button>
               </div>
     </form>
</div>