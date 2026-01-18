<?php

namespace models;

use models\Person;
// use PDO;

class Avocat extends Person
{

    private bool $consultation_en_ligne;
    private string $specialiteé;


    public function CreateAvocat($name, $anne_experience, $specialite, $consultation, $ville_id)
    {
        $stmt = $this->connection->prepare("INSERT INTO  avocats SET name=:name,specialitée=:specialite,annee_experience=:annee,consultation_en_ligne=:consultation,ville_id=:ville");
        $result = $stmt->execute([
            ':name' => $name,
            ':specialite' => $specialite,
            ':annee' => $anne_experience,
            ':consultation' => $consultation,
            ':ville' => $ville_id
        ]);
        return $result;
    }

    public function UpdateAvocat($name, $specialite, $anne_experience, $consultation, $ville_id, $id)
    {
        $stmt = $this->connection->prepare("UPDATE avocats SET name=:name,specialitée=:specialite,annee_experience=:annee,consultation_en_ligne=:consultation,ville_id=:ville WHERE id = :id");

        $stmt->execute([
            ':name' => $name,
            ':specialite' => $specialite,
            ':annee' => $anne_experience,
            ':consultation' => $consultation,
            ':ville' => $ville_id,
            ':id' => $id
        ]);
    }

    // top 3 statistique
    public function getTopThreeAvocats(){
        $stmt = $this->connection->prepare("SELECT * FROM avocats  ORDER BY annee_experience DESC LIMIT 3");
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

  

}
