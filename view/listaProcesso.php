<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
require_once "../model/clientesDAO.php";
echo
'<table align="center" cellspacing="0" cellpadding="7">
    <th colspan="3" align="center">PROCESSO DE CLIENTES</th>
    <tr class="titulo" align="center" cellspacing="0">
       <td>N�MERO DO PROCESSO</td>
       <td>NOME DO CLIENTE</td>
       <td>VALOR DA A��O</td>
    </tr>';
$objclientesDAO->listaClienteProcesso();
?>
</body>
</html>
