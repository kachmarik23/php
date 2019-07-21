<?php
require 'buildTable.php';
function layerTest(){
$html = '<div style="background-color: cadetblue; height: 40px">Heder</div>';
$html .= '<div style="background-color: floralwhite; height: 350px">%s</div>';
return $html;
}
function mainContent($arr){
    $mainContent=buildTable($arr);
    return $mainContent;
}
