<?php
$mahasiswa = array(
			1=>array("nim"=>"105610222","nama"=>"Budi","jurusan"=>"SI","angkatan"=>2010) ,
			2=>array("nim"=>"105610223","nama"=>"Amir","jurusan"=>"SI","angkatan"=>2010) ,
			3=>array("nim"=>"105610224","nama"=>"Joko","jurusan"=>"SI","angkatan"=>2010) ,
			4=>array("nim"=>"105610224","nama"=>"Imron","jurusan"=>"SI","angkatan"=>2010) ,
			5=>array("nim"=>"105610225","nama"=>"Wati","jurusan"=>"SI","angkatan"=>2010) ,
			6=>array("nim"=>"105610226","nama"=>"Tika","jurusan"=>"SI","angkatan"=>2010) 
		) ;
?>
<h1>DAFTAR MAHASISWA</h1>
<table border="1" cellspacing="0" cellpadding="5">
	<tr style="background:gray">
		<th>No.</th> <th>NIM</th> <th>Nama</th> <th>Jurusan</th> <th>Angkatan</th>
	</tr>
	<?php
	foreach($mahasiswa as $nomor=>$detail) {
	if(($nomor%2)==1){
		$warna = "background:orange" ;
	}else{
		$warna = "background:red" ;
	}
	?>
	<tr style="<?php echo $warna ?>">
		<td><?php echo $nomor ?></td> 
		<?php
		foreach($detail as $field=>$data){
		?>
		<td><?php echo $data ?></td> 
		<?php
		}
		?>	
	</tr>
	<?php
	}
	?>
</table>
