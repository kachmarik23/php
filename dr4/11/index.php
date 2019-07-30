<?php
$str = 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, 
все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а 
там хоть трава не расти.';
$text=explode('.',$str);
$count=count($text);
function mb_ucfirst($str, $encoding='UTF-8')
{
    $str = mb_ereg_replace('^[\ ]+', '', $str);
    $str = mb_strtoupper(mb_substr($str, 0, 1, $encoding), $encoding).
        mb_substr($str, 1, mb_strlen($str), $encoding);
    return $str;
}

for ($i=0;$i<$count; $i++){

    echo mb_ucfirst($text[$i].'.');
}


