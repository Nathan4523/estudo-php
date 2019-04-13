<?php 
include ("conexao.php"); 
require_once ("User.php");
require_once ("ServiceUser.php");


$user = new User();

/*===========INSERT=========== */
// $user->setName("Billy");
// $user->setEmail("billy@gmail.com");

$service = new ServiceUser($mysqli, $user); 
// echo $service->insert();   
/*===========FIM INSERT=========== */

/*===========UPDATE=========== */
// $user->setId("8");
// $user->setName("Jon BIl");
// $user->setEmail("jonbil@gmail.com");
// echo "Retorno: ". $service->update(). "<br>";

/*===========FIM UPDATE=========== */


/*===========DELETE=========== */
// echo "Retorno: ". $service->delete(11). "<br>";
/*===========FIM DELETE=========== */


/*===========LISTAR=========== */
//$result = $user->find(1);
// echo $result['nome'];

$result = $service->list();

foreach($result as $value){
    echo $value["id"]."<br>";
    echo $value["nome"]."<br>";
    echo $value["email"]."<br><hr>";
}

/*===========FIM LISTAR=========== */
 

?>