<?php
$navigation=[
    'Google'=>'https://www.google.com',
    'Yandex'=>'https://yandex.ru',
    'Bing'=>'https://www.bing.com'
];
foreach ($navigation as $key => $value){
    echo "<a href='$value'>$key</a>".PHP_EOL;
}

?>