<?php
	include_once('template_on_top.php');
	$pilih_judul = 0;
	if(isset($_COOKIE['pinjam'])){
		$pilih_judul = $_COOKIE['pinjam'];
	}
	if(isset($_GET['idbuku'])){
		$idbuku = $_GET['idbuku'];
		$pilih_judul = $pilih_judul.",".$idbuku;
		setcookie('pinjam', $pilih_judul, time()+3600);
	}
	include "connect.php";
	$sql_select = "SELECT * FROM buku WHERE idbuku IN (".$pilih_judul.") 
				  ORDER BY idbuku DESC";
	$result = mysqli_query($connect, $sql_select);
	if(!$result) die("Gagal Melakukan Query...".mysqli_error($connect));
?>
	<h1>KERANJANG PEMINJAMAN</h1>
	<table border="1" cellspacing="0" cellpadding="3">
		<tr>
			<th>Foto</th>
			<th>Judul Buku</th>
			<th>Pengarang</th>
			<th>Operasi</th>
		</tr>
		<?php
			while($rows = mysqli_fetch_assoc($result)){
				echo " <tr> ";
					echo " <td> <a href='image/{$rows['foto']} ' />
						   <img src='thumb/t_{$rows['foto']} ' width = '100' />
						   </a> </td> ";
					echo " <td>".$rows['judul']."</td> ";
					echo " <td>".$rows['pengarang']."</td> ";
					echo " <td><a href='".$_SERVER['PHP_SELF']."?idbuku=".
					           $rows['idbuku']."'>BATAL</a> 
						   </td> ";
				echo " </tr> ";
				
			}
		?>
	</table>
	<?php include_once('template_on_bottom.php'); ?>