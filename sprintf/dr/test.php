<?php
require 'testFan.php';
$arr= ['Муся'=>'Мямр','Мусик'=>'не мямр', 'Вася'=>'Зверь'];
$layer = layerTest();
$content=mainContent($arr);
echo sprintf($layer,$content);
