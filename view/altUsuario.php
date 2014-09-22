<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
<!--
@import url("../public/css/estilo.css");
-->
</style>
</head>
<script src="../public/js/jquery.js"></script>
<script>
$(document).ready(function() {
		$("#btnAlterar").click(function() {
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
					
					
			else {
			$("#altUsuario").submit();
			}	
			
     	});
});
</script>
</head>
<?php
require("../model/classUsuario.php");
$id=$_GET['idusuario'];
$objUsuario->setId($id);
$resultado=$objUsuarioDAO->consultar1($objUsuario);
?>
<form name="altUsuario" id="altUsuario" method="post" action="../control/controleUsuario.php?idusuario=<?php echo $resultado['idUsuario']; ?>">
<input type="hidden" value="altera" name="opcao">
<table align="center" border="0" class="table">
<tr>
<td class="titulo" align="center" colspan="2">ALTERAÇÃO DE USUÁRIOS</td>
</tr>
<tr>
<td class="texto">Nome:</td>
<td><input type="text" name="nome" id="nome" class="form" maxlength="55" size="58" value="<?php echo $resultado['nome']; ?>"><br>
<span id="spanNome"></span></td>
</tr>
<tr>
<td class="texto">Login</td>
<td>
<input type="text" id="login" name="login" class="form" maxlength="55" size="58" value="<?php echo $resultado['login']; ?>"><br>
<span id="spanLogin"></span></td>
<tr>
<td class="texto">nova senha</td>
<Td><input type="password" name="senha" class="form"></td>
</tr><tr>
<td class="texto">confirmar nova senha</td>
<Td><input type="password" name="confirmaSenha" class="form"></td>
</tr>
<tr>
<td colspan="2" class="texto"><fieldset><center>PERMISSÕES</center>
<fieldset><input type="checkbox" name="MNadm" value="s" <?php if ($resultado['menuAdm']!=0) { echo 'checked';} ?>>menu Administração</fieldset>
<fieldset><input type="checkbox" name="MNcliente" value="s" <?php if ($resultado['menuCliente']!=0) { echo 'checked';} ?> >menu cliente</fieldset>
<fieldset><input type="checkbox" name="MNprocesso" value="s" <?php if ($resultado['menuProcesso']!=0) { echo 'checked';} ?> >menu processo</fieldset>
</fieldset>
</td>
</tr>
<tr>
<td colspan="2" align="center"><input type="button" value="EDITAR" class="form" id="btnAlterar">
<input type="reset" class="form" value="LIMPAR"></td>
</tr>
</table>
</form>