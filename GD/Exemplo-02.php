<?php 

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imageString($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imageString($image, 5, 440, 350, "Miguel Afonso", $titleColor);
imageString($image, 3, 450, 370, "Concluido em: ".date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");

//imagejpeg($image);

imagejpeg($image, "certificado-".date("Y-m-d").".jpg", 10);

imagedestroy($image);

 ?>