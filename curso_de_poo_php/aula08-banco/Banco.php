<?php
  class Banco{

    public $numConta;
    public $tipo;
    public $dono;
    private $saldo;
    public $status;


    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
      if($t == "CC"){
        $this->setSaldo(50);
      }else if($t == "CP"){
        $this->setSaldo(150);
      }
    }

    public function fecharConta(){
      if($this->getSaldo() > 0){
        echo "<p>Conta ainda possui dinheiro, impossivel de fecha-lo</p>";
      }elseif($this->getSaldo() < 0){
        echo "<p>Conta negativa, impossivel de fecha-lo</p>";
      }else{
        $this->setStatus(false);
      }
    }

    public function depositar($v){
        if($this->getStatus()){
          $this->setSaldo($this->getSaldo() + $v);
        }else{
          echo "erro";
        }
    }

    public function sacar($v){
      if($this->getStatus()){
        if($this->getSaldo() > $v){
            $this->setSaldo($this->getSaldo() - $v);
        }else{
          echo "saldo insuficiente";
        }
      }else{
        echo "impossivel de sacar";
      }
    }

    public function pagarMensal(){
      if ($this->getTipo() == "CC") {
        $v = 12;
      }else if( $this->getTipo() == "CP"){
        $v = 50;
      }

      if ($this->getStatus()) {
        $this->setSaldo($this->getSaldo() - $v);
      }else{
        echo "Erro, problemas na conta, nao posso cobrar";
      }
    }


    //getters e setters
    public function getNumConta(){
      return $this->numConta;
    }

    public function setNumConta($numConta){
      $this->numConta = $numConta;
    }

    public function getTipo(){
      return $this->tipo;
    }

    public function setTipo($tipo){
      $this->tipo = $tipo;
    }

    public function getDono(){
      return $this->dono;
    }

    public function setDono($dono){
      $this->dono = $dono;
    }


    public function getSaldo(){
      return $this->saldo;
    }

    public function setSaldo($saldo){
      $this->saldo = $saldo;
    }

    public function getStatus(){
      return $this->status;
    }

    public function setStatus($status){
      $this->status = $status;
    }
  }
 ?>
