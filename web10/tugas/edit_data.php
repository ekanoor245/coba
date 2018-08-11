<?php 
	$idbuku = $_GET['idbuku'];
	include "connect.php";
	$sql_select = "SELECT * FROM buku WHERE idbuku = '$idbuku' ";
	$result = mysqli_query ($connect, $sql_select);
	if(!$result) die("Query Gagal ! ! !");
	
	$data = mysqli_fetch_array($result);
	$kode  		= $data['kode'];
	$judul 		= $data['judul'];
	$pengarang  = $data['pengarang'];
	$penerbit  	= $data['penerbit'];
	$stok  		= $data['stok'];
	$photo  	= $data['foto'];
?>
<table border="1" cellspacing="0"cellpadding="10"><tr><td>
<h2>INPUT BUKU</h2><hr/>
<form action="save_data.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="idbuku" value="<?php echo $idbuku; ?>" />
<table border="0" >
	<tr>
		<td>Kode</td>
		<td><input type="text" name="kode" value="<?php echo $kode; ?>" /></td>
	</tr>
	<tr>
		<td>Judul Buku</td>
		<td><input type="text" name="judul" value="<?php echo $judul; ?>" /></td>
	</tr>
	<tr>
		<td>Pengarang</td>
		<td> <input type="text" name="pengarang" value="<?php echo $pengarang; ?>" /></td>
	</tr>
	<tr>
		<td>Penerbit</td>
		<td> <input type="text" name="penerbit" value="<?php echo $penerbit; ?>" /></td>
	</tr>
	<tr>
		<td>Jumlah Stok</td>
		<td> <input type="text" name="stok" value="<?php echo $stok; ?>" /></td>
	</tr>
	<tr>
		<td>Foto Sampul</td>
		<td> <input type="file" name="foto" />
			 <input type="hidden" name="old_photo" value="<?php echo $photo; ?>" /><br/>
			 <img src="<?php echo "thumb/t_".$photo; ?>" width="100" />
			 </td>
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
