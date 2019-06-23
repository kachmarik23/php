<?php
$height=false;
$width=false;
require 'function/functionArrDat.php';
$arr = [
    'width' => 200,
    'height' => 100,
    'color' => 'red'
];
fanTest($arr);

$arr=getWidthAndHeight ();
print_r($arr);
echo '<br>';
list($width, $height)=getWidthAndHeight1 ();
echo '$width ='.$width.PHP_EOL.'$height = '.$height;
echo '<br>';
$width=getWidthAndHeight1()[0];
echo '$width = '.$width.'<br>';
echo testLinc();
echo '<br>';
getWidthAndHeightGlobal ();
print_r(
    [
  'width'=>$width,
  'height'=>$height
    ]
);
echo '<br> width'.$width;
getWidthAndHeightGlobalLinc($width, $height);
echo '<br>&$width '.$width;


