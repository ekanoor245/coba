<h2>HITUNG BILANGAN</h2>
<form action="#" method="post">
	Bilangan 1 : <input type="text" name="bill" /> <br/> <br/>
	Bilangan 2 : <input type="text" name="bil2" /> <br/> <br/>
	<input type="submit" name="hitung" value="+" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="submit" name="hitung" value="-" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="submit" name="hitung" value="*" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="submit" name="hitung" value="/" /> 
</form>
<?php
	function jumlah($bill, $bil2)
	{
	$jumlah = $bill + $bil2 ;
	return $jumlah ;
	}
	function kurang($bill, $bil2)
	{
	$kurang = $bill - $bil2 ;
	return $kurang ;
	}
	function kali($bill, $bil2)
	{
	$kali = $bill * $bil2 ;
	return $kali ;
	}
	function bagi($bill, $bil2)
	{
	$bagi = $bill / $bil2 ;
	return $bagi ;
	}
	
	if($_POST["hitung"]=="+")
	{
	$hasil = jumlah( $_POST["bill"] , $_POST["bil2"] ) ;
	echo "Hasil jumlah : $hasil ";
	}
	if($_POST["hitung"]=="-")
	{
	$hasil = kurang( $_POST["bill"] , $_POST["bil2"] ) ;
	echo "Hasil kurang : $hasil " ;
	}
	if($_POST["hitung"]=="*")
	{
	$hasil = kali( $_POST["bill"] , $_POST["bil2"] ) ;
	echo "Hasil kali : $hasil " ;
	}
	if($_POST["hitung"]=="/")
	{
	$hasil = bagi( $_POST["bill"] , $_POST["bil2"] ) ;
	echo "Hasil bagi : $hasil " ;
	}

?>