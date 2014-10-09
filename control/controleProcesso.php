<?php
require_once"../model/ProcessoDAO.php";

$opcao = $_REQUEST["opcao"];

switch ($opcao){
	case "incluir":
        //obtendo os dados do formulário.
       echo $data = implode('-',array_reverse(explode('/',$_POST['data']))).'<br />';

       echo $_POST['nParcelas'];

        $objProcesso->setNProcesso($_POST['nProcesso']);
        $objProcesso->setCliente($_POST['idCliente']);
        $objProcesso->setParte($_POST['parteContraria']);
        $objProcesso->setData($data);
        $objProcesso->setTribunal($_POST['tribunal']);
        $objProcesso->setFormaPagamento($_POST['formaPagamento']);
        $objProcesso->setValorFixo($_POST['valorFixo']);
        $objProcesso->setValorAcao($_POST['valorAcao']);
        $objProcesso->setNumeroParcelas($_POST['nParcelas']);

        //cadastrando o processo no banco.
        $objProcessoDAO->incluirProcesso($objProcesso);

        echo "
            <script>
                alert('Cadastro realizado com Sucesso.');
                window.location = '../view/consultarProcesso.php?pag=processo';
            </script>";
	break;
	
	case "alterar":
        //obtendo os dados do formulário.
        $data = implode('-',array_reverse(explode('/',$_POST['data'])));

		$objProcesso->setId($_GET['idprocesso']);
        $objProcesso->setNProcesso($_POST['nProcesso']);
        $objProcesso->setCliente($_POST['idCliente']);
        $objProcesso->setParte($_POST['parteContraria']);
        $objProcesso->setData($data);
        $objProcesso->setTribunal($_POST['tribunal']);
        $objProcesso->setFormaPagamento($_POST['formaPagamento']);
        $objProcesso->setValorFixo($_POST['valorFixo']);
        $objProcesso->setValorAcao($_POST['valorAcao']);
        $objProcesso->setNumeroParcelas($_POST['nParcelas']);

        //cadastrando o processo no banco.
        $objProcessoDAO->editarProcesso($objProcesso);

        echo "
            <script>
                alert('Cadastro Alterado com Sucesso.');
                window.location = '../view/consultarProcesso.php?pag=processo';
            </script>";
	break;
	
	case "excluir":
		$id=$_POST['id'];
		$objProcesso->setId($id); 
		$objProcessoDAO->excluirProcesso($objProcesso);
		
	break;

}
?>