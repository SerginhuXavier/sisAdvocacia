<?php
include_once "../model/classCliente.php";
$id=$_GET['id'];
$objCliente->setId($id);
$objClienteDAO->pesquisaProcesso($objCliente);
?>
