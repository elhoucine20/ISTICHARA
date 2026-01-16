<?php

use models\Avocat;
use models\Huissier;
use services\Database;
$Pdo=Database::getConnection();

use models\Ville;
$ville = new Ville($Pdo);
$leTouts = $ville->getAllFromVille();

if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $name = $_POST['name'];
    $ann_experience = $_POST['annee_experience'];
    $ville_id = $_POST['ville'];
    if(empty($_POST['specialite']) ){
        
            $type_acte = $_POST['type_acte'];

            $huissier = new Huissier($Pdo);
            $huissier->CreateHuissier($name,$ann_experience,$type_acte,$ville_id);
             header("location:roster");  

        }else if(empty($_POST['type_acte'])){

            $specialite = $_POST['specialite'];
            $consultation = $_POST['consultation'];

            $avocat = new Avocat($Pdo);
            $avocat->CreateAvocat($name,$ann_experience,$specialite,$consultation,$ville_id);
             header("location:roster");  
            }

}

            require_once "src/views/formulaires/Create.php";

