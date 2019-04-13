<?php
require_once 'Animal.php';
class Ave extends Animal {
  private $corPena;

  public function alimentar(){
    echo "comendo frutas<br>";
  }

  public function emitirSom(){
    echo "som de ave<br>";
  }

  public function locomover(){
    echo "voando<br>";
  }

  public function fazerNinho(){
    echo "fazendo ninho<br>";
  }

  public function getcorEscama(){
    return $this->corPena;
  }

  public function setcorEscama($corPena){
    $this->corPena = $corPena;
  }
}



 ?>
