<?php

require_once 'Pessoa.php';
class Professor extends Pessoa{
  private $especialidade;
  private $salario;

  public function receberAumento($aum){
    $this->salario += $aum;
  }

    public function getEspecialidade(){
      return $this->especialidade;
    }

    public function setEspecialidade($e){
      $this->especialidade = $e;
    }

    public function getSalario(){
      return $this->salario;
    }

    public function setSalario($s){
      $this->salario = $s;
    }
}


 ?>
