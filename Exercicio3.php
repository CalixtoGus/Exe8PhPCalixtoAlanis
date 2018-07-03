<!DOCTYPE html>
<html>
<head>
	<title>exercicio 3</title>
	<meta charset="utf-8">
</head>
<body>
<h1>Exercício 3</h1>
<form method="post" action="#">
<label for="n1">Fala uma tabuada pra descobrir:</label>
<input type="numb" id="multp" name="multp" /><br />
<input type="submit" value="Enviar" name="submit" />
</form>

<?php
 

$b = array(0 => '1' , 1 => '2' , 2 => '3' , 3 => '4' , 4 => '5' , 5 => '6' , 6 => '7' , 7 => '8' , 8 => '9' , 9 => '10');
$c =  $_POST["multp"];


foreach ($b as $value) {
	$op=$value*$c;
 	echo "$c".'*'."$value".'='."$op"."</br>";
}


?>
</body>
</html>