<?php
require_once './shared/database.php';

$db = new Database();
$product = $db->getproduct($_POST['id']);





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
            <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">


                                <h1>Checkout summary</h1>
                                <!--   PHP HERE -->
                                    <?php 

                                   
                                        echo 'Name: ' . htmlspecialchars($product['name']) . '<br>';
                                        echo 'Price: ' . htmlspecialchars($product['price']). '<br>';
                                        echo 'Size: ' . htmlspecialchars($product['size']). '<br>';
                                        echo 'Color: ' . htmlspecialchars($product['color']). '<br>';
                                        


                                        ?>
                                       <form action="checkout.php" method="post">
                                           <input type="hidden" name="id" value="<?php echo htmlspecialchars($product['id']); ?>">
                                           <input type="submit" value="Check out">
                                       </form>
                                    
                                      


                                </div>
                                <div class="col-md-6">
                                    
        </div>
                                </div>
                                </div>
                            </div>
                        </div>
          
        </div>
    <script src="admin/js/bootstrap.min.js"></script>
    <script src="admin/js/javascript.js"></script>
    </body>
</html>