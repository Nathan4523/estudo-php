<?php 

include('conexao.php');

$query = "SELECT * FROM tb_cliente";
$stmt = $conn->query($query);

$resultado = $stmt->fetchAll();
echo $resultado[0]['nome'];