<?php
require	"valida_sessao.inc";
require "acessa_banco.php";

$login=$_SESSION["login_usu"];
$senha=$_SESSION["senha_usu"];

$sql = "select * from tb_usuarios where login='$login' and senha='$senha'";
$result = @mysql_query($sql);
	
if(!$result)
die("Erro de claúsula SQL");

$linha = mysql_fetch_array($result);
$nome = $linha["nome"];
?>

<a href='efetuar_logoff.php'>Sair</a>
<h1> Bem Vindo <?php echo $nome ?> ! </h1>