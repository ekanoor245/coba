<!DOCTYPE html>
<html>
	<head>
		<title>Latihan</title>
	</head>
	<body>
	<?php
		$nama="Masyoudi Adi Yanta";
		$nim=155610022;
		$jur="Sistem Informasi";
		$umur="19 Tahun";
		$tk=1997;
		echo "<h1>BIODATA MAHASISWA</h1><hr/>";
		echo "Nama : $nama <br/>"; 
		echo "NIM : $nim <br/>";
		echo "Jurusan : $jur <br/>";
		echo "Umur : $umur <br/>";
		echo "Tahun Kelahiran : $tk <hr/>";
			echo '<table border="1">';
				echo "<tr>";
					echo '<td colspan="2">BIODATA MAHASIAWA</td>';
				echo "</tr>";
				echo "<tr>";
					echo "<td>Nama</td>";
					echo "<td>".$nama."</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>NIM</td>";
					echo "<td>".$nim."</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>Jurusan</td>";
					echo "<td>".$jur."</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>Umur</td>";
					echo "<td>".$umur."</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>Lahir</td>";
					echo "<td>".$tk."</td>";
				echo "</tr>";
			echo "</table>";
		?>
	</body>
</html>