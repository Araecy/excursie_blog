<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);

session_start();

if (isset($_SESSION['username'])){
    if ($_SESSION['username'] == ''){
        header('Location: ../backend/login.php');
    }
    // else {
    //     header('Location: inlog.php');
    // }
    
}

else {
    header('Location: ../backend/login.php');
}