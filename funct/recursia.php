<?php
require 'function/funRecursia.php';
$arr=[];
for($i=0;$i<10;$i++){
    $arr[]=rand(-100,100);
}

echo count_arr($arr);
echo '<br>';
printArr($arr);
