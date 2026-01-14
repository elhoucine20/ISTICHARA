<?php

$id = $_GET['id'];

use models\Avocat;
use services\Database;
$Pdo=Database::getConnection();

$avocat=new Avocat($Pdo);
$avocat->Delete("avocats",$id);
// $avocat->Affichage("avocats");
header("location:roster");

// require_once "src/views/gestion/Home.php";

