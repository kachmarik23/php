<?php
function viewForm()
{
    $html = '
    <form action="" method="post">
    <textarea name="text" placeholder="Введите текст"></textarea><br>
    <input type="submit" value="Отправить">
</form>';
    echo $html;
}

function top1($arr, $str0)
{
    $countStr0 = strlen($str0);
    $count = count($arr);
    if ($count < 2) {
        return 'Самое длинное слово: ' . $str0;
    }
    $value = array_pop($arr);

    $countStr = strlen($value);
    if ($countStr0 < $countStr) {
        $str0 = $value;
    }

    return top1($arr, $str0);
}

function top3($arr)
{
    $arr1 = [];
    foreach ($arr as $item => $value) {
        $countStr = strlen($value);
        $arr1[$countStr] = $value;
    }
    krsort($arr1);
    $i = 0;
    echo 'TOP 3' . '<br>';
    foreach ($arr1 as $value) {
        if ($i < 3) {
            echo $value . '<br>';
            $i++;
        }
    }

}



