<?php
require_once 'utils/constants.php';
if (!is_dir(DIR)){

    mkdir(DIR);
}
file_put_contents(PATH_FILE, rand(1,1000).' ', FILE_APPEND);
die('write');



