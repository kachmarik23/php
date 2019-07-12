<?php
$N=10;

require 'function/funcFactorial.php';

echo fact($N).'<br>';

//echo 'использованно память: '.memory_get_usage();

$sum=1;
for($N; $N>=1;$N--){
    $sum *=$N;
}
echo '<br>'.$sum;

echo '<br>использованно память: '.memory_get_usage();