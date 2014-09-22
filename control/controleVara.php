<?php
require_once"../model/classVara.php";

$opcao = $_REQUEST["opcao"];

switch ($opcao){
	case "cadastrar" : 
		$descricao=$_POST['descricao'];
		$tribunal = $_POST['idtribunal'];
		
		$objVara->setDescricao($descricao);
		$objVara->setTribunal($tribunal);
		
		
		$objVaraDAO->cadastrar($objVara);
		echo"<script>window.location='../view/consultarVara.php?pag=processo';</script>";
		break;
	
	
	case "lista":
		$id=$_GET['idvara'];
		$objVara->setId($_GET['idvara']);
		$objVaraDAO->consultar1($objVara);
		echo "
		<script>window.location='../view/altVara.php?id=".$id."';</script>";
	break;
	
	case "altera":
		$id=$_GET['idvara'];
		$descricao=$_POST['descricao'];
		$tribunal = $_POST['idtribunal'];
		
		$objVara->setId($id);
		$objVara->setDescricao($descricao);
		$objVara->setTribunal($tribunal);
		
		$objVaraDAO->alterar($objVara);
		echo"<script>window.location='../view/consultarVara.php?pag=processo';</script>";
		break;

	case "excluir":
		$id=$_POST['id'];
		$objVara->setId($id); 
		$objVaraDAO->inativar($objVara);
			echo "
			<script> window.location='../view/consultarVara.php?pag=processo';</script>";
	break;
}
?>