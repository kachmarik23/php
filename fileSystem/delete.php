<?php
require_once 'utils/constants.php';

if (file_exists(PATH_FILE)) {
    unlink(PATH_FILE);
    rmdir(DIR);
    die('del empty dir');
} else {
    die('file not exist');
}


