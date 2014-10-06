<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<?php
require('../model/usuarioDAO.php');
$login=$_POST['login'];
$senha=$_POST['senha'];
$objUsuario->setLogin($login);
$objUsuario->setSenha($senha);

$objUsuarioDAO->logar($objUsuario);
echo "<script>window.location='../view/menu.php'</script>";
?>
</head>