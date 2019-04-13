<?php

class user extends sql
{
    private $id;
    private $username;
    private $password;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public static function getList()
    {
        $sql = new sql();

        return $sql->select("SELECT * FROM users ORDER BY username");
    }

    public static function search($value)
    {
        $sql = new sql();

        return $sql->select("SELECT * FROM users WHERE username LIKE :SEARCH ORDER BY username",[
            ":SEARCH" => "%".$value."%"
        ]);
    }

    public function loadById($id)
    {
        $sql = new sql();

        $results = $sql->select("SELECT * FROM users WHERE id = :ID", [
            ":ID" => $id
        ]);

        if(count($results) > 0)
        {
            $this->setData($results[0]);
        }
    }

    public function login($user, $pass)
    {
        $sql = new sql();
        
        $results = $sql->select("SELECT * FROM users WHERE username = :USERNAME AND password = :PASSWORD", [
            ":USERNAME" => $user,
            ":PASSWORD"  => $pass
        ]);
        
        if(count($results) > 0)
        {
            $this->setData($result[0]);
        } else {
            throw new Exception("Login ou senha inválidos.", 1550);
            
        }
    }

    public function setData($data)
    {
        $this->setId($data['id']);
        $this->setUsername($data['username']);
        $this->setPassword(md5($data['password']));
    }

    public function __construct($user = "", $pass = "")
    {
        $salt = sha1(md5($user.$pass));
        $this->setUsername($user);
        $this->setPassword(crypt($pass, $salt));
    }

    public function add()
    {
        $sql = new sql();

        $result = $sql->select("CALL sp_users_insert(:USERNAME, :PASSWORD)", [
            ":USERNAME" => $this->getUsername(),
            ":PASSWORD" => $this->getPassword()
        ]);

        if(count($result) > 0)
        {
            $this->setData($result[0]);
        }
    }

    public function update($username, $password)
    {
        $this->setUsername($username);
        $this->setPassword($password);

        $sql = new sql();

        $sql->query("UPDATE users SET username = :USERNAME, password = :PASSWORD WHERE id = :ID", [
            ":ID"       => $this->getId(),
            ":USERNAME" => $this->getUsername(),
            ":PASSWORD" => $this->getPassword()
        ]);
    }

    public function delete()
    {
        $sql = new sql();
        $sql->query("DELETE FROM users WHERE id = :ID", [
            ":ID" => $this->getId()
        ]);

        $this->setId(0);
        $this->setUsername('');
        $this->setPassword('');
    }

    public function __toString()
    {
        return json_encode([
            "id" => $this->getId(),
            "username" => $this->getUsername(),
            "password" => $this->getPassword()
        ]);
    }
}