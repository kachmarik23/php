<?php
/*$x=pow(3, 2);
die(''.$x);*/
echo '<br>';
echo 'Задание№ 1<br>';
$arr=[ 'html', 'css', 'php', 'js', 'jq'];
foreach ($arr as $value){
    echo "$value<br>";
}
echo '<br>';
echo 'Задание№ 2<br>';
$arr=[1, 20, 15, 17, 24, 35];
foreach ($arr as $value){
    $result+=$value;
}
echo $result;
echo '<br>';
echo '<br>Задание№ 3<br>';
$arr=[26, 17, 136, 12, 79, 15];
foreach ($arr as $value){
    $result += pow($value, 2);
}
echo $result;


