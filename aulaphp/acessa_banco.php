<?php

$con = @mysqli_connect("localhost","root","") || die("Erro de acesso ao servidor!");
@mysql_select_db("bd_aula") || die("Erro de acesso ao bd!");

?>