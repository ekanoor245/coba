<?php
$nomor=array(1,2,3);

echo "Nomor :  ".$nomor[0]."<br/>"; 
echo "Nama Barang : ".$barang=$_POST["barang1"]."<br/>"; 
echo "Jumlah :  ".$jumlah1=$_POST["jumlah1"]."<br/>";
echo "Harga Barang :  ".$harga1=$_POST["harga1"]."<br/>";
echo "Total :  "; $total1 = $jumlah1*$harga1; echo $total1."<br/><br/>";

echo "Nomor : ".$nomor[1]."<br/>";
echo "Nama Barang : ".$barang2=$_POST["barang2"]."<br/>"; 
echo "Jumlah  :  ".$jumlah2=$_POST["jumlah2"]."<br/>";
echo "Harga Barang : ".$harga2=$_POST["harga2"]."<br/>";
echo "Total :  "; $total2 = $jumlah2*$harga2; echo $total2."<br/><br/>";

echo "Nomor : ".$nomor[2]."<br/>"; 
echo "Nama Barang  : ".$barang3=$_POST["barang3"]."<br/>"; 
echo "Jumlah :  ".$jumlah3=$_POST["jumlah3"]."<br/>"; 
echo "Harga Barang : ".$harga3=$_POST["harga3"]."<br/>"; 
echo "Total :  "; $total3 =$jumlah3*$harga3; echo $total3."<br/><br/>";
echo "Jumlah Total
 : ";
 
				$total= array ($total1+$total2+$total3);
				echo $total; 
?>