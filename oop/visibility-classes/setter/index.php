<?php

class Phone
{
    public $color;
    protected $secret;
    private $topsecret;
    function printHello()
    {
        echo $this->secret='secret'.PHP_EOL;
    }
}
$obj = new Phone();
$obj->printHello();


class Smartphone extends Phone
{
    public function test($message)
    {
       echo $this->secret = $message;
    }
}

$iphon = new Phone();
$iphon->color;

$samsung = new Smartphone();
$samsung->test('lololololo');
