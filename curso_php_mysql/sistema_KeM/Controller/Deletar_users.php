<?php

include('libs/conexao.php');


$master = $_POST['user_master'];
$interno = $_POST['user_interno'];
$externo = $_POST['user_externo'];

if($master > 0){
    $sql_master = "DELETE FROM tb_user_master WHERE id = $master";
    $query_master = $mysqli->query($sql_master);
    header ('Location: ../Views/view_deletar_user.php?sucess=sucesso');
} else if($interno > 0){
    $sql_interno = "DELETE FROM tb_user_interno WHERE id = $interno";
    $query_interno = $mysqli->query($sql_interno);
    header ('Location: ../Views/view_deletar_user.php?sucess=sucesso');
}else if($externo > 0){
    $sql_externo = "DELETE FROM tb_user_externo WHERE id = $externo";
    $query_externo = $mysqli->query($sql_externo);
    header ('Location: ../Views/view_deletar_user.php?sucess=sucesso');
}else{
    header ('Location: ../Views/view_error.php');
}
