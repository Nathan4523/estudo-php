<?php

class products
{
    private $id;
    private $description;
    private $price;

    public function __construct($description = "", $price = "")
    {
        $this->setDescription($description);
        $this->setPrice($price);
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function loadById($id)    
    {
        $sql = new sql();

        $res = $sql->select("SELECT * FROM products WHERE id = :ID", [":ID" => $id]);

        if (count($res) > 0)
        {
            $this->setData($res[0]);            
        }
    }

    public function add()
    {
        $sql = new sql();

        $res = $sql->select("CALL sp_product_insert(:DESCRIPTION, :PRICE)", [
            ":DESCRIPTION" => $this->getDescription(),
            ":PRICE"       => $this->getPrice()
        ]);

        if(count($res) > 0)
        {
            $this->setData($res[0]);
        }
    }

    public function setData($data)
    {
        $this->setId($data['id']);
        $this->setDescription($data['description']);
        $this->setPrice($data['price']);
    }

    public function __toString()
    {
        return json_encode([
            "id" => $this->getId(),
            "description" => $this->getDescription(),
            "price" => $this->getPrice()
        ]);
    }
}