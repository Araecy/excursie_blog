<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


require 'config.php';
require_once 'login_check.php';

$titel = $_POST['title'];
$content = $_POST['content'];
$image = $_POST['image'];

$query = "INSERT INTO `postsblog`(`titel`, `tekst`, `foto`) VALUES ('".$titel."','".$text."','".$image."')";

echo $query;


$result = mysqli_query($mysqli, $query);

if ($result){
    echo "Het item is toegevoegd!<br/>";
}
else{
    echo "FOUT bij toevoegen!<br/>";
    echo mysqli_error($mysqli);
}