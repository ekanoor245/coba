<?php
	$hari = $_POST["tgl"] ;
	$bln = $_POST["bln"] ;
	function bulan($bln){
		$bulan = "" ;
		if($bln == 1 ){ $bulan = "Januari" ; }
		elseif($bln == 2){ $bulan = "Februari" ; }
		elseif($bln == 3){ $bulan = "Maret" ; }
		elseif($bln == 4){ $bulan = "April" ; }
		elseif($bln == 5){ $bulan = "Mei" ; }
		elseif($bln == 6){ $bulan = "Juni" ; }
		elseif($bln == 7){ $bulan = "Juli" ; }
		elseif($bln == 8){ $bulan = "Agustus" ; }
		elseif($bln == 9){ $bulan = "September" ; }
		elseif($bln == 10){ $bulan = "Oktober" ; }
		elseif($bln == 11){ $bulan = "Nopember" ; }
		elseif($bln == 12){ $bulan = "Desember" ; }
		return $bulan ;
	}
	$tahun = $_POST["thn"] ;
	
	$nama_barang = $_POST["nama_barang"] ;
	$jumlah = $_POST["jumlah"] ;

	$harga_barang = 0 ;
	if($nama_barang == "Baju")       { $harga_barang = 50000; }
	elseif($nama_barang == "Celana") { $harga_barang = 40000; }
	elseif($nama_barang == "Sepatu") { $harga_barang = 70000; }
	elseif($nama_barang == "Kaos")   { $harga_barang = 30000; }
	
	function total($harga,$jumlah){
		$total = $harga * $jumlah ;
		return $total ;
	}
	function diskon($total){
		$diskon = 10/100 * $total ;
		return $diskon;
	}
	function bayar($total,$diskon){
		$bayar = $total - $diskon ;
		return $bayar;
	}
?>
<h1>PEMBELIAN</h1>
<table border="1" cellspacing="0" cellpadding="10">
	<tr>
		<td>Tanggal Beli</td>
		<td> <?php echo $hari." ".bulan($bln)." ".$tahun ?> </td>
	</tr>
	<tr>
		<td>Nama Barang</td>
		<td> <?php echo $nama_barang ?> </td>
	</tr>
	<tr>
		<td>Harga Barang</td>
		<td>Rp. <?php echo number_format($harga_barang,0,".",",") ?> </td>
	</tr>
	<tr>
		<td>Jumlah</td>
		<td> <?php echo $jumlah ?> </td>
	</tr>
	<tr>
		<td>Total Harga</td>
		<td>Rp. <?php echo number_format(total($harga_barang,$jumlah),0,".",",") ?> </td>
	</tr>
	<tr>
		<td>Diskon</td>
		<td>Rp. <?php 
			$total = total($harga_barang,$jumlah) ;
			echo number_format(diskon($total),0,".",",") 
		?> </td>
	</tr>
	<tr>
		<td>Bayar</td>
		<td>Rp. <?php echo number_format(bayar(total($harga_barang,$jumlah),diskon(total($harga_barang,$jumlah))),0,".",",") ?> </td>
	</tr>
</table>