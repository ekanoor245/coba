<?php
	session_start();
	if(!isset($_SESSION["nama_pengguna"])){
		echo "Sesi Telah Habis! <br/>
			  <a href='login.php'>Login</a>";
		exit;
	}
	echo "<b>SELAMAT DATANG </b><br/>";
	echo "Username : ".$_SESSION["nama_pengguna"]."<br/>";
	echo "Akses Sebagai : ".$_SESSION["akses_pengguna"]."<br/>";
?>
<hr/>
<div id="menu">
	<h3>.: Menu</h3>
	<a href="menu_1.php">Menu 1</a> <br/>
	<a href="menu_2.php">Menu 2</a> <br/>
	<a href="logout.php">Logout</a>
</div>