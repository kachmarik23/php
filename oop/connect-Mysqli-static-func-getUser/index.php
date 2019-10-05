<?php

class DbMysqli
{
    private static $db;
    public static function getInstants(){
        if(!self::$db){
            self::$db = new mysqli('127.0.0.1','root','','c7testing');
        }
        return self::$db;
    }
}

class Users
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
    public static function getUsers ($id){
        $db=DbMysqli::getInstants();//соединение с БД
        $query = "SELECT `id`,`login`,`pass` FROM `users` WHERE `id` = $id LIMIT 1";
        $res = $db->query($query);
        if ($db->affected_rows===0){
            return null;
        }
        $res = $res->fetch_assoc();
        $users=new self( // создаем экземпляр класса внутри класса new self указывает на то,
        // что мы саздаем экземпляр внутри самого себя
            $res['id'],
            $res['login'],
            $res['pass']
        );
       return $users;

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

        $db=DbMysqli::getInstants();
        $query = "UPDATE `users` SET `login` = '$login' WHERE `id` = $this->id LIMIT 1";
        $db->query($query);
        if ($db->affected_rows==0){
            return false;
        }
        $this->login = $login;
        return true;

    }

    public function setPass($pass)
    {

        $db=DbMysqli::getInstants();
        $query="UPDATE `users` SET `pass` = '$pass' WHERE `id`=$this->id LIMIT 1";
        $db->query($query);
        $this->pass = $pass;
        return true;

    }
}
$_GET['id'] == ''? $userId=149:$userId=$_GET['id'];
$users=Users::getUsers($userId);
if(!$users){
    die('User does not exist');
}
echo $users->getId();
echo '<br>';
echo $users->getLogin();
echo '<br>';
echo $users->getPass();

$users->setLogin('NEW Login '.rand(1,145));
$users->setPass('NEW PassWord'.rand(1,255));
echo '<br>';
echo $users->getId();
echo '<br>';
echo $users->getLogin();
echo '<br>';
echo $users->getPass();