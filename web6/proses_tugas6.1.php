<?php
	function jumlah($bill, $bil2) {
	$jumlah = $bill + $bil2 ;
	return $jumlah ;
	}
	function kurang($bill, $bil2) {
	$kurang = $bill - $bil2 ;
	return $kurang ; 
	}
	function kali($bill, $bil2) {
	$kali = $bill * $bil2 ;
	return $kali ;
	}
	function bagi($bill, $bil2) {
	$bagi = $bill / $bil2 ;
	return $bagi ;
	}
	function sisa_bagi($bill, $bil2) {
	$sisa_bagi = $bill % $bil2 ;
	return $sisa_bagi ;
	}

	if($_POST["hitung"]=="+") {
	$hasil = jumlah( $_POST["bill"] , $_POST["bil2"] ) ;
	echo "Hasil jumlah : $hasil ";
	} elseif($_POST["hitung"]=="-") {
	$hasil = kurang( $_POST["bill"] , $_POST["bil2"] ) ;
	echo "Hasil kurang : $hasil " ;
	} elseif($_POST["hitung"]=="*") {
	$hasil = kali( $_POST["bill"] , $_POST["bil2"] ) ;
	echo "Hasil kali : $hasil " ;
	} elseif($_POST["hitung"]=="/") {
	$hasil = bagi( $_POST["bill"] , $_POST["bil2"] ) ;
	echo "Hasil bagi : $hasil " ;
	} elseif($_POST["hitung"]=="%") {
	$hasil = sisa_bagi( $_POST["bill"] , $_POST["bil2"] ) ;
	echo "Hasil sisa bagi : $hasil " ;
	}

?>