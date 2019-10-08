<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
	
	$login =$_POST["login"];
	$senha =$_POST["senha"];
	
	require "acessa_banco.php";
	
	$sql = "select * from tb_usuarios where login='$login' and senha='$senha'";
	$result = @mysql_query($sql);
	
	if(!$result)
	die("Erro de claúsula SQL");
	
	$linha = mysql_fetch_array($result);
	
	if($login=="" or $senha=="")	{
		echo "Login ou senha em branco";
	} else if($linha)	{
			session_start();
			$_SESSION["login_usu"]=$login;
			$_SESSION["senha_usu"]=$senha;
			header("location:home.php");
	} else{
			echo "Login ou senha inválidos";
	}
		
?>	

	
	
