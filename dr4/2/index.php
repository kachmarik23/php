<?php
require 'function/function.php';
viewForm();

$data = $_REQUEST['text'];
if (!empty($data)) {
    $arr = explode(' ', $data);
    echo top1($arr, $arr[0]) . '<br>';
    top3($arr);
}
