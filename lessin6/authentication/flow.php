<?php

$visits=isset($_COOKIE['visiting'])?$_COOKIE['visiting']:0;
$visits++;
setcookie('visiting',$visits,time()+3600);
$_COOKIE['visiting']=$visits;
if (isset($_POST['action'])&&$_POST['action']=='changeColor'){
    setcookie('color', $_POST['color']);
    $_COOKIE['color']=$_POST['color'];
}
$color=!empty($_COOKIE['color']) ? $_COOKIE['color'] : 'grey';

if (isset($_POST['action'])&&$_POST['action']=='login'){
if(isValidCredentials($_POST['login'], $_POST['pas'])){
    setcookie('logged','true',time()+3600);
    $_COOKIE['logged']='true';
};

}
$loggedUser=isLogged();
if (isset($_POST['action'])&&$_POST['action']=='exit'){
    logOff ();
}
//echo '<pre>';
//var_dump($_POST, $_COOKIE, $loggedUser);
//echo '</pre>';
