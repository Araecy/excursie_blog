<?php

require 'config.php';
require_once 'login_check.php';

$query = "INSERT INTO crud_agenda (`onderwerp`, `inhoud`, `begindatum`, `einddatum`, `prioriteit`, `status`) VALUES ('PROCES2','Opdrachten afronden','2022-11-10','2022-11-12','2','b')";

$result = mysqli_query($mysqli, $query);

if ($result){
    echo "Het item is toegevoegd!<br/>";
}
else{
    echo "FOUT bij toevoegen!<br/>";
    echo mysqli_error($mysqli);
}

echo "<a href='toonagenda.php'>OVERZICHT</a>";
?>

<link rel="stylesheet" href="style/style.css">

<?php