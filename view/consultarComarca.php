<?php
require_once'../control/verifica2.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script	src="../public/js/ext.js" type="text/javascript"></script>
<script type="text/javascript" src="../public/js/lista_comarca.js"></script>
<script src="../public/js/jquery.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
@import url("../public/css/estilo.css");
-->
</style>
</head>

<body>
<?php
require('../model/classComarca.php');

echo "<table border='0' align='center' cellspacing='0' cellpadding='7' id='table'>
<th colspan='4'>LISTAGEM DE COMARCAS</th>
<th align='left'><a title='CLIQUE AQUI PARA ADICIONAR UM NOVO REGISTRO' class='exemplo' href='../view/cadComarca.php'><img src='../public/img/forms.png' alt='CLIQUE AQUI PARA ADICIONAR UM NOVO REGISTRO' border='no'></a></th>
		<tr class='titulo' align='center'>
			<td>ID</td>
			<td>Descrição</td>
			<td>Vara</td>
			<td>EDITAR</td>
			<td>EXCLUIR</td>
		</tr>";
$objComarcaDAO->consultar();
?>
</body>
</html>