<?php
include_once('../control/verifica2.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <script src="../public/js/jquery.js"></script>
    <script	src="../public/js/ext.js" type="text/javascript"></script>
    <script type="text/javascript" src="../public/js/cliente.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
@import url("../public/css/estilo.css");
	-->
</style>
</head>
<body>
<table align='center' border='0' id='table' cellspacing='0' cellpadding='7'>
<th colspan='6' align='center'>LISTAGEM DE CLIENTES
</th>
<th colspan='15' align='left' class='table'><a href='cadCliente.php'><img src='../public/img/forms.png' alt='CLIQUE AQUI PARA ADICIONAR UM NOVO REGISTRO' border='no' id='cad' style='cursor:pointer'></a></th>

<tr class='titulo' align='center' cellspacing='0'>
<td>Nome</td>
<td>CPF</td>
<td>Telefone</td>
<td>Celular</td>
<td>Processos</td>
<td>Editar</td>
<td>Excluir</td>
</tr>
<?php
require "../model/clientesDAO.php";
$resultado= $objclientesDAO->listar();
?>
</body>
</html>