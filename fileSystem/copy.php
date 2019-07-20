<?php
require_once 'utils/constants.php';
if (!is_dir(DUMP)){
    mkdir(DUMP);
}
if (file_exists(PATH_FILE)) {
    $filename = explode('/', PATH_FILE);// разделить строке по слешу
    $filename = array_pop($filename);// отрезать последний элемент массива
    copy(PATH_FILE, DUMP . '/' . $filename); // копировать
    die('file index.txt copy');
}
die('file not exists');