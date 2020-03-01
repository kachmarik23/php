<?php

/**
 * Class HelloWorld
 *Класс ReflectionClass сообщает информацию о классе.
 * Обзор классов
 * https://www.php.net/manual/ru/class.reflectionclass.php
 *
 */
class HelloWorld {
    const TEST =1;
    public static $t = 123;
    public function test($r, $d=1){// 1 обязательный параметр ибо $d имеет дефолтное значение

}
    public function test1(int $r){

    }


}
//$reflectionClass = new ReflectionClass('HelloWorld');
/**
*var_dump($reflectionClass->getConstants());// сведения о всех константах класса HelloWorld
*echo '<br>';
*var_dump($reflectionClass->getDocComment());// вывод комментариев к коду со всего класса
*/
//$methods = $reflectionClass->getMethods();// сведения о методах
/**
*https://www.php.net/manual/ru/class.reflectionmethod.php
*Получаем информацию о методах класса
*/
/*
foreach ($methods as $method){
    $method = new ReflectionMethod($method->class, $method->name);// создаем екземпляр ReflectionMethod
    var_dump(['data'=>$method->getParameters(), 'required' => $method->getNumberOfRequiredParameters()]);//получаем сведения
    // getParameters() - сведения о параметрах, getNumberOfRequiredParameters() - количесво обязательных параметров
}
*/
/**
 * Класс ReflectionParameter сообщает информацию о параметрах методов и функций.
 * https://www.php.net/manual/ru/class.reflectionparameter.php
 */
$r = new ReflectionParameter(array('HelloWorld', 'test1'), 0);
var_dump($r->isDefaultValueAvailable());




