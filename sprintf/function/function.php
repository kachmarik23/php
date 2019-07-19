<?php
require '../buildTable.php';
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