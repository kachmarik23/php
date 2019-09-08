<?php
/*
// Report all errors
error_reporting(E_ALL);
// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);*/
require_once 'session/session.php';
require_once 'function/viewsget.php';
require_once 'function/function.php';
require_once 'db/db.php';
logOut ();
if (!isset($_SESSION['user']) || empty($_SESSION['user']['is_admin'])) {
    header("Location: main.php");
}
$action = $_REQUEST['action'];
switch ($action) {
    case "del":
        $id=(int)$_GET ["id"];
        removeCategory($id);
        break;
    case "del-item":
        $id=(int)$_GET ["id"];
        removeItems($id);
        break;
    case "add":
        $category=strip_tags(trim($_POST ["add_category"]));
        addCategory($category);
        break;
    case "add_items":
        $title=strip_tags(trim($_POST ["title"]));
        $description=strip_tags(trim($_POST ["description"]));
        $prise=$_POST['prise'];
        $prise=(float)str_replace (",",".",$prise);
        $category_id=(int)$_POST['category_id'];
        addItems($title,$description,$prise,$category_id);
        break;
    default:
        $html="<h1>Здравствуйте ".$_SESSION['user']['login']."!</h1>".getCategoriesView();
        $html.=getItemsView();
        $html.=getLogout();
        die($html);
        break;
}




