<?php
include_once 'function.php';
include_once 'flow.php';
if ($loggedUser){
    header('Location: index.php');
    die();
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LogIn</title>
</head>
<body style="background-color: <?php echo $color ?>">
<h2>Форма аутентификации</h2>
<form id="loginForm" method="post" action="">
    <input type="hidden" name="action" value="login">
    <label for="login">Логин: </label>
    <input type="text" name="login" id="login" placeholder="Введите логин">
    <label for="pas">Пароль: </label>
    <input type="password" name="pas" id="pas" placeholder="Введите пароль">
    <input type="submit" value="Войти">
</form>
</body>
</html>
<?php include_once 'footer.php';?>