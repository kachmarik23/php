<?php
require_once 'HTML.php';

class User
{
    private $dbh;

    public function __construct()
    {
        $this->dbh = DBh::getInstance();
    }

    public function login($login, $pass)
    {
        $hash = "jkjpou4689RUS78Dkhj56gyg19";
        $pass = md5($pass . $hash);
        $dbh = $this->dbh;
        $res = $dbh->prepare('SELECT `username`,`admin` FROM `users` WHERE `login`=:login && `pass`=:pass LIMIT 1');
        $res->execute([':login' => $login, ':pass' => $pass]);
        $userData = $res->fetch(PDO::FETCH_ASSOC);
        if (!$userData) {
            $html = new HTML();
            $html->getLogin();
            die('user not found') ;
        }
        Session::start();
        Session::set('user', $userData);
    }

    public function logout()
    {
        Session::exit();
    }

    public function register($login, $username, $pass, $c_pass)
    {
        if($pass!==$c_pass){
            $html=new HTML();
            $html->setUser();
            die('Passwords do not match');
        }
        $hash = "jkjpou4689RUS78Dkhj56gyg19";
        $pass = md5($pass . $hash);
        $admin = 0;
        $dbh=$this->dbh;
        $res=$dbh->prepare("INSERT INTO users(login,username, pass, date, admin) VALUES (?,?,?,?,?)");
        $res->execute([$login, $username, $pass,time(),$admin]);
    }

}