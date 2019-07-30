<?php
$string='а васька слушает да ест';
echo mb_ucfirst($string);
function mb_ucfirst($string) {
    $fc = mb_strtoupper(mb_substr($string, 0, 1));
    return $fc.mb_substr($string, 1);
}



