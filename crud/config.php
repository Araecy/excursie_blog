<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$db_hostname = 'localhost';
$db_username = '88221';
$db_password = 'AxelRonner';
// database moet nog een 2 bevatten
$db_database = 'db_88221';

$mysqli = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);


if (!$mysqli){
    echo "FOUT: geen connectie naar database. <br>";
    echo "Error " . mysqli_connect_error() . "<br>";
    exit;
}

// else{
//     echo "Verbinding met " . $db_database . " is gemaakt!<br>";
// }
?>

<link rel="stylesheet" href="style/style.css">

<?php