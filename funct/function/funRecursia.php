<?php
function count_arr($arr, $count = 0)
{
    if (empty($arr)) {
        return $count;
    }
    array_pop($arr);
    $count++;
    return count_arr($arr, $count);
}
function printArr($arr){
    if(empty($arr)){
        return;
    }
    echo array_shift($arr).'<br>';
    return printArr($arr);
}