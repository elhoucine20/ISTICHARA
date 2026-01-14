<?php
namespace models;

use models\Person;
class Avocat extends Person {

    private bool $consultation_en_ligne;
    private string $specialiteé;

    // public function Affichage($pdo):array{
    //     $pdo->prepare("SELECT * FROM avocats");
    //     $result = $pdo->execute();
    //     return $result;
    // }    

    
    public function Create($name,$anne_experience,$specialite,$consultation,$ville_id){
        $stmt = $this->connection->prepare("INSERT INTO  avocats SET name=:name,specialitée=:specialite,annee_experience=:annee,consultation_en_ligne=:consultation,ville_id=:ville");
        $result = $stmt->execute([':name'=>$name,
                                               ':specialite'=>$specialite,
                                               ':annee'=>$anne_experience,
                                               ':consultation'=>$consultation,
                                               ':ville'=>$ville_id ]);
        return $result;
    }    
}