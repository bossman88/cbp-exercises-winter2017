<?php
require_once './shared/database.php';
$db = new Database();
session_start();
foreach ($_SESSION['products'] as $id){
    $product = $db->getproduct($id);
    echo htmlspecialchars($product['name']);
    echo htmlspecialchars($product['price']);
    echo '<hr>';
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
    <form action="checkout.php" method="post">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($product['id']); ?>">
        <input type="submit" value="Check out" name="submit">
    </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="admin/js/javascript.js"></script>
    </body>
</html>