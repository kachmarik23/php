<?php

class User
{
    private $id;
    private $login;
    private $pass;

    public function __construct($id, $login, $pass)
    {
        $this->id = $id;
        $this->login = $login;
        $this->pass = $pass;
    }

    public static function getUsers($id)
    {
        $db = DbMysqli::getInstants();//соединение с БД
        $query = "SELECT `id`,`login`,`pass` FROM `users` WHERE `id` = $id LIMIT 1";
        $res = $db->query($query);
        if ($db->affected_rows === 0) {
            return null;
        }
        $data = $res->fetch_assoc();
        $user = new self( // создаем экземпляр класса внутри класса new self указывает на то,
        // что мы саздаем экземпляр внутри самого себя
            $data['id'],
            $data['login'],
            $data['pass']
        );
        Session::setUser($data);

        return $user;

    }

    public function getId()
    {
        return $this->id;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function getPass()
    {
        return $this->pass;
    }
// мы оздали три гетера для того чтобы получить эти значения и
// два сетера для того чтобы их установить
    public function setLogin($login)
    {

        $db = DbMysqli::getInstants();
        $query = "UPDATE `users` SET `login` = '$login' WHERE `id` = $this->id LIMIT 1";
        $db->query($query);
        if ($db->affected_rows == 0) {
            return false;
        }
        $this->login = $login;
        return true;

    }

    public function setPass($pass)
    {

        $db = DbMysqli::getInstants();
        $query = "UPDATE `users` SET `pass` = '$pass' WHERE `id`=$this->id LIMIT 1";
        $db->query($query);
        $this->pass = $pass;
        return true;

    }
}