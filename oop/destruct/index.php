<?php
class TestClass
{
    public $name;
    public $time;

    public function __construct()
    {
        $this->name = 'Name'.rand(1,100);
        $this->time = date('d-m-Y H:i:s');
        echo 'создаю';
    }
    public function __destruct()
    {
        file_put_contents('log.txt',
                            json_encode([
                                'name'=> $this->name,
                                'time'=> $this->time,
                                'update time'=> date('d-m-Y H:i:s')])
        );
        echo 'удаляю';
    }
}
$obj=new TestClass();
//unset($obj);
sleep(rand(1,3));
$obj=null;
echo '<br>test<br>';
die();