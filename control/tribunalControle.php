<?php

include_once '../model/tribunalDAO.php';


//recebendo a opção do campo oculto do form
$opcao = $_POST['opcao'];

//criando o case

switch($opcao) {

    case "incluir":
        
          $objTribunal->setDescricao($_POST['descricao']);

        //inserindo no banco

        $objTribunalDAO->incluirTribunal($objTribunal);

     break;

     case "alterar":

        
        $objTribunal->setId($_POST['id']);
        $objTribunal->setDescricao($_POST['descricao']);

        //inserindo no banco

        $objTribunalDAO->alterar($objTribunal);
       break;


       case "excluir":

           $objTribunal->setId($_POST['id']);

           $objTribunalDAO->excluir($objTribunal);
         

}


?>



