<?php
/*
// Report all errors
error_reporting(E_ALL);
// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);*/
require_once 'session/session.php';
require_once 'function/viewspost.php';
require_once 'function/function.php';
require_once 'db/db.php';

if (!isset($_SESSION['user']) || empty($_SESSION['user']['is_admin'])) {
    header("Location: main.php");
}
$action = $_REQUEST['action'];
switch ($action) {
    case "del":
        $id=(int)$_POST ["del_category"];

        $query="DELETE FROM `categories` WHERE `id`='$id' LIMIT 1 ";
        $res = $db->query($query);
        if ($res) {
            header('Location: admin.php');
        }
        die ("Не удалось удалить категорию: (" . $db->errno . ") " . $db->error);
        break;
    case "add":
        $category=strip_tags(trim($_POST ["add_category"]));

        if(!empty($category)){
            $query="INSERT INTO `categories` SET `name`='$category'";
            $res = $db->query($query);
            if ($res) {
                header('Location: admin.php');
            }
            die ("Не удалось вставить категорию: (" . $db->errno . ") " . $db->error);
        }
        die(header('Location: admin.php'));
        break;
    default:
        die(getCategoriesView());
}



