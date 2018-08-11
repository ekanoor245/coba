<?php
	$kode  		= $_POST['kode'];
	$judul 		= $_POST['judul'];
	$pengarang  = $_POST['pengarang'];
	$penerbit  	= $_POST['penerbit'];
	$stok  		= $_POST['stok'];

	$photo	 = $_FILES['foto']['name'];
	$tmp_name = $_FILES['foto']['tmp_name'];
	$size	 = $_FILES['foto']['size'];
	$type	 = $_FILES['foto']['type'];
	
	$max_size = 1500000;
	$allow_type = array("image/jpeg","image/png","image/pjpeg");
	
	$dir_photo = "image";
	
	if(!is_dir($dir_photo))
		mkdir($dir_photo);
	$destination_file_photo = $dir_photo."/".$photo;
	
	$dir_thumb = "thumb";
	if(!is_dir($dir_thumb))
		mkdir($dir_thumb);
	$destination_file_thumb = $dir_thumb."/t_".$photo;
	
	$data_valid="YES";
	
	if ($size > 0){
		if($size > $max_size){
			echo "Ukuran File Terlalu Besar <br/>";
			$data_valid ="NO";
		}
		if(!in_array($type, $allow_type)){
			echo "Tipe File Tidak Dikenal <br/>";
			$data_valid="NO";
		}
	}

	if (strlen(trim($judul))==0) {
		echo "Judul Buku Belum Diisi!<br />";
		$data_valid = "NO";
	}
	if (strlen(trim($pengarang))==0) {
		echo "Nama Pengarang Belum Diisi! <br />";
		$data_valid = "NO";
	}
	if (strlen(trim($penerbit))==0 ) {
		echo "Penerbit Belum Diisi! <br />";
		$data_valid = "NO";
	}
	if (strlen(trim($stok))==0 ) {
		echo "Jumlah Stok Belum Diisi! <br />";
		$data_valid = "NO";
	}
	if ($data_valid == "NO") {
		echo "Masih Ada Kesalahan, silahkan perbaiki! </br>";
		echo "<input type='button' value='Kembali'
			onClick='self.history.back()'> ";
		exit;
	}
	
	include "connect.php";
	
	$sql = "INSERT INTO buku
		(kode,judul,pengarang,penerbit,stok,foto)
		 VALUES
		('$kode','$judul','$pengarang','$penerbit','$stok','$photo')";
	$hasil = mysqli_query($connect, $sql);
	
	if (!$hasil) {
		echo "Gagal Menyimpan, Silahkan Ulangi! <br /> ";
		echo mysqli_error($connect);
		echo "<br/> <input type='button' value='Kembali'
			onClick='self.history.back()'>";
	exit;
	} else {
		echo "Simpan data buku berhasil" ;
	}
	
	if($size > 0){
		if(!move_uploaded_file($tmp_name, $destination_file_photo)){
			echo "Gagal Upload Gambar...<br/>";
			echo "<a href='appear.php'>Daftar Buku</a>";
			exit;
		}
		else{
			create_thumbnail($destination_file_photo, $destination_file_thumb);
		}
	}
	
	echo "<br/>File Telah Di Upload. <br/>";
	
	function create_thumbnail($file_src,$file_dst){
		//hapus jika thumbnail sebeumnya sudah ada
		list($w_src, $h_src, $type) = getImageSize($file_src);
		
		switch($type){
			case 1:		// gif -> jpg
				$img_src = imagecreatefromgif($file_src);
				break;
			case 2:		// jpeg -> jpg
				$img_src = imagecreatefromjpeg($file_src);
				break;
			case 3:		// png -> jpg
				$img_src = imagecreatefrompng($file_src);
				break;
		}
		
		$thumb = 100; //max size untuk thumb
		if($w_src > $h_src){
			$w_dst = $thumb; //landscape
			$h_dst = round($thumb / $w_src * $h_src);
		}
		else{
			$w_dst = round($thumb / $h_src * $w_src); //portrait
			$h_dst = $thumb;
		}
		
		$img_dst = imagecreatetruecolor($w_dst, $h_dst); //resample
		
		imagecopyresampled($img_dst, $img_src, 0, 0, 0, 0,
							$w_dst, $h_dst, $w_src, $h_src);
		imagejpeg($img_dst, $file_dst); // simpan thumbnail
		//bersihkan memori
		imagedestroy($img_src);
		imagedestroy($img_dst);
	}
?>
<hr/>
<a href="showing.php">Daftar Buku</a>