<?php
	function jumlah($bill, $bil2)
	{
	$jumlah = $bill + $bil2 ;
	return $jumlah ;
	}
	function kurang($bill, $bil2)
	{
	$kurang = $bill - $bil2 ;
	return $kurang ;
	}
	if($_POST["hitung"]=="JUMLAH")
	{
	$hasil = jumlah( $_POST["bill"] , $_POST["bil2"] ) ;
	echo "Hasil jumlah : $hasil ";
	}
	if($_POST["hitung"]=="KURANG")
	{
	$hasil = kurang( $_POST["bill"] , $_POST["bil2"] ) ;
	echo "Hasil kurang : $hasil " ;
	}

?>
