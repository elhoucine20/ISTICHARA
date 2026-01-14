<?php

$id = $_GET['id'];

use models\Huissier;
use services\Database;
$Pdo=Database::getConnection();

$avocat=new Huissier($Pdo);
$avocat->Delete("huissiers",$id);
// $avocat->Affichage("huissiers");
header("location:roster");


// require_once "src/views/gestion/Home.php";


