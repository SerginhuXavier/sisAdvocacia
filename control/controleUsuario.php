<?php
require_once "../model/usuarioDAO.php";

$opcao = $_REQUEST["opcao"];

switch ($opcao){
	case "cadastrar" : 
		$nome=$_POST['nome'];
		$login = $_POST['login'];
		$senha = $_POST['senha'];
		
		if (isset($_POST['MNadm'])){
            $menuAdm = $_POST['MNadm'];
            $objUsuario->setMenuAdm(1);
        }else {
		    $objUsuario->setMenuAdm(0);
		}

		if (isset($_POST['MNcliente'])){
		    $menuCliente = $_POST['MNcliente'];
		    $objUsuario->setMenuCliente(1);
		}else{
            $objUsuario->setMenuCliente(0);
        }

		if (isset($_POST['MNprocesso'])){
            $menuProcesso = $_POST['MNprocesso'];
            $objUsuario->setMenuProcesso(1);
		}else{
            $objUsuario->setMenuProcesso(0);
        }
	
		$objUsuario->setNome($nome);
		$objUsuario->setLogin($login);
		$objUsuario->setSenha($senha);
		
		
		$objUsuarioDAO->cadastrar($objUsuario);
        echo "
            <script>
                alert('Cadastro Realizado com Sucesso');
                window.location='../view/consultarUsuario.php?pag=adm';
            </script>";

    break;
	
	
	case "lista":
		$id=$_GET['idUsuario'];
		$objUsuario->setId($_GET['idUsuario']);
		$objUsuarioDAO->consultar1($objUsuario);
		echo "
		<script>window.location='../view/altUsuario.php?id=".$id."';</script>";
	break;
	
	case "altera":
		$id=$_POST['idusuario'];
		$nome=$_POST['nome'];
		$login = $_POST['login'];
		$senha = $_POST['senha'];
		
		if (isset($_POST['MNadm'])){
            $menuAdm = $_POST['MNadm'];
            $objUsuario->setMenuAdm(1);
		}else{
            $objUsuario->setMenuAdm(0);
        }

		if (isset($_POST['MNcliente'])){
            $menuCliente = $_POST['MNcliente'];
            $objUsuario->setMenuCliente(1);
		}else{
            $objUsuario->setMenuCliente(0);
        }

		if (isset($_POST['MNprocesso'])){
            $menuProcesso = $_POST['MNprocesso'];
            $objUsuario->setMenuProcesso(1);
		}else{
            $objUsuario->setMenuProcesso(0);
        }

		$objUsuario->setId($id);
		$objUsuario->setNome($nome);
		$objUsuario->setLogin($login);
		$objUsuario->setSenha($senha);
		
		
		$objUsuarioDAO->alterar($objUsuario);
        echo"
            <script>
                alert('Alteração Realizada com Sucesso');
                window.location='../view/consultarUsuario.php?pag=adm';
            </script>";
		break;

	case "excluir":
		$id=$_POST['id'];
		$objUsuario->setId($id); 
		$objUsuarioDAO->inativa($objUsuario);
			echo "
			<script> window.location='../view/consultarUsuario.php?pag=adm';</script>";
	break;
}
?>