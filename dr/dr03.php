<?php
echo '<br>';
echo 'Задание№ 1<br>';
$arr = ['html', 'css', 'php', 'js', 'jq'];
foreach ($arr as $value) {
    echo "$value<br>";
}
echo '<br>';
echo 'Задание№ 2<br>';
$arr = [1, 20, 15, 17, 24, 35];
foreach ($arr as $value) {
    $result += $value;
}
echo $result;
echo '<br>';
echo '<br>Задание№ 3<br>';
$arr = [26, 17, 136, 12, 79, 15];
foreach ($arr as $value) {
    $result += pow($value, 2);
}
echo $result;
echo '<br>';
echo '<br>Задание№ 4<br>';
$arr = ['green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой'];
foreach (array_flip($arr) as $item) {
    echo "$item<br>";
}
echo '<br>';
foreach ($arr as $value) {
    echo "$value<br>";
}
echo '<br>';
echo '<br>Задание№ 5<br>';
$arr=[
    'Коля'=>'200',
    'Вася'=>'300',
    'Петя'=>'400'
];
foreach ($arr as $item=>$value){
    echo "$item - зарплата $value долларов <br>";
}
echo '<br>';
echo '<br>Задание№ 6<br>';
$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
foreach ($arr as $item=>$value){
    $en[]=$item;
    $ru[]=$value;
}
print_r($en);
echo '<br>';
print_r($ru);
echo '<br>';
echo '<br>Задание№ 7<br>';
$arr=[2, 5, 9, 15, 0, 4];
foreach ($arr as $value){
    if ($value>3&&$value<10){
        echo $value.PHP_EOL;
    }
}
echo '<br>';
echo '<br>Задание№ 8<br>';
$arr=[];
for ($i=1; $i< 10; $i++){
    $arr[]=$i;
}
foreach ($arr as $value){
    $str.=$value;
}
var_dump($str);
echo '<br>';
echo '<br>Задание№ 9<br>';
/*
for($i=1;$i<=100;$i++){
   echo '<br>'.$arr[]=$i;
}
$i=1;
while ($i<=100){
    echo '<br>'.$i;
    $i++;
}
*///работает но занимает много места
echo '<br>';
echo '<br>Задание№ 10<br>';
$i=11;
while ($i<=33){
    echo '<br>'.$i;
    $i++;
}
echo '<br>';
echo '<br>Задание№ 11<br>';
for($i=0;$i<=100;$i++){
    $j=$i%2;
    if ($j===0){
        echo $i.'<br>';
    }
}
