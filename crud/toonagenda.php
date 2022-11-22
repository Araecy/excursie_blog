<?php

require 'config.php';
// require_once 'login_check.php';

$query = "SELECT * FROM crud_agenda";

$result = mysqli_query($mysqli, $query);

if(!$result)
{
    echo "<p>FOUT!</p>";
    echo "<p>" . $query . "</p>";
    echo "<p>" . mysqli_error($mysqli) . "</p>";
    exit;
}


if (mysqli_num_rows($result) > 0)
{   ?><div id="tabel"><?php
    ?><h2>Agenda Overzicht</h2><?php
    ?><div id="inloglink"><?php echo "<br><a href='inlog.php'><img id='inlogicon' src='img/loginicon.png'></a>";?></div><?php
    echo "<table border='1px'>";

    echo "<tr><th>Onderwerp</th><th>Inhoud</th></tr>";
    while ($item = mysqli_fetch_assoc($result))
    {
        
        echo "<tr>";
            echo "<td>" . $item['onderwerp'] . "</td>";
            echo "<td>" . $item['inhoud'] . "</td>";
            echo "<td><a href='detail.php?id=" . $item['id'] . "'>detail</a></td>";
            echo "<td><a href='deletevraag.php?id=" . $item['id'] . "'>X</a></td>";
            echo "<td><a href='editfront.php?id=" . $item['id'] . "'>edit</a></td>";
        echo "</tr>";
        
        // echo "<br><a href='detail.php?id=" . $item['id'] . "'>detail</a>";
    }?></div><?php
    ?><div id="voegtoe"><?php echo "<br><a href='toevoegForm.php'>toevoeg</a>";?></div><?php
?><div id="uitlog">
    <?php 
    if(isset($_SESSION['username'])){
        echo "<br><a href='uitlog.php'>uitloggen</a>";
    }
    ?></div><?php
    echo "</table>";
    
}
else 
{
    echo "<p>Geen items gevonden!</p>";
}

?>



<link rel="stylesheet" href="style/style.css">

<?php