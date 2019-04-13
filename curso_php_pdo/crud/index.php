<?php

require_once "IConn.php";
require_once "Conn.php";
require_once "IProduct.php";
require_once "Product.php";
require_once "ServiceProduct.php";


$db = new Conn("localhost","test_oo","root","root");
$product = new Product;

/*inserindo*/
// $product->setName("Front")
//         ->setDesc("Curso de html + CSS");

/*update*/
// $product->setId("4")
//         ->setName("Front")
//         ->setDesc("Curso de html + CSS");

/*delete*/
$product->setId(4);



$service = new ServiceProduct($db,$product);


// print_r($service->list());
// print_r($service->save());
// print_r($service->update());
print_r($service->delete());

