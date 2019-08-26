<?php
include_once 'function.php';
include_once 'flow.php';

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Пример аутентификации</title>
</head>
<body style="background-color: <?php echo $color ?>">
<?php if ($loggedUser) { ?>
    <div><h3>Вы залогинены</h3></div>
    <form action="" method="post">
        <input type="hidden" name="action" value="exit">
        <input type="submit" value="Выход">
    </form>
    <hr>

    <h2>Цветовая схема</h2>
    <form action="" method="post">
        <input type="hidden" name="action" value="changeColor">
        <label for="color">Цвет: </label>
        <input type="text" name="color" id="color" placeholder="Введите цвет">
        <input type="submit" value="Изменить">
    </form>

<?php } ?>
<?php if(!($loggedUser)){ ?>

<h2>Форма аутентификации</h2>
<form id="loginForm" method="post" action="">
    <input type="hidden" name="action" value="login">
    <label for="login">Логин: </label>
    <input type="text" name="login" id="login" placeholder="Введите логин">
    <label for="pas">Пароль: </label>
    <input type="password" name="pas" id="pas" placeholder="Введите пароль">
    <input type="submit" value="Войти">
</form>
<?php } ?>
<footer style="margin-top: 25px">
    <hr>
    Вы посетили страницу <?php echo $_COOKIE['visiting'] ?> раз.
</footer>
</body>
</html>
