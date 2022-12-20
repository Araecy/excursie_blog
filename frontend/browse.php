<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Excursieblog</title>
</head>
<body>
    <img id="logo" src="images/logo.png" alt="">
    <div id="links">
    
        <a href="index.php">Home</a>
        <a href="create.php">Create blog</a>
        <a href="browse.php">Browse blogs</a>

        <a href="../backend/login.php">Login</a>
        <a href="../backend/uitlog.php">Uitlog</a>
        <a href="../backend/registreren.php">Register</a>
    </div>
    <hr />
    <div id="body-container">

    <?php

        require '../backend/config.php';
        // require '../backend/createverwerk.php';

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        $query = "SELECT * FROM postsblog";

    $result = mysqli_query($mysqli, $query);

    if(!$result)
    {
        echo "<p>FOUT!</p>";
        echo "<p>" . $query . "</p>";
        echo "<p>" . mysqli_error($mysqli) . "</p>";
        exit;
    }

    if (mysqli_num_rows($result) > 0)
    {   
        
        
?>
<?php
   $dir = "../backend/afbeelding";

   $a = scandir($dir);

   unset($a[0]);
   unset($a[1]);
   
   foreach ($a as $item2 )
   {
//      echo "<img src='../backend/afbeelding/".$item2."'><br/>";
   }

?>


<div id="browse-grid">
<?php
while ($item = mysqli_fetch_assoc($result))
    {
        ?><div class="overzicht">
            <?php

        echo "<img class='img' src='../backend/afbeelding/".$item['foto']."'><br/>";
        echo "<h2>" . $item['titel'] . "</h2><br>";
        echo "<p>" . $item['tekst'] . "</p><br>";
        // echo "<img src='".$item['foto']."'><br>";
        
        ?>
        </div>
        <?php
    } 
?>
</div>



            <?php
                // echo "<td><a href='detail.php?id=" . $item['id'] . "'>detail</a></td>";
                // echo "<td><a href='deletevraag.php?id=" . $item['id'] . "'>X</a></td>";
                // echo "<td><a href='editfront.php?id=" . $item['id'] . "'>edit</a></td>";
            
            
            // echo "<br><a href='detail.php?id=" . $item['id'] . "'>detail</a>";
        
        
        

        
    }
    else 
    {
        echo "<p>Geen items gevonden!</p>";
    }


 

    ?>

    </div>




    <footer>

    </footer>
</body>
</html>