<!DOCTYPE html>
<html>
<head>
	<title>exercicio1</title>
	<meta charset="utf-8">
</head>
<body>
<link rel="stylesheet" type="text/css" href="">


<h1>Exercício 1</h1>

<?php


			$nome = array(0 => 'Alanis' , 1 => 'Geovanna' , 2 => 'Sara' , 3 => 'Letícia' , 4 => 'Amanda' , 5 => 'Andressa' , 6 => 'Juliana' , 7 => 'Yuri' , 8 => 'Nichollas' , 9 => 'Lucas');

			$nota = array(0 => '8' , 1 => '3' , 2 => '6' , 3 => '5' , 4 => '9' , 5 => '10' , 6 => '7' , 7 => '4' , 8 => '8' , 9 => '9');

	$media=($nota[0]+$nota[1]+$nota[2]+$nota[3]+$nota[4]+$nota[5]+$nota[6]+$nota[7]+$nota[8]+$nota[9])/10; 
?>

<div id="box">

<?php
 	echo $nome[0]. ", sua nota é: " .$nota[0];
 	echo "<br>";
 	echo $nome[1]. ", sua nota é: " .$nota[1];
 	echo "<br>";
 	echo $nome[2]. ", sua nota é: " .$nota[2]; 
 	echo "<br>";
 	echo $nome[3]. ", sua nota é: " .$nota[3];
 	echo "<br>";
 	echo $nome[4]. ", sua nota é: " .$nota[4]; 
 	echo "<br>";
 	echo $nome[5]. ", sua nota é: " .$nota[5]; 
 	echo "<br>";
 	echo $nome[6]. ", sua nota é: " .$nota[6]; 
 	echo "<br>";
 	echo $nome[7]. ", sua nota é: " .$nota[7]; 
 	echo "<br>";
 	echo $nome[8]. ", sua nota é: " .$nota[8]; 
 	echo "<br>";
 	echo $nome[9]. ", sua nota é: " .$nota[9]; 
 	echo "<br>";
 	echo "<br>";
 	echo "<br>";

echo 'A média geral é  '."$media";
echo "</br>";
echo 'A maior nota é   ';
echo max($nota);

?>

</div>
</body>
</html>