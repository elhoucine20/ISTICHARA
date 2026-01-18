<?php

$id = $_GET['id'];

// use models\Avocat;
use models\Huissier;
use models\Ville;
use services\Database;

$Pdo = Database::getConnection();

$huissier = new Huissier($Pdo);
$Result = $huissier->getAll($id, "huissiers");

$ville = new Ville($Pdo);
$LaVille = $ville->getVille($Result['ville_id']);

$leTout = $ville->getAllFromVille();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $ann_experience = $_POST['annee_experience'];
    $ville_id = $_POST['ville'];
    $type_acte = $_POST['type_acte'];

    $huissier = new Huissier($Pdo);
    $huissier->UpdateHuissier($name, $ann_experience, $type_acte, $ville_id, $id);
    header("location:roster");
}

require_once "src/views/formulaires/EditHuissier.php";
