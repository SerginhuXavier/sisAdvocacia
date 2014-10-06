<html>
<head>
    <link rel="styleSheet" type="text/css" href="../public/css/estilo.css">
    <script type="text/javascript" src="../public/js/jquery.js"></script>
    <script type="text/javascript" src="../public/js/tribunal.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php

include_once '../model/tribunalDAO.php';
$id = $_GET['id'];

$objTribunal->setId($id);

$resultado = $objTribunalDAO->consultar($objTribunal);

?>
<form name="frmTribunal" id="frmTribunal" action="../control/controleTribunal.php" method="POST">
    <input type="hidden" name="opcao" value="alterar" />
    <input type="hidden" name="id" value="<?php echo $id; ?>" /><br>
    <table border="0" align="center" cellpadding="2px">
        <thead>
        <tr>
            <th colspan="2">AlTERAÇÃO DE TRIBUNAIS</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="texto">Descrição:</td>
            <td>
                <input type="text" name="descricao" id="descricao" value="<?php echo $resultado['descricao'];?>" size="53" maxlength="50" class="form" />
                <span id="spanDescricao" class="span"></span></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="button" id="btnAlterar" value="ALTERAR" class="form" />
                <input type="reset" value="LIMPAR" class="form">
            </td>
        </tr>
        </tbody>
    </table>
</form>
</body>
</html>