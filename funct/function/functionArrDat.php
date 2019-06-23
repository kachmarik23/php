<?php
function fanTest ($arr){
    if (isset($arr['width'])){
        echo('установим width<br>');
    }
    if (isset($arr['height'])) {
        echo('установим height<br>');
    }
    if (isset($arr['color'])) {
        echo('установим color<br>');
    }
}
function getWidthAndHeight (){
    $width = rand(1,100);
    $height = rand(1,100);
    $arr=[
        'width'=>$width,
        'height'=>$height
    ];
    return $arr;
}

function getWidthAndHeight1 (){
    global $width;
    global $height;
    $width = rand(1,100);
    $height = rand(1,100);

    return [$width, $height];
}
function testLinc(){
   //echo $GLOBALS['a'];
   global $a;
   echo $a;

}

function getWidthAndHeightGlobal (){
    global $width;
    global $height;
    $width = rand(1,100);
    $height = rand(1,100);

}

function getWidthAndHeightGlobalLinc (&$width, &$height){

    $width = rand(1,100);
    $height = rand(1,100);

}