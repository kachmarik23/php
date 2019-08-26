<?php

include_once 'function.php';
include_once 'flow.php';
if (!($loggedUser)){
    header('Location: login.php');
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
    <title>Пример аутентификации</title>
</head>
<body style="background-color: <?php echo $color ?>">
<?php if ($loggedUser) { ?>
    <div><h3><?=$_SESSION['name']?> Вы залогинены</h3></div>
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

<?php }
include_once 'footer.php';
?>

</body>
</html>
