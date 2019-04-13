<?php
require_once 'Animal.php';
class Peixe extends Animal
{
  private $corEscama;

  public function alimentar(){
    echo "comendo substancia<br>";
  }

  public function emitirSom(){
    echo "peixe nao faz som<br>";
  }

  public function locomover(){
    echo "nadando<br>";
  }

  function soltarBolha(){
    echo "soltando bolha<br>";
  }

  public function getcorEscama(){
    return $this->corEscama;
  }

  public function setcorEscama($corEscama){
    $this->corEscama = $corEscama;
  }
}



 ?>
