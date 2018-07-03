<!DOCTYPE html>
<html>
<head>
	<title>exercicio 5</title>
	<meta charset="utf-8">
</head>
<body>

<h1>Exercício 5</h1>

<form method="post" action="#">
<label for="n1">Qual mês você deseja descobrir:</label>
<input type="numb" id="n1" name="n1" /><br />
<input type="submit" value="Enviar" name="submit" />
</form>


<?php
	$a =  $_POST["n1"];
   $b = array(
      '01' => 'Janeiro',
      '02' => 'Fevereiro',
      '03' => 'Março',
      '04' => 'Abril',
      '05' => 'Maio',
      '06' => 'Junho',
      '07' => 'Julho',
      '08' => 'Agosto',
      '09' => 'Setembro',
      '10' => 'Outubro',
      '11' => 'Novembro',
      '12' => 'Dezembro'
   );
echo "<br>";
   switch ($a) {
    case "1":
        echo "$b[01]";
        break;
    case "2":
        echo "$b[02]";
        break;
    case "3":
        echo "$b[03]";
        break;
    case "4":
        echo "$b[04]";
        break;
    case "5":
        echo "$b[05]";
        break;
    case "6":
        echo "$b[06]";
        break;
    case "7":
        echo "$b[07]";
        break;
    case "8":
        echo "$b[08]";
        break;
    case "9":
        echo "$b[09]";
        break;
    case "10":
        echo "$b[10]";
        break;
    case "11":
        echo "$b[11]";
        break;
    case "12":
        echo "$b[12]";
        break;

    default:
        echo "Esse mês não existe";
}


?>

</body>
</html>