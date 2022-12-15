<?php



$bestand = $_FILES['afbeelding'];
$bestand2 = $_FILES['document'];

// echo "<pre>";
// print_r($bestand);
// echo "</pre>";

// echo "<pre>";
// print_r($bestand2);
// echo "</pre>";

$naamdoc = $bestand2['name'];
$tijdelijkeNaamPDF = $bestand2['tmp_name'];

$typedoc = $bestand2['type'];

$arraydoc = explode(".", $naamdoc);
$extdoc = end($arraydoc);
if ($naamdoc != ""){
    echo $naamdoc. " is van het type " .$extdoc;
    if(move_uploaded_file($tijdelijkeNaamPDF, "media/$naamdoc"))
        {
            echo "<br>Hij is geupload!";
            exit;
        }
}






$sizefoto = $bestand['size'];

// if($sizefoto == 0){
//     exit;
// }

if($sizefoto < 3000000 && $sizefoto > 0){
    $sizefoto = $sizefoto / 1000000;
    echo $sizefoto . " Mb aan grootte<br>";
    $tijdelijkeNaam = $bestand['tmp_name'];
    $goedeNaam = $bestand['name'];
    $type = $bestand['type'];
    
    echo "<p>{$goedeNaam} is van het type {$type}</p>"; 
    $array = explode(".", $goedeNaam);
    $ext = end($array);
    if ($ext == "png" ||  $ext == "gif" || $ext == "jpeg" || $ext == "jpg"){
        echo "Extensie: $ext <br/>";

        $lengte = getimagesize($bestand['tmp_name'])[1];
        $breedte = getimagesize($bestand['tmp_name'])[0];
        if($lengte < 1000 && $breedte < 1000){
            echo $lengte . " pixels lengte en " .  $breedte . " pixels breedte<br>";
            
            if(move_uploaded_file($tijdelijkeNaam, "media/$goedeNaam"))
            {
                echo "<br>Hij is geupload!";
                exit;
            }
        }
        else{
            echo "<br>Het bestand is te groot, kies een andere afbeedling";
        }


    }
    
    

    // $naam = "verzinMaarIets";
    


    // if(move_upload_file($tijdelijkeNaam, "media/" .$naam.$ext))
    // move_uploaded_file($tijdelijkeNaam, "media/$goedeNaam");
    
}
else if($sizefoto > 3000000){
    echo "Te groot bestand. Probeer het opnieuw.";
}
echo "<br><a href='index.html'>HOME</a><br>";