<?php
const DIR = 'storage/';
const FNAME = 'readme.txt';
function viewForm()
{
    $html = '<form action="" method="post">
<input type="text" name="name" placeholder="Введите имя"><br>
<textarea name="text" style="width: 520px" placeholder="Введите текст"></textarea><br>

<input type="submit" style="width: 520px" value="Запостить отзыв">
</form>';
    return $html;
}

function fileOpen($dir, $fname)
{
    if (!file_exists($dir . $fname)) {
        echo '<div style="background-color: #cccccc; width: 500px; margin-bottom: 10px; padding: 10px">
Оставьте отзыв первым!</div>';
    } else {
        $file = fopen($dir . $fname, 'r');
        $fileOpen = fread($file, filesize($dir . $fname));
        fclose($file);
        echo '<div style="width: 500px; background-color: antiquewhite; margin-bottom: 10px; 
padding: 5px; padding-top: 15px">' . $fileOpen . '</div>';
    }
}

function fileWrite($dir, $fname)
{
    $text = strip_tags($_REQUEST['text'], '<b>');
    $mat=file_get_contents($dir.'mat.txt');
    $pattern='/['.$mat.']/i';
    if(preg_match($pattern,$text)){
        $text='Некорректный комментарий';
    }
    if(empty($_REQUEST['name'])){
        $_REQUEST['name']='<b>Anonymous</b>';
    }
    $name = $_REQUEST['name'];
    if (!empty($text)) {
        $file = fopen($dir . $fname, 'a');
        fwrite($file, '<b>' . $name . '</b><br>' . $text . '<br><br>');
        fclose($file);
        header('Location: index.php');
    }

}
