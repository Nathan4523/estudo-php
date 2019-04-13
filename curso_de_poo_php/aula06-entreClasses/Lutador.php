<?php

class Lutador{
  private $nome;
  private $nacionalidade;
  private $idade;
  private $altura;
  private $peso;
  private $categoria;
  private $vitorias;
  private $derrotas;
  private $empates;

public function apresentar(){
  echo "<p>------------------</p>";
  echo "<p>Chegou a hora do lutador ". $this->getNome();
  echo "veio diretamente de ". $this->getNacionalidade();
  echo "tem ". $this->getIdade(). " anos";
  echo "<br> Ele tem ". $this->getVitorias(). " vitorias";
  echo $this->getDerrotas(). " derrotas e ". $this->getEmpate(). " empates </p>";
}

public function status(){
  echo "<p>------------------</p>";
  echo "<p>". $this->getNome(). " é um peso ". $this->getPeso();
  echo "e ja ganhou". $this->getVitorias(). " vezes,";
  echo "perdeu ". $this->getDerrotas(). " vezes";
  echo "e ja empatou ". $this->getEmpate() . " vezes ";
}

public function ganharLuta(){
    $this->setVitorias($this->getVitorias + 1);

}

public function perderLuta(){
  $this->setDerrotas($this->getDerrotas + 1);
}

public function empatarLuta(){
  $this->setEmpates($this->getEmpate + 1);
}



// Metodos especiais
  public function __construct($nome, $nacionalidade, $idade, $peso, $altura, $vitorias, $derrotas, $empates){
    $this->nome = $nome;
    $this->nacionalidade = $nacionalidade;
    $this->idade = $idade;
    $this->setPeso($peso);
    $this->altura = $altura;
    //$this->categoria = $categoria;
    $this->vitorias = $vitorias;
    $this->derrotas = $derrotas;
    $this->empates = $empates;
  }

  public function getNome(){
    return  $this->nome;
  }

  public function setNome($nome){
    $this->nome = $nome;
  }

  public function getNacionalidade(){
    return $this->nacionalidade;
  }

  public function setNacionalidade($nacionalidade){
    $this->nacionalidade = $nacionalidade;
  }

  public function getIdade(){
    return $this->idade;
  }

  public function setIdade($idade){
    $this->idade = $idade;
  }

  public function getPeso(){
    return $this->peso;
    $this->setCategoria();
  }

  public function setPeso($peso){
    $this->peso = $peso;
  }

  public function getAltura(){
    return $this->altura;
  }

  public function setAltura($altura){
    $this->altura = $altura;
  }

  public function getCategoria(){
    return $this->categoria;
  }

  private function setCategoria(){
    if($this->peso < 52.2){
      $this->categoria = "Invalido";
    }elseif ($this->peso <= 70.3){
      $this->categoria = "Leve";
    }elseif ($this->categoria <= 83.3) {
      $this->categoria = "Médio";
    }elseif ($this->peso <= 120.2){
      $this->categoria = "Pesado";
    }else{
      $this->categoria = "Invalido";
    }
  }

  public function getVitorias(){
    return $this->vitorias;
  }

  public function setVitorias($vitorias){
    $this->vitorias = $vitorias;
  }

  public function getDerrotas(){
    return $this->derrotas;
  }

  public function setDerrotas($derrotas){
    $this->derrotas = $derrotas;
  }

  public function getEmpate(){
    return $this->empates;
  }

  public function setEmpates($empates){
    $this->empates = $empates;
  }
}


 ?>
