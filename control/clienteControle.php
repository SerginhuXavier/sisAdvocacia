<?php

include '../model/clientesDAO.php';

$opcao = $_POST['opcao'];


switch ($opcao) {

    case "incluir":

        $objClientes->setNome($_POST['nome']);
        $objClientes->setEndereco($_POST['endereco']);
        $objClientes->setComplemento($_POST['complemento']);
        $objClientes->setRg($_POST['rg']);
        $objClientes->setCpf($_POST['cpf']);
        $objClientes->setEstadocivil($_POST['estadoCivil']);
        $objClientes->setTelefone($_POST['telefone']);
        $objClientes->setTelefone2($_POST['telefone2']);
        $objClientes->setCelular($_POST['celular']);
        $objClientes->setObservacoes($_POST['observacoes']);
        $objClientes->setEmail($_POST['email']);
        $objClientes->setNacionalidade($_POST['nacionalidade']);
        $objClientes->setProfissao($_POST['profissao']);

        $objclientesDAO->incluirCliente($objClientes);

        echo "<script>alert('Cadastro Realizado com Sucesso.');</script>";
        echo "<script>window.location='../view/consultarCliente.php';</script>";

    break;

    case "alterar":

        $objClientes->setIdCliente($_POST['id']);
        $objClientes->setNome($_POST['nome']);
        $objClientes->setEndereco($_POST['endereco']);
        $objClientes->setComplemento($_POST['complemento']);
        $objClientes->setRg($_POST['rg']);
        $objClientes->setCpf($_POST['cpf']);
        $objClientes->setEstadocivil($_POST['estadoCivil']);
        $objClientes->setTelefone($_POST['telefone']);
        $objClientes->setTelefone2($_POST['telefone2']);
        $objClientes->setCelular($_POST['celular']);
        $objClientes->setObservacoes($_POST['observacoes']);
        $objClientes->setEmail($_POST['email']);
        $objClientes->setNacionalidade($_POST['nacionalidade']);
        $objClientes->setProfissao($_POST['profissao']);

        echo $objclientesDAO->alterarCliente($objClientes);

        //echo "<script>alert('Cadastro Realizado com Sucesso.');</script>";
        //echo "<script>window.location = '../view/consultarCliente.php';</script>";
    break;

    case "excluir":

        $objClientes->setIdCliente($_POST['id']);

        $objclientesDAO->excluirCliente($objClientes);
    break;
}
?>