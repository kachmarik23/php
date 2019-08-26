<?php
function logOff (){
    unset($_SESSION['logged']);
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
    if (isset($_SESSION['logged'])&&$_SESSION['logged'] == 'true'){
        return true;
    }
    return false;
}


