<?php
$visits=isset($_COOKIE['visiting'])?$_COOKIE['visiting']:0;
$visits++;
setcookie('visiting',$visits,time()+3600);

if (isset($_POST['color'])){
    setcookie('color', $_POST['color']);
    $_COOKIE['color']=$_POST['color'];
}
echo '<pre>';
var_dump($_POST, $_COOKIE);
echo '</pre>';
$color=!empty($_COOKIE['color']) ? $_COOKIE['color'] : 'grey';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>PHP Session</title>
</head>
<body style="background-color:  <?php echo $color ?>">

<form action="" method="post">
    <label for="color">Choose your color</label>
    <input type="text" name="color" id="color" placeholder="Введите цвет">
    <input type="submit" value="Отправить">

</form>
<footer>
    Вы посетили эту страницу <?php echo $visits ?> раз;
</footer>
</body>
</html>