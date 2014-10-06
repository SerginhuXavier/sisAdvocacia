<?php
require_once "../model/comarcaDAO.php";

$opcao = $_REQUEST["opcao"];

switch ($opcao){
	case "cadastrar" : 
		$descricao=$_POST['descricao'];
		$vara = $_POST['vara'];

		$objComarca->setDescricao($descricao);
		$objComarca->setVara($vara);
		
		
		$objComarcaDAO->cadastrar($objComarca);

        echo "<script>alert('Cadastro Realizado com Sucesso');</script>";
		echo"<script>window.location='../view/consultarComarca.php?pag=processo';</script>";
		break;
	
	
	case "lista":
		$id=$_GET['idcomarca'];

		$objComarca->setId($_GET['idcomarca']);

		$objComarcaDAO->consultar1($objComarca);

		echo "<script>window.location='../view/altComarca.php?id=".$id."';</script>";
	break;
	
	case "altera":
		$id=$_GET['idcomarca'];
		$descricao=$_POST['descricao'];
		$vara = $_POST['idvara'];
		
		$objComarca->setId($id);
		$objComarca->setDescricao($descricao);
		$objComarca->setVara($vara);
		
		$objComarcaDAO->alterar($objComarca);

        echo"<script> alert('Alteração Realizada com Sucesso');</script>";
        echo"<script>window.location='../view/consultarComarca.php?pag=processo';</script>";

		break;

	case "excluir":
		$id=$_POST['id'];

		$objComarca->setId($id);

		$objComarcaDAO->inativar($objComarca);

        echo "<script> window.location='../view/consultarComarca.php?pag=processo';</script>";
	break;
}
?>