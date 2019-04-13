<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Dados enviado</h1>

	<?php 
		$nome = $_POST["nome"];
		$idade = $_POST["idade"];
		$cidade = $_POST['cidade']; 

		$idade_final = ($idade > 18) ? "maior de idade" : "menor de idade";

		?>

		<p>O nome do usuario é <?= $nome ?> e tem <?= $idade?> anos logo ele é <?= $idade_final ?>. </p>

		<p>Logo <?= $nome?> mora em <?=$cidade?></p>

</body>
</html>


