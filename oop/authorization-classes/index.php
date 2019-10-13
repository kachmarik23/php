<?php
require_once 'classes/DbMysqli.php';
require_once 'classes/user.php';
require_once 'classes/session.php';
Session::start();//запуск сессии
$action = empty($_REQUEST['action']) ? 'login' : $_REQUEST['action'];
switch ($action) {
    case 'login':
        if(!empty($_POST['id'])){
           $user = User::getUsers($_POST['id']);// вызываем метод getUsers из класса User,
            // создаем экземпляр класса  внутри класса User,
            // (Session::getUserID()) возвращаем id пользователя из сессии
           if (!$user){
                header('Location: /oop/authorization-classes/index.php?action=login');
                die();
            }
            header('Location: /oop/authorization-classes/index.php?action=main');
        }else{
            echo "
            <form action='index.php?action=login' method='post'>
            <input type='text' placeholder='ID' name='id' id='id'>
            <input type='submit' value='Ok'>
            </form>";
        };
        break;
    case 'main':
        if(!Session::checkUser()){
            header('Location: /oop/authorization-classes/index.php?action=login');
                    }
        echo "<a href='index.php?action=logout'>LogOut</a><br><br>";
        echo '<h3>User:</h3>';
        $user = User::getUsers(Session::getUserID());// вызываем метод getUsers из класса User,
        // создаем экземпляр класса  внутри класса User,
        // (Session::getUserID()) возвращаем id пользователя из сессии
        echo '<form action="index.php?action=update" method="post">
              <label for="id">ID:</label>
              <input disabled type="text"  placeholder="id" value="'.$user->getId().'">
              <label for="login">Login:</label>
              <input type="text" name="login" id="login" placeholder="id" value="'.$user->getLogin().'">
              <label for="pass">Password:</label>
              <input type="text" name="pass" id="pass" placeholder="id" value="'.$user->getPass().'">
              <input type="submit" value="change">';
        break;
    case 'update':
        if(!Session::checkUser()){
            header('Location: /oop/authorization-classes/index.php?action=login');
        }
        if(empty($_POST['login']||$_POST['pass'])){
            die('Нет данных');
        }
        $user = User::getUsers(Session::getUserID());// вызываем метод getUsers из класса User,
        // создаем экземпляр класса  внутри класса User,
        // (Session::getUserID()) возвращаем id пользователя из сессии
        $user->setLogin($_POST['login']);
        $user->getPass($_POST['pass']);
       header('Location: /oop/authorization-classes/index.php?action=main');
        break;
    case  'logout':
        Session::unsetUser();
         header('Location: /oop/authorization-classes/index.php?action=login');
        break;
    default:
        break;
}