<?php
	include "koneksi.php"
	$id = $_GET['id']
	$query_mysql = mysql_query("SELECT * FROM user WHERE id ='$id'")or die(mysql_error());
	while ($data = mysql_fetch_array($query_mysql)) {
 ?>
	# code...
}

<form action="update.php" method="post">
	<table>
		<tr>
			<td>No</td>
			<td>
				<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
				<input type="text" name="nama" value="<?php echo $data['nama']?>">
			</td>
		</tr>
		<tr>
			<td>JUUSAN/Prodi</td>
			<td>
				<input type="text" name="jurusan/Prodi" value="<?php echo $data['jurusan/prodi']?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="simpan"></td>
		</tr>
	</table>
</form>