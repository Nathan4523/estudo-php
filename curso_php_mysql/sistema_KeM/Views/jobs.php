<?php
include "conexao.php";
 class jobs extends db{
    public function __construct(
    ){
    	parent::__construct();
    }
    public function listar(){
    	$sql = "SELECT * FROM tb_jobs";
        $query = $this->db->query($sql);
         return $query->fetchAll();
    }
} ?>