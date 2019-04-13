<?php 
include('libs/conexao.php');

//atributos
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$tipoDaArea = $_POST['tipo_area'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];

$sql_insert = "INSERT INTO tb_user_interno (nome, sobrenome, tipo_area, email, login, senha) VALUES 
('$nome', '$sobrenome', '$tipoDaArea', '$email', '$login', '$senha')";

if($mysqli->query($sql_insert)){
    header("Location: ../Views/view_criar_usuario_interno.php?sucess=sucesso");
}else{
    header('Location: ../Views/view_error.php');
}