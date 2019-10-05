<?php
class A
{
    public function sayHello ()
    {
        return 'Helo from '.__METHOD__;
    }
}

class B extends A
{
    public function sayHello ($old=false)
    {
        if ($old){
          return  parent::sayHello(); // вызываем свойства родителя
        }
        return 'Helo from '.__METHOD__;
    }
}
class C extends B
{
    public function test1 ($old=false)
    {
        return $this->sayHello($old);
    }

}

$c = new C();
echo $c->test1(true).'<br>';
echo $c->test1().'<br>';
