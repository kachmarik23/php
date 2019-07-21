<?php
$data = file_get_contents('serialize');
$arr = json_decode($data,true);
print_r($arr);
