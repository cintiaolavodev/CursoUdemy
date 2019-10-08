<form action="validar_login.php" method="POST">

	<table>
		<tr>
			<td><label for="login">Login:</label></td>
			<td><input type="text" name="login" id="login" required/></td>
		</tr>
		<tr>
			<td><label for="senha">Senha:</label></td>
			<td><input type="password" name="senha" id="senha" required /></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" value="Entrar"/></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><a href="cadastro.php"> Cadastrar-me</a></td>
		</tr>
	</table>	
	
</form>