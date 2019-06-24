<?php
require 'function/functionPractica.php';

init();
echo '<br>';
test();

echo '<br><br>';
$arr = [
    'test' => 'message',
    'hello' => 'world',
    'some' => 'text'
];
$html = table($arr);
echo $html.'<br>';
$arr2 =[1,2,3,7,8,78,56,78,21,78];
$html = table($arr2);
echo $html;
