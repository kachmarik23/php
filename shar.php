<?php
$arr=['Да','Нет','Иди в жопу', false, null];
$x=15;
var_dump($arr);
die(''.$x);
shuffle($arr);
echo $arr[0];
echo '<br>';
echo '<br>';
/*===============*/
$arr=['Да','Нет','Иди в жопу'];
$count=count($arr);
$randIndex = rand(0,$count-1);
echo $arr[$randIndex];
?>