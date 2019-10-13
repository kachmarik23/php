<?php

class Session
{
    public static function start()
    {
        if (isset($_COOKIE['session-id'])) {
            session_id($_COOKIE['session-id']);
            session_start();
        } else {
            setcookie('session-id', session_id());
            session_start();
        }
    }

    public static function setUser($userData)
    {
        $_SESSION['user'] = $userData;//записываем данные пользователя из класса User

    }
    public static function getUserID(){
       return empty($_SESSION['user']['id']) ? null:$_SESSION['user']['id'];
    }

    public static function unsetUser()
    {
        unset($_SESSION['user']);

        header('Location: /oop/authorization-classes/index.php?action=login');
    }

    public static function checkUser()
    {
        if (!empty($_SESSION['user']['id'])) {
            return true;
        }
        return false;
    }
}
