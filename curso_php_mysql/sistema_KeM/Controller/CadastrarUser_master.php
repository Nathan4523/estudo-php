<?php 
include('libs/conexao.php');

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "INSERT INTO tb_user_master (nome, sobrenome, email, login, senha) VALUES ('$nome', '$sobrenome', '$email', '$login', '$senha')";
$query = $mysqli->query($sql);

if($query){
    header("Location: ../Views/view_criar_usuario_master.php?sucess=sucesso");
} else{
    header('Location: ../Views/view_error.php');
}

?>