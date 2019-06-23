<?php
require 'function/function.php';
hello();
sum(2,3);
echo '<br>';
echo 'a/rand + b/rand<br>';
sum (rand(1,1000), rand(1,1000));
echo '<br>';
echo 'return $sum<br>';
$a=rand(1,100);
$b=rand(1,100);
echo '$a= '.$a.' $b= '.$b;

echo '<br>$sum='.sum($a,$b).'<br>';

var_dump(compare($a,$b));

echo '<br><br>';
echo '$a= '.$a.' $b= '.$b.PHP_EOL;
if(compare($a,$b)){
    die('Значение а > чем б');
}
    die('Значение а < б');