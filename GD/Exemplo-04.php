<?php 

header("Content-type: image/jpeg");

$file = "wallpaper.jpg";

$new_width = 256;
$new_height = 256;

//$data = getimagesize($file);

//$width = $data[0];
//$height = $data[1];

list($old_width, $old_height) = getimagesize($file);

$new_Image = imagecreatetruecolor($new_width, $new_height);
$old_Image = imagecreatefromjpeg($file);

imagecopyresampled($new_Image, $old_Image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

imagejpeg($new_Image);

imagedestroy($old_Image);
imagedestroy($new_Image);

 ?>