<link rel="styleSheet" type="text/css" href="../public/css/estilo.css">
<script
	src="../public/js/ext.js" type="text/javascript"></script>
<script type="text/javascript" src="../public/js/lista_tribunal.js"></script>
<?php
include_once '../model/tribunalDAO.php';

?>

<table border="0" align="center" id="table" cellspacing="0">
    <thead>
        <tr>
            <th colspan="3">Listagem de Tribunais</th>
            <th><a href="tribunais.php" target="iframe"><img src="../public/img/forms.png" width="32" height="32" alt="Cadastrar Tribunal" border="0"/>


        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="texto_titulo">Código Tribunal</td>
            <td class="texto_titulo">Descrição</td>
            <td class="texto_titulo">Editar</td>
            <td class="texto_titulo">Excluir</td>
        </tr>

<?php

$objTribunalDAO->listaTribunal();

?>
    </tbody>
</table>
