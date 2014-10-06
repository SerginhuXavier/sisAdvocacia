<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <script src="../public/js/jquery.js"></script>
        <script	src="../public/js/ext.js" type="text/javascript"></script>
        <script type="text/javascript" src="../public/js/comarca.js"></script>

        <link rel="stylesheet" href="../public/css/estilo.css" />
    </head>

    <body>
        <?php
        require('../model/comarcaDAO.php');
        ?>
        <table border='0' align='center' cellspacing='0' cellpadding='7' id='table'>
            <th colspan='3'>LISTAGEM DE COMARCAS</th>
            <th align='left'>
                <a title='CLIQUE AQUI PARA ADICIONAR UM NOVO REGISTRO' class='exemplo' href='../view/cadComarca.php'>
                    <img src='../public/img/forms.png' alt='CLIQUE AQUI PARA ADICIONAR UM NOVO REGISTRO' border='no'>
                </a>
            </th>
            <tr class='titulo' align='center'>
                <td>Descrição</td>
                <td>Vara</td>
                <td>EDITAR</td>
                <td>EXCLUIR</td>
            </tr>
            <?php
            $objComarcaDAO->consultar();
            ?>
        </table>
    </body>
</html>