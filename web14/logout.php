<?php
	session_start();
	include_once ('template_atas.php');
	session_destroy();
	echo "Anda Sudah Logout <br/>";
	include_once ('template_bawah.php');
?>