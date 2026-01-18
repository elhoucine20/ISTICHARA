<?php

use models\Avocat;
use models\Huissier;
use services\Database;
use models\Ville;

$pdo = Database::getConnection();
$ville = new Ville($pdo);
$Avocats = new Avocat($pdo);
$Huissiers = new Huissier($pdo);

// __________________________________RECHERCH____________________________________________
if (isset($_GET['query'])) {
  $query = $_GET['query'];
  $lesAvocatSearch = $Avocats->getSearch($query, "avocats");
  $lesHuissierSearch = $Huissiers->getSearch($query, "huissiers");

  $array = [];
  foreach ($lesAvocatSearch as $avocat) {
    $avocat['ville_id'] = $ville->getVille($avocat['ville_id']);
    if ($avocat['consultation_en_ligne'] == true) {
      $avocat['consultation_en_ligne'] = "Consultation en ligne ✅";
    } else {
      $avocat['consultation_en_ligne'] = "Pas de Consultation ❌";
    }
    array_push($array, $avocat);
  }
  foreach ($lesHuissierSearch as $huissier) {
    $huissier['ville_id'] = $ville->getVille($huissier['ville_id']);

    array_push($array, $huissier);
  }
  $all = $array + $lesHuissierSearch;
  echo json_encode($all);
}

// ________________________________________FILTER_________________________________________

if (isset($_GET['filter'])) {

  $filter = $_GET['filter'];

  // get avocat
  if ($filter == "avocat") {
    $LesAvocatFilter = $Avocats->Affichage("avocats");

    $avoatss = [];
    foreach ($LesAvocatFilter as $avocat) {
      $avocat['ville_id'] = $ville->getVille($avocat['ville_id']);
      if ($avocat['consultation_en_ligne'] == true) {
        $avocat['consultation_en_ligne'] = "Consultation en ligne ✅";
      } else {
        $avocat['consultation_en_ligne'] = "Pas de Consultation ❌";
      }
      array_push($avoatss, $avocat);
    }
    echo json_encode($avoatss);
  }

  // get huissiers
  if ($filter == "huissier") {
    $LesHuissiersFilter = $Huissiers->Affichage("huissiers");

    $huissierss = [];
    foreach ($LesHuissiersFilter as $huissier) {
      $huissier['ville_id'] = $ville->getVille($huissier['ville_id']);

      array_push($huissierss, $huissier);
    }
    echo json_encode($huissierss);
  }
}
