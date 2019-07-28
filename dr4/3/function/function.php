<?php
const FILE = 'storage/readme.txt';
function viewForm()
{
    $html = '
<form action="" method="post">
<input type="number" name="n">
<input type="submit" value="Enter">
</form>
';
    echo $html;
}

function openTextFile()
{
    $n = $_REQUEST['n'];
    $file = file_get_contents(FILE);
    echo 'Фаил до трансформации:' . '<br>' . $file;
    $patter = "|[а-яё]|is";
    if (preg_match($patter, $file)) {
        $n *= 2;
    }
    $exploded = explode(' ', $file);
    echo '<br>';
    foreach ($exploded as $item => $value) {
        $countStr = strlen($value);
        if ($countStr !== $n) {
            unset($exploded[$item]);
        }
    }

    if ($n !== 0) {
        echo 'Слова длинной ' . $n / 2 . ' символов:' . '<br>';
        foreach ($exploded as $value) {
            echo $value . PHP_EOL;
        }

    }
}