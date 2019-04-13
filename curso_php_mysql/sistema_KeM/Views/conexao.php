<?php 

//atributos
class db{
    protected $db;
   public function __construct(){
       try{
        $this->db = new PDO('mysql:host=localhost;dbname=baseKeM;','root','root');
       }
       catch(PDOException $e){
           echo "Falha na conexão com o banco de dados:( ".$e->getMessage();
       }
      }
    }
   ?>

?>