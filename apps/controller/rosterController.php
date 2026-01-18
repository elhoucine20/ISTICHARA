<?php

use models\Avocat;
use models\Huissier;
use services\Database;
use models\Ville;

$Pdo = Database::getConnection();

$Avocat = new Avocat($Pdo);
$Ville = new Ville($Pdo);
$Huissier = new Huissier($Pdo);

$AllAvocats = $Avocat->Affichage("avocats");
$AllHuissiers = $Huissier->Affichage("huissiers");
// _______________________________pagination_______________________________________________

$currentePage = $_GET['currentpage'] ?? 1;
// affichage
$Avocats = $Avocat->AfichageByLimit("avocats",(($currentePage -1)*3));
$Huissiers = $Huissier->AfichageByLimit("huissiers",(($currentePage -1)*3));
$TotalAvocats = sizeof($AllAvocats);
$TotalHuissiers = sizeof($AllHuissiers);
// total pages
$Next = $currentePage+1;

$total;
if($TotalAvocats>$TotalHuissiers){
$total = sizeof($Avocats);
$NextCard = sizeof($Avocat->AfichageByLimit("avocats",(($Next -1)*3)));
} else {
$total = sizeof($Huissiers);
$NextCard = sizeof($Huissier->AfichageByLimit("huissiers",(($Next -1)*3)));
}

$Précidente = $currentePage-1;















require_once "./src/views/gestion/Home.php";