<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="../public/js/jquery.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
<!--
@import url("../public/css/estilo.css");
-->
</style>
<script>
$(document).ready(function() {
		$("#btnCadastrar").click(function() {
			var descricao = $("#descricao").val();			
			
			if (descricao == "") {
				$("#spanDescricao").html("Você esqueceu de preencher a descrição da comarca.");
				 $("#descricao").focus();
			}
			
						
		else {
				$("#cad_comarca").submit();
			}
			
     	});
});
</script>
</head>
<form name="cad_comarca" id="cad_comarca" method="post" action="../control/controleComarca.php">
<input type="hidden" value="cadastrar" name="opcao" id="opcao">
<form name="cadComarca" method="post" action="../control/controleComarca.php">
<input type="hidden" value="cadastrar" id="opcao" name="opcao">
<table align="center" border="0" class="table">
<tr>
<td class="titulo" align="center" colspan="2">CADASTRO DE COMARCAS</td>
</tr>
<tr>
<td class="texto">Descrição:</td>
<td><input type="text" name="descricao" id="descricao" class="form" maxlength="55" size="58"><br>
<span id="spanDescricao" class="span"></span></td>
</tr>
<tr>
<td class="texto">Identificação da Vara:</td>
<td>
<select name="idvara">
                    <option>Selecione uma vara..</option>
                    <?php include_once '../model/classVara.php';
					$objVaraDAO->listaVaraCombo();?>

                </select><span id="erroVara"></span>
</td>
</tr>
<tr>
<td colspan="2" align="center"><input type="button" id="btnCadastrar" value="CADASTRAR" class="form">
<input type="reset" value="LIMPAR" class="form"></td>
</tr>
</table>
</form>