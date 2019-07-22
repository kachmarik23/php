<?php
require 'function/function.php';
echo viewTextarea();
$a=$_POST['text1'];
$b=$_POST['text2'];
print_r(getCommonWords($a,$b));
