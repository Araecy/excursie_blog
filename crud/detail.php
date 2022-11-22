<?php

require_once 'config.php';
require_once 'login_check.php';

$id = $_GET['id'];

echo "ID van het agenda-item is: " . $id . "<br>";

$query = "SELECT * FROM crud_agenda WHERE id = " . $id;

$result = mysqli_query($mysqli, $query);

if (mysqli_num_rows($result) > 0){
    $item = mysqli_fetch_assoc($result);

    echo $item['onderwerp'] . "<br/>";
    echo $item['inhoud'] . "<br/>";
    echo $item['begindatum'] . "<br/>";
    echo $item['einddatum'] . "<br/>";
    echo $item['prioriteit'] . "<br/>";
    echo $item['status'] . "<br/>";
    
}
else {
    echo "Er is geen record met ID: " . $id . "<br/>";
}

echo "<a href='toonagenda.php'>OVERZICHT</a>";
echo "<a href='deletevraag.php?id=" . $item['id'] . "'>X</a></td>";
?>

<link rel="stylesheet" href="style/style.css">

<?php