<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
mkdir(0070);
$filename = $_POST['afbeelding'];

$new_width = 150;
$new_height = 150;

list($old_width, $old_height) = getimagesize("img/".$filename);

$new_image = imagecreatetruecolor($new_width, $new_height);
// $new_imagepng = imagecreatetruecolor($new_width, $new_height);
// $new_imagejpg = imagecreatetruecolor($new_width, $new_height);

$old_image = imagecreatefromjpeg("img/". $filename);
// $old_imagepng = imagecreatefrompng("img/" .$filename);
// $old_imagejpg = imagecreatefromjpg("img/" .$filename);

imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

$thumbname = "thumb_".$filename;

imagejpeg($new_image, "thumbs/".$thumbname, 90);
// imagepng($new_imagepng, "thumbs/".$thumbname, 90);
// imagejpg($new_imagejpg, "thumbs/".$thumbname, 90);

imagedestroy($old_image);
// $imagedestroy($old_imagepng);
// $imagedestroy($old_imagejpg);

imagedestroy($new_image);
// $imagedestroy($new_imagepng);
// $imagedestroy($new_imagejpg);
// $imageform = $_FILES['afbeelding'];

echo "<pre>";
print_r($imageform);
echo "</pre>";

echo "<img src='thumbs/".$thumbname."'><br/>";

// if (isset($_POST['submit'])){

$dir = "thumbs/";
$a = scandir($dir);
// echo "<pre>";
// print_r($a);
// echo "</pre>";
// echo ($a)[3];
unset($a[0]);
unset($a[1]);

foreach ($a as $new_image )
{
  echo "<img src='afbeeldingen/".$new_image."'><br/>";
}






    
//     function cwUpload($field_name = '', $target_folder = '', $file_name = '', $thumb = FALSE, $thumb_folder = '', $thumb_width = '', $thumb_height = ''){
        
//         //folder path setup
        
//         $target_path = $target_folder;
//         $thumb_path = $thumb_folder;
        
//         //file name setup
        
//         $filename_err = explode(".",$_FILES[$field_name]['name']);
//         $filename_err_count = count($filename_err);
//         $file_ext = $filename_err[$filename_err_count-1];
//         if($file_name != ''){
//             $fileName = $file_name.'.'.$file_ext;
//         }else{
//             $fileName = $_FILES[$field_name]['name'];
//         }
        
//         //upload image path
        
//         $upload_image = $target_path.basename($fileName);
        
//         //upload image
        
//         if(move_uploaded_file($_FILES[$field_name]['tmp_name'],$upload_image))
//         {
//             //thumbnail creation
            
//             if($thumb == TRUE)
//             {
//                 $thumbnail = $thumb_path.$fileName;
//                 list($width,$height) = getimagesize($upload_image);
//                 $thumb_create = imagecreatetruecolor($thumb_width,$thumb_height);
//                 switch($file_ext){
//                     case 'jpg':
//                         $source = imagecreatefromjpeg($upload_image);
//                         break;
//                         case 'jpeg':
//                             $source = imagecreatefromjpeg($upload_image);
//                             break;
                            
//                             case 'png':
//                                 $source = imagecreatefrompng($upload_image);
//                                 break;
//                                 case 'gif':
//                                     $source = imagecreatefromgif($upload_image);
//                                     break;
//                                     default:
//                                     $source = imagecreatefromjpeg($upload_image);
//                                 }
                                
//                                 imagecopyresized($thumb_create,$source,0,0,0,0,$thumb_width,$thumb_height,$width,$height);
//                                 switch($file_ext){
//                                     case 'jpg' || 'jpeg':
//                                         imagejpeg($thumb_create,$thumbnail,100);
//                                         break;
//                                         case 'png':
//                                             imagepng($thumb_create,$thumbnail,100);
//                                             break;
                                            
//                                             case 'gif':
//                                                 imagegif($thumb_create,$thumbnail,100);
//                                                 break;
//                                                 default:
//                                                 imagejpeg($thumb_create,$thumbnail,100);
//                                             }
                                            
//                                         }
                                        
//                                         return $fileName;
//                                     }
//                                     else
//                                     {
//                                         return false;
//                                     }
//                                 }
                                
                                
//                                 if(!empty($_FILES['image']['name'])){
                                    
//                                     //call thumbnail creation function and store thumbnail name
                                    
//                                     $upload_img = cwUpload('image','uploads/','',TRUE,'uploads/thumbs/','200','160');
                                    
//                                     //full path of the thumbnail image
                                    
//                                     $thumb_src = 'uploads/thumbs/'.$upload_img;
                                    
//                                     //set success and error messages
                                    
//                                     $message = $upload_img?"<span style='color:#008000;'>Image thumbnail have been created successfully.</span>":"<span style='color:#F00000;'>Some error occurred, please try again.</span>";
                                    
//                                 }else{
                                    
//                                     //if form is not submitted, below variable should be blank
                                    
//                                     $thumb_src = '';
//                                     $message = '';
//                                 }
                                
//             }
//                             echo '<br><a href="index.html">HOME</a><br>';