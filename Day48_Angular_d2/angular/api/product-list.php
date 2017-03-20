<?php

require_once 'db.class.php';

$query = "
    SELECT `product` . *
    FROM `product`
    WHERE 1
";

$stmt = db::query($query);
$stmt->setFetchMode(PDO::FETCH_ASSOC);

$products = array();
foreach($stmt as $row)
{
    $products[] = $row;
}

$response = array(
    'status' => 'OK',
    'products' => $products
);

echo json_encode($response);
exit();   //end script