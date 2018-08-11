<h2>.:: ISI BARANG ::.</h2>
<form action="barang_simpan.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="idbarang" value="<?php echo $idbarang; ?>" />
<table border="1" cellspacing="0" cellpadding="2">
	<tr>
		<td>Nama Barang</td>
		<td><input type="text" name="nama" style="width:245px" /></td>
	</tr>
	<tr>
		<td>Harga Jual</td>
		<td><input type="text" name="harga" style="width:245px" /></td>
	</tr>
	<tr>
		<td>Stok</td>
		<td> <input type="text" name="stok" style="width:245px"/></td>
	</tr>
	<tr>
		<td>Gambar [Max=1.5MB]</td>
		<td><input type="file" name="foto"/></td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input type="submit" value="Simpan" name="proses" />
			<input type="reset" value="Reset" name="reset" />
		</td>
	</tr>
</table>
</form>