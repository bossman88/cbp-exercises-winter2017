
<?php
require_once'./shared/database.php';
$db = new Database();


if ($_POST) {
    $userid = $db->insertuser($_POST['name'], $_POST['email'], $_POST['password']);
    session_start();
    $_SESSION['userid'] = $user['id'];
    header('Location: index.php');
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
        <link href="admin/css/bootstrap.min.css" rel="stylesheet">
        <link href="admin/css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <form action-"" method="post">
                Name:<br>
                <input type="text" name="name"><br>
                Email:<br>
                <input type="email" name="email"><br>
                Password:<br>
                <input type="password" name="password"><br>
                <input type="submit" value="login">

            </form>
        </div>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="admin/js/javascript.js"></script>
    </body>
</html>


