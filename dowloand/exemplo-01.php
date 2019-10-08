<?php 

$link = "https://img.ibxk.com.br/2013/5/materias/3985717135116.jpg";

$content= file_get_contents($link);

$parse= parse_url($link);

$basename= basename($parse["patch"]);

	$file= fopen($basename,"w+");

	fwrite($file, $content);
	
	fclose($file);


 ?>

 
 <img src="<?=$basename?>">