<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<?php
	
	$nome =$_POST["nome"];
	$login =$_POST["login"];
	$senha =$_POST["senha"];
	$confirmar_senha =$_POST["confimar_senha"];
	
	require "acessa_banco.php";
	
	$qtdnum = 0;
	$qtdletra = 0;
	
	for($i=0;$i<strlen($senha);$i++){
		if(is_numeric($senha[$i])){
			$qtdnum++;
		}
		else{
			$qtdletra++;
		}
	}
	
	if($nome=="" or $login=="" or $senha=="" or $confirmar_senha==""){
		echo "Existe algum campo sem preenchimento";
	} else if( $senha!=$confirmar_senha){
		echo "Senha não confere com confirmação de senha";
	} else if($qtdnum <3 or $qtdletra<3){ 
		echo "Senha não contém pelo menos 3 letras e 3 numeros";
		
	} else{
		
	$sql = "insert into tb_usuarios values ('NULL', '$nome', '$login', '$senha')";
	$result = @mysql_query($sql);
	
	echo "Dados abaixo foram inseridos corretamente";
	
		
?>	

<table>
	<tr><td align="right"> <b>Nome:</b> </td><td> <?php echo $nome ?></td></tr>
	<tr><td align="right"> <b>Login:</b> </td><td> <?php echo $login ?></td></tr>
	<tr><td align="right"> <b>Senha:</b> </td><td> <?php echo $senha ?></td></tr>
	<tr><td> <b>Confirmação de senha:</b> </td><td> <?php echo $confirmar_senha ?></td></tr>
</table>

<?php
}
?>