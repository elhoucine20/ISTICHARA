<?php


use models\Ville;
use models\Avocat;
use models\Huissier;
use services\Database;
$Pdo=Database::getConnection();


$ville = new Ville($Pdo);
$leTouts = $ville->getAllFromVille();

if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $name = $_POST['name'];
    $ann_experience = $_POST['annee_experience'];
    $ville_id = $_POST['ville'];
    if(empty($_POST['specialite']) && empty($_POST['consultation'])){
        
        $type_acte = $_POST['type_acte'];
         $huissier = new Huissier($Pdo);
            $huissier->Create($name,$ann_experience,$type_acte,$ville_id);
        }else if(empty($_POST['type_acte'])){
            $specialite = $_POST['specialite'];
            $consultation = $_POST['consultation'];

            $avocat = new Avocat($Pdo);
            $avocat->Create($name,$ann_experience,$specialite,$consultation,$ville_id);
            }
            
            
            
            }
            
            require_once "src/views/formulaires/Create.php";
