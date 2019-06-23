<?php
function funcTest(...$args){
    //print_r($args);
    $count=count($args);
    for ($i=0;$i<$count;$i++){
        echo $args[$i].'<br>';
    }
}