<div style="background:cyan">
<?php
		session_start();
		echo "<h3>.: Selamat Datang :. </h3><hr/>";
		echo "Username : ".$_SESSION["nama_pengguna"]."<br/>";
		echo " Akses Sebagai : ".$_SESSION["akses_pengguna"]."<hr/>";
		echo "<h1> Menu Dua </h1>";
?>
</div>