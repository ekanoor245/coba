<h2>Daftar Jurusan</h2>
<table border="1" cellspacing="0">
<tr>
	<th>Kode</th>
	<th>Nama Jurusan</th>
</tr>
<?php
	$arr_jurusan = array("TI"=>"Teknik Informatika", "SI"=>"Sistem Informasi",
	"KA"=>"Komputer Akuntansi", "MI"=>"Manajemen Informatika", "TK"=>"Teknik Komputer");
	foreach($arr_jurusan as $jur => $nama_jur){
		echo "<tr>
				<td>$jur</td>
				<td>$nama_jur</td>
			 </tr>";
	}	
?>
</table>