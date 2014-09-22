<?php
require_once '../model/classUsuario.php';
/*
session_start();
$pag_at =$_GET['pag'];
$menuProcesso = $_SESSION['menuProcesso'];
$menuAdm = $_SESSION['menuAdm'];
$menuCliente = $_SESSION['menuCliente'];

if (($menuAdm == "0") && ($pag_at=='adm')) {
	echo "<script>alert('você não tem permissão para acessar essa página');</script>";
	echo "<script>window.location='bem_vindo.php';</script>";
}

if (($menuProcesso == "0") && ($pag_at == 'processo')) {
	echo "<script>alert('você não tem permissão para acessar essa página');</script>";
	echo "<script>window.location='bem_vindo.php';</script>";
}

if (($menuAdm == "0") && (pag=='cliente')) {
	echo "<script>alert('você não tem permissão para acessar essa página');</script>";
	echo "<script>window.location='bem_vindo.php';</script>";


}
 */
$objUsuarioDAO->verificalogin();
?>