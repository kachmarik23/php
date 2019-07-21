<?php

$data = file_get_contents('serialize');
$arr = unserialize($data);
print_r($arr);
