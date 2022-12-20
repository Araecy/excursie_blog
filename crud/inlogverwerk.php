<?php

require 'config.php';

$username = $_POST["inputusername"];
$password = $_POST["inputpassword"];

if (strlen($username)>0 && strlen($password)>0){
    $password=sha1($password);

    $query = "SELECT * FROM `users` ";
    $query .= "WHERE username='$username' AND password='$password'";

    $querynaam = "SELECT 'username' FROM `users` ";
    $querynaam .= "WHERE username='$username' AND password='$password'";

    $queryww = "SELECT 'password' FROM `users` ";
    $queryww .= "WHERE username='$username' AND password='$password'";


    $result1 = mysqli_query($mysqli, $query);

    $result2 = mysqli_query($mysqli, $querynaam);

    $result3 = mysqli_query($mysqli, $queryww);

    if (mysqli_num_rows($result2) == 1){
        session_start();
        $_SESSION['username'] = $username;
        header("Location: toonagenda.php");
        // echo "<p>Ingelogd ". $username ."!</p>";

    }
    else {
        echo "<p>Naam en of wachtwoord fout.</p>";
    }
    echo "<br><a href='inlog.php'>Ga Terug</a>";
}