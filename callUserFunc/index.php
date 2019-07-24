<?php
require 'function/function.php';
/*
$action = isset($_REQUEST['action'])? $_REQUEST['action']:'add';
$mapper = [
    'add'=> 'addRow',
    'del'=> 'delRow',
    'upd'=> 'updateRow'
];
call_user_func($mapper[$action],rand(1,1000));*/
//или без mapper

$action = isset($_REQUEST['action'])? $_REQUEST['action']:'add';
if (function_exists($action)){
    call_user_func($action,rand(1,1000));// сразу передаем название функций.
    // эти четыри строчки кода могут реализвать любое количество функций
}
die('нет такой функции');


