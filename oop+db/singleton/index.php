<?php
require_once 'DB.php';
class A
{
    public function getData(){
        $db=DB::getInstance();
    }
}
class B
{
    public function getData(){
        $db=DB::getInstance();
        $db=DB::getInstance();
        $db=DB::getInstance();
    }
}
$a=new A();
$b=new B();
$a->getData();
$b->getData();