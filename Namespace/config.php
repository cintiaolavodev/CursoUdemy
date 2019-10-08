<?php 

spl_autoload_register(function($nameClass){


var_dump($nameClass);
	$dirClasse= "class";
	$filename= $dirClasse .DIRECTORY_SEPARATOR . $nameClass . ".php";

	if(file_exists($filename)){

		require_once($filename);

	}

});



 ?>