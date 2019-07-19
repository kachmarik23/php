<?php
require 'function/function.php';
$action = !isset($_GET['action'])? 'main': $_GET['action'];

switch ($action){
    case 'main':
        echo getMainView ();
        break;
    case 'login':
        if ($_POST['login']){
            die('мы вводим логин');
        }
        echo getLoginView ();
        break;
    case 'logout':
        echo getLogoutView ();
        break;
    case 'other':
        echo getOtherView ();
        break;
    default:
        die('Unknown operation');
}