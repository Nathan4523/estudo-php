<?php 

include('libs/conexao.php');


$selecionado = $_POST['finalizar_select'];

$sql = "UPDATE tb_jobs SET status_job = 'Finalizado' WHERE id = '$selecionado'";

if($mysqli->query($sql)){
    header ('Location: ../Views/view_user_interno.php?sucess=sucesso');
}else{
    header ('Location: ../Views/view_error.php');
}