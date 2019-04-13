<?php

  class Caneta{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampado;

    public function rabiscar(){
      if($this->tampado == true){
        echo "Erro a Caneta não pode ser usado";
      }else{
        echo "A caneta esta rabiscando";
      }
    }

    public function tampar(){
      $this->tampado = true;
    }

    public function destampar(){
      $this->tampado = false;
    }
  }
 ?>
