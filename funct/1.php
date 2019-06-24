<?php
$arr =[1,2,3];
if (!empty($arr)){
    $count=count($arr);
    die(''.$count);
}
die('не выполнено условие');