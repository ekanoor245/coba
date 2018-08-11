<table border="1" cellpadding="15" cellspacing="0"><tr><td>
<h1>Data Barang</h1>
<?php
	//nama barang
	$nama=$_POST["nama"];
	//jenis barang
	$jenis=$_POST["jenis"];
	//nomor seri
	$nomor=$_POST["nomor"];
	//merk
	$merk=$_POST["merk"];
	//negara pembuat
	$negara=$_POST["negara"];
	//harga barang
	$harga=$_POST["harga"];
	//jumlah stok
	$jumlah=$_POST["jumlah"];
	//menentukan kode barang
	$kode=array();
	if(isset($_POST["nama"]) and !empty($_POST["nama"])){
		$kode[]=substr($_POST["nama"],0,3);
	}
	if(isset($_POST["nomor"]) and !empty($_POST["nomor"])){
		$kode[]=str_pad($_POST["nomor"],4,"0",STR_PAD_LEFT);
	}
	if(isset($_POST["merk"]) and !empty($_POST["merk"])){
		$kode[]=substr($_POST["merk"],0,3);
	}
	if(isset($_POST["negara"]) and !empty($_POST["negara"])){
		$kode[]=substr($_POST["negara"],0,3);
	}
	$arr_kode=count($kode);
	if($arr_kode == 4){
		$set_kode = implode("/",$kode);
	}
	//format tanggal
	$tanggal=$_POST["tanggal"];
	$bulan=$_POST["bulan"];
	$tahun=$_POST["tahun"];
	$tgl=mktime(0,0,0,$bulan,$tanggal,$tahun);
	$format_tgl=date("l, j F Y",$tgl);
	//hitung harga
	$format_harga=number_format($harga,2,",",".");
	$total=$harga*$jumlah;
	$format_total=number_format($total,2,",",".");
	echo "<pre>
  Kode		: $set_kode	
  Nama Barang	: $nama
  Nomor Seri	: $nomor		
  Merk		: $merk
  Buatan Dari	: $negara
  Tanggal Buat	: $format_tgl
  Harga		: Rp. $format_harga
  Jumlah Stok	: $jumlah
  Total Harga	: Rp. $format_total
  </pre>";
?>
</td></tr></table>