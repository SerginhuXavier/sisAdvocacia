<link rel="styleSheet" type="text/css" href="../public/css/estilo.css">
<script type="text/javascript" src="../public/js/jquery.js"></script>
<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
<!--
@import url("../public/css/estilo.css");
-->
</style>
<script src="../public/js/jquery.js"></script>
<script>
$(document).ready(function() {
		$("#btnCadastrar").click(function() {
			var descricao = $("#descricao").val();			
			
			if (descricao == "") {
				$("#spanDescricao").html("Você esqueceu de preencher a descrição do tribunal.");
				$("#descricao").focus();
			}
			
			
			else {
				$("#frmTribunal").submit();
			}
			
     	});
});
</script>
</head>
<form name="frmTribunal" id="frmTribunal" action="../control/tribunalControle.php" method="POST">

<table border="0" align="center" cellpadding="2px">
    <thead>
        <tr>
            <th colspan="2">CADASTRO DE TRIBUNAIS</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="texto">Descrição:</td>
            <td><input type="text" name="descricao" id="descricao" value="" size="53" maxlength="50" class="form" /><input type="hidden" name="opcao" value="incluir" /><br>
			<span id="spanDescricao" class="span"></span></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="button" id="btnCadastrar" value="CADASTRAR" name="cadastrar" class="form" />
			<input type="reset" value="LIMPAR" class="form"></td>
        </tr>
    </tbody>
</table>



</form>

