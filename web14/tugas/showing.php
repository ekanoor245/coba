<?php
	include_once('template_on_top.php');
	$judul = "";
	if(isset($_POST["judul"]))
		$judul = $_POST["judul"];
	
	$pengarang = "";
	if(isset($_POST["pengarang"]))
		$pengarang = $_POST["pengarang"];
	
	include "connect.php";
	$sql_select = "SELECT * FROM buku WHERE judul LIKE '%".$judul."%' 
				  AND pengarang LIKE '%".$pengarang."%' ORDER BY kode";
	$result = mysqli_query($connect, $sql_select);
	if(!$result) die("Gagal Melakukan Query...".mysqli_error($connect));
?>
	<a href="form_input.php">INPUT BUKU</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="search.php">CARI BUKU</a>
	<table border="1" cellspacing="0" cellpadding="3">
		<tr>
			<th>Foto</th>
			<th>Judul Buku</th>
			<th>Pengarang</th>
			<th>&nbsp;</th>
		</tr>
		<?php
			while($rows = mysqli_fetch_assoc($result)){
				echo " <tr> ";
					echo " <td> <a href='image/{$rows['foto']} ' />
						   <img src='thumb/t_{$rows['foto']} ' width = '100' />
						   </a> </td> ";
					echo " <td>".$rows['judul']."</td> ";
					echo " <td>".$rows['pengarang']."</td> ";
					echo " <td><a href='info.php?idbuku=".$rows['idbuku']."'>Lihat Buku</a>";
					echo "&nbsp;";
					echo " <a href='edit_data.php?idbuku=".$rows['idbuku']." '>Edit Buku </a> ";
					echo "&nbsp;";
					echo " <a href='delete.php?idbuku=".$rows['idbuku']." '> Hapus Buku </a> </td> ";
				echo " </tr> ";
				
			}
		?>
	</table>
	<?php include_once('template_on_bottom.php'); ?>