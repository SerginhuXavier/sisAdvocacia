<head>
<script src="../public/js/jquery.js"></script>
<script>
$(document).ready(function() {
		$("#divError").hide();
		$("#btnCadastrar").click(function() {
			var data = $("#data").val();
			var descricao = $("#descricao").val();
			if (data == "") {
				$("#divError").show();
				$("#spanData").html("Você esqueceu de preencher a data.");
			}
			
			if (descricao == "") {
				$("#divError").show();
				$("#spanDescricao").html("você esqueceu de preencher a descricao");				
			}
			
			if (data !="") {
			$("#spanData").html("");
			}
			
			if(descricao!=""){
			$("#spanDescricao").html("");
			}
			
			if ((data !="") && (descricao!="") ) {
			$("#divError").hide();
			$("#cadAndamento").submit();
			}	
		});
});
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
<!--
@import url("../public/css/estilo.css");
-->
</style>
</head>
<?php
$processo=$_GET['processo'];
?>
<form id="cadAndamento" action="../control/controleAndamento.php?processo=<?php echo $processo; ?>" method="post">
<input type="hidden" name="opcao" value="cadastrar">
<div id="divError" align="center">
<span id="spanData"></span><br>
<span id="spanDescricao"></span>
</div><br>
<table align="center" border="0" class="table">
<th class="titulo" colspan="2" align="center">CADASTRO DE ANDAMENTOS</th>
<tr>
<td class="texto">Data</td>
<td><input type="text" name="data" maxlength="10" size="13" class="form" id="data"></td>
</tr>
<tr>
<td class="texto">Descricao</td>
<td><textarea name="obs" cols="50" rows="3"  class="form" id="descricao"></textarea></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="button" id="btnCadastrar" value="CADASTRAR" class="form"></td>
</tr>
</table>
</form>