<?php


final class DB
{
private static $db;
public static function getInstance()
{
    if(!self::$db){
        $db=new mysqli('127.0.0.1', 'root', '', 'test');
        if (!$db->error){
            self::$db=$db;
        }
    }
  return self::$db;
}
}