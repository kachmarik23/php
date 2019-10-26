<?php


class DBh
{
    private static $dbh;
    public static function getInstance(){
        if(!self::$dbh){
            $dsn='mysql:host=localhost;dbname=test';
            $user='root';
            $pass='';

            try {
                $dbh = new PDO($dsn, $user, $pass);
                self::$dbh=$dbh;
            } catch (PDOException $e) {
                echo 'Подключение не удалось: ' . $e->getMessage();
            }
        }
        return self::$dbh;
    }

}