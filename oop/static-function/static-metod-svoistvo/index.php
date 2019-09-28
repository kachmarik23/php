<?php

class Calculator
{
    public static function sum($a, $b)
    {
        return (int)$a + (int)$b;
    }

    public static function sub($a, $b)
    {
        return (int)$a - (int)$b;
    }

    public static function mul($a, $b)
    {
        return (int)$a * (int)$b;
    }

    public static function dev($a, $b)
    {
        return (int)$a / (int)$b;
    }
}

$a = rand(1, 50);
$b = rand(1, 50);

$res = Calculator::sum($a, $b);
echo "a = $a + b = $b; res = $res <br>";
$res = Calculator::sub($a, $b);
echo "a = $a - b = $b; res = $res <br>";
$res = Calculator::mul($a, $b);
echo "a = $a * b = $b; res = $res <br>";
$res = Calculator::dev($a, $b);
echo "a = $a / b = $b; res = $res <br>";

class Foo //статический метод
{
    public static function aStaticMethod()
    {
        print ('Статический метод <br>');
    }
}

Foo::aStaticMethod();// вариант 1
//////////////
$classname = 'Foo';// объявили класс для варианта 2
$classname::aStaticMethod();// вариант 2

class Svoistvo //статическое свойство
{
    public static $my_static = 'Статическое свойство <br>';
    public function staticValue()
    {
        return self::$my_static;
    }

}
class Svoistvo2 extends Svoistvo
{
    public function svoistvoStatic()
    {
        return parent::$my_static;
    }
}
print  Svoistvo::$my_static;//вариант 1 лимитер

 $foo = new Svoistvo();
 print $foo->staticValue() . "\n";
 print $foo->my_static . "\n";/// Не определено свойство my_static


$classname = 'Svoistvo';// вариант 2 константы
print $classname::$my_static . "\n";

print Svoistvo2::$my_static;
// к полю Svoistvo мы уже можем обратиться как к обычному динамическому свойству класса через
// дочерний класс Svoistvo2 который в методе svoistvoStatic() обращается к статическому свойству $my_static
// через parent::$my_static; которое ссылается на базовый класс
//
$svoistvo2 = new Svoistvo2();
print $svoistvo2->svoistvoStatic();
