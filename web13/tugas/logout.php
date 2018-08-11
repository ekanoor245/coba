<?php
	session_start();
	session_destroy();
	echo "Anda Telah Logout <br/>";
	echo "<a href='login.php'>Login Kembali</a>";
?>