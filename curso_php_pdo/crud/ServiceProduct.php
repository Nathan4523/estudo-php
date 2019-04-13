<?php


class ServiceProduct
{
    private $db;
    private $product;

    public function __construct(IConn $db, IProduct $product)
    {
        $this->db = $db->connect();
        $this->product = $product;
    }

    public function list()
    {
        $query = "Select * from `produto`";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function save()
    {   
        $query = "INSERT INTO produto (nome, tipo) VALUES (:names, :descricao)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":names", $this->product->getName());
        $stmt->bindValue(":descricao", $this->product->getDesc());
        $stmt->execute();

        return $this->db->lastInsertId(); //retornando o ultimo ID;

    }

    public function update()
    {
        $query = "UPDATE produto SET nome = :nomes, tipo = :descricao where id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":id", $this->product->getId());
        $stmt->bindValue(":nomes", $this->product->getName());
        $stmt->bindValue(":descricao", $this->product->getDesc());
        $stmt->execute();

        return $this->db->lastInsertId();

    }

    public function delete()
    {
        $query = "DELETE FROM produto WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":id", $this->product->getId());
        $stmt->execute();

        return $this->db->lastInsertId();
    }
}
