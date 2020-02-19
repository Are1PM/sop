<?php
include 'koneksi.php';
$query = mysqli_query($conn, 'SELECT * FROM tb_jurusan');
?>
<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header">
				<form method="post" action="index.php?go=data-sop">
					<div class="form-group">
						<label>JURUSAN/Prodi</label>
						<select class="form-control select2" name="kode_prodi" style="width: 100%;">
							<option selected="selected">--pilih--</option>
							<?php
							while ($data = mysqli_fetch_array($query)) {
								echo "<option value=" . $data['kode_jurusan'] . ">" . $data['jurusan'] . "</option>";
							}

							?>
						</select>
					</div>
					<div class="box-footer">
						<button type="submit" name="go-data" class="btn btn-primary">Go</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>