<?php
require_once'../shared/database.php';
if ($_POST){
     //names of the columns from database , adminer thing not from this file!!!
     //$stmt database preparing statement
     // we put prepare stuff into database.php  and will be using it from there !!! 
    //$stmt = $db->prepare('INSERT INTO products (name, price, size, color)VALUES (?, ?, ?, ?)');
    //number of question marks should match number of values!!
    //we need to execute statement we just created! in execute we need to put real data! we are passing an array of values
    //these values will be placed instead of placeholders in a query
    $db = new Database();
    $db->insertproduct($_POST['name'], $_POST['price'], $_POST['size'], $_POST['color']);
   //$stmt->execute([         $_POST['name'], $_POST['price'], $_POST['size'], $_POST['color']     ]);
    header('location: products.php');


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

        <h2>Add product</h2>

<!--
        <form action="" method="post">
            Name:
            <input type="text" name="name"><br>
            Price:
            <input type="text" name="price"><br>
            Size:
            <input type="text" name="size"><br>
            Color:
            <input type="text" name="color"><br>
            <input type="submit">

        </form>
-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <a href="products.php">Go back to cart</a>
                <form action="" method="post">
                        <div class="form-group">
                    <label for="formGroupExampleInput">Name</label>
                    <input type="text" class="form-control" name="name" id="formGroupExampleInput" placeholder="name">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Price</label>
                    <input type="text" class="form-control" name="price" id="formGroupExampleInput2" placeholder="Enter price">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Size</label>
                    <input type="text" class="form-control" name="size" id="formGroupExampleInput2" placeholder="enter size">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Color</label>
                    <input type="text" class="form-control" name="color" id="formGroupExampleInput2" placeholder="Enter color">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
        </div>

        <div class="col-md-8">
             <img src="shop.jpg"   alt="shop" width="500" height="420">
		</div>


        </div>
</div>
                    <script src="/js/bootstrap.min.js"></script>
                    <script src="/js/javascript.js"></script>

 
                    </body>
</html>