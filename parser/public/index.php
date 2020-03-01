<?php
require_once '../class/Curl.php';
$data = ltrim($_SERVER['REQUEST_URI'],'/');
$data = array_shift(explode('?', $data));
$data = explode('/', $data);
$controller = ($data==['']||!$data)?'Curl':ucfirst(array_shift($data));
$action = ($data==['']||!$data)?'index':array_shift($data);
$params = $data;
$controllerObj = new $controller();
$controllerObj->$action();