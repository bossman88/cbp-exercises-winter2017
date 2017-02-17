<?php

require_once './shared/user.php';
require_once './shared/database.php';


$db = new Database();
$user = new User($db);

$name = $user->getName();
if($name){
    echo htmlspecialchars($user->getName());
    echo ' '.'<a href="logout.php">logout</a>';
    echo ' '.count($_SESSION['products']);
    echo ' '.'<a href="summary.php">order summary</a>';
}else {
    echo ' '.'<a href="login.php">Login</a>'.'  '.
         ' '.'<a href="signup.php">Signup</a>';
}



