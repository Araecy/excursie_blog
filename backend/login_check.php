<?php 
session_start();

if (isset($_SESSION['username'])){
    if ($_SESSION['username'] == ''){
        header('Location: inlog.php');
    }
    // else {
    //     header('Location: inlog.php');
    // }
    
}

else {
    header('Location: inlog.php');
}