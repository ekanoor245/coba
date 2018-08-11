<?php
	session_start();
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	
	$valid = "YES";
	if(strlen(trim($username))==0){
		echo "Username Belum Diisi, Silahkan Diisi! <br/>";
		$valid = "NO";
	}
	if(strlen(trim($password))==0){
		echo "Password Belum Diisi, Silahkan Diisi! <br/>";
		$valid = "NO";
	}
	
	if($valid == "NO"){
		echo "Masih Terdapat Kesalahan, Silahkan Perbaiki! <br/>";
		echo "<input type='button' value='Kembali'
			  onClick='self.history.back()' />";
		exit;
	}
	
	include "connect.php";
	$query = "SELECT * FROM pengguna WHERE
			nama_pengguna='".$username."' and password='".$password."' ";
	$result = mysqli_query($connect, $query) or die('Akses Gagal! <br/>');
	$count = mysqli_num_rows($result);
	if($count > 0){
		$rows = mysqli_fetch_assoc($result);
		$_SESSION["nama_pengguna"] = $rows["nama_pengguna"];
		$_SESSION["akses_pengguna"] = $rows["akses_pengguna"];
		header("location:first_page.php");
	}else{
		echo "Username atau Password yang anda masukkan salah! <br/>";
		echo "<input type='button' value='Kembali'
			  onClick='self.history.back()' />";
	}
?>