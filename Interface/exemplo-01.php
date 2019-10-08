<?php

interface Veiculo{

public function acelerar($velocidade);
public function freiar($velocidade);
public function trocarMarcha($marcha);



}
class Civic implements Veiculo{
public function acelerar($velocidade)
{

echo "O veículo acelerou até: " . $velocidade . "Km/h";

}
public function freiar ($velocidade){
	echo "O O veículo freiou até:". $velocidade . "Km/h";

}
public function trocarMarcha($marcha){

	echo "O veículo engatou a marcha:" . $marcha;

}

}
$carro= new Civic();
$carro->trocarMarcha(1);


?>
