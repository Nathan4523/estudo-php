<?php 

/*
*pdo possui 3 parametro
* primeiro voce define o local e o nome do banco
* segundo o nome do usuario
* terceiro a senha do usuario 
*/ 

try{
    $conn = new \PDO ("mysql:host=localhost;dbname=test_oo", "root", "root");

}catch(\PDOException $e){
    echo "Error: ".$e->getCode();
}