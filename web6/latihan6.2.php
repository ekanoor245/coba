<form action="proses_latihan6.2.php" method="post">
	<h1>PEMBELIAN</h1>
	Tanggal Beli <br/>
	<select name="tgl">
		<option value="">Tanggal</option>
		<?php for($tgl=1; $tgl<=31; $tgl++){
				echo "<option value='$tgl'>$tgl</option>";
			  }
		?>
	</select>
	<select name="bln">
		<option value="">Bulan</option>
		<?php for($bln=1; $bln<=12; $bln++){
				echo "<option value='$bln'>$bln</option>";
			  }
		?>
	</select>
	<select name="thn">
		<option value="">Tahun</option>
		<?php for($thn=2016; $thn>=2000; $thn--){
				echo "<option value='$thn'>$thn</option>";
			  }
		?>
	</select> <br/>
	Nama Barang <br/>
	<select name="nama_barang">
		<option value="">Pilih Barang</option>
		<option value="Baju">Baju</option>
		<option value="Celana">Celana</option>
		<option value="Sepatu">Sepatu</option>
		<option value="Kaos">Kaos</option>
	</select> <br/>
	Jumlah Beli <br/>
	<input  type="text" name="jumlah" /> <hr/>
	<input type="submit" value="SUBMIT" name="submit" />
	<input type="reset" value="RESET" />
</form>