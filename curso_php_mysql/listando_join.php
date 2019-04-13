<?php 
include("conexao.php");

$sql_resultado = "SELECT cliente.nome, cliente.sobrenome, produto.nome_produto, final.quantidade_vendido, final.valor_total, final.pagamento_meio from
tb_cliente as cliente join tb_produto_vendido as final on cliente.id_cliente = final.id_chave_cliente join tb_produto as produto on produto.id_produto = final.id_chave_produto";

$query = $mysqli->query($sql_resultado);

while($user = $query->fetch_array()){

    if($user['pagamento_meio'] == "visa"){
        $final = "cartão ".$user['pagamento_meio'];
    }else if ($user['pagamento_meio'] == "mastercard"){
        $final = "cartão ".$user['pagamento_meio'];
    }else if ($user['pagamento_meio'] == "elo"){
        $final = "cartão ".$user['pagamento_meio'];
    }else{
        $final = "boleto bancario" ;
    }

    echo "O usuario ".$user['nome']." ".$user['sobrenome']." comprou ".$user['quantidade_vendido']."x ".$user['nome_produto']." no valor de R$".$user['valor_total']." e pagou em ". $final. "<br>";
    echo "<hr>";
}
?>