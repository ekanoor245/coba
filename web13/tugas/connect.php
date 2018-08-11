<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db_name = "sewabuku";
	
	$connect = mysqli_connect($host, $user, $pass);
	if (!$connect)
		die("Koneksi Database Gagal...");
	
	$select_db = mysqli_select_db($connect, $db_name);
	
	if (!$select_db) {
		$select_db = mysqli_query($connect, "CREATE DATABASE $db_name");
		if (!$select_db)
			die("Gagal Membuat Database");
		else
			$select_db = mysqli_select_db($connect, $db_name);
		if (!$select_db) die ("Koneksi Database Gagal");
	}

	$tabel_buku = "CREATE TABLE IF NOT EXISTS buku (
					idbuku INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
					kode VARCHAR(10) NOT NULL,
					judul VARCHAR(40) NOT NULL,
					pengarang VARCHAR(40) NOT NULL,
					penerbit VARCHAR(40) NOT NULL,
					stok INT NOT NULL,
					foto VARCHAR(40) NOT NULL,
					KEY (kode))";
	mysqli_query ($connect, $tabel_buku) or die("Gagal Membuat Tabel Buku"); 
	
	$tabel_peminjam = "CREATE TABLE IF NOT EXISTS peminjam (
					   idpeminjam INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
					   tanggal DATE NOT NULL,
					   peminjam VARCHAR(45)NOT NULL,
					   email VARCHAR(50)NOT NULL DEFAULT '',
					   notelp VARCHAR(20) NOT NULL DEFAULT ''
					   )";
	mysqli_query ($connect, $tabel_peminjam) or die("Gagal Membuat Tabel Peminjam");
	
	$tabel_detail_peminjaman = "CREATE TABLE IF NOT EXISTS detail_peminjaman (
					   iddetailpinjam INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
					   idpeminjam INT NOT NULL,
					   idbuku INT NOT NULL,
					   quantitiy INT NOT NULL
					   )";
	mysqli_query ($connect, $tabel_detail_peminjaman) or die("Gagal Membuat Tabel Detail Peminjaman");
	
	$tabel_pengguna = "CREATE TABLE IF NOT EXISTS pengguna (
						idpengguna INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
						nama_pengguna VARCHAR(25) NOT NULL,
						password VARCHAR(50) NOT NULL,
						akses_pengguna VARCHAR(50) NOT NULL
		)";
	mysqli_query($connect, $tabel_pengguna) or die("Gagal Membuat Tabel Pengguna");
	
	$query = "SELECT * FROM pengguna";
	$result = mysqli_query($connect, $query);
	$count = mysqli_num_rows($result);
	if($count == 0 ){
		$query = "INSERT INTO pengguna(nama_pengguna, password, akses_pengguna)
				values('admin',md5('admin'),'Administrasi'),
					  ('sewa',md5('sewa'),'Penyewa Buku') ";
		mysqli_query($connect, $query);
	}
	echo "Tabel Siap <hr/>";
?>