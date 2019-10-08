<?php 



$name= "images";

if (!is_dir($name)) {
	mkdir($name);
	echo "Diretorio criado com sucesso.";
}else{

	rmdir($name);
	//echo "O diretorio: $name foi removido com sucesso";
	//echo "Já existe o diretorio";
}

 ?>