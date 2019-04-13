<?php

class Caneta
{

  //variaveis
  public $modelo;
  private $ponta;
  private $cor;
  private $tampado;

  public function __construct(){ //metodo construtor
    $this->cor = "Amarelo";
    $this->modelo = "Falsete";
    $this->ponta = 0.3;
    $this->tampar();
  }

  /*construtor DOMNodelist
  public function __construct($mod, $core, $pont){
    $this->modelo = $mod;
    $this->cor = $core;
    $this->ponta = $pont;
  }*/

  public function tampar(){
    $this->tampado = true;
  }


  //get e set
  public function getModelo(){
    return $this->modelo;
  }

  public function setModelo($m){
      $this->modelo = $m;
  }

  public function getPonta(){
    return $this->ponta;
  }

  public function setPonta($p){
    $this->ponta = $p;
  }

  public function getCor(){
    return $this->cor;
  }

  public function setCor($co){
      $this->cor = $co;
  }
}
 ?>
