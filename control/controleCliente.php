<?php
require_once"../model/classCliente.php";

$opcao = $_REQUEST["opcao"];

switch ($opcao){
	case "cadastrar" : 
		$nome=$_POST['nome'];
		$nacionalidade = $_POST['nacionalidade'];
		$estado = $_POST['estado_civil'];
		$profissao = $_POST['profissao'];
		$rg = $_POST['rg'];
		$cpf = $_POST['cpf'];
		$endereco = $_POST['endereco'];
		$comp = $_POST['complemento'];
		$tel1 = $_POST['tel1'];
		$tel2 = $_POST['tel2'];
		$cel = $_POST['cel'];
		$email = $_POST['email'];
		$obs = $_POST['obs'];
		
		$objCliente->setNome($nome);
		$objCliente->setNacionalidade($nacionalidade);
		$objCliente->setProfissao($profissao);
		$objCliente->setEstado($estado);
		$objCliente->setRg($rg);
		$objCliente->setCpf($cpf);
		$objCliente->setEndereco($endereco);
		$objCliente->setComplemento($comp);
		$objCliente->setTel1($tel1);						
		$objCliente->setTel2($tel2);						
		$objCliente->setCel($cel);
		$objCliente->setEmail($email);
		$objCliente->setObs($obs);
		
		
		$objClienteDAO->cadastrar($objCliente);
		echo"<script>window.location='../view/consultarCliente.php';</script>";
		break;
	
	
	case "lista":
		$id=$_GET['idcliente'];
		$objCliente->setId($_GET['idcliente']);
		$objClienteDAO->consultar1($objCliente);
		echo "
		<script>window.location='../view/altCliente.php?id=".$id."';</script>";
	break;
	
	case "alterar":
               echo $id=$_GET['id'];
        exit;
		$nome=$_POST['nome'];
                $nacionalidade = $_POST['nacionalidade'];
		$estado = $_POST['estado'];
		$profissao = $_POST['profissao'];
		$rg = $_POST['rg'];
		$cpf = $_POST['cpf'];
		$endereco = $_POST['endereco'];
		$comp = $_POST['complemento'];
		$tel1 = $_POST['tel1'];
		$tel2 = $_POST['tel2'];
		$cel = $_POST['cel'];
		$email = $_POST['email'];
		$obs = $_POST['obs'];
		
		$objCliente->setId($id);
		$objCliente->setNome($nome);
		$objCliente->setProfissao($profissao);
		$objCliente->setNacionalidade($nacionalidade);
		$objCliente->setEstado($estado);
		$objCliente->setRg($rg);
		$objCliente->setCpf($cpf);
		$objCliente->setEndereco($endereco);
		$objCliente->setComplemento($comp);
		$objCliente->setTel1($tel1);						
		$objCliente->setTel2($tel2);						
		$objCliente->setCel($cel);
		$objCliente->setEmail($email);
		$objCliente->setObs($obs);

                print_r ($objCliente);
                exit;

		$objClienteDAO->consultar($objCliente);
		echo"<script>window.location='../view/consultarCliente.php';</script>";
		break;

	case "excluir":
		$id=$_POST['id'];
		$objCliente->setId($id); 
		$objClienteDAO->inativar($objCliente);
			echo "
			<script> window.location='../view/consultarCliente.php';</script>";
	break;
	
	case "pesquisaProcesso":
	$id=$_GET['id'];
	
	$objCliente->setId($id);
	$objClienteDAO->pesquisaProcesso($objCliente);
	break;
}
?>