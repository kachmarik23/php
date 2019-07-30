<?php
function viewForm()
{
    $html = '<form action="" method="post" >
<textarea name="text" placeholder="Введите текст"></textarea><br>
<input type="submit" value="Заслать">
</form>';
    echo $html;
}


function strUnique()
{
    $text = $_REQUEST['text'];
    if (empty($text)) {
        die('введите текст');
    }
    $sumbol=[',','.',';',':'];
    $text=str_replace($sumbol,"",$text);
    $text = explode( ' ',$text);
    $unique_array = array_unique($text);
    foreach ($unique_array as $value) {
        echo $value . PHP_EOL;
    }
}
