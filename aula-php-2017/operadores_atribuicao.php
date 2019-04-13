<?php

	//$a = $a + $b ----> $a += $b;


	//Aplicar 10% de desconto ao preço de um produto
	$preco = $_GET["p"];
	echo "o preço do produto é: R$" .$preco;

	$preco += ($preco*10/100);

	echo "<br> o novo preco com aumento é R$". $preco;

	$preco -= ($preco*10/100);
	echo "<br> o novo preco com deconto é R$". $preco;

	?>
