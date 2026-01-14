<?php
use models\Avocat;
use models\Huissier;
use services\Database;

// /**
// * @method read(): void
// */

$Pdo=Database::getConnection();


$Avocat = new Avocat($Pdo);
$Avocats = $Avocat->Affichage("avocats");

$Huissier = new Huissier($Pdo);
$Huissiers = $Huissier->Affichage("huissiers");

require_once "./src/views/gestion/Home.php";

