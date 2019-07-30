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
    $unique_array = array_count_values($text);

    foreach ($unique_array as $index => $value) {
        if ($value > 1) {
            unset($unique_array[$index]);
        }
    }

    foreach ($unique_array as $index => $value) {
        echo $index . PHP_EOL;
    }
}
