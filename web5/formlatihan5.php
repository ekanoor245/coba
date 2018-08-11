<h1>REGISTRASI MAHASISWA</h1> 
<form action="prosesformlatihan5.php" method="post">
	Nomor Registrasi <br/> 
	<input type="text" name="reg" maxlength="4" size="10" /> <br/>
	Tahun Angkatan <br/> 
	<input type="text" name="angkatan" maxlength="4" size="10" /> <br/> 
	Pilihan Jurusan <br/> 
	<select name="jurusan"> 	
		<option value="">Pilih Jurusan</option> 	
		<option value="561">Sistem Informasi</option> 	
		<option value="541">Teknik Informatika</option> 	
		<option value="321">Manajemen Informatika</option> 	
		<option value="341">Teknik Komputer</option> 
		<option value="351">Komputer Akuntansi</option> 
	</select> <br/>
	Nama Lengkap <br/> 
		<input type="text" name="nama" size="50" /> <br/> 
	Jumlah SKS diambil <br/> 
		<input type="text" name="sks" size="10" /> <hr/> 
	<input type="submit" name="submit" value="SUBMIT" /> 
	<input type="reset" value="RESET" /> 
</form>