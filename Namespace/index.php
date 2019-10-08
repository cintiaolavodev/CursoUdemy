<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad= new Cadastro();

$cad ->setNome("Cintia Ferreira");
$cad ->setEmail("cintia@pactonet.com.br");
$cad ->setSenha("C654321");


echo $cad->registrarVenda();




 ?>
