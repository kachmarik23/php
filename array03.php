<?php
$array = array(1,2,3,4,5,'data',false,5.5);
print_r($array);
echo '<br>';
print_r($array[5]);
echo '<br>'.($array[5]);
$array2 =[1,2,3,4,5,'data',false,5.5];
echo '<br>';
var_dump($array2);
$array2[]=23;
$array2[100]='сотый элемент';
$array2[]=[101,102,103];
echo '<br>';
var_dump($array2);
$car=['tip'=>'седан','maxSpeed'=>'200','potencia'=>270];
echo '<br>';
$car[]=23;
print_r($car);
echo '<br>';
$car2=[
    'type'=>'седан',
    'maxSpeed'=>215,
    'potencia'=>275,
    'owner'=>[
        'name'=>'Олег',
        'age'=>43
    ]
];
print_r($car2);
echo '<br>'.PHP_EOL;
print_r($car2['owner']['name']);
echo '<br>'.($car2['owner']['name']).'<br>';
$car2=[
    'type'=>'седан',
    'maxSpeed'=>215,
    'potencia'=>275,
    'owner'=>[
        'name'=>'Олег',
        'age'=>43
    ]
];
unset($car2['owner']['age']);
print_r($car2);
echo '<br>';
$car2=[
    'type'=>'седан',
    'maxSpeed'=>215,
    'potencia'=>275,
    'owner'=>[
        'name'=>'Олег',
        'age'=>43
    ]
];
$car2['owner']['age']=null;
print_r($car2);
echo '<br>';
$arr=[123,345,567,789];
print_r($arr).PHP_EOL;
echo '<br>';
$tmp=$arr[1];
$arr[1]=$arr[0];
$arr[0]=$tmp;
print_r($arr);
echo '<br>';
$arr=[123,568,4,8,459,56];
$arrBackup = $arr;// что бы сравнить массивы до и после
echo'Массив до сортировки: ';
print_r($arr);
sort($arr);
echo '<br>Массив после сортировки sort(): ';
print_r($arr);
$arr=[123,568,4,8,459,56];

asort($arr);
echo '<br>Массив после сортировки asort(): ';
print_r($arr);
ksort($arr);
echo '<br>Вернули массив в исходное состояние отсортировав его по ключам ksort: ';
print_r($arr);
?>