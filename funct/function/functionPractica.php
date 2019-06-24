<?php
/**
 * @param $arr строим таблицу
 * @return string
 */
function table($arr){

    $html = "
<table border='1'>
    <thead>
    <th>INDEX</th>
    <th>VALUE</th>
    </thead>
    <tbody>";
    $count=count($arr);
    foreach ($arr as $item=>$value){
        $html .= "<tr><td>$item</td><td>$value</td></tr>";
    }
    $html .= "</tbody></table>";
    return $html;
}
function init(){
    echo 'нициализирующая функция'.PHP_EOL.__FUNCTION__;
    function test(){
        echo 'Вложенная фунуия'.PHP_EOL.__FUNCTION__;
    }
}