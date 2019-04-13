<?php

// $a = $_GET["a"];
// $b = $_GET["b"];
// $tipo = $_GET["o"];
//
// $r = ($tipo == "s") ? $a + $b : $a - $b;
//
// echo $r;

//mostrar ao aluno a sua situação de acordo com a sua media

$n1 = $_GET["a"];
$n2 = $_GET["b"];
$n3 = $_GET["c"];
$n4 = $_GET["d"];

$result = ($n1 + $n2 + $n3 + $n4) / 4;

$mostrar = $result > 6 ? "aluno foi aprovado" : "aluno esta retido";

echo $mostrar;


?>
