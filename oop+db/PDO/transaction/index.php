<?php
$dbh = new PDO('mysql:host=localhost;dbname=test', 'root', '');
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//PDO::ATTR_ERRMODE: Режим сообщений об ошибках.
// PDO::ERRMODE_EXCEPTION: Выбрасывать исключения.
try {
    /* Начало транзакции, отключение автоматической фиксации */
    $dbh->beginTransaction();
    /* Изменение схемы базы данных и данных */
    $dbh->exec('INSERT INTO `users` SET `login`= "User ' . rand(1, 100) . '",`pass`= "Pass' . rand(1, 100) . '"');
    $dbh->exec('INSERT INTO `users` SET `login`= "User ' . rand(1, 100) . '",`pass`= "Pass' . rand(1, 100) . '"');
    $dbh->exec('INSERT INTO `users` SET `login`= "User ' . rand(1, 100) . '",`pass`= "Pass' . rand(1, 100) . '"');
    //  ряд с ошибкой `login23`= "User ', после происходит откат
    //$dbh->exec('INSERT INTO `users` SET `login23`= "User ' . rand(1, 100) . '",`pass`= "Pass' . rand(1, 100) . '"');
    /*фиксирует транзакцию*/
    $dbh->commit();
    echo 'Транзакция совершена';
} catch (Exception $e) {
    /* Распознаем ошибку и откатываем изменения */
    $dbh->rollBack();
    /* Соединение с базой данных снова в режиме автоматической фиксации */
    echo 'Ошибка' . $e->getMessage();
}

