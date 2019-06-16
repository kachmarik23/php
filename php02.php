<?php
$code = "hello world";
echo $code.PHP_EOL;
$code = "Hello";
echo $code.PHP_EOL;
$price = 'cart';
$cart = 'test';
$$price = 'qwerty';
echo $cart;
echo '<br>';
echo "передача переменной по ссылке, \$x = & \$y".'<br>';
$y = 'переменная У'.PHP_EOL.'<br/>';
$x = & $y;
echo $x;
$x = 'уже не ровно У'.PHP_EOL.'<br/>';
echo $y;
print_r(['1','2','3']);
echo "<br>";
define('NAZVANIE_CONSTANTI', 'значение константы');
$name='NAZVANIE_CONSTANTI';
echo constant($name).'<br>';

echo NAZVANIE_CONSTANTI.'<br>';// константа без доллара
echo 'Волшебные константы: __LINE__, __FILE__...их всего 8 - '.PHP_EOL.__LINE__.PHP_EOL.__FILE__.'<br>';

$varOne = 2;

$varOne += 10; // прибавляем к переменной то что справа, так же * и /
echo '" $varOne += 10"'.' = '.$varOne.'<br>';

$varOne = 20;
echo '" $varOne /= 2"'.' = '.$varOne /=2;

$integerVar = 123;
echo '<br>'.'приобразование переменных - (bool) $integerVar'.' = '.(bool)$integerVar;
echo '<br>'.'приобразование переменных - (string) $integerVar'.' = '.(string)$integerVar;
echo '<br>'.'приобразование переменных - (integet) $integerVar'.' = '.(int)$integerVar;

$var = 123.123;
echo '<br>'.'(intenger) $var, если вар = 123,123 будет равно - '. (int)$var;
echo '<br>'.'епереводим integer во flaot (float)$var - '. (float) $var;
$string = '123qwerty';
echo '<br>$string = \'123qwerty\'; = '. (int)$string.PHP_EOL.(float)$string;
$string1 = 'qwerty123';
echo '<br>$string1 = \'qwerty123\'; = '. (int)$string1;
unset($string1);
echo '<br>'.$string1;
$arrVar = array ('пременная 1', 'переменная 2', 'переменная 3');// устаревшая конструкция
$arrVar = ['keyOne'=>'пременная 1', 'переменная 2', 'переменная 3'];
echo '<br>';
var_dump($arrVar);
echo '<br>';
unset ($arrVar[1]);
print_r($arrVar);
$i = 1;
echo '<br>'.++ $i;

echo '<br>'.'Остаток от деления 203 % 2 = '. 203%2;
echo '<br><br><br>'.'функция isset для проверки наличия переменной или массива'.'<br>';
$varTvo = 123;
if (isset($varTvo)){
echo $varPrice = $varTvo-12;
}

$a = "test";
$b = "anothertest";
echo '<br>';
var_dump(isset($a)).PHP_EOL;     // TRUE
var_dump(isset($a, $b));
$x = null;
if (!empty($x)){
 echo '<br>correcto';
}
echo '<br> если 3<5'.PHP_EOL;
$a = 3;
$b = 5;
$a<$b?$varVar='условие верно':$varVar='условие не верно';
echo $varVar.'<br>';
echo '<br> если 5<3'.PHP_EOL;
$varVar1=$b<$a?'условие верно':'условие не верно';;
echo $varVar1.'<br>';
echo '<br>'.$price = (25<30)? 'OK':'DUE';
echo '<br>'.$x=(isset($cart))??(isset($price))??(isset($a));


$i = 1;
switch ($i){
    case 'значение 1':
        echo '<br> $i == значение 1';
        break;
    case 1:
        echo '<br> $i == 1';
        break;
}

echo '<br><br>';
echo 'Rounding modes with 9.5' . PHP_EOL;
var_dump(round(9.5, 0, PHP_ROUND_HALF_UP));
var_dump(round(9.5, 0, PHP_ROUND_HALF_DOWN));
var_dump(round(9.5, 0, PHP_ROUND_HALF_EVEN));
var_dump(round(9.5, 0, PHP_ROUND_HALF_ODD));
echo'<br>';
echo 'Rounding modes with 8.5' . PHP_EOL;
var_dump(round(8.5, 0, PHP_ROUND_HALF_UP));
var_dump(round(8.5, 0, PHP_ROUND_HALF_DOWN));
var_dump(round(8.5, 0, PHP_ROUND_HALF_EVEN));
var_dump(round(8.5, 0, PHP_ROUND_HALF_ODD));
echo '<br>';
echo 'Rounding 9.5 = ' . PHP_EOL;
echo round(9.5).';';
echo '<br>';
echo 'floor 9.5 = ' . PHP_EOL;
echo floor(9.5).';';
?>