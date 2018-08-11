<table border='1'>
		<tr>
			<th>Jumlah Liter</th>
			<th>Premium</th>
			<th>Pertalite</th>
			<th>Pertamax</th> 
			<th>Posisi</th>
		</tr>
<?php
	$awal=$_POST["awal"];
	$akhir=$_POST["akhir"];
	$premium=6700;
	$pertalite=8200;
	$pertamax=9000;
	$posisi="";
	for($i=$awal; $i<=$akhir; $i++){
		$h_premium=$i*$premium;
		$h_pertalite=$i*$pertalite;
		$h_pertamax=$i*$pertamax;
		$sisa_bagi=$i%2;
		if($sisa_bagi == 0){
			$posisi="Genap";
			$css="style='background:lightgray'";
		}else {
			$posisi="Ganjil";
			$css="style='background:lightblue'";
		}
		echo "
		<tr $css>
			<td>$i</td>
			<td>$h_premium</td>
			<td>$h_pertalite</td>
			<td>$h_pertamax</td> 
			<td>$posisi</td>
		</tr>
		";
		
	}
?>
</table>