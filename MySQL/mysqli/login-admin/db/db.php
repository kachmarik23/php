<?php
const DB_HOST = '127.0.0.1';
const DB_USER= 'root';
const DB_PASS= '';
const DB_NAME= 'test';
$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($db->connect_errno) {
    die("Не удалось подключиться к БД" . $db->connect_error);
}
