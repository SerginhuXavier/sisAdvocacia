<?php
include_once '../model/tribunalDAO.php';
?>
<html>
    <head>
        <link rel="styleSheet" type="text/css" href="../public/css/estilo.css">
        <script type="text/javascript" src="../public/js/ext.js"></script>
        <script type="text/javascript" src="../public/js/tribunal.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>
    <table border="0" align="center" id="table" cellpadding='8' cellspacing='0' >
        <thead>
            <tr>
                <th colspan="2">Listagem de Tribunais</th>
                <th>
                    <a href="cadTribunal.php" target="iframe">
                        <img src="../public/img/forms.png" width="32" height="32" alt="Cadastrar Tribunal" border="0"/>
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Descrição</td>
                <td>Editar</td>
                <td>Excluir</td>
            </tr>
            <?php
            $objTribunalDAO->listaTribunal();
            ?>
        </tbody>
    </table>
    </body>
</html>
