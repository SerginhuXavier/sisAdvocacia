<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <script src="public/js/jquery"></script>
        <script	src="../public/js/ext.js" type="text/javascript"></script>
        <script type="text/javascript" src="../public/js/processo.js"></script>

        <link rel="stylesheet" href="../public/css/estilo.css" />
    </head>
    <body>
        <table align='center' cellpadding='8' cellspacing='0' border='0' id='table'>
            <th colspan='8'>LISTAGEM DE PROCESSOS</th>
            <th colspan='15' align='left'>
                <a class='exemplo' title='CLIQUE AQUI PARA ADICIONAR UM NOVO REGISTRO' href='../view/cadProcesso.php'>
                    <img src='../public/img/forms.png' alt='CLIQUE AQUI PARA ADICIONAR UM NOVO REGISTRO' border='no'>
                </a>
            </th>
            <tr align='center' class='titulo'>
                <td>Número</td>
                <td>Cliente</td>
                <td>Parte Contrária</td>
                <td>Tribunal</td>
                <td>Data</td>
                <td>Andamento</td>
                <td>Editar</td>
                <td>Excluir</td>
            </tr>
            <?php
            require("../model/processoDAO.php");
            $objProcessoDAO->listaProcesso();
            ?>
        </table>
    </body>
</html>