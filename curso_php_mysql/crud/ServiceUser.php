<?php

class ServiceUser{

    //atributos
    private $db;
    private $user;

    function __construct(Mysqli $mysqli, User $user){
        //ja recebendo a conexao do banco
        $this->db = $mysqli;
        $this->user = $user;
    }

    public function find($id){
        $stmt = $this->db->stmt_init();
        $stmt->prepare("SELECT * FROM {$this->user->getTable()} WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->bind_result($id, $nome, $email);        
        $stmt->fetch();

        return array("id" => $id, "nome"=>$nome, "email"=>$email);
    }

    public function list(){
        $sql = "SELECT * FROM tb_contato";
        $query = $this->db->query($sql);

        return $query->fetch_all(MYSQLI_ASSOC);
    }

    public function insert(){
        $stmt = $this->db->stmt_init();
        $stmt->prepare("INSERT INTO {$this->user->getTable()}(nome, email) VALUES (?, ?) ");

        $nome_user = $this->user->getName();
        $email_user = $this->user->getEmail();

        $stmt->bind_param("ss", $nome_user, $email_user);
        $stmt->execute();
        return $stmt->insert_id;
    }

    public function update(){
        $stmt = $this->db->stmt_init();
        $stmt->prepare("UPDATE {$this->user->getTable()} SET nome = ?, email = ? WHERE id = ?");
        
        $id_user = $this->user->getId();
        $nome_user = $this->user->getName();
        $email_user = $this->user->getEmail();    
    
        $stmt->bind_param("ssi", $nome_user, $email_user, $id_user);
        
        return $stmt->execute();
    }

    public function delete($id){
        $stmt = $this->db->stmt_init();
        $stmt->prepare("DELETE FROM {$this->user->getTable()} WHERE id = ?");
        $stmt->bind_param("i", $id);

        return $stmt->execute();
    }

}