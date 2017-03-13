<?php
session_start();
require_once './shared/database.php';


$db = new Database();

if($_POST){
    try{     //if something goes wrong    inside try catch block, rest of try catch block is not get executed
            $db->beginTransaction();
            $orderid = $db->insertorder($_SESSION['userid']);
            foreach ($_SESSION['products'] as $id){
                $db->insertproducttoorder($id, $orderid);
                //$db->commitTransaction();
            }
            $db->commitTransaction();
            $stored = 1;
    } catch (PDOException $e){
        $db->rollBackTransaction();  
        $stored = 0;        
    }
    $_SESSION['products'] = [];
    header('Location: index.php?status=' . $stored);
}