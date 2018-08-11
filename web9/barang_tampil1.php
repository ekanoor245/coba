<?php
	include "koneksi.php";
	$sql = "select * from barang order by idbarang desc";
	$hasil = mysqli_query($kon, $sql);
	if(!$hasil) 
		die("Gagal query...".mysqli_error($kon));
?>
<a href="barang_isi.php">INPUT Barang</a>
<table border="1" cellspacing="0">
	<tr>
		<th>Foto</th>
		<th>Nama Barang</th>
		<th>Harga Jual</th>
		<th>Stok</th>
	</tr>
	<?php
		$no = 0;
		while($row = mysqli_fetch_assoc($hasil)){
			echo " <tr> ";
			echo " <td> <a href='pict/{$row['foto']}' />
				   <img src='thumb/t_{$row['foto']}' width='100'/>
				   </a> </td> ";
			echo " <td> ".$row['nama']." </td> ";
			echo " <td> ".$row['harga']." </td> ";
			echo " <td> ".$row['stok']." </td> ";
			echo " </tr> ";
		}
	?>
</table>