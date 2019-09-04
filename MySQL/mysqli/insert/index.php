<?php
const DB_NAME = 'test';
const DB_USER = 'root';
const DB_HOST = '127.0.0.1';
const DB_PASS = '';

$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($db->connect_errno) {
    die("Не удалось подключиться к MySQL: " . $db->connect_error) ;
}
//echo $db->connect_error; // Ошибки при работе с ДБ
$data=[];
$res = $db->query(" INSERT INTO `categories` SET `name`='Категория ".rand(1,100)."'");
if (!$res){
    die ("Не удалось вставить строку: (" . $db->errno . ") " . $db->error);
}

$new_id=$db->insert_id;// выясняем новое id
echo  $new_id;
$res = $db->query("SELECT * FROM `categories` WHERE `id`= $db->insert_id LIMIT 1");
echo '<table border="1"><tbody>';
while ($row=$res->fetch_assoc()){
    echo '<tr><td>'.$data[]=implode(', ',$row).'</td></tr>';//  Объединяет элементы массива в строку
}
echo '</table></tbody>';


