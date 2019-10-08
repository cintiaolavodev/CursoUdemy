<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root", "");

$stmt= $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha)VALUES(:LOGIN, :PASSWORD)");


$login = "cintia";
$password= "321545555";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();
echo("Inserido OK!");






 ?>