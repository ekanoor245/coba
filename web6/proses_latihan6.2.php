<h1>PEMBELIAN</h1>
<?php
	$tgl=$_POST["tgl"];
	
	$bln=$_POST["bln"];
	function bln($bln) {
	if($bln == 1) { $bln = "Januari"; }
	elseif($bln == 2) { $bln = "Februari"; }
	elseif($bln == 3) { $bln = "Maret"; }
	elseif($bln == 4) { $bln = "April"; }
	elseif($bln == 5) { $bln = "Mei"; }
	elseif($bln == 6) { $bln = "Juni"; }
	elseif($bln == 7) { $bln = "Juli"; }
	elseif($bln == 8) { $bln = "Agustus"; }
	elseif($bln == 9) { $bln = "September"; }
	elseif($bln == 10) { $bln = "Oktober"; }
	elseif($bln == 11) { $bln ="November"; }
	elseif($bln == 12){ $bln = "Desember";}
	return $bln;
	}
	$thn=$_POST["thn"];
	$nama_barang = $_POST["nama_barang"];
	$harga_barang=0;
	if($nama_barang == "Baju") {$harga_barang == 50000;}
	elseif($nama_barang == "Celana") {$harga_barang == 40000;}
	elseif($nama_barang == "Sepatu") {$harga_barang == 70000;}
	elseif($nama_barang == "Kaos") {$harga_barang == 30000;}
	$jumlah=$_POST["jumlah"];
	
	
?>
<table border="1" cellspacing="0">
	<tr>
		<td>Tanggal Beli</td>
		<td><?php echo $tgl." ".bln($bln)." ".$thn ?></td>
	<tr>
	<tr>
		<td>Nama Barang</td>
		<td><?php echo $nama_barang ?></td>
	<tr>
	<tr>
		<td>Harga Barang</td>
		<td><?php echo $harga_barang; ?></td>
	<tr>
	<tr>
		<td>Jumlah</td>
		<td></td>
	<tr>
	<tr>
		<td>Total Harga</td>
		<td></td>
	<tr>
	<tr>
		<td>Diskon (10%)</td>
		<td></td>
	<tr>
	<tr>
		<td>Bayar</td>
		<td></td>
	<tr>
</table>