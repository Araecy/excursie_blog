<?php
$myID = $_GET["id"];
require_once 'config.php';

$onderwerp = $_POST["owinput"];
$inhoud = $_POST["inhoudinput"];
$begindatum = $_POST["bdinput"];
$einddatum = $_POST["edinput"];
$prioriteit = $_POST["priinput"];
$status = $_POST["statusinput"];

$query = "UPDATE `crud_agenda` 
SET `onderwerp`='".$onderwerp."',`inhoud`='".$inhoud."',`begindatum`='".$begindatum."',`einddatum`='".$einddatum."',`prioriteit`='".$prioriteit."',`status`='".$status."' 
WHERE `id` = ".$myID;

// echo $query;
$result = mysqli_query($mysqli, $query);

if ($result) {
    header("Location: toonagenda.php");
}
else {
    echo "Er is een fout opgetreden";
}
?>

<link rel="stylesheet" href="style/style.css">

<?php