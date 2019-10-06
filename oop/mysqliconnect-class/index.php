<?php
class DB //статическое подключение к БД исключение множественных подключений
{
    private static $db;
    public static function getInstance()
    {
        echo 'get instance <br>';
        if (!self::$db){
            $db = new mysqli('127.0.0.1', 'root', '', 'test');
            if (!$db->connect_error){
                self::$db = $db;
                echo 'tray to connect <br>';
            }

        }
        return self::$db;

    }
}

$db = DB::getInstance();
$db = DB::getInstance();
$db = DB::getInstance();
$db = DB::getInstance();
$db = DB::getInstance();
$db = DB::getInstance();
$db = DB::getInstance();