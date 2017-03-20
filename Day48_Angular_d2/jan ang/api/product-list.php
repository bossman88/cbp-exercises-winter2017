<?php

require_once 'db.class.php';

// prepare the query
$query = "
    SELECT `product`.*
    FROM `product`
    WHERE 1
";
// run the query
$stmt = db::execute($query);
$stmt->setFetchMode(PDO::FETCH_ASSOC);

// build the array $products from the results of the query
$products = array();
foreach($stmt as $row)
{
    $products[] = $row;
}

// create the array $response from the status and the $products
$response = array(
    'status' => 'OK',
    'products' => $products
);

// echo the response as a JSON string
echo json_encode($response);
// end our code
exit();