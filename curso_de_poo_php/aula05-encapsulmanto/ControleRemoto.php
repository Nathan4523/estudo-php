<?php
  require_once 'Controlador.php';
  class ControleRemoto implements Controlador{
    private $volume;
    private $ligado;
    private $tocando;

    //construtor
    function __construct(){
      $this->volume = 50;
      $this->ligado=false;
      $this->tocando=false;
    }

    public function ligar(){
      $this->setLigado(true);
    }

    public function desligar(){
      $this->setDesligado(false);
    }

    public function abrirMenu(){
      echo "<br> esta ligado?: ".($this->getLigado()? "sim":"nao");
      echo "<br> esta tocando?: ". ($this->getTocando()?"sim":"não");
      echo "volume: ". $this->getVolume();
      for ($i=0; $i < $this->getVolume() ; $i+=10) {
        echo "|";
      }
      echo "<br>";
    }

    public function fecharMenu(){
      echo "fechando menu";
    }

    public function maisVolume(){
      if ($this->getLigado()) {
        $this->setVolume($this->getVolume() + 5);
      }
    }

    public function menosVolume(){
      if ($this->getLigado()) {
        $this->setVolume($this->getVolume() - 5);
      }
    }

    public function ligarMudo(){
      if ($this->getLigado() && $this->getVolume() > 0) {
        $this->setVolume(0);
      }
    }

    public function desligarMudo(){
      if ($this->getLigado() && $this->getVolume() == 0) {
        $this->setVolume( 50 );
      }
    }

    public function play(){
      if ($this->getLigado() && !($this->getTocando())) {
        $this->setTocando(true);
      }
    }

    public function pause(){
      if ($this->getLigado() && $this->getTocando()) {
        $this->setTocando(false);
      }
    }


    //getters e setters
    private function getVolume(){
      return $this->volume;
    }

    private function setVolume($volume){
      $this->volume = $volume;
    }

    private function getLigado(){
      return $this->ligado;
    }

    private function setLigado($ligado){
      $this->ligado = $ligado;
    }

    private function getTocando(){
      return $this->tocando;
    }

    private function setTocando($tocando){
      $this->tocando = $tocando;
    }
  }

 ?>
