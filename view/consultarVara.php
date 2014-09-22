<?php
//include('verificalogin.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script	src="../public/js/ext.js" type="text/javascript"></script>
<script type="text/javascript" src="../public/js/lista_vara.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="public/js/jquery.1.2.6"></script>
<script src="../public/js/excluir.js"></script>
<style type="text/css">
<!--
@import url("../public/css/estilo.css");
-->
</style>
</head>

<body>
<?php
require('../model/classVara.php');

echo "<table border = '0' align='center' cellspacing='0' cellpadding='7' id='table'>
<th colspan='4'>LISTAGEM DE VARAS</th>
<th align='left'><a class='exemplo' title='CLIQUE AQUI PARA ADICIONAR UM NOVO REGISTRO' href='cadVara.php'><img src='../public/img/forms.png' alt='CLIQUE AQUI PARA ADICIONAR UM NOVO REGISTRO' border='no'></a></th>
		<tr class='titulo' align='center'>
			<td>ID</td>
			<td>Descrição</td>
			<td>Tribunal</td>
			<td>EDITAR</td>
			<td>EXCLUIR</td>
		</tr>";
$objVaraDAO->consultar();	  	
?>
</body>
</html>