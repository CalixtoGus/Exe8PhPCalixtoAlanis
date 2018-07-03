<!DOCTYPE html>
<html>
<head>
	<title>exercicio 2</title>
	<meta charset="utf-8">
</head>
<body>

<h1>Exercício 2</h1>


<?php
 

$a = array(0 => '-1' , 1 => '-2' , 2 => '-3' , 3 => '-4' , 4 => '-5' , 5 => '6' , 6 => '7' , 7 => '8' , 8 => '9' , 9 => '10');
echo 'Numeros Negativos :';
	echo "</br>";
	foreach ($a as $valor) {
	 	if ($valor<0) {
	 		echo "$valor</br>";
	 	}
}

echo "</br>";

echo 'Numeros Positivos :';
	echo "</br>";
	foreach ($a as $value ) {
	 	if ($value>0) {
	 		echo "$value</br>";
	 	}
}
echo "</br>";
echo "</br>";


for ($i = 0; $i < count($a); $i++){
    if ($a[$i] % 2 == 0)
        echo "O Número  $a[$i] é par. <br/>";
    else
        echo "O Número $a[$i] é impar. <br/>";
}

?>

</body>
</html>