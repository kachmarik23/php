<?php

class Test
{

}
interface ResponseInterface
{
    public function getResponse($data);
}
trait Response
{
    public function getResponse($data)
    {
        header('Content-Type: application/json');
        die(json_encode($data));
    }
}

class ABC extends Test implements ResponseInterface
{
    use Response;

    public function getData()
    {
        $arr = ['Hello' => 'World'];
        $this->getResponse($arr);
    }
    // переопределим функцию указанную в трейте.
    public function getResponse($data)
    {
      header('Content-Type: application/pdf');
    }
}

$a = new ABC();
$a->getData();