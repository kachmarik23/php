<?php
require_once 'DB.php';
class A
{
    public function getData(){
        $db=DBh::getInstance();
    }
}
class B
{
    public function getData(){
        $db=DBh::getInstance();
        $db=DBh::getInstance();
        $db=DBh::getInstance();
    }
}
$a=new A();
$b=new B();
$a->getData();
$b->getData();