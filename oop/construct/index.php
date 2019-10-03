<?php
class Phone
{
    public $name;
    public $storage;

    public function __construct($name,$storage)
    {
        $this->name = $name;
        $this->storage=$storage;
    }
    public function sayHello()
    {
        return 'Hello Word';
    }
}

class Iphone extends Phone
{
    public $touchID;
    public function __construct($name, $storage, $tid)
    {
        parent::__construct($name, $storage);
        $this->touchID = $tid;
    }
    public function sayHello()
    {
        return parent::sayHello().'!'; // через parent мы обращаемся к классу родителю и разширяем
        // фукцию sayHello в наследнике.'!'
    }
}
$phone=new Phone('x9', 64);
echo $phone->sayHello().'<br>';

$iphon = new Iphone('X10',128, true );
echo $iphon->sayHello();