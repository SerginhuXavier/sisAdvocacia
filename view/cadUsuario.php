<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
@import url("../public/css/estilo.css");
-->
</style>
<script src="../public/js/jquery.js"></script>
<script>
$(document).ready(function() {
		$("#btnCadastrar").click(function() {
			var nome = $("#nome").val();
			var login = $("#login").val();
			var senha = $("#senha").val();
			var nsenha = $("#confirmaSenha").val();
			
			
			if (nome == "") {
				$("#spanNome").html("Você esqueceu de preencher o nome.");
				$("#nome").focus();
			}
			
			
			else if (login == "") {
				$("#spanLogin").html("você esqueceu de preencher o login");	
				$("#login").focus();				
			}
					
			
			else if (senha == "") {
				$("#spanSenha").html("você esqueceu de preencher a senha");
				$("#senha").focus();								
			}
					
			
			else if (nsenha != senha) {
				$("#spanNsenha").html("SENHA não confere");				
				$("#confirmaSenha").focus();				
			}
				
			
			else {
			$("#cadUsuario").submit();
			}	
			
     	});
});
</script>
</head>
<form name="cadUsuario" id="cadUsuario" method="post" action="../control/controleUsuario.php">
<input type="hidden" value="cadastrar" name="opcao">
<table border="0" align="center" class="table">
<tr>
<td class="texto">Nome:</td>
<Td><input type="text" name="nome" id="nome" class="form" maxlength="30" size="33"><br>
<span id="spanNome" class="span"></span></td>
</tr>
<tr>
<td class="texto">Login:</td>
<Td><input type="text" name="login" id="login" class="form" maxlength="10" size="13"><br>
<span id="spanLogin" class="span"></span></td>
</tr>
<tr>
<td class="texto">Senha:</td>
<Td><input type="password" name="senha" id="senha" class="form" maxlength="10" size="13"><br>
<span id="spanSenha" class="span"></span></td>
</tr><tr>
<td class="texto">Confirmar senha:</td>
<Td><input type="password" name="confirmaSenha" id="confirmaSenha" class="form" maxlength="10" size="13"><br>
<span id="spanNsenha" class="span"></span></td>
</tr>
<tr>
<td colspan="2" class="texto"><fieldset><center>PERMISSÕES</center>
<fieldset><input type="checkbox" name="MNadm" value="s" checked >menu Administração</fieldset>
<fieldset><input type="checkbox" name="MNcliente" value="s" checked >menu cliente</fieldset>
<fieldset><input type="checkbox" name="MNprocesso" value="s" checked >menu processo</fieldset>
</fieldset>
</td>
</tr>
<tr>
<td colspan="2" align="center"><input type="button" id="btnCadastrar" value="CADASTRAR" class="form">
<input type="reset" value="LIMPAR" class="form"></td>
</tr>
</table>
</form>
</html>
