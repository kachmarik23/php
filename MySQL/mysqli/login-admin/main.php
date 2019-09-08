<?php
require_once 'session/session.php';
require_once 'function/viewsget.php';
require_once 'db/db.php';
logOut ();
if (empty($_SESSION['user'])) {
    header("Location: login.php");
}
$html = "<br>".getLogout();

echo "<h1>Здравствуйте " . $_SESSION['user']['login'] . "!</h1>";
if($_SESSION['user']['is_admin']==1){
    die("<div><a href='adminget.php'>перейти в админку</a></div>".getCategoriesViewUser().getItemsViewUsers().$html) ;
}
die(getCategoriesViewUser().getItemsViewUsers().$html);


