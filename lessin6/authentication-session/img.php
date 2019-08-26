<?php

$file =(isset($_GET['file']))? $_GET['file']:'sad.png';
if (file_exists($file)){
    header('Content-Type:  image/png');
    readfile($file);
}else{
    header("HTTP/1.0 404 Not Found");
}

