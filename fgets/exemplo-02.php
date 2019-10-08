<?php 

$filename= "logo.png";
$base64 =  base64_encode( file_get_contents($filename));
$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype =$fileinfo->file($filename);

$base64_encode= "data:" . $mimetype . ";base64," . $base64;


 ?>
 <a href="?=$base64_encode?>" target="_blank">Link Para imagem</a>

 <img src="<?=$base64_encode?>">