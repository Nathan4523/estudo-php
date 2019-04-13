<?php

require_once "Lutador.php";
class Luta{
  private $desafiado;
  private $desafiador;
  private $rounds;
  private $provada;

  public function marcarLuta(){

  }

  public function luta(){

  }

  //metodos especiais
  public function getDesafiado(){
    return $this->desafiado();
  }

  public function setDesafiado($desafiado){
    $this->desafiado = $desafiado;
  }

  public function getDesafiador(){
    return $this->desafiador;
  }

  public function setDesafiador($desafiador){
    $this->desafiador = $desafiador;
  }

  public function getRounds(){
    return $this->rounds;
  }

  public function setRounds($rounds){
    $this->rounds = $rounds;
  }

  public function getProvada(){
    return $this->provada;
  }

  public function setProvada($provada){
      $this->provada = $provada;
  }
}


 ?>
