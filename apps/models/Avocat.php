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
}