<?php
try{
    $conn = new \PDO("mysql:host=localhost;dbname=test_oo","root","root");
    $query = "select * from tb_cliente";
    
    $stmt = $conn->query($query);
    $list = $stmt->fetchAll(PDO::FETCH_OBJ);
    echo $list[0]->nome;
    // print_r($list);
}catch(\PDOException $e){
    echo "Error! Message:".$e->getMessage()." Code:".$e->getCode();
}
