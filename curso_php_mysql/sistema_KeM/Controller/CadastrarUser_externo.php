<?php 
include('libs/conexao.php');

//atributos
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];

$sql_insert = "INSERT INTO tb_user_externo (nome, sobrenome, email, login, senha) VALUES
('$nome', '$sobrenome', '$email', '$login', '$senha')";

if($mysqli->query($sql_insert)){
    header("Location: ../Views/view_criar_usuario_externo.php?sucess=sucesso");
}else{
    header('Location: ../Views/view_error.php');
}