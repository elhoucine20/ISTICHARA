<?php

require_once "src/views/formulaires/Create.php";


if($_SERVER['REQUEST_METHOD']=='POST'){

    $name = $_POST['name'];
    $ann_experience = $_POST['annee_experience'];
    $ville = $_POST['ville'];
if(empty($_POST['specialite']) && empty($_POST['consultation'])){

    $type_acte = $_POST['type_acte'];
    }else{
        $specialite = $_POST['specialite'];
        $consultation = $_POST['consultation'];
    }
    
}

