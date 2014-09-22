<link rel="styleSheet" type="text/css" href="../public/css/estilo.css">
<script	src="../public/js/ext.js" type="text/javascript"></script>
<script type="text/javascript" src="../public/js/lista_tribunal.js"></script>
<?php
include_once '../model/tribunalDAO.php';

?>
<body>
<table border="0" align="center" id="table" cellspacing="0" cellpadding="7">
    <thead>
        <tr>
            <th colspan="3" align="center">LISTAGEM DE TRIBUNAIS</th>
            <th><a href="cadTribunal.php" target="iframe"><img src="../public/img/forms.png" width="32" height="32" alt="Cadastrar Tribunal" border="0"/>


        </tr>
    </thead>
    <tbody>
        <tr align="center">
            <td class="titulo">Código</td>
            <td class="titulo">Descrição</td>
            <td class="titulo">Editar</td>
            <td class="titulo">Excluir</td>
        </tr>

<?php

$objTribunalDAO->listaTribunal();

?>
    </tbody>
</table>
</body>