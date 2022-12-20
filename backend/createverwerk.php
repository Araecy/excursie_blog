<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


require 'config.php';
// require_once 'login_check.php';

$titel = $_POST['title'];
$content = $_POST['content'];
$image = $_POST['image'];



// photo upload > Filezilla

$ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);

$directory = "afbeelding";
$naam = $_POST["title"];
$temp = $_FILES["image"]["tmp_name"];
$timestamp = date('d:m:y:h:i:s');
$filename = $naam;
$filename .= $timestamp. "." . $ext;
$dir = "afbeelding/";


$query = "INSERT INTO `postsblog`(`titel`, `tekst`, `foto`) VALUES ('".$titel."','".$content."','".$filename."')";

// echo $query;

$result = mysqli_query($mysqli, $query);

if ($result){
    // echo "Het item is toegevoegd!<br/>";
    // header('Location: ../frontend/browse.php');
}
else{
    echo "FOUT bij toevoegen!<br/>";
    echo mysqli_error($mysqli);
}


if (move_uploaded_file($temp, $directory. "/" .$filename))
{
    // echo "$filename uploaded <br/>";
}
else {
    echo "FOUT! bij het uploaden $filename";
}
// Sort in ascending order - this is default
$a = scandir($dir);
// echo "<pre>";
// print_r($a);
// echo "</pre>";
// echo ($a)[3];
unset($a[0]);
unset($a[1]);

foreach ($a as $item )
{
  echo "<img src='afbeelding/".$item."'><br/>";
}
header('Location: ../frontend/browse.php');