<?php
require('function/function_exists.php');

if (!isset ($_GET['func'])){
    die('не задан GET параметр');
}

if (!function_exists($_GET['func'])){
    die('Такая функция не существует');
}
$someCustomFunctionName = $_GET['func'];
$someCustomFunctionName();
echo '<br>';



