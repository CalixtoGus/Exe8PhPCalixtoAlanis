<!DOCTYPE html>
<html>
<head>
	<title>exercicio 4</title>
	<meta charset="utf-8">
</head>
<body>
<h1>Exercício 4</h1>
<?php
  $numeros_a = array(2,4,6,8,10,12,14,16,18,20);
  $numeros_b = array(1,3,5,7,9,11,13,15,17,19);

  for ($i=0; $i < 10; $i++) {
    echo $numeros_a[$i]." * ".$numeros_b[$i]." = ". $numeros_a[$i]*$numeros_b[$i]."</br>";
  }

?>

</body>
</html>