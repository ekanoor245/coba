<?php
	$idbuku = $_GET["idbuku"];
	include "connect.php";
	
	$sql_select = "SELECT * FROM buku WHERE idbuku = '$idbuku'";
	
	$result = mysqli_query($connect, $sql_select);
	
	if(!$result) die("Gagal Melakukan Query...".mysqli_error($connect));

	$data = mysqli_fetch_array($result);
	$kode = $data["kode"];
	$judul = $data["judul"];
	$pengarang = $data["pengarang"];
	$penerbit = $data["penerbit"];
	$photo = $data["foto"];
?>
<table border="1" cellspacing="0" cellpadding="5"><tr><td>
<a href="form_input.php">INPUT BUKU</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="search.php">CARI BUKU</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="showing.php">DAFTAR BUKU</a><br/>
<h1/>INFORMASI BUKU</h1>
<table border="1" cellspacing="0" cellpadding="5">
		<?php
		echo "<tr>";
		echo "<td  colspan='2' style='text-align:center'> <a href='image/{$data['foto']} ' />
						   <img src='thumb/t_{$data['foto']} ' width='130' />
						   </a> </td>";
		echo "</tr>";
		echo "<tr>";
				echo "<td> Kode Buku</td>";
				echo "<td> $kode </td>";
		echo "</tr>";
		echo "<tr>";
				echo "<td> Judul Buku </td>";
				echo "<td width='260'> $judul </td>";
		echo "</tr>";
		echo "<tr>";
				echo "<td> Pengarang </td>";
				echo "<td> $pengarang </td>";
		echo "</tr>";
		echo "<tr>";
				echo "<td> Penerbit </td>";
				echo "<td> $penerbit </td>";
		echo "</tr>";
		?>
</table>
</td></tr></table>