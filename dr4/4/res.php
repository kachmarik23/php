<?php
const DIR = 'd:/php/domains/webinar';
function scanFile($dir)
{
    $arrDir = scandir($dir);
    foreach ($arrDir as $item => $value) {
        if ($value === '.' || $value === '..') {
            unset($arrDir[$item]);
        }
    }
    foreach ($arrDir as $value){
        echo $value.'<br>';
    }
}
