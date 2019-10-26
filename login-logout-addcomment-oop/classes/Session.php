<?php


class Session
{
    public static function start(){
        if(isset($_COOKIE['session_id'])){
            session_id($_COOKIE['session_id']);
        }
        session_start();
        setcookie('session_id',session_id());
    }
    public static function exit(){
        unset($_SESSION['user']);
        unset($_COOKIE['session_id']);
        setcookie('session_id','');

    }
    public static function set($key, $data){
        $_SESSION[$key]=$data;
    }

}