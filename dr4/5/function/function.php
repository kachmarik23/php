<?php
const DIR = 'storage/';
const STR = 'тормоз';
/**
 * @param $dir
 * @return array|false
 */
function searchDir($dir)
{
    $dirFiles = scandir($dir);
    foreach ($dirFiles as $item => $value) {
        if ($value === '.' || $value === '..') {
            unset($dirFiles[$item]);
        }
    }
    return $dirFiles;
}

/**
 * @param $dir
 * @param $strSearch
 */
function searchFile($dir, $strSearch)
{
    $dirFiles = searchDir($dir);
    foreach ($dirFiles as $value) {
        $data = file_get_contents($dir . $value);
        $fileName = $value;
        $exploded = explode(' ', $data);
        foreach ($exploded as $value) {
            if ($value == $strSearch) {
                echo $fileName . '<br>';
            }
        }
    }
}