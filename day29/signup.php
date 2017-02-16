
<?php
require_once'./shared/database.php';
$db = new Database();


if ($_POST) {
    $db->insertuser($_POST['name'], $_POST['email'], $_POST['password']);
}
?>
<style>

</style>
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
        <form action-"" method="post">
            Name:<br>
            <input type="text" name="name"><br>
            Email:<br>
            <input type="email" name="email"><br>
            Password:<br>
            <input type="password" name="password"><br>
            <input type="submit" value="login">

        </form>
        
    <script src="admin/js/bootstrap.min.js"></script>
    <script src="admin/js/javascript.js"></script>
    </body>
</html>


