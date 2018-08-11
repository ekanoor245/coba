<table border="1" cellpadding="15" cellspacing="0"><tr><td>
<h1>Data Barang</h1> <hr/>
<form action="prosesformtugas5.php" method="post">
Nama Barang <br/>
<input type="text" name="nama"/><br/>
Jenis <br/>
<select name="jenis">
	<option value="PC">PC Komputer</option>
	<option value="LP">Laptop</option>
	<option value="PR">Peripheral</option>
	<option value="SP">Smart Phone</option>
	<option value="IP">I-Pad Komputer</option>
</select><br/><br/>

Nomor Seri <br/>
<input type="text" name="nomor"/><br/>
Merk <br/>
<input type="text" name="merk"/><br/>
Negara Pembuat <br/>
<input type="text" name="negara"/><br>
<fieldset><legend>Tanggal Pembuatan</legend>
Tanggal
<select name="tanggal">
	<?php
		for($hari=1; $hari<=31; $hari++){
			$htgl = str_pad($hari,2,"0",STR_PAD_LEFT);
			echo "<option value='$htgl'>$htgl</option>";
		}
	?>
</select>
Bulan
<select name="bulan">
	<?php
		for($bulan=1; $bulan<=12; $bulan++){
			$bln = str_pad($bulan,2,"0",STR_PAD_LEFT);
			echo "<option value='$bln'>$bln</option>";
		}
	?>
</select>
Tahun
<select name="tahun">
	<?php
		$tahun_sekarang = date ("Y");
		$tahun_awal = $tahun_sekarang-30;
		$tahun_akhir = $tahun_sekarang+1;
		for($tahun=$tahun_akhir; $tahun>=$tahun_awal; $tahun--){
			echo "<option value='$tahun'>$tahun</option>";
		}
	?>
</select>
</fieldset>
Harga Barang <br/>
Rp. <input type="text" name="harga"/><br/>
Jumlah Stok <br/>
<input type="text" name="jumlah"/><hr/>

	<input type="submit" value="SUBMIT"/>
	<input type="reset" value="RESET"/>
</form>
</td>
</tr>
</table>