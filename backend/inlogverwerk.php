<?php

require 'config.php';

$username = $_POST["inputusername"];
$password = $_POST["inputpassword"];

if (strlen($username)>0 && strlen($password)>0){
    // $password=sha1($password);

    $query = "SELECT * FROM `usersblog` ";
    $query .= "WHERE username='$username' AND password='$password'";

    $querynaam = "SELECT 'username' FROM `usersblog` ";
    $querynaam .= "WHERE username='$username' AND password='$password'";

    $queryww = "SELECT 'password' FROM `usersblog` ";
    $queryww .= "WHERE username='$username' AND password='$password'";

    $querylevel = "SELECT 'level' FROM `usersblog` ";
    $querylevel .= "WHERE username='$username' AND password='$password'";

    $result1 = mysqli_query($mysqli, $query);

    $result2 = mysqli_query($mysqli, $querynaam);

    $result3 = mysqli_query($mysqli, $queryww);

    $result4 = mysqli_query($mysqli, $querylevel);

    if (mysqli_num_rows($result2) == 1){
        session_start();
        $_SESSION['username'] = $username;
        header("Location: ../frontend/index.php");
        // echo "<p>Ingelogd ". $username ."!</p>";

    }
    else {
        echo "<p>Naam en of wachtwoord fout.</p>";
    }
    echo "<br><a href='login.php'>Ga Terug</a>";
}