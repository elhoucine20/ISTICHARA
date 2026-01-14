<?php

spl_autoload_register(function($class){

 $className = str_replace('\\','/',$class);
 $file = 'apps/'.$className.'.php';
 
  if(file_exists($file)){
    require_once $file;
 }
});



