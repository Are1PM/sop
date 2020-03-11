<?php
$query = mysqli_query($conn, 'SELECT * FROM tb_jurusan');
?>
<div class="row">
     <div class="col-md-12">
          <div class="box box-info">
               <div class="box-header">
                    <form action="index.php">
                         <div class="form-group">
                              <label>Jurusan/Prodi</label>
                              <select class="form-control select2" name="kode" style="width: 100%;">
                                   <option selected="selected" value="0">-- pilih --</option>
                                   <?php
                                   while ($data = mysqli_fetch_array($query)) {
                                        echo "<option value=" . $data['kode_jurusan'] . ">" . $data['jurusan'] . "</option>";
                                   }

                                   ?>
                              </select>
                         </div>
                         <div class="box-footer">
                              <button type="submit" name="go" class="btn btn-primary" value="data-sop">Go</button>
                         </div>
                    </form>
               </div>
          </div>
     </div>
</div>