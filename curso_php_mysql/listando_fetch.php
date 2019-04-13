<?php 

include("conexao.php");


$sql = "SELECT * FROM tb_cliente";
$query = $mysqli->query($sql);

//trabalhando com fetch

// ============fetch_all();===========
$user = $query->fetch_all(MYSQLI_BOTH);

/*
com MYSQLI_NUM 
echo 'nome: '.$user[0][1];
*/

/*com MYSQLI_ASSOC
echo 'nome: '.$user[0]["nome"];
*/

//fazendo a repeticao
foreach($user as $valor){
    echo "Nome: ".$valor["nome"]."<br><br>";
}
// ============FIM fetch_all();===========
 
// ============fetch_array();===========
/*while ($user = $query->fetch_array()){
    echo "Nome: ".$user["nome"]."<br>";
}*/
// ============FIM fetch_array();===========

// ============ fetch_row();===========
/*while($user = $query->fetch_row()){
   echo "NOme: ".$user[1]."<br>";
}*/
// ============FIM fetch_row();===========

// ============fetch_object();===========
/*while($user = $query->fetch_object()){
    echo "Nome: ".$user->nome."<br>";
}*/

//ou
/*while($user = $query->fetch_object()){
    $row[] = $user;
}

foreach ($row as $valor){
    echo "ID: ". $valor->id_cliente."<br>";
}/*

// ============FIM fetch_object();===========
?>