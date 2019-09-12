<?php


class Phone
{
    public $color;
    protected $secret = 'secret' ;
    private $topsecret;

    function printHello()
    {
        echo $this->secret. PHP_EOL;
    }
}

$obj = new Phone();
$obj->printHello();


class Smartphone extends Phone
{
    public function getTest($message)
    {
        return $this->secret=$message;
    }
}

$samsung = new Smartphone();
echo $samsung->getTest('olololo');
