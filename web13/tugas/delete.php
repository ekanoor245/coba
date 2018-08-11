<?php
	$idbuku = $_GET['idbuku'];
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
<h1/>KONFIRMASI HAPUS BUKU</h1>
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
				echo "<td width='330'> $judul </td>";
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
</table><hr/>
<table border="1" cellspacing="0" cellpadding="5" style="text-align:center">
<tr><td  width='415'>
<?php
	echo "<h4>APAKAH DATA BUKU INI AKAN DIHAPUS ? </h4>";
	echo " <a href='delete.php?idbuku=$idbuku&delete=1'> YA </a> ";
	echo "&nbsp;&nbsp;";
	echo "<a href='showing.php'>TIDAK</a>";
	
	if(isset($_GET['delete'])){
		$sql = "DELETE FROM buku WHERE idbuku = '$idbuku' ";
		$result = mysqli_query($connect, $sql);
		if(!$result){
			echo "Gagal Menghapus Buku : $judul ! ! !<br/>";
			echo "<a href='showing.php'>Kembali ke Daftar Buku</a>";
		}
		else{
			$image = "image/$photo";
			if(file_exists($image)) unlink($image);
			$image = "thumb/t_$photo";
			if(file_exists($image)) unlink($image);
			header ('location:showing.php');
		}
	}
?>
</td></tr>
</table>
</td></tr></table>