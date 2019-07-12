<?php
function countArr($arr){
    static $count =0;
    if (empty($arr)){
        return $count;
    }
    $count++;
    array_pop($arr);
    return countArr($arr);
}