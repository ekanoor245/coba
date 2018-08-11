<table border="1" cellpadding="10" cellspacing="0"><tr><td>
<h2> Hasil Konversi Suhu Celcius ke <br/>
Kelvin dan Fahrenheit</h2>
<?php
	$celcius=$_POST["celcius"];
	function kelvin($celcius)
	{
		$kelvin = 273.15;
		$kelvin = $kelvin * $celcius;
		return $kelvin;
	}
	function fahrenheit($celcius)
	{
		$fahrenheit=0;
		$rumus_fahrenheit1 = 32;
		$rumus_fahrenheit2 = 1.8;
		$fahrenheit=$rumus_fahrenheit1 + ($rumus_fahrenheit2 * $celcius);
		return $fahrenheit;
	}
?>
<pre>
Derajat Celcuis		: <?php echo $celcius ?> 
Derajat Kelvin		: <?php echo kelvin($celcius) ?>

Derajat Fahrenheit	: <?php echo fahrenheit($celcius) ?>
</pre>
</td></tr></table>