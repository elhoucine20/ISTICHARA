<?php

namespace roater;

class Roater
{

  public static array $Route = [
    "roster" => "rosterController",
    "home" => "homeController",
    "Statistique" => "StatistiqueController",
    "Create" => "CreateController",
    "DeleteHuissier" => "DeleteHuissierController",
    "DeleteAvocat" => "DeleteAvocatController",
    "ModifierHuissier" => "ModifierHuissierController",
    "ModifierAvocat" => "ModifierAvocatController",
    "membres" => "membresController",
  ];

  public static function Routerr()
  {
    $page = $_GET['page'] ?? 'home';

    if (array_key_exists($page, self::$Route)) {
      $controllerName = self::$Route[$page];
      require_once "apps/controller/" . $controllerName . ".php";
    } else {
      echo "404 Page not exist";
    }
  }
}
