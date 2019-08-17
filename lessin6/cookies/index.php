<?php
if (isset($_POST['color'])){
    setcookie('color', $_POST['color']);
    $_COOKIE['color']=$_POST['color'];
}
echo '<pre>';
var_dump($_POST, $_COOKIE);
echo '</pre>';
$color=isset($_COOKIE['color']) ? $_COOKIE['color'] : 'grey';
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
    <div style="clear: both"></div>
    <input type="submit" value="Отправить">

</form>
</body>
</html>