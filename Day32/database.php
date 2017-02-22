<?php


$db = $pdo = new PDO(
    'mysql:dbname=games; host=127.0.0.1; charset=utf8',
    'root',
    ''
);
$pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



