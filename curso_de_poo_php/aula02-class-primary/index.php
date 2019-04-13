<!DOCTYPE html>
<html>
<head>
	<title>Aula 02</title>
</head>
<body>
<?php 

	require_once 'Caneta.php'; 

	$c1 = new Caneta;
	$c1->cor = "azul";
	$c1->ponta = 0.5;
	$c1->modelo = "Bic";
	$c1->destampar();
	$c1->rabiscar();
	// var_dump($c1);

	echo "<br><br>";
	$c2 = new Caneta;
	$c2->cor = "Preto";
	$c2->ponta = 0.6;
	$c2->modelo = "bIC";
	$c2->tampar();
	$c2->rabiscar();

	// require_once 'Mouse.php';
	// echo "<br><br>";

	// $mouse = new Mouse;
	// $mouse->cor = "Preto com vermelho";
	// $mouse->tamanho = "Medio";
	// $mouse->tipo = "Gamer";
	// $mouse->jogo = false;
	// $mouse->marca = "Multilase";
	// $mouse->atual = "novo";
	// $mouse->status();
	
 ?>
</body>
</html>