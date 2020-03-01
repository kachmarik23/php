<?php
$pass ='951149Alona';
$pr = '@^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z]{6,}$@';
$prA = '@[A-Z]{1,}@';
$pr1 = '@[0-9]{1,}@';

$val = preg_match($pr,$pass);
$valA = preg_match($prA,$pass);
$val1 = preg_match($pr1,$pass);
if (!$val){
    print('a-z: '.$val.'<br>A-Z:'.$valA.'<br>0-9: '.$val1);
    die('Не корректно');
}else{
    die('a-z: '.$val.'<br>A-Z:'.$valA.'<br>0-9: '.$val1);
}
