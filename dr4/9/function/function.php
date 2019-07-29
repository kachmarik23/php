<?php
function viewForm(){
    $html='<form action="" method="post">
<input type="text" name="text">
<input type="submit" value="Submit">
</form>';
    echo $html;
}
function string(){
    $str='';
    $string=$_REQUEST['text'];
    $count=strlen($string);
    for ($i=$count; $i>-1; $i--){
        $str.=substr($string,$i,1);
    }
    echo $str;
}
function stringRevers(){
    $string=$_REQUEST['text'];
    echo strrev($string);;

}
