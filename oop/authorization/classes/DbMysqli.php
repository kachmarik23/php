<?php

class DbMysqli //подключение к БД исключение множественных подключений
{
    private static $db;

    public static function getInstants()
    {
        if (!self::$db) {
            self::$db = new mysqli('127.0.0.1', 'root', '', 'c7testing');
        }
        return self::$db;
    }
}
