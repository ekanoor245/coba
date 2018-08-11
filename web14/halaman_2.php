<?php 
	session_start();
	include_once ('template_atas.php');
?>
<div style="background:orange">
<h1>INI HALAMAN DUA</h1>
<?php
	
	echo "SELAMAT DATANG <br/>";
	echo "USER : ".$_SESSION["user"]."<br/>";
	echo "NAMA : ".$_SESSION["nama_lengkap"]."<br/>";
	echo "AKSES : ".$_SESSION["akses"]."<br/>";
?>
</div>
<?php include_once ('template_bawah.php'); ?>