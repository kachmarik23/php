<?php
require_once 'function/funcalc.php';
$a=rand(1,100);
$b=rand(1,100);
$arr=['-','+','*','/'];
$operation=rand(0,3);
calc($a,$b,$arr[$operation]);
