<?php
	$nomor=array(1,2,3);
?>
<form action="prosescoba1.php" method="post">
<table border="1" cellpadding="25" cellspacing="0"><tr><td>
<h1 style="text-align:center">TRANSAKSI</h1><hr/>
<table border="0" cellspacing="0">
	<tr>
		<td>Nomor </td>
		<td> : <?php echo $nomor[0]; ?></td>
	</tr>
	<tr>
		<td>Nama Barang </td>
		<td> : <input type="text" name="barang1"/></td>
	</tr>
	<tr>
		<td>Jumlah </td>
		<td> : <input type="text" name="jumlah1"/></td>
	</tr>
	<tr>
		<td>Harga Barang </td>
		<td> : <input type="text" name="harga1"/></td>
	</tr>
</table><hr/>
<table border="0" cellpadding="3" cellspacing="0">
	<tr>
		<td><input type="submit" value="HITUNG"/></td>
		<td> <input type="reset" name="batal"/></td>
	</tr>
</table><hr/>
</td>
</tr>
</table>
</form>