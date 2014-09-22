<?php
//include('verificalogin.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="public/js/jquery.1.2.6"></script>
<script>
         $(document).ready(function(){
         $("#carregando").hide();
         $(".exemplo").click(function() {
         $(".#carregando").ajaxStart(function(){
		 $(this).show();
         });
         $.post("../view/cadTribunal.php"
         return false;
      });
</script>
<script>
         $(document).ready(function(){
         $("#altera").click(function() {
		 $(this).show()
		 })
         $.post("altTribunal.php"
         return false;
      });
</script>
<script src="../public/js/excluir.js"></script>
<style type="text/css">
<!--
@import url("../public/css/estilo.css");
-->
</style>
</head>
<body>
<?php


require('../model/classTribunal.php');

$objTribunal = new Tribunal;

echo "
<table border = '0' align='center' cellspacing='7' cellpadding='7' class='table'>
<tr>
<td colspan='15' align='left' class='titulo'><a class='exemplo'title='CLIQUE AQUI PARA ADICIONAR UM NOVO REGISTRO' href='../view/cadTribunal.php'>CADASTRAR<br><img src='../public/img/ico_add.png' alt='CLIQUE AQUI PARA ADICIONAR UM NOVO REGISTRO' border='no'></a></td>
</tr>
<tr class='titulo'>
<td colspan='15' align='center'>RELATÓRIO DE TRIBUNAIS</td>
</tr>
<tr class='consulta' align='center'>
<td>ID</td>
<td>Descrição</td>
<td>EDITAR</td>
<td>EXCLUIR</td>
</tr>";
$iden=$objTribunal->consultar();
while ($linha = mysql_fetch_array($iden)) {
											  
	echo "<tr class='consulta1' align='center'>
			<td>".$linha['idTribunal']."</td>
			<td>".$linha['descricao']."</td>
			<td><a id='altera' href='altTribunal.php?idtribunal=".$linha['idTribunal']."'><img src='../public/img/btn_alterar.jpg' border='no'></a></td>
			<td><a href=javascript:tribunal(".$linha['idTribunal'].")><img src='../public/img/btn_excluir.png' border='no'></a></td>
		</tr>";									  
											 
											 
}

echo "</table>";
											 

?>
</body>
</html>