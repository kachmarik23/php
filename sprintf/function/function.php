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
function getLayout(){
    $html = "<div style='height: 40px; background-color: aquamarine'>
                Header
            </div>
            <div style='height: 300px; background-color: #f7f7f7f7'>
            %s
            </div>";
    return $html;
}
function getMainContent(){
    $arr =['type'=>'content',
            'avtor'=>'admin'];
    $table = buildTable($arr);
return 'Это мой контент'.$table;
}

function getOtherContent(){
return 'Это другой контент';
}