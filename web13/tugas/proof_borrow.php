<style type="text/css">
@media print{
	#button{
		display:none;
	}
}
</style>
<div id="button">
	<input type="button" value="Pinjam Buku"
		onClick="window.location.assign('available.php')"/>
	<input type="button" value="Print"
		onClick="window.print()"/>
</div>
<?php
	$idpeminjam = $_GET["idpeminjam"];
	include "connect.php";
	$query_peminjam = "SELECT * FROM peminjam WHERE idpeminjam = $idpeminjam ";
	$result_peminjam = mysqli_query($connect,$query_peminjam);
	$rows_peminjam = mysqli_fetch_assoc($result_peminjam);
	
	echo "<pre>";
	echo "<h1>BUKTI PEMINJAMAN</h1>";
	echo "NO      : ".date("Ymd").$rows_peminjam['idpeminjam']."<br/>";
	echo "TANGGAL : ".$rows_peminjam['tanggal']."<br/>";
	echo "NAMA    : ".$rows_peminjam['peminjam']."<br/>";
	$query_detail_peminjaman = "SELECT buku.judul, buku.pengarang,
				 detail_peminjaman.quantity
				 FROM detail_peminjaman INNER JOIN buku
				 ON detail_peminjaman.idbuku = buku.idbuku
				 WHERE detail_peminjaman.idpeminjam = $idpeminjam ";
	$result_detail_peminjaman = mysqli_query($connect,$query_detail_peminjaman);
	echo "<table border='1' cellpadding='10' cellspacing='0'>";
	echo "<tr>";
	echo "<th> Judul Buku </th>";
	echo "<th> Pengarang </th>";
	echo "</tr>";
	$total = 0;
	while($rows_peminjaman = mysqli_fetch_assoc($result_detail_peminjaman)){
		echo "<tr>";
		echo " <td> ".$rows_peminjaman['judul']." </td> ";
		echo "<td> ".$rows_peminjaman['pengarang']." </td> ";
		echo "</tr>";
		$total = $rows_peminjaman['quantity'] + $total;
	}
	echo "<tr>";
	echo "<td>";
	echo "	<strong>Total Buku</strong></td>";
	echo "<td><strong>$total</strong> </td>";
	echo "</tr>";
	echo "</table>";
	echo "</pre>";
?>