<form action="validar_cadastro.php" method="POST">

	<table>
		<tr>
			<td align="right"><label for="nome">Nome:</label></td>
			<td><input type="text" name="nome" id="nome" required /></td>
		</tr>
		<tr>
			<td align="right"><label for="login">Login:</label></td>
			<td><input type="text" name="login" id="login" required /></td>
		</tr>
		<tr>
			<td align="right"><label for="senha">Senha:</label></td>
			<td><input type="password" name="senha" id="senha" required /></td>
		</tr>
		<tr>
			<td align="right"><label for="confimar_senha">Confirmar senha:</label></td>
			<td><input type="password" name="confimar_senha" id="confimar_senha" required /></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" value="Cadastrar"/></td>
		</tr>
	</table>
		
</form>