<?php
include('libs/conexao.php');

$user_externo = $_POST['user_externo'];
$title = $_POST['title'];
$tipo_job = $_POST['tipo_job'];
$descricao = $_POST['descricao'];
$data = $_POST['data'];
$status = $_POST['status_do_job'];

$sql = "INSERT INTO tb_jobs (id_user_externo, title_job, tipo_job, descricao, data_entrega, status_job)
    VALUES ('$user_externo', '$title', '$tipo_job', '$descricao', '$data', '$status')";    

if($mysqli->query($sql)){
    header ('Location: ../Views/view_user_externo.php?sucess=sucesso');
}else{
    header ('Location: ../Views/view_error.php');
}