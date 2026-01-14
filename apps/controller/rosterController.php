<?php
use models\Avocat;
use models\Huissier;
use services\Database;
use models\Ville;

// /**
// * @method read(): void
// */

$Pdo=Database::getConnection();


$Avocat = new Avocat($Pdo);
$Avocats = $Avocat->Affichage("avocats");

$Ville =new Ville($Pdo);

$Huissier = new Huissier($Pdo);
$Huissiers = $Huissier->Affichage("huissiers");

require_once "./src/views/gestion/Home.php";

