<?php

date_default_timezone_set("America/Sao_Paulo"); //pega a hora atual do fuso horario.

$dt = new DateTime();

$periodo = new DateInterval("P15D");// aumenta 15dias para frente.
echo $dt -> format("d/m/Y H:i:s");


$dt->add($periodo);

echo "<br>";

echo $dt -> format("d/m/Y H:i:s");


?>