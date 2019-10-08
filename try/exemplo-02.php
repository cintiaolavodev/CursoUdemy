<?php 

function trataNome($name){

if (!$name) {
	
	throw new Exception("Nenhum nome foi informado", 1);
	
}
echo ucfirst($name). "<br>";

}
try{

	trataNome("joao");
	trataNome("");
}catch(Exception $e){

	echo $e->getMessage()."<br>";

}finally{

	echo "Executou o Try";
}

 ?>