<?php
class Pessoa{
  private $nome;
  private $salario;

  public function receberAumento($aum){
    $this->salario += $aum;
  }


  public function getNome(){
    return $this->nome;
  }

  public function setNome($n){
    $this->nome = $n;
  }

  public function getSalario(){
    return $this->salario;
  }

  public function setSalario($s){
    $this->salario = $s;
  }
}


 ?>
