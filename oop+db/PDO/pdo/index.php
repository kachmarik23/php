<?php
$dbh = new PDO('mysql:host=localhost;dbname=test', 'root', '');
$res=$dbh->query('SELECT * FROM `users` WHERE `id` = 132',PDO::FETCH_OBJ );

foreach ($res as $data){
    print_r($data);
}


/// Подготовенные запросы

$query = 'SELECT * FROM `users` WHERE `id` = :id';
$res=$dbh->prepare($query);
$res->execute([':id'=>138]);
$res=$res->fetchAll(PDO::FETCH_ASSOC);
print_r($res);


///
$query = 'SELECT * FROM `users` WHERE `id` = :id';
$res=$dbh->prepare($query);
$res->execute([':id'=>138]);
$res=$res->fetch(PDO::FETCH_OBJ);
var_dump($res);
echo $res->email;
///
///
$query = 'SELECT * FROM `users` WHERE `id` = ?';
$res=$dbh->prepare($query);
$res->execute([132]);
$res=$res->fetchAll(PDO::FETCH_ASSOC);
print_r($res);