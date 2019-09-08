<?php
require_once 'function/viewsget.php';
require_once 'function/function.php';
require_once 'db/db.php';
require_once 'session/session.php';
$html = getRegisterForm();
if (empty($_POST['login'])) {
    die($html);
}
$login = strip_tags(trim($_POST['login']));
$pas = strip_tags(trim($_POST['pas']));
$repas = strip_tags(trim($_POST['repas']));
if (empty($pas) || $pas !== $repas) {
    die($html . "PASS NO EMPTY OR PASS != REPASS");
}
$salt = rand(1000, 9999);
/*$pass=password_hash($pas,PASSWORD_DEFAULT); //это хеш вместо соли, соль тут по дефаулт, строка нужна в 128 символов, учше соли
echo $pass;*/
$pas = md5($pas . $salt);
$query = "INSERT INTO `user` SET `login`='$login', `pass`='$pas', `salt`=$salt";
$res = $db->query($query);
//die($query);
if ($res) {
    header('Location: main.php');
}
die ("Не удалось вставить строку: (" . $db->errno . ") " . $db->error);