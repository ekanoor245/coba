<div style="background:lavender">
<?php
		session_start();
		echo "<h1> Menu Satu </h1>";
		echo "<h3>.: Selamat Datang :. </h3><hr/>";
		echo "Username : ".$_SESSION["nama_pengguna"]."<br/>";
		echo " Akses Sebagai : ".$_SESSION["akses_pengguna"]."<hr/>";
?>
</div>