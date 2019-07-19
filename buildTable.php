<?php
function buildTable($arr){

    $html ="<table border='1'>
                <thead>
                <th>col 1</th><th>col 2</th>
                </thead>
            <tbody>";
    foreach ($arr as $value => $item){
        $html .= "<tr><td>".$value."</td><td>".$item."</td></tr>";
    };
    $html .=
        "</tbody></table>";
    return $html;
};