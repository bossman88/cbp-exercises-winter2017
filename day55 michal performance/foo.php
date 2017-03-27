<?php

$p = new PDO('mysql:host=localhost;dbname=michal_test;charset=utf8','root', '');

$s= time();
$stmt = $p->prepare('INSERT INTO foo (name, address) VALUES (?,?)');
for ($i = 0; $i < 50000; $i++){
    $stmt->execute([base64_encode(random_bytes(50)), base64_encode(random_bytes(100))]);
}

echo time() - $s;