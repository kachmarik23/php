<?php
const FILE = 'fopen_storage/index.txt';
$file=fopen(FILE,'r');
$data=fread($file,filesize(FILE));
fclose($file);
print_r(json_decode($data,true));