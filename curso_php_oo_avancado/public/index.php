<?php 

require_once "../vendor/autoload.php";

use Pimple\Container;

$container['date'] = function (){
    return new \DateTime;
};

$date = new \DateTime;

var_dump($container['date']);
echo "<br><br>";
sleep(2);
var_dump($date);