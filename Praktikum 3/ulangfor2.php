<?php
	$awal=$_POST["awal"];
	$akhir=$_POST["akhir"];
	$berhenti=$_POST["henti"];
	for ($i=$awal; $i<=$akhir; $i++){
		echo "<br/> for ke $i.";
		if($i == $berhenti){
			break;
		}
	}
?>