<?php
const DB_NAME='test';
const DB_USER='root';
const DB_HOST='127.0.0.1';
const DB_pASS='';

$db=new mysqli(DB_HOST,DB_USER,DB_pASS,DB_NAME);
echo $db->connect_error;
$query="SELECT * FROM `comments` WHERE `username`='feoh'";
$res=$db->query($query);
//$res->fetch_all(MYSQLI_ASSOC);
echo $res->num_rows;
$data=[];
echo '<table border="1"><tbody>';
while ($row=$res->fetch_assoc()){
    echo '<tr><td>'.$data[]=implode(',',$row).'</td></tr>';
}
echo '</tbody></table>';
echo "Всего затронутых строк в таблице: ".$db->affected_rows.'<br>';
echo 'num ROWS '.$res->num_rows;

