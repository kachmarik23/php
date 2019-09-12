<?php

class Phone//класс
{
    public $display;//свойство public поле достуано везде
    public $storage;//параметр класса
    public $color;

}
class Samsung extends  Phone//класс samsung наследует свойства класса Phone
{

}

class Iphone extends Phone
{

}
/*
$samsung = new Phone();//объект экземпляр класса Phone
$samsung->display = '5';//инициалезация поля
$samsung->storage = '64';
$samsung->color = 'black';
$samsung->test ='test message';

$iphone = new Phone();
$iphone->display = '6';
$iphone->storage = '28';
$iphone->color = 'red';

die("Цвет айфона ".$iphone->color);
*/
$samsung= new Samsung();
$samsung->color='red';
$samsung->storage='128';
$samsung->display='5.5';

$iphone=new Iphone();
$iphone->color = 'plata';
$iphone->storage = '64';
$iphone->display='5.5';
var_dump($samsung);
var_dump($iphone);
die("Storege: ".$iphone->storage);


