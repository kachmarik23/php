<?php
$dbh=new PDO('mysql:host=localhost;dbname=test','root','');
$query=('SELECT * FROM `users` WHERE `id`=:id');
$res=$dbh->prepare($query);
$res->execute([':id'=>132]);
$res1=$res->fetch(PDO::FETCH_ASSOC);
print_r($res1);
$res->execute([':id'=>138]);
$res2=$res->fetch(PDO::FETCH_OBJ);
print_r($res2);
