<?php 


$images= scandir("images");

	$data= array();

	foreach ($images as $img) {

		if (in_array($img, array(".",".."))) {
			
			$filename= "images" . DIRECTORY_SEPARATOR .	$img;

			$info= pathinfo($filename);

			// Pega o tamanho do arquivo:
			$info["size"] = filesize($filename);
			// mostra data de modificacao do arquivo:
			$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
			// mostra local do arquivo:
			$info["url"] = "http://localhost/projetos/CURSO/DIR/" .str_replace("\\","/", $filename);
			
			array_push($data, $info);
		}
}

echo json_encode($data);

 ?>