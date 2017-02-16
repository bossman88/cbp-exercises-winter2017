<?php
require_once'../shared/database.php';


$db = new Database();
$products = $db->getproducts();


foreach ($products as $product){

    echo 'Name: ' . htmlspecialchars($product['name']).'  ';
    echo ' Price: ' . htmlspecialchars($product['price']).'  ';
    echo ' Size: ' . htmlspecialchars($product['size']).'  ';
    echo ' Color: ' . htmlspecialchars($product['color']).'<br> ';
    
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <a href="addproduct.php"> Add product</a>
        


        </div>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/javascript.js"></script>
    </body>
</html>