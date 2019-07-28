<?php
const FILE = 'storage/index.txt';
function openFile(){
    $file=fopen(FILE,'r');
    $data=fread($file,filesize(FILE));
    fclose($file);
    $jsonData=json_decode($data,true);
    return $jsonData;
}

