<?php
	@session_start();
	$username = isset($_SESSION["username"]) ? $_SESSION["username"] : "";
	$nama_pengguna = isset($_SESSION["nama_pengguna"]) ? $_SESSION["nama_pengguna"] : "";
	
	$akses_pengguna = isset($_SESSION["akses_pengguna"]) ? $_SESSION["akses_pengguna"] : "Penyewa";
	if($akses_pengguna == "Administrasi"){
		$akses = "Operator Perpustakaan";
	}else{
		$akses = "Penyewa";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Perpustakaan Buku Online</title>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<div id="wrap">
			<div id="header">
				<h1>Perpustakaan Online "Masyoudi"</h1>
			</div>
			<div style="clear:both"></div>
			<div id="tengah">
				<div id="info_pengguna">
					<?php
						if(!empty($username)){
							echo "Login Sebagai : $username ,
								  Nama Lengkap  : $akses_pengguna <br/>
								  Akses Sebagai : $akses , ";
							$tampil_login = "display:none";
							$tampil_logout = "";
						}else{
							$tampil_login = "";
							$tampil_logout = "display:none";
						}
					?>
					Tanggal : <?php echo date("d F Y") ?>
				</div>
				<div id="menu">
					<div id="menu_konten">
						<ul>
							<?php
								$tampil = "";
								if($akses_pengguna == "Penyewa"){
									$tampil = "display:none";
								}
							?>
							<li><a style="<?php echo $tampil; ?>" href="showing.php">Kelola Barang</a> </li>
							<li><a style="<?php echo $tampil; ?>" href="pengguna_isi.php">Input Pengguna</a></li>
							<li><a href="available.php">Buku Tersedia</a></li>
							<li><a href="borrow.php">Keranjang Peminjaman</a></li>
							<li><a href="borrow_book.php">Transaksi Peminjaman</a></li>
							<li><a style="<?php echo $tampil_login; ?>" href="login.php">Login</a> </li>
							<li><a style="<?php echo $tampil_logout; ?>" href="logout.php">Logout</a> </li>
						</ul>
					</div>
				</div>
			<div id="konten">
			