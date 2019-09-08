<?php

function getAllCategory()
{
    global $db;
    $query = "SELECT * FROM `categories`";
    $res = $db->query($query);
    if (!$res) {
        die("Не удалось получить данные (" . $db->errno . ")" . $db->error);
    }
    return $res->fetch_all(MYSQLI_ASSOC);
}
function getAllItems()
{
    global $db;
    $query = "SELECT `items`.`id`, `title`,`description`,`prise`,`name` AS `category` FROM `items`INNER JOIN  `categories` ON `items`.`category_id`=`categories`.`id`";
    $res = $db->query($query);
    if (!$res) {
        die("Не удалось получить данные (" . $db->errno . ")" . $db->error);
    }
    return $res->fetch_all(MYSQLI_ASSOC);
}

function addCategory($category)
{
    global $db;
    if (!empty($category)) {
        $query = "INSERT INTO `categories` SET `name`='$category'";
        $res = $db->query($query);
        if ($res) {
            header('Location: adminget.php');
        }
        die ("Не удалось вставить категорию: (" . $db->errno . ") " . $db->error);
    }
    die(header('Location: adminget.php'));
}

function addItems($title,$description,$prise,$category_id)
{

    global $db;

    if (!empty($title||$description||$prise||$category_id)) {
        $query = "INSERT INTO `items` SET `title`='$title',`description`='$description',
                                                `prise`='$prise',`category_id`='$category_id'";
        $res = $db->query($query);
        if ($res) {
            header('Location: adminget.php');
        }
        die ("Не удалось внести товар в базу: (" . $db->errno . ") " . $db->error);
    }
    die("НЕА");
}

function removeCategory($id){
global $db;
    $query="DELETE FROM `categories` WHERE `id`='$id' LIMIT 1 ";
    $res = $db->query($query);
    if ($res) {
        header('Location: adminget.php');
    }
    die ("Не удалось удалить категорию: (" . $db->errno . ") " . $db->error);
}

function removeItems($id){
    global $db;
    $query="DELETE FROM `items` WHERE `id`='$id' LIMIT 1 ";
    $res = $db->query($query);
    if ($res) {
        header('Location: adminget.php');
    }
    die ("Не удалось удалить продукт: (" . $db->errno . ") " . $db->error);
}


