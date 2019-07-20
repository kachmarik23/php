<?php
require_once 'utils/constants.php';
if (!is_file(PATH_FILE)){
    die('file not exist');
}
die (file_get_contents(PATH_FILE));
