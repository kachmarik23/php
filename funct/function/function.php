<?php
function hello(){
    echo 'Привет мир<br>';
}
function sum($a,$b){
    $summ=$a+$b;
    /*echo $a.'+'.$b.'='.$summ.'<br>';*/
    return $summ;
}

/**
 * @param int $a
 * @param int $b
 * @return bool
 */
function compare (int $a, int $b){
    if ($a>$b){
    $result=true;
    }else{
        $result=false;
    }

    return $result;
}



function testRet($a,$b){
    if ($a<$b){
        return true;
    }
    return false;
}

