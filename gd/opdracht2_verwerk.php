<?php


$ext = pathinfo($_FILES["afbeelding"]["name"], PATHINFO_EXTENSION);
echo  "Extensie: $ext <br/>";
$directory = "afbeeldingen";
$naam = $_POST["naam"];
$temp = $_FILES["afbeelding"]["tmp_name"];
$timestamp = date('d:m:y:h:i:s');
$filename = $naam;
$filename .= $timestamp. "." . $ext;
$dir = "afbeeldingen/";
if (move_uploaded_file($temp, $directory. "/" .$filename))
{
    echo "$filename uploaded <br/>";
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
  echo "<img src='afbeeldingen/".$item."'><br/>";
}

if (isset($_POST['verstuur'])){
    mkdir("afbeeldingen");
    $naam = $_POST['naam'];
    $bestand = $_FILES['afbeelding'];
    // echo $bestand;
    echo $naam;
    

    echo "<pre>";
    print_r($bestand);
    echo "</pre>";

    $goedeNaam = $bestand['name'];
    $array = explode(".", $goedeNaam);
    $ext = end($array);
    // echo $ext;

    // echo (time() - $post_timestamp) . " seconds ago";
    // $tijd = (time() - $post_timestamp)/60/60/60/60/60;
    $timestamp = date('d:m:y:h:i:s');


    // function ago($time) { 
    //     $timediff=time()-$time; 
    
    //     $days=intval($timediff/86400);
    //     $remain=$timediff%86400;
    //     $hours=intval($remain/3600);
    //     $remain=$remain%3600;
    //     $mins=intval($remain/60);
    //     $secs=$remain%60;
    
    //     if ($secs>=0) $timestring = "0m".$secs."s";
    //     if ($mins>0) $timestring = $mins."m".$secs."s";
    //     if ($hours>0) $timestring = $hours."u".$mins."m";
    //     if ($days>0) $timestring = $days."d".$hours."u";
    
    //     return $timestring; 
    // }
    // echo ago(1334214962);
    // echo "<br>";
    // echo $timestring;
    

    $naamBestand = $naam."";
    $naamBestand .= $timestamp;
    $naamBestand .= ".".$ext;
    echo $naamBestand;
    $tijdelijkeNaam = $bestand['tmp_name'];
    if(move_uploaded_file($tijdelijkeNaam, "afbeeldingen/$naamBestand"))
            {
                echo "<br>Hij is geupload!";
                exit;
            }
    
    $dir = 'afbeeldingen/';
    
    // Open a directory, and read its contents
    // if (is_dir($dir)){
    //   if ($dh = opendir($dir)){
    //     while (($file = readdir($dh)) !== false){
    //       echo "<img src='afbeeldingen/" . $file . "'><br>";
    //     }
    //     closedir($dh);
    //   }
    // }
    

// Sort in ascending order - this is default
$a = scandir($dir);
echo "<pre>";
print_r($a);
echo "</pre>";
echo ($a)[3];
unset($a[0]);
unset($a[1]);

foreach ($a as $item )
{
  echo "<img src='afbeeldingen/".$item."'><br/>";
}

}

echo "<br><a href='index.html'>HOME</a><br>";