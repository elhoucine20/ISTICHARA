<?php


class Roater{

  public static array $Route=[
    "Avocat"=>"AvocatController",
    "Huissier"=>"HuissierController",
  ];

  public static function Routerr(){
    $page=$_GET['page'] ?? "Home";
    if(array_key_exists($page,self::$Route)){
        require_once __DIR__."/../controller/".$page."Controller.php";
    }
  }


}

