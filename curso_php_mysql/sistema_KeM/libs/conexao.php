<?php 

//atributos
$server = "localhost";
$user = "root";
$pass = "root";
$database = "baseKeM";

//conectando
@$mysqli = new mysqli($server, $user, $pass, $database);

if(mysqli_connect_errno()){
    echo "Falha na conexão com o banco de dados:( ". $mysqli->connect_errno.") ". $mysqli->connect_error;
    exit;
}
