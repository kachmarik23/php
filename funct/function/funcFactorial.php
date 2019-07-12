<?php
//1*2*3*4*5*6*7*8*9*10
function fact($N){
static $sum=1;
if ($N==1){
    return $sum;
}
$sum *=$N;
$N--;
return fact($N);
}