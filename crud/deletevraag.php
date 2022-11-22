<?php 
$myID = $_GET["id"];

require_once 'config.php';
require_once 'login_check.php';


$query = "SELECT * FROM `crud_agenda` WHERE id = " . $myID;

$result = mysqli_query($mysqli, $query);

if (mysqli_num_rows($result) == 1) {
    $agenda = mysqli_fetch_array($result);
    echo "Weet je zeker dat je " . $agenda["onderwerp"] . " wilt verwijderen?<br>";
    echo "<a href='delete.php?id=".$myID."'>JA! |</a>";
    echo "<a href='toonagenda.php'> NEE!</a>";
    // header("Location: toonagenda.php");
}
?>

<link rel="stylesheet" href="style/style.css">

<?php