<?php

use models\Avocat;
use models\Ville;
use services\Database;

$Pdo = Database::getConnection();

$ville = new Ville($Pdo);
$leTouts = $ville->getAllFromVille();



$id = $_GET['id'];



$avocat = new Avocat($Pdo);
$avocat->Delete("avocats", $id);
// $avocat->Affichage("avocats");
header("location:roster");

// require_once "src/views/gestion/Home.php";
