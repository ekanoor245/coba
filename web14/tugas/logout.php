<?php
	session_start();
	include_once('template_on_top.php');
	session_destroy();
	echo "Anda Telah Logout <br/>";
	include_once('template_on_bottom.php');
?>