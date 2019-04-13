<?php
require_once 'Animal.php';
class Reptil extends Animal
{
  private $corEscama;

  public function alimentar(){
    echo "comendo vegetais<br>";
  }

  public function emitirSom(){
    echo "som de reptil<br>";
  }

  public function locomover(){
    echo "rastejando<br>";
  }

  public function getcorEscama(){
    return $this->corEscama;
  }

  public function setcorEscama($corEscama){
    $this->corEscama = $corEscama;
  }
}
 ?>
