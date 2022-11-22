<?php 
$myID = $_GET["id"];

require_once 'config.php';
require_once 'login_check.php';

$query = "DELETE FROM `crud_agenda` WHERE id = " . $myID;

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