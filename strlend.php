<?php
$string = 'Hello';
$len=strlen($string);

$restr='';
for ($i=$len-1 ; $i>-1; $i--){
$restr .= $string [$i];
}
die($restr);
