<table border="5" cellspacing="0">
<h2>TRANSAKSI</h2>
<form action="prosestugas4.php" method="post">
<pre>
<?php
for($a=1; $a<=3; $a++){
echo 
"
Nomor 		: $a <br/>
Nama Barang	: <input type='text' name='brg[$a]'/> <br/>
Jumlah 		: <input type='text' name='jml[$a]' />  <br/>
Harga Barang	: <input type='text' name='hrg[$a]' /> <hr/>";
}	
?>
</pre>
<input type="submit" value="HITUNG" />
<input type="reset" value="BATAL" />
</form>
</table>