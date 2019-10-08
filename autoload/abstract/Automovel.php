<?php

interface Veiculo{

public function acelerar($velocidade);
public function freiar($velocidade);
public function trocarMarcha($marcha);



}


abstract class Automovel implements Veiculo{

public function acelerar($velocidade)
{

echo "<br/>"."O veículo acelerou até: " . $velocidade . "Km/h";

}
public function freiar ($velocidade){
	echo " O veículo freiou até:". $velocidade . "Km/h";

}
public function trocarMarcha($marcha){

	echo "O veículo engatou a marcha:" . $marcha;

}

}

?>