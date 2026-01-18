<?php

use models\Avocat;
use models\Huissier;
use services\Database;
// use models\Ville;

$Pdo = Database::getConnection();

$Avocat = new Avocat($Pdo);
$Huissier = new Huissier($Pdo);

$AllAvocats = count($Avocat->Affichage("avocats"));
$AllHuissiers = count($Huissier->Affichage("huissiers"));


$TopThree = $Avocat->getTopThreeAvocats();


require_once "src/views/gestion/Statistique.php";