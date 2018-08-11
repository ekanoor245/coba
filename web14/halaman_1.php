<?php
	session_start();
	include_once ('template_atas.php');
	echo "<div style='background:red'>";
	echo "SELAMAT DATANG <br/>";
	echo "USER : ".$_SESSION["user"]."<br/>";
	echo "NAMA : ".$_SESSION["nama_lengkap"]."<br/>";
	echo "AKSES : ".$_SESSION["akses"]."<br/>";
?>
<hr/> <br/>
<h1>INI HALAMAN SATU</h1>
</div>
<?php include_once ('template_bawah.php'); ?>