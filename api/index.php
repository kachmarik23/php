<?php
require 'function/function.php';
require_once 'view/views.php';
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'main';

switch ($action) {
    case 'main':
        getMainForm();
        break;
    case 'add':
        writeDat();
        break;
    case 'list':
        print_r(readData());
        break;
    default:
        die('Unknown Operation');
        break;
}
