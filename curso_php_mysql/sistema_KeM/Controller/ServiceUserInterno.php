<?php 

require_once '../libs/conexao.php';

class ServiceUserInterno{

    //atributos
    public $nome;
    public $sobrenome;
    public $email;
    public $login;
    public $senha;

    function __construct(){}

    public function insert(){
        $sql = "INSERT INTO tb_user_master (nome, sobrenome, email, login, senha) VALUES($this->getNome(), $this->getSobrenome(), $this->getEmail(), $this->getLogin(), $this->getSenha())";
        $query = $mysqli->query($sql);
    }

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