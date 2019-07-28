<?php
require 'openfile.php';
const FILE = 'storage/index.txt';
$file = fopen(FILE,'a');
$data[]=[
  'name'=>'user '.rand(1,100),
   'level'=>'developer level '.rand(0,80)
];
$data[]=[
    'name'=>'user '.rand(1,100),
    'level'=>'developer level '.rand(0,80)
];
$data[]=[
    'name'=>'user '.rand(1,100),
    'level'=>'developer level '.rand(0,80)
];
$data[]=[
    'name'=>'user '.rand(1,100),
    'level'=>'developer level '.rand(0,80)
];
$data[]=[
    'name'=>'user '.rand(1,100),
    'level'=>'developer level '.rand(0,80)
];

$jsonData=json_encode($data);
fwrite($file,$jsonData);
fclose($file);
print_r(openFile());