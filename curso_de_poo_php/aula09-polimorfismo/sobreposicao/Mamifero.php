<?php
require_once 'Animal.php';
class Mamifero extends Animal {
  private $corPelo;

  public function alimentar(){
    echo "mamando<br>";
  }

  public function emitirSom(){
    echo "som de mamifero <br>";
  }

  public function locomover(){
    echo "correndo <br>";
  }

  public function getCorPelo(){
    return $this->corPelo;
  }

  public function setCorPelo($corPelo){
    $this->corPelo = $corPelo;
  }
}



 ?>
