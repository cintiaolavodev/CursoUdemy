<?php 



$con = new mysqli("localhost", "root","", "dbphp7");
	if($con -> connect_error){

	echo "Error". $con -> connect_error;


}


$stmt= $con -> prepare("INSERT INTO tb_usuarios(deslogin, dessenha)VALUES (?, ?)");
$stmt->bind_param ("ss",  $login,$pass);
$login="user";
$pass="123454";

$stmt->execute();
 ?>
