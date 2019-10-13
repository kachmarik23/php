<?php
interface Response1
{
    public function response();
}
abstract class TestClassAbstract implements Response1
{
    public abstract function test();
    public function f()
    {
        echo 'Hello from test';
    }
}
class TestA extends TestClassAbstract
{

    public function response()
    {
        // TODO: Implement response() method.
    }

    public function test()
    {
        // TODO: Implement test() method.
    }
}
