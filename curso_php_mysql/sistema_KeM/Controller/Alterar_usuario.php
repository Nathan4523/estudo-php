<?php

include('libs/conexao.php');


$master = $_POST['user_master'];
$nome_master = $_POST['nome_master'];
$sobrenome_master = $_POST['sobrenome_master'];
$email_master = $_POST['email_master'];
$login_master = $_POST['login_master'];
$senha_master = $_POST['senha_master'];

$interno = $_POST['user_interno'];
$nome_interno = $_POST['nome_interno'];
$sobrenome_interno = $_POST['sobrenome_interno'];
$email_interno = $_POST['email_interno'];
$login_interno = $_POST['login_interno'];
$senha_interno = $_POST['senha_interno'];

$externo = $_POST['user_externo'];
$nome_externo = $_POST['nome_externo'];
$sobrenome_externo = $_POST['sobrenome_externo'];
$email_externo = $_POST['email_externo'];
$login_externo = $_POST['login_externo'];
$senha_externo = $_POST['senha_externo'];

if($master > 0){
    if($_POST['user_master_itens'] == 'nome'){
        $sql_master = "UPDATE tb_user_master SET nome = '$nome_master' WHERE id = $master";
    }else if($_POST['user_master_itens'] == 'sobrenome'){
        $sql_master = "UPDATE tb_user_master SET sobrenome = '$sobrenome_master' WHERE id = $master";
    }else if($_POST['user_master_itens'] == 'email'){
        $sql_master = "UPDATE tb_user_master SET email = '$email_master' WHERE id = $master";
    }else if($_POST['user_master_itens'] == 'login'){
        $sql_master = "UPDATE tb_user_master SET login = '$login_master' WHERE id = $master";
    }else if($_POST['user_master_itens'] == 'senha'){
        $sql_master = "UPDATE tb_user_master SET senha = '$senha_master' WHERE id = $master";
    }
    $query_master = $mysqli->query($sql_master);
    header ('Location: ../Views/view_alterar_usuario.php?sucess=sucesso');
} else if($interno > 0){
    if($_POST['user_interno_itens'] == 'nome'){
        $sql_interno = "UPDATE tb_user_interno SET nome = '$nome_interno' WHERE id = $interno";
    }else if($_POST['user_interno_itens'] == 'sobrenome'){
        $sql_interno = "UPDATE tb_user_interno SET sobrenome = '$sobrenome_interno' WHERE id = $interno";
    }else if($_POST['user_interno_itens'] == 'email'){
        $sql_interno = "UPDATE tb_user_interno SET email = '$email_interno' WHERE id = $interno";
    }else if($_POST['user_interno_itens'] == 'login'){
        $sql_interno = "UPDATE tb_user_interno SET login = '$login_interno' WHERE id = $interno";
    }else if($_POST['user_interno_itens'] == 'senha'){
        $sql_interno = "UPDATE tb_user_interno SET senha = '$senha_interno' WHERE id = $interno";
    }
    $query_interno = $mysqli->query($sql_interno);
    header ('Location: ../Views/view_alterar_usuario.php?sucess=sucesso');
}else if($externo > 0){
    if($_POST['user_externo_itens'] == 'nome'){
        $sql_externo = "UPDATE tb_user_externo SET nome = '$nome_externo' WHERE id = $externo";    
    }else if($_POST['user_externo_itens'] == 'sobrenome'){
        $sql_externo = "UPDATE tb_user_externo SET sobrenome = '$sobrenome_externo' WHERE id = $externo";    
    }else if($_POST['user_externo_itens'] == 'email'){
        $sql_externo = "UPDATE tb_user_externo SET email = '$email_externo' WHERE id = $externo";    
    }else if($_POST['user_externo_itens'] == 'login'){
        $sql_externo = "UPDATE tb_user_externo SET login = '$login_externo' WHERE id = $externo";    
    }else if($_POST['user_externo_itens'] == 'senha'){
        $sql_externo = "UPDATE tb_user_externo SET senha = '$senha_externo' WHERE id = $externo";    
    }
    $query_externo = $mysqli->query($sql_externo);
    header ('Location: ../Views/view_alterar_usuario.php?sucess=sucesso');
}else{
    header ('Location: ../Views/error.php');
}