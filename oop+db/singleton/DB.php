<?php


final class DB
{
private static $db;
public static function getInstance()
{
    if(!self::$db){
        echo 'Первое соединение<br>';
        $db=new mysqli('127.0.0.1', 'root', '', 'test');
        if (!$db->error){
            self::$db=$db;
        }
    }else{
        echo 'повторное соединение<br>';
    }
  return self::$db;
}
}