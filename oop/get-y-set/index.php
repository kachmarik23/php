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
        //MySQL update login
        // IF MySQL NOT ok return false
        // IF MySQL == ok
        $this->login = $login;
        return true;

    }

    public function setPass($pass)
    {
        //MySQL update pass
        // IF MySQL NOT ok return false
        // IF MySQL == ok
        $this->pass = $pass;
        return true;

    }
}

//MySQL SELECT
$user = new User(115, 'admin', '123456');
echo 'ID: ' . $user->getId();
echo '<br>';
echo 'Login: ' . $user->getLogin();
echo '<br>';
echo 'Password: ' . $user->getPass();
echo '<br>';
echo '<br>';
$user->setLogin('NEW Login');
$user->setPass('NEW Password');
echo 'ID: ' . $user->getId();
echo '<br>';
echo 'Login: ' . $user->getLogin();
echo '<br>';
echo 'Password: ' . $user->getPass();
echo '<br>';
