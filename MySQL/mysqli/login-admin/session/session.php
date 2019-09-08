<?php
if (isset($_COOKIE['session_id'])) {
    session_id($_COOKIE['session_id']);//если есть сохраненная кука с сессией мы ее читаем и стартуем с этой сессией
    //session_start();
}
session_start();//иначе стартуем с новой и записываем id сессии в куку
setcookie('session_id', session_id());

function logOut (){
    if (isset($_POST['action']) && $_POST['action'] == 'exit') {
        unset($_SESSION['user']);
        unset($_COOKIE['session_id']);
        setcookie('session_id', '');
    }
}

