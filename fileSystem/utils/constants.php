<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
const DUMP='dump';
const DIR='storage';
const PATH_FILE = DIR.'/index.txt';
const  DUMP_FILE = DUMP.'/newfile.json';

/**
 * @param $dir
 * @return array|false
 */
function getFilesInDirectory ($dir){
    $contents = (scandir($dir));
    foreach ($contents as $index => $patch){
        if ($patch==='.' || $patch==='..'){
            unset($contents[$index]);
        }
    }
    return $contents;
}

/**
 * @param $dirToDel - удаляемый каталог
 * что бы удалить подкаталог мы выполняем рекурсию
 * removeFiles ($dirToDel.'/'.$patch);
 * if (is_dir($dirToDel . '/' . $patch)) - при проверке и удаление указываем полный путь
 * мы даляем папку dump
 */
function removeDir ($dirToDel){
    if (!is_dir($dirToDel)) {
        die('нет такой папки');
    }
        $fileList = getFilesInDirectory($dirToDel);
        foreach ($fileList as $patch) {
            if (is_dir($dirToDel . '/' . $patch)) {
                removeDir($dirToDel . '/' . $patch);
            } else {
                unlink($dirToDel . '/' . $patch);
            }
        }
        rmdir($dirToDel);

}