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
	
	include "connect.php";
	
	$save = true;
	$begin_transaction = mysqli_query($connect,'start transaction');
	
	$query = "INSERT INTO peminjam (tanggal, peminjam, email, notelp)
			  VALUES('$tanggal','$peminjam','$email','$notelp')";
	$result  = mysqli_query($connect, $query);
	if(!$result){
		echo "Data Peminjam Gagal Disimpan <br/>";
		$save = false;
	}
	
	$idpeminjam = mysqli_insert_id($connect);
	if($idpeminjam == 0 ){
		echo "Data Peminjam Tidak Ada <br/>";
		$save = false;
	}
	
	$array_book = explode(",",$pilih_judul);
	$count = count($array_book);
	if($count <= 1){
		echo "Tidak Ada Buku Yang Dipilih <br/>";
		$save = false;
	}
	else{
		foreach($array_book as $idbuku){
			if($idbuku == 0){
				continue;
			}
			$query = "SELECT * FROM buku WHERE idbuku = $idbuku";
			$result = mysqli_query($connect, $query);
			if(!$result){
				echo "Buku Tidak Ada <br/>";
				$save = false;
				break;
			}
			else{
				$rows = mysqli_fetch_assoc($result);
				$stok = $rows['stok'] - 1;
				if($stok < 0){
					echo "Stok Buku ".$rows['judul']." Kosong <br/>";
					$save = false;
					break;
				}
				
			}
			$query = "INSERT INTO detail_peminjaman (idpeminjam, idbuku, quantity)
					  VALUES('$idpeminjam','$idbuku',$quantity)";
			$result = mysqli_query($connect, $query);
			if(!$result){
				echo "Detail Peminjaman Gagal Disimpan <br/>";
				$save = false;
				break;
			}
			$query = "UPDATE buku SET stok = $stok
					  WHERE idbuku = $idbuku";
			$result = mysqli_query($connect, $query);
			if(!$result){
				echo "Update Stok Buku Gagal <br/>";
				$save = false;
				break;
			}
		}
	}
	
	if($save){
		$commit = mysqli_commit($connect);
	}
	else{
		$rollback = mysqli_rollback($connect);
		echo "Peminjaman Gagal <br/>
			  <input type='button' value='Kembali'
			  onClick='self.history.back()'>";
		exit;
	}
	header("location:proof_borrow.php?idpeminjam=$idpeminjam");
	setcookie('pinjam',$pilih_judul,time()-3600);
	
?>