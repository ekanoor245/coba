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
?>