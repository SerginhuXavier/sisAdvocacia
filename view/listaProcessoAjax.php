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
$idCliente = $_GET['id'];

$retornoProcesso = $objclientesDAO->listaClienteProcesso($idCliente);
//var_dump(is_int($retornoProcesso));

if(is_int($retornoProcesso)){
    echo 'Não existem processos para esse cliente ainda!';
}else{
    echo
    '<table align="center" cellspacing="0" cellpadding="7">
        <th colspan="3" align="center">PROCESSO DE CLIENTES</th>
        <tr class="titulo" align="center" cellspacing="0">
           <td>NÚMERO DO PROCESSO</td>
           <td>NOME DO CLIENTE</td>
           <td>VALOR DA AÇÃO</td>
        </tr>
        '.$retornoProcesso.'
    </table>';
}
?>
</body>
</html>
