<?php 

    //atributos da conexao
    $server = "localhost";
    $user = "root";
    $pass = "root";
    $base = "lojinha_do_taxista";

    //minha conexao
    //o @ não exibe o erro do php que ele monta
    @$mysqli = new mysqli($server, $user, $pass, $base);

    //tratamento de erro
    if(mysqli_connect_errno()){
        echo "Falha na conexão com o banco de dados:( ". $mysqli->connect_errno.") ". $mysqli->connect_error;
        exit; //parar o codigo
    }
?>