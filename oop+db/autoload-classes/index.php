<?php
spl_autoload_register(function ($class){
   $patch='classes/'.$class.'.php';
   if(file_exists($patch)){
       require_once "$patch";
       return;
   }
   die ("class not exist");


});

$test=new Test();
$user=new User();

$test->queEsClass();
$user->queEsClass();