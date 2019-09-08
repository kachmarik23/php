<?php
require_once 'function/function.php';
require_once 'function/viewsget.php';
require_once 'db/db.php';
require_once 'session/session.php';
$html = getLoginForm();
if (empty($_POST['login'])) {
    die($html);
}
$login = strip_tags(trim($_POST['login']));
$pas = strip_tags(trim($_POST['pas']));
$query = "SELECT * FROM `user` WHERE `login` = '$login' LIMIT 1";
$res = $db->query($query);
if (!$res) {
    die("Не удалось найти строку (" . $db->errno . ")" . $db->error);
}
if ($db->affected_rows === 1) {
    $userData = $res->fetch_assoc();
    $pas = md5($pas . $userData['salt']);
    if ($pas === $userData['pass']) {
        $_SESSION['user']=[
            'login'=>$userData['login'],
            'is_admin'=>$userData['is_admin']
        ];
        $isAdmin=$_SESSION['user']['is_admin'];

        if(!empty($isAdmin)){
            header("Location: adminget.php");
        }else{
            header("Location: main.php");
        }

    }
}
die($html . "Неверно указано имя пользователя или пароль");