<?php
include_once '../model/tribunalDAO.php';

$opcao = $_POST['opcao'];

switch($opcao) {

    case "incluir":
        $objTribunal->setDescricao($_POST['descricao']);

        $objTribunalDAO->incluirTribunal($objTribunal);

        echo "<script>alert('Cadastro Realizado com Sucesso');</script>";
        echo "<script>window.location='../view/consultarTribunal.php';</script>";
    break;

    case "alterar":
        $objTribunal->setId($_POST['id']);
        $objTribunal->setDescricao($_POST['descricao']);

        $objTribunalDAO->alterar($objTribunal);

        echo "<script>alert('Alteração Realizada com Sucesso');</script>";
        echo "<script>window.location='../view/consultarTribunal.php';</script>";
    break;


    case "excluir":

        $objTribunal->setId($_POST['id']);

        $objTribunalDAO->excluir($objTribunal);
    break;
}
?>



