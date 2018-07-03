<!DOCTYPE html>
<html>
<head>
	<title>exercicio 8</title>
	<meta charset="utf-8">
</head>
<body>

<h1>Exercício 8</h1>

<?php


			$carro = array(0 => 'Uno' , 1 => 'Fiesta' , 2 => 'Doblo' , 3 => 'Celta' , 4 => 'March' , 5 => 'Corsa' , 6 => 'Ranger' , 7 => 'Trail Blazer' , 8 => 'Ecosport' , 9 => 'Tucson');

			$marca = array(0 => 'Fiat' , 1 => 'Ford' , 2 => 'Fiat' , 3 => 'GM' , 4 => 'Nissan' , 5 => 'GM' , 6 => 'Ford' , 7 => 'GM' , 8 => 'Ford' , 9 => 'Hyundai');

			$cor = array(0 => 'prata' , 1 => 'preto' , 2 => 'verde' , 3 => 'preto' , 4 => 'prata' , 5 => 'branco' , 6 => 'prata' , 7 => 'branco' , 8 => 'preto' , 9 => 'vinho');

			$qtd = array(0 => '4' , 1 => '2' , 2 => '4' , 3 => '2' , 4 => '2' , 5 => '2' , 6 => '4' , 7 => '4' , 8 => '4' , 9 => '4');

			$ano = array(0 => '2014' , 1 => '2015' , 2 => '2013' , 3 => '2012' , 4 => '2015' , 5 => '2010' , 6 => '2012' , 7 => '2014' , 8 => '2013' , 9 => '2012');
?>

<div id="box">

<?php

echo "<h1>Todos os Dados:</h1>";

 	echo "O carro " .$carro[0]. ", da marca " .$marca[0]. ", de cor " .$cor[0]. ", com " .$qtd[0]. " portas, é do ano de " .$ano[0];
 	echo "<br>";
 	echo "O carro " .$carro[1]. ", da marca " .$marca[1]. ", de cor " .$cor[1]. ", com " .$qtd[1]. " portas, é do ano de " .$ano[1];
 	echo "<br>";
 	echo "O carro " .$carro[2]. ", da marca " .$marca[2]. ", de cor " .$cor[2]. ", com " .$qtd[2]. " portas, é do ano de " .$ano[2];
 	echo "<br>"; 
 	echo "O carro " .$carro[3]. ", da marca " .$marca[3]. ", de cor " .$cor[3]. ", com " .$qtd[3]. " portas, é do ano de " .$ano[3];
 	echo "<br>";
 	echo "O carro " .$carro[4]. ", da marca " .$marca[4]. ", de cor " .$cor[4]. ", com " .$qtd[4]. " portas, é do ano de " .$ano[4];
 	echo "<br>";
 	echo "O carro " .$carro[5]. ", da marca " .$marca[5]. ", de cor " .$cor[5]. ", com " .$qtd[5]. " portas, é do ano de " .$ano[5];
 	echo "<br>";
 	echo "O carro " .$carro[6]. ", da marca " .$marca[6]. ", de cor " .$cor[6]. ", com " .$qtd[6]. " portas, é do ano de " .$ano[6];
 	echo "<br>";
 	echo "O carro " .$carro[7]. ", da marca " .$marca[7]. ", de cor " .$cor[7]. ", com " .$qtd[7]. " portas, é do ano de " .$ano[7];
 	echo "<br>";
 	echo "O carro " .$carro[8]. ", da marca " .$marca[8]. ", de cor " .$cor[8]. ", com " .$qtd[8]. " portas, é do ano de " .$ano[8];
 	echo "<br>";
 	echo "O carro " .$carro[9]. ", da marca " .$marca[9]. ", de cor " .$cor[9]. ", com " .$qtd[9]. " portas, é do ano de " .$ano[9];
 	
 	echo "<br>";
 	echo "<br>";
 	echo "<br>";

echo "<h1>Carros Pratas:</h1>";

	for ($i=0; $i < 9 ; $i++) { 
		if ($cor[$i] == 'prata') {
			echo $carro[$i]." é ".$cor[$i].'</br>';
		}
	}

echo "<h1>Carros da Ford:</h1>";

	for ($x=0; $x < 9 ; $x++) { 
		if ($marca[$x] == 'Ford') {
			echo $carro[$x]." é da ".$marca[$x].'</br>';
		}
	}

echo "<h1>Ano de Fabricação após 2013:</h1>";

	for ($y=0; $y < 9 ; $y++) { 
		if ($ano[$y] >= '2013') {
			echo $carro[$y]." é do ano de ".$ano[$y].'</br>';
		}
	}

?>

</div>
</body>
</html>