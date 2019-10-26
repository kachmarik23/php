<?php
spl_autoload_register(function ($class) {
    $patch = 'classes/' . $class . '.php';

    if (file_exists($patch)) {
        require_once "$patch";
        return;
    }
    die('class ' . $class . ' no exist');
});
$action = empty($_REQUEST['action']) ? 'index' : $_REQUEST['action'];
switch ($action) {
    case 'index':
        Session::start();
        $html=new HTML();
        $html->getHi();
        $comment=new Comment();
        $comment->index();
        break;
    case 'add_comment':
        Session::start();
        $text = strip_tags(trim($_POST['text']),['<br>','<b>','<p>']);
        if(!empty($text)){
            $comment=new Comment();
            $comment->add($text);
        }
        $html=new HTML();
        $html->setAddComment();
        break;
    case 'del_comment':
        Session::start();
        $username=$_SESSION['user']['username'];
        $comment=new Comment();
        $comment->delete($username);
        break;
    case 'show_comment':
        if(!$id=$_POST){
            header('Location: /login-logout-addcomment-oop/');
        }
        $comment=new Comment();
        $comment->show($id);
        break;
    case 'login':
        if(!isset($_POST['login'])){
            $html=new HTML();
            $html->getLogin();
            die();
        }
        $user=new User();
        $login =  strip_tags(trim($_POST['login']));
        $pass =  strip_tags(trim($_POST['pass']));
        if(!$login||!$pass){
            $html=new HTML();
            $html->getLogin();
            die();
        }
        $user->login($login,$pass);
        header('Location: /login-logout-addcomment-oop/');
        break;
    case 'register':
        if(!isset($_POST['login'])){
            $html=new HTML();
            $html->setUser();
            die();
        }
        $user=new User();
        $login =  strip_tags(trim($_POST['login']));
        $username =  strip_tags(trim($_POST['username']));
        $pass =  strip_tags(trim($_POST['pass']));
        $c_pass =  strip_tags(trim($_POST['c_pass']));
        $user->register($login,$username,$pass,$c_pass);
        header('Location: /login-logout-addcomment-oop/index.php?action=login');
        break;
    case 'logout':
        Session::start();
        $user=new User();
        $user->logout();
        header('Location: /login-logout-addcomment-oop/');
        break;
}