<?php 

namespace Source;
class Product implements Iproduct{

    private $db;

    public function __construct(Iconn $db){
        $this->db = $db->connect();
    }

    public function list(){
        $query = "SELECT * FROM produto";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
         
        return $resultado;
    }

}