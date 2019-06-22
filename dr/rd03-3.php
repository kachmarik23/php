<?php
$X = '';
for ($i = 1; $i <= 20; $i++) {
    $X .= 'x';
    echo $X . '<br>';
}
echo '<br>';
for ($i = 1; $i < 10; $i++) {
    for ($j = 0; $j < $i; $j++) {
        $str = $i;
        echo $str;
    }
    echo '<br>';
}
$x = '';
for ($i = 0; $i < 5; $i++) {
    $x .= 'XX';
    echo $x . '<br>';
}
echo '<br>';
echo 'Задание 23<br>';
echo '<br>';
$html = "<form action='rd03-3.php' method='post'>
<input type='text' name='string'>
<input type='submit' value='send'>
";
echo $html;
$str = $_POST['string'];
for ($i = 0; $i <= strlen($str); $i++) {
    $digits[] = substr($str, $i, 1);
    $x += $digits[$i];

}
echo '<br>Cумма введенных чисел = ' . $x;


