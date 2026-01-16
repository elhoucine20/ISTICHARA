<?php
namespace models;



// use services\Database;
use PDO;

class Person {
    protected int $id;
    protected string $Name;
    protected string $ville;
    protected int $ville_id;
    protected int $annee_experience;
    protected PDO $connection;

    public function __construct($pdo)
    {
      $this->connection=$pdo;
    }

       public function Affichage($table){

       $result= $this->connection->query("SELECT * FROM $table")->fetchAll(PDO::FETCH_ASSOC);;
        // $resultt = $stmt->execute();

        //  $result = $resultt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    } 

public function Delete($table,$id){
    $stmt = $this->connection->prepare("DELETE FROM $table WHERE id = :idd");
    $stmt->execute([':idd'=>$id]);
}


    // method de 
    public function getAll($id,$table){
        $stmt = $this->connection->prepare("SELECT * FROM $table WHERE id = :id");
        $stmt->execute([':id'=>$id]);
        $result=$stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }


    // method de search 
    public function getSearch($name,$table){
        $stmt = $this->connection->prepare("SELECT * FROM $table WHERE name LIKE '$name%' ");
        $stmt->execute();
        $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;

    }


}