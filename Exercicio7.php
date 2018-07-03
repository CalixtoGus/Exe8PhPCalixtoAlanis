<!DOCTYPE html>
<html>
<head>
	<title>exercicio 7</title>
	<meta charset="utf-8">
</head>
<body>

<h1>Exercício 7</h1>


<?php

			$nome = array(0 => 'Alanis' , 1 => 'Geovanna' , 2 => 'Sara' , 3 => 'Letícia' , 4 => 'Amanda' , 5 => 'Andressa' , 6 => 'Juliana' , 7 => 'Yuri' , 8 => 'Nichollas' , 9 => 'Lucas');

			$cidade = array(0 => 'Santos' , 1 => 'Praia Grande' , 2 => 'Praia Grande' , 3 => 'Mongaguá' , 4 => 'Itanhaem' , 5 => 'Santos' , 6 => 'Santos' , 7 => 'Rio de Janeiro' , 8 => 'São Vicente' , 9 => 'São Paulo');

			$idade = array(0 => '16' , 1 => '16' , 2 => '15' , 3 => '15' , 4 => '16' , 5 => '16' , 6 => '10' , 7 => '18' , 8 => '5' , 9 => '20');

			$sexo = array(0 => 'F' , 1 => 'F' , 2 => 'F' , 3 => 'F' , 4 => 'F' , 5 => 'F' , 6 => 'F' , 7 => 'M' , 8 => 'M' , 9 => 'M');
	
?>

<div id="box">

<h1>Nome e Idade</h1>

<?php
 	echo $nome[0]. " tem " .$idade[0]. "anos.";
 	echo "<br>";
 	echo $nome[1]. " tem " .$idade[1]. "anos.";
 	echo "<br>";
 	echo $nome[2]. " tem " .$idade[2]. "anos.";
 	echo "<br>";
 	echo $nome[3]. " tem " .$idade[3]. "anos.";
 	echo "<br>";
 	echo $nome[4]. " tem " .$idade[4]. "anos.";
 	echo "<br>";
	echo $nome[5]. " tem " .$idade[5]. "anos.";
 	echo "<br>";
 	echo $nome[6]. " tem " .$idade[6]. "anos.";
 	echo "<br>";
 	echo $nome[7]. " tem " .$idade[7]. "anos."; 
 	echo "<br>";
 	echo $nome[8]. " tem " .$idade[8]. "anos.";
 	echo "<br>";
 	echo $nome[9]. " tem " .$idade[9]. "anos.";
 	echo "<br>";


echo "<h1>Pessoas que moram em Santos</h1>";
	for ($i=0; $i < 9 ; $i++) { 
			if ($cidade[$i] == 'Santos') {
				echo $nome[$i]." é de ".$cidade[$i].'.</br>';
			}
		}

echo "<h1>Pessoas com mais de 18 anos</h1>";
	for ($x=0; $x < 9 ; $x++) { 
			if ($idade[$x] >= '18') {
				echo $nome[$x]." tem ".$idade[$x].' anos.</br>';
			}
		}

echo "<h1>Pessoas do sexo masculino</h1>";

	$contM = 0;
	for ($y=0; $y <= 9 ; $y++) { 
			if ($sexo[$y] == 'M') {
				$contM++;
				echo $nome[$y]." é do sexo ".$sexo[$y].'.</br>';
			}
		}
		echo "São " .$contM. " pessoas do sexo masculino.";

?>

</body>
</html>