<?php
function logOff (){
    unset($_COOKIE['logged']);
    setcookie('logged','');
}
function isValidCredentials($login, $pas)
{
    $users=[
      'admin'=>'12345',
      'user'=>'999'
    ];
    if (isset($users[$login])&&$users[$login]==$pas){
        return true;
    }
        return false;
}

function isLogged(){
    if (isset($_COOKIE['logged'])&&$_COOKIE['logged'] == 'true'){
        return true;
    }
    return false;
}


