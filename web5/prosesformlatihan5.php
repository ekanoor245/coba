<h1>REGISTRASI MAHASISWA</h1>
<?php
	$tgl = date('l, d F Y');
	echo "TANGGAL SEKARANG : $tgl";
	$reg = $_POST["reg"];
	$angkatan = $_POST["angkatan"];
	$jurusan = $_POST["jurusan"];
	$sks = $_POST["sks"];
	$nama = $_POST["nama"];
	$smbg_akdmk=1255000;
	$format_smbg_akdmk = number_format($smbg_akdmk,2,",",".");
	if($jurusan == 561){
	$kode=array();
		if(isset($_POST["angkatan"]) and !empty($_POST["angkatan"])){
			$kode[]=substr($_POST["angkatan"],2,4);
		}
		if(isset($_POST["reg"]) and !empty($_POST["reg"])){
			$kode[]=str_pad($_POST["reg"],4,"0",STR_PAD_LEFT);
		}
		$arr_kode=count($kode);
		if($arr_kode == 2){
			$set_kode = implode("561",$kode);
		}
		$jur="Sistem Informasi";
	}
	elseif($jurusan == 541){
		$kode=array();
		if(isset($_POST["angkatan"]) and !empty($_POST["angkatan"])){
			$kode[]=substr($_POST["angkatan"],2,4);
		}
		if(isset($_POST["reg"]) and !empty($_POST["reg"])){
			$kode[]=str_pad($_POST["no_reg"],4,"0",STR_PAD_LEFT);
		}
		$arr_kode=count($kode);
		if($arr_kode == 2){
			$set_kode = implode("541",$kode);
		}
		$jur="Teknik Informatika";
	}
	elseif($jurusan == 321){
		$kode=array();
		if(isset($_POST["angkatan"]) and !empty($_POST["angkatan"])){
			$kode[]=substr($_POST["angkatan"],2,4);
		}
		if(isset($_POST["reg"]) and !empty($_POST["reg"])){
			$kode[]=str_pad($_POST["reg"],4,"0",STR_PAD_LEFT);
		}
		$arr_kode=count($kode);
		if($arr_kode == 2){
			$set_kode = implode("321",$kode);
		}
		$jur="Manajemen Informatika";
	}
	elseif($jurusan == 341){
		$kode=array();
		if(isset($_POST["angkatan"]) and !empty($_POST["angkatan"])){
			$kode[]=substr($_POST["angkatan"],2,4);
		}
		if(isset($_POST["reg"]) and !empty($_POST["reg"])){
			$kode[]=str_pad($_POST["reg"],4,"0",STR_PAD_LEFT);
		}
		$arr_kode=count($kode);
		if($arr_kode == 2){
			$set_kode = implode("341",$kode);
		}
		$jur="Teknik Komputer";
	}
	else{
		$kode=array();
		if(isset($_POST["angkatan"]) and !empty($_POST["angkatan"])){
			$kode[]=substr($_POST["angkatan"],2,4);
		}
		if(isset($_POST["reg"]) and !empty($_POST["reg"])){
			$kode[]=str_pad($_POST["reg"],4,"0",STR_PAD_LEFT);
		}
		$arr_kode=count($kode);
		if($arr_kode == 2){
			$set_kode = implode("351",$kode);
		}
		$jur="Komputer Akuntansi";
		
	}
	if($jurusan==561){
		$spp_tetap=1200000;
		$format_spp_tetap = number_format($spp_tetap,2,",",".");
		$spp_var_sks=75000;
		$spp_var=$spp_var_sks*$sks;
		$format_spp_var = number_format($spp_var,2,",",".");
		$reg=$smbg_akdmk+$spp_tetap+$spp_var;
		$format_reg = number_format($reg,2,",",".");
	}
	elseif($jurusan==541){
		$spp_tetap=1200000;
		$format_spp_tetap = number_format($spp_tetap,2,",",".");
		$spp_var_sks=75000;
		$spp_var=$spp_var_sks*$sks;
		$format_spp_var = number_format($spp_var,2,",",".");
		$reg=$smbg_akdmk+$spp_tetap+$spp_var;
		$format_reg = number_format($reg,2,",",".");
	}
	else{
		$spp_tetap=2750000;
		$format_spp_tetap = number_format($spp_tetap,2,",",".");
		$spp_var_sks=0;
		$spp_var=$spp_var_sks*$sks;
		$format_spp_var = number_format($spp_var,2,",",".");
		$reg=$smbg_akdmk+$spp_tetap+$spp_var;
		$format_reg = number_format($reg,2,",",".");
	}
?>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<td>NIM</td>
		<td><?php echo $set_kode; ?></td>
	</tr>
	<tr>
		<td>Nama Mahasiswa</td>
		<td><?php echo $nama; ?></td>
	</tr>
	<tr>
		<td>Jurusan</td>
		<td><?php echo $jur; ?></td>
	</tr>
	<tr>
		<td>Sumbangan Akademik</td>
		<td>Rp. <?php echo $format_smbg_akdmk; ?> </td>
	</tr>
	<tr>
		<td>SPP Tetap</td>
		<td>Rp. <?php echo $format_spp_tetap; ?> </td>
	</tr>
	<tr>
		<td>SPP Variabel</td>
		<td>Rp. <?php echo $format_spp_var; ?> </td>
	</tr>
	<tr>
		<td>Biaya Registrasi</td>
		<td>Rp. <?php echo $format_reg; ?></td>
	</tr>
</table>