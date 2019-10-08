<?php 

require_once("config.php");

/*carrega apenas um USUARIOS:

$Valnei= new Usuario();
$Valnei ->loadbyID(5);
echo $Valnei;
*/
/*carrega uma lista de USUARIOS

/$lista = Usuario::getList();

echo  json_encode($lista);
*/
//carrega uma lista de USUARIOS buscando pelo login
/*$search = Usuario::search("tha");
echo  json_encode($search);*/

/* CRIANDO UM NOVO USUARIO. INSERT:
$usuario = new Usuario();
$usuario->login("Valnei","cintiadu");
echo $usuario;*/

/*$aluno =new Usuario("aluno","@aluno");

$aluno-> insert();

echo $aluno;*/

//ALTERAR UM USUARIO
/*$usuario = new Usuario();
$usuario->loadbyID(8);
$usuario->update ("professor", "@prof");

echo $usuario;*/

$usuario = new Usuario();
$usuario->loadbyID(1);
$usuario->delete();
echo $usuario;




















/*9$sql = new Sql();

$usuarios = $sql-> select("SELECT* FROM tb_usuarios");

echo json_encode($usuarios);*/

 ?>