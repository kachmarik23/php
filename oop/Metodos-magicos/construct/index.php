<?php
///////// КОНСТРУКТОР
class Phone
{
    public $name;
    public $model;
    public $storage;

    public function __construct($name, $model, $storage)
    {
        $this->name = $name;
        $this->model = $model;
        $this->storage = $storage;

    }
   /* public function __clone()
    {
        die('незя копировать');
    }*/
}

$obj = new Phone("iphone", "7", 128);
$obj2=$obj;
$obj2->model="7S";

// объекты передаются по ссылке, изменив один объект, вы измените и другой
var_dump($obj);
echo '<br>';
var_dump($obj2);
echo '<br>';
// По ссылке через функцию  update мы обновляем значение обекта 2 update($obj2);.
function update($obj)
{
    $obj->model = "6S";

}
update($obj2);
//////////////
//$obj2= clone $obj; //клонирование объекта, мы создаем независимую копию $obj
///////////////////
var_dump($obj);
echo '<br>';
var_dump($obj2);
echo '<br>';
////////////////////////
///
/// Использование унифицированных конструкторов
///
/// ////////////////////

class BaseClass
{
    function __construct()
    {
        print ("Конструктор класса BaseClass<br>");
    }
}

class SubClass extends BaseClass
{
    function __construct()
    {
        parent::__construct();// возвращает конструктор родителького класса
            print ("Конструктор класса SubClass<br>");
    }
}

class OtherSubClass extends BaseClass
{
    //наследует конструктор BaseClass
}

// Конструктор класса BaseClass
$obj = new BaseClass();

// Конструктор класса BaseClass
// Конструктор класса SubClass
$obj= new SubClass();
// Конструктор класса BaseClass
$obj = new OtherSubClass();