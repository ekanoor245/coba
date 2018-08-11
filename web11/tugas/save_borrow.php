<?php
	$peminjam = $_POST['peminjam'];
	$email  = $_POST['email'];
	$notelp = $_POST['notelp'];
	$tanggal = date('Y-m-d');
	$pilih_judul = '';
	$quantity = 1;
	
	$valid = "YES";
	
	if(strlen(trim($peminjam))==0){
		echo "Nama Peminjam Belum Diisi...<br/>";
		$valid = "NO";
	}
	if(strlen(trim($notelp))==0){
		echo "Nomor Telepon Belum Diisi...<br/>";
		$valid = "NO";
	}
	if(isset($_COOKIE['pinjam'])){
		$pilih_judul = $_COOKIE['pinjam'];
	}
	else{
		echo "Keranjang Peminjaman Kosong <br/>";
		$valid = "NO";
	}
	if($valid == "NO"){
		echo "Masih Terdapat Kesalahan, Silahkan Perbaiki...<br/>";
		echo "<input type='button' value='Kembali'
			  onClick='self.history.back()'/>";
		exit;
	}
	echo  "Data Siap Untuk Disimpan...";
	
	setcookie('pinjam',$pilih_judul,time()-3600);
	
?>