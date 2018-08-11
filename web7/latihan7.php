<?php
	$kode  = $_POST['kode'];
	$judul = $_POST['judul'];
	$pengarang  = $_POST['pengarang'];
	$penerbit  = $_POST['penerbit'];
	$stok  = $_POST['stok'];

	$data_valid="YA";

	if (strlen(trim($judul))==0) {
		echo "Judul Buku Belum Diisi!<br />";
		$data_valid = "TIDAK";
	}
	if (strlen(trim($pengarang))==0) {
		echo "Nama Pengarang Belum Diisi! <br />";
		$data_valid = "TIDAK";
	}
	if (strlen(trim($penerbit))==0 ) {
		echo "Penerbit Belum Diisi! <br />";
		$data_valid = "TIDAK";
	}
	if (strlen(trim($stok))==0 ) {
		echo "Jumlah Stok Belum Diisi! <br />";
		$data_valid = "TIDAK";
	}
	if ($data_valid == "TIDAK") {
		echo "Masih Ada Kesalahan, silahkan perbaiki! </br>";
		echo "<input type='button' value='Kembali'
			onClick='self.history.back()'> ";
		exit;
	}
	
	include "connect.php";
	
	$sql = "INSERT INTO buku
		(kode,judul,pengarang,penerbit,stok)
		 VALUES
		('$kode','$judul','$pengarang','$penerbit','$stok')";
	$hasil = mysqli_query($connect, $sql);
	
	if (!$hasil) {
		echo "Gagal Simpan, silahkan diulangi! <br /> ";
		echo mysqli_error($connect);
		echo "<br/> <input type='button' value='Kembali'
			onClick='self.history.back()'>";
	exit;
	} else {
		echo "Simpan data buku berhasil" ;
	}
?>