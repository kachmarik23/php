<?php
$s='<p>Созерцание непредсказуемо. Структурализм абстрактен.</p>';
str_trim($s);
function str_trim($s){
    $s = trim($s, '</p>');
    //$s = explode('/', $s);
    echo $s;
}
