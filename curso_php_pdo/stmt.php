<?php 

include('conexao.php');

$query = "SELECT * FROM tb_cliente where id_cliente=:id";
$stmt = $conn->prepare($query);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();

print_r($stmt->fetchAll());