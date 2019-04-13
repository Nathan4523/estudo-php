<?php
class Whats{

    public $nome;
    public $status;
    public $telefone;
    public $idade;
    private $conversas;
    private $confirmacaoLeitura;
    private $foto;

    

    //getters e setters
    public function getNome(){
      return $this->nome;
    }
    public function setNome($n){
      $this->nome = $n;
    }

    public function getStatus(){
      return $this->status;
    }

    public function setStatus($s){
      $this->status = $s;
    }

    public function getTelefone(){
      return $this->telefone;
    }

    public function setTelefone($t){
      $this->telefone = $t;
    }

    public function getIdade(){
      return $this->idade;
    }

    public function setIdade($i){
      $this->idade = $i;
    }

    public function getConversa(){
      return $this->conversa;
    }

    public function setConversa($c){
      $this->conversa = $c;
    }

    public function getConfirmacaoLeitura(){
      return $this->confirmacaoLeitura;
    }

    public function setConfirmacaoLeitura($cl){
      $this->confirmacaoLeitura = $cl;
    }

    public function getFoto(){
      return $this->foto;
    }

    public function setFoto($f){
      $this->foto = $f;
    }
}
 ?>
