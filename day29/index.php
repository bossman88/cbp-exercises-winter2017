<?php
session_start();
require_once'./shared/database.php';

$db = new Database();
$products = $db->getproducts(); // we need to store the results in $products, if we dont they just disappear
//later we will use these $products in an array to access products
//   echo  'Hello, '. htmlspecialchars($db->getuser($_SESSION['userid'])['name']);  
// stopped using it and 
if ($_POST) {
    if (!isset($_SESSION['products'])){
        $_SESSION['products'] = [];
    }
    $_SESSION['products'][] = $_POST['id'];
   header('Location: index.php');
}

require_once './shared/header.php';
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
            <a href="./admin/addproduct.php"> Add product</a>&nbsp&nbsp
            <a href="login.php"> Login</a>&nbsp&nbsp
            <a href="checkout.php"> Checkout</a><br><br>


<!--  PHP HERE STORED -->
            <?php
                foreach ($products as $product){

                        echo 'Name: ' . htmlspecialchars($product['name']).'  ';
                        echo ' Price: ' . htmlspecialchars($product['price']).'  ';
                        echo ' Size: ' . htmlspecialchars($product['size']).'  ';
                        echo ' Color: ' . htmlspecialchars($product['color']).'<br> ';
                        echo '<form action="index.php" method="post">'
                            .'<input type="hidden" name="id" value="' . htmlspecialchars($product['id']) . '">'
                            .'<input type="submit" value="Buy this">'
                            .'</form>';
                    }
            ?>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/js/javascript.js"></script>
    </body>
</html>