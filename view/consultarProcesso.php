<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script	src="../public/js/ext.js" type="text/javascript"></script>
<script type="text/javascript" src="../public/js/processo.js"></script>
<script src="public/js/jquery.1.2.6"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Relatório de Processos</title>
<script src="../public/js/excluir.js"></script>
<style type="text/css">
<!--
@import url("../public/css/estilo.css");
-->
</style>
</head>
<body>

<table align='center' cellpadding='8' cellspacing='0' border='0' id='table'>
<th colspan='8'>LISTAGEM DE PROCESSOS</th>
<th colspan='15' align='left'><a class='exemplo' title='CLIQUE AQUI PARA ADICIONAR UM NOVO REGISTRO' href='../view/cadProcesso.php'><img src='../public/img/forms.png' alt='CLIQUE AQUI PARA ADICIONAR UM NOVO REGISTRO' border='no'></a></th>
<tr align='center' class='titulo'>
<td>ID</td>
<td>Número</td>
<td>Cliente</td>
<td>Parte Contrária</td>
<td>Tribunal</td>
<td>Data</td>
<td>Status</td>
<td>Andamento</td>
<td>Editar</td>
<td>Excluir</td>
</tr>
<?php
require("../model/processoDAO.php");
$objProcessoDAO->listaProcesso();
?>
</body>
</html>