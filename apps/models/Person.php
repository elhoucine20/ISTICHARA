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
    private PDO $connection;

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
    public function getVille($id_ville){
       $ville= $this->connection->query("SELECT name FROM ville WHERE id=$id_ville")->fetchColumn();
       return $ville;

    }

    // public function Create($pdo,$table){
    //     $pdo->prepare("SELECT * FROM $table");
    //     $result = $pdo->execute()->fetchAll();
    //     return $result;
    // }    

}