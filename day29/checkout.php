<?php
require_once './shared/database.php';


$db = new Database();
if($_POST){
    $orderid = $db->insertorder(1);
}