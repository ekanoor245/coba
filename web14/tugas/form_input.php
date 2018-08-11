<?php
	include_once('template_on_top.php');
?>
<table border="1" cellspacing="0"cellpadding="10"><tr><td>
<h2>INPUT BUKU</h2><hr/>
<form action="save_data.php" method="post" enctype="multipart/form-data">
<table border="0" >
	<tr>
		<td>Kode</td>
		<td><input type="text" name="kode" /></td>
	</tr>
	<tr>
		<td>Judul Buku</td>
		<td><input type="text" name="judul" /></td>
	</tr>
	<tr>
		<td>Pengarang</td>
		<td> <input type="text" name="pengarang" /></td>
	</tr>
	<tr>
		<td>Penerbit</td>
		<td> <input type="text" name="penerbit" /></td>
	</tr>
	<tr>
		<td>Jumlah Stok</td>
		<td> <input type="text" name="stok" /></td>
	</tr>
	<tr>
		<td>Foto Sampul</td>
		<td> <input type="file" name="foto" /></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><hr/>
			<input type="submit" value="Simpan" name="proses" />
			<input type="reset" value="Reset" name="reset" />
		</td>
	</tr>
</table>
</form>
</td></tr>
</table>
<?php
	include_once('template_on_bottom.php');
?>