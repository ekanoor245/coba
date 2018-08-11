<?php
$nomor=array(1,2,3);

echo "Nomor :  ".$nomor[0]."<br/>"; 
echo "Nama Barang : ".$barang=$_POST["barang1"]."<br/>"; 
echo "Jumlah :  ".$jumlah1=$_POST["jumlah1"]."<br/>";
echo "Harga Barang :  ".$harga1=$_POST["harga1"]."<br/>";
echo "Total :  "; 

$total1 = array ("$jumlah1)","$harga1");
foreach ($total1 as $jml => $ttl){
	$tot=$ttl*$ttl;
	
	echo $tot;
}

?>