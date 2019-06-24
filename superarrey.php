<?php

$a=5;
$b=10;
print_r($GLOBALS);

function test()
{
    global $a;//$a = $GLOBALS['a'];
    global $b;//$b = $CLOBALS['b'];
}


print_r($_COOKIE);

setcookie('testname','test cookie value');
die('cookies set');


if (empty($_FILES['login'])){
    $html = "<form action='superarrey.php' method='post' enctype='multipart/form-data'>
<input type='file' name='login'>
<input type='submit' value='send'>
</form>";
    die($html);
}
print_r($_FILES);


if (empty($_POST['login'])){
    $html = "<form action='superarrey.php?action=123' method='post'>
<input type='text' name='login'>
<input type='submit' value='send'>
</form>";
    die($html);
}
die('Your login is: '.$_REQUEST['login'].' and action is: '.$_REQUEST['action']);


echo '<br>';
var_dump($_GET);
echo '<br>';

if(isset($_GET['name'])){
    die($_REQUEST['name']);
}
die('NAME NOT SET');
echo '<br>';

?>