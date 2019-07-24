<?php
const FILE = 'fopen_storage/index.txt';
$file =fopen(FILE,'a');//параметр w - создаст фаил и презапишет, при вызове
//параметр a - дописывает в конце



$data[] = [
    'name' => 'user '.rand(1,2548),
    'position' =>  'developer at level ' .rand(0,80)
];
$data[] = [
    'name' => 'user '.rand(1,2548),
    'position' =>  'developer at level ' .rand(0,80)
];
$data[] = [
    'name' => 'user '.rand(1,2548),
    'position' =>  'developer at level ' .rand(0,80)
];
$data[] = [
    'name' => 'user '.rand(1,2548),
    'position' =>  'developer at level ' .rand(0,80)
];


$jsonData=json_encode($data);
fwrite($file,$jsonData);
fclose($file);//что бы не держать в памяти, ужно его закрывать


