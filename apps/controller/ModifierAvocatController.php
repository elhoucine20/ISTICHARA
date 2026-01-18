<?php

$id = $_GET['id'];

use models\Avocat;
use models\Ville;
use services\Database;

$Pdo = Database::getConnection();

$avocat = new Avocat($Pdo);
$Result = $avocat->getAll($id, "avocats");

$ville = new Ville($Pdo);
$LaVille = $ville->getVille($Result['ville_id']);

$leTout = $ville->getAllFromVille();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $name = $_POST['name'];
  $ann_experience = $_POST['annee_experience'];
  $ville_id = $_POST['ville'];
  $specialite = $_POST['specialite'];
  $consultation = $_POST['consultation'];

  $avocat = new Avocat($Pdo);
  $avocat->UpdateAvocat($name, $specialite, $ann_experience, $consultation, $ville_id, $id);
  header("location:roster");
}

require_once "src/views/formulaires/EditAvocat.php";
