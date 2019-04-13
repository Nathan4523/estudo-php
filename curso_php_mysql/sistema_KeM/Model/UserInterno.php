<?php 

class UserInterno{

    private $nome;
    private $sobrenome;
    // private $tipo;
    private $email;
    private $login;
    private $senha;


    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getSobrenome(){
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome){
        $this->sobrenome = $sobrenome;
    }

    // public function getTipo(){
    //     return $this->tipo;
    // }

    // public function setTipo($tipo){
    //     $this->tipo = $tipo;
    // }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getLogin(){
        return $this->login;
    }

    public function setLogin($login){
        $this->login = $login;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

}