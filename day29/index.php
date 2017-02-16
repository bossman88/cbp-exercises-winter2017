<?php
require_once'./shared/database.php';


$db = new Database();
$products = $db->getproducts(); // we need to store the results in $products, if we dont they just disappear
//later we will use these $products in an array to access products
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
            <h1> Home Page</h1>
            <a href="./admin/addproduct.php"> Add product</a><br><br>


<!--  PHP HERE STORED -->
            <?php
                foreach ($products as $product){

                        echo 'Name: ' . htmlspecialchars($product['name']).'  ';
                        echo ' Price: ' . htmlspecialchars($product['price']).'  ';
                        echo ' Size: ' . htmlspecialchars($product['size']).'  ';
                        echo ' Color: ' . htmlspecialchars($product['color']).'<br> ';
                        echo '<form action="summary.php" method="post">'
                            .'<input type="hidden" name="id" value="' . htmlspecialchars($product['id']) . '">'
                            .'<input type="submit" value="Buy this">'
                            .'</form>';


                        
                    }

            ?>

    


        </div>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/javascript.js"></script>
    </body>
</html>