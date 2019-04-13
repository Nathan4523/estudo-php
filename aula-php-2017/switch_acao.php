<?php 

$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];
$result = ($n1 + $n2 + $n3) / 3;

switch ($result) {
	case '0':
	echo "o aluno e burro";
	break;

	case '5.9':
	echo "o aluno esta retido";
	break;

	case '6':
	echo "o aluno passou";
	break;

	case '10':
	echo "o aluno é muito inteligente";
	break;
	
	default:
	echo "erro ao descobrir a media";
	break;
}


?>