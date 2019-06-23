<?php
function calc($a,$b,$operation){
    /*print_r(func_get_args());
    die();*/
    echo '$a = '.$a.'<br>';
    echo '$b = '.$b.'<br>';
    echo '$operation: '.$operation.'<br>';
    switch ($operation){
        case '-':
            echo $a-$b;
            break;
        case'+':
            echo $a+$b;
            break;
        case '*':
            echo $a*$b;
            break;
        case '/':
            echo $a/$b;
            break;
        default:
            die('неизвестная операция');
            break;

    }
}
