<?php

require 'config.php';

if (isset($_POST['verzend'])){
    $ond    = $_POST['onderwerpVeld'];
    $inh    = $_POST['inhoudVeld'];
    $begin  = $_POST['begindatumVeld'];
    $eind   = $_POST['einddatumVeld'];
    $prior  = $_POST['prioriteitVeld'];
    $stat   = $_POST['statusVeld'];
    // echo $stat;
    $query  = "INSERT INTO crud_agenda";
    $query .= " (onderwerp, inhoud, begindatum, einddatum, prioriteit, status)";
    $query .= " VALUES ('".$ond."' , '".$inh."' , '".$begin."' , '".$eind."' , ".$prior." , '".$stat."')";

    // echo $query . "<br/>";

    $result = mysqli_query($mysqli, $query);
    echo $result;
    if ($result)
    {
        echo "Het item is toegevoegd<br/>";
    }
    else
    {
        echo "FOUT bij toevoegen<br/>";
        echo $query . "<br/>";
        echo mysqli_error($mysqli);
    }
    echo "<a href='toonagenda.php'>OVERZICHT</a>";
}
else{
    echo "Het formulier is niet (goed) verstuurd<br/>";
}
?>

<link rel="stylesheet" href="style/style.css">

<?php