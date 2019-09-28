<?php
/*
$string='а васька слушает да ест';
echo mb_ucfirst($string);
function mb_ucfirst($string) {
    $fc = mb_strtoupper(mb_substr($string, 0, 1));
    return $fc.mb_substr($string, 1);
}

*/

/*
$simv = array("q", "w", "e", "r", "t", "y", "u", "i", "o", "p", "a", "s", "d", "f", "g", "h", "j", "k", "l", "z", "x", "c", "v",
    "b", "n", "m", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "Q", "W", "E", "R", "T", "Y", "U", "I", "O", "P", "A", "S",
    "D", "F", "G", "H", "J", "K", "L", "Z", "X", "C", "V", "B", "N", "M");
$string='';
for ($k = 0; $k < 8; $k++) {
    shuffle($simv);
    $string = $string . $simv[1];
}
$repass = $string;
die($repass);
*/
$id=1;
if(empty($id)){
    die("Залупу");
}
