<?php

session_start();
//if (isset($_SESSION['userid'])) {
    // Delete the session vars by clearing the $_SESSION array
   // $_SESSION = array();
  //  header('Location: index.php');
  unset($_SESSION['userid']);
  header('Location: index.php');


