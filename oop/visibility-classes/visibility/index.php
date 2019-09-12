<?php
class  MyClass
{
    public $public='public';
    protected $protected='protected';
    private $private='private';

    function printHello()
    {
        echo 'MyClass родитель $public, $protected, $private<br>';
        echo $this->public.'<br>';
        echo $this->protected.'<br>';
        echo $this->private.'<br><br>';
    }
}

class MyClass2 extends MyClass
{
    // Мы можем переопределить общедоступные и защищенные свойства, но не закрытые
    public $public='public 2';
    protected $protected='protected2';
    function printHello()
    {
        echo 'MyClass2 наследник MyClass переопледелины $public, $protected, поле $private не доступно<br>';
        echo $this->public.'<br>';
        echo $this->protected.'<br>';
       // echo $this->private;
    }
}
$obj=new MyClass();
///////////////////////////////////////////
/*echo $obj->public; // Работает
echo $obj->protected; // Неисправимая ошибка
echo $obj->private; // Неисправимая ошибка*/
/////////////////////////////////////////////
$obj->printHello();// Выводит Public, Protected и Private

$obj2=new MyClass2();
/*/////////////////////////////
echo $obj2->public; // Работает
echo $obj2->private; // Неопределен
echo $obj2->protected; // Неисправимая ошибка
*/////////////////////////////
$obj2->printHello(); // Выводит Public2, Protected2, Undefined

