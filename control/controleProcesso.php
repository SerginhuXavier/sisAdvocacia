<?php
require_once"../model/ProcessoDAO.php";

$opcao = $_REQUEST["opcao"];

switch ($opcao){
	case "incluir":
        //obtendo os dados do formulário.
        $objProcesso->setNProcesso($_POST['nProcesso']);
        $objProcesso->setCliente($_POST['idCliente']);
        $objProcesso->setParte($_POST['parteContraria']);
        $objProcesso->setData($_POST['data']);
        $objProcesso->setTribunal($_POST['tribunal']);
        $objProcesso->setFormaPagamento($_POST['formaPagamento']);
        $objProcesso->setValorFixo($_POST['valorFixo']);
        //fazendo o tratamento para o número de parcelas

        if (isset($_POST['nParcelas'])){
        $objProcesso->setNumeroParcelas($_POST['nParcelas']);
        }
        //fim tratamento nParcelas

        $objProcesso->setValorAcao($_POST['valorAcao']);
        //cadastrando o processo no banco.

        $objProcessoDAO->incluirProcesso($objProcesso);
	break;
	
	case "alterar":
        //obtendo os dados do formulário.
		$objProcesso->setId($_GET['idprocesso']);
        $objProcesso->setNProcesso($_POST['nProcesso']);
        $objProcesso->setCliente($_POST['idCliente']);
        $objProcesso->setParte($_POST['parteContraria']);
        $objProcesso->setData($_POST['data']);
        $objProcesso->setTribunal($_POST['tribunal']);
        $objProcesso->setFormaPagamento($_POST['formaPagamento']);
        $objProcesso->setValorFixo($_POST['valorFixo']);
        //fazendo o tratamento para o número de parcelas

        if (isset($_POST['nParcelas'])){
        $objProcesso->setNumeroParcelas($_POST['nParcelas']);
        }
        //fim tratamento nParcelas

        $objProcesso->setValorAcao($_POST['valorAcao']);
        //cadastrando o processo no banco.

        $objProcessoDAO->editarProcesso($objProcesso);
	break;
	
	case "excluir":
		$id=$_POST['id'];
		$objProcesso->setId($id); 
		$objProcessoDAO->excluirProcesso($objProcesso);
		
	break;

}
?>