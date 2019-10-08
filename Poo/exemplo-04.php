<?php


class Endereco{



private $logradouro;
private $numero;
private $bairro;
private $cidade;


public function __construct($a, $b, $c,$d){


	$this -> logradouro= $a;
	$this -> numero =$b;
	$this -> bairro =$c;
	$this -> cidade =$d;

	
}


function __destruct(){

	var_dump("DESTRUIR");
}

function __toString(){

	return $this-> logradouro.", ".$this-> numero." - ".$this-> bairro.", ".$this-> cidade." ";
}


}


$meuEndereco = new Endereco("Travessa santa cruz","128","Morro da Cruz","Sabará");

/*var_dump($meuEndereco);
unset($meuEndereco);*/

echo $meuEndereco;

?>
