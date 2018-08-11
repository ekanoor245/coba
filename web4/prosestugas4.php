<table border="1" cellspacing="0">
<h2>HITUNG TRANSAKSI</h2>
<?php
$brg = $_POST['brg'];
$jml = $_POST['jml'];
$hrg = $_POST['hrg'];
for($a=1; $a<=3; $a++){
$total[$a] = $jml[$a] * $hrg[$a];
echo "
<pre>
Nomor		: $a
Nama Barang	: $brg[$a]
Jumlah		: $jml[$a]
Harga Barang	: $hrg[$a] 
Total		: $total[$a]  <hr/>
</pre>";	
}
$jumtotal = array_sum($total);
echo
"
<pre>
Jumlah Total	: $jumtotal<hr/>
<pre>";	
?>
</table>