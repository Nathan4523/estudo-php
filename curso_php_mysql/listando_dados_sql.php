<?php 
include('conexao.php');

//crio uma variavel recebendo o codigo do sql
 $sql = "SELECT * FROM tb_cliente";

 //crio uma variavel recebendo e executando a query com o banco conectado
 $query = $mysqli->query($sql);

//listando todos os meus dados
//assistindo o banco com o query->fetch_assoc e transforma em uma array assoc
 while($data = $query->fetch_assoc()){
     //atribuo com o mesmo nome do campo que tem no meu banco
     echo "Id: ".$data['id_cliente']."<br>";
     echo "A pessoa: ".$data['nome']." ".$data['sobrenome']."<br>";
     echo '<br>';
     echo '<hr>';
 }

 

 //repetindo os dados... so escolher o campo do banco que quer trabalhar...

?>