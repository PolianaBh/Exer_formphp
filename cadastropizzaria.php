<!DOCTYPE html>

<html lang = "pt-br">

      <head>
	           <meta name="author" content="Alessandra Bertini">    
               <meta charset="UTF-8">
	           <title>CARDÁPIO - PIZZARIA</title>
	  </head>
	  
	  

<body>
<?php

$pizza = $_POST ['tipo_pizza'];
$tamanho = $_POST ['tamanho_pizza'];
$refrigerante = $_POST ['tipo_refrigerante'];
$suco = $_POST['tipo_suco'];



echo "PREZADO(A) CLIENTE, CONFIRA OS SEU PEDIDO:<br>";
echo "___________________________________________________<br><br>";

echo 'PIZZA: '. $pizza .'<br><br>';
echo 'TAMANHO DA PIZZA: '. $tamanho .'<br><br>';
echo 'REFRIGERANTE: '. $refrigerante .'<br><br>';
echo "___________________________________________________";

?>
</body>
</html>