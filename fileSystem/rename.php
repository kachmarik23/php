<?php
    require_once 'utils/constants.php';
    if (file_exists(PATH_FILE)){
        rename(PATH_FILE,DIR.'/index.json');
        die('file index.txt rename');
    }
    die('file not exists');

