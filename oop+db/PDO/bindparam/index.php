<?php
$id=132;
$login='feoh';
$dbh=new PDO('mysql:host=localhost;dbname=test','root','');
$query='SELECT * FROM `users` where `id`=:id AND `login`=:login';
$sth=$dbh->prepare($query);
$sth->bindParam(':id',$id, PDO::PARAM_STR);
$sth->bindParam(':login',$login,PDO::PARAM_STR);
$sth->execute();
$res=$sth->fetch(PDO::FETCH_ASSOC);
print_r($res);
/*не именованные параметры*/
$query='SELECT * FROM `users` where `id`=? AND `login`=?';
$sth=$dbh->prepare($query);
$sth->bindParam(1,$id, PDO::PARAM_STR);
$sth->bindParam(2,$login,PDO::PARAM_STR);
$sth->execute();
$res=$sth->fetch(PDO::FETCH_ASSOC);
print_r($res);