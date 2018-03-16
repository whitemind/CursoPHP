<?php 

$filename = "LEGO_Logo.jpg";

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mymetype = $fileinfo->file($filename);

//echo $mymetype;

$base64encode =  "data:" . $mymetype . ";base64,". $base64;

//echo "data:image/jpg;base64," . $base64;

 ?>

<a href="<?=$base64encode?>" target="_blank">Link para imagem</a>

<img src="<?=$base64encode?>">