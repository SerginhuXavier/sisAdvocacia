<?php
require_once "../model/andamentoDAO.php";

$opcao = $_REQUEST["opcao"];

switch ($opcao){
	case "cadastrar" : 
		$processo= $_POST   ['processo'];
		$descricao=$_POST['descricao'];
		$data = implode('-',array_reverse(explode('/',$_POST['data'])));

		$objAndamento->setProcesso($processo);
		$objAndamento->setDescricao($descricao);
		$objAndamento->setdata($data);
					
		$objAndamentoDAO->cadastrar($objAndamento);

		echo"<script>window.location='../view/consultarAndamento.php?pag=cliente';</script>";
		break;
	
	case "altera":
		$id=$_GET['idandamento'];
		$descricao=$_POST['descricao'];
        $data = implode('-',array_reverse(explode('/',$_POST['data'])));
				
		$objAndamento->setId($id);
		$objAndamento->setDescricao($descricao);
		$objAndamento->setData($data);
		
		
		$objAndamentoDAO->alterar($objAndamento);
		echo"<script>window.location='../view/consultarAndamento.php?pag=adm';</script>";
		break;

	case "excluir":
		$id=$_GET['id'];
		$objAndamento->setId($id); 
		$objAndamentoDAO->excluir($objUsuario);
			echo "
			<script> window.location='../view/consultarAndamento.php';</script>";
	break;
}
?>