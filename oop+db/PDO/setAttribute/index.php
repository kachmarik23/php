<?php
$dbh=new PDO('mysql:host=localhost;dbname=test','root','');
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
$query=('SELECT * FROM `users` WHERE `id`=:id');
$res=$dbh->prepare($query);
$res->execute([':id'=>132]);
$result=$res->fetchAll();
print_r($result);