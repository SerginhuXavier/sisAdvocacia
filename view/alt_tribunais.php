<link rel="styleSheet" type="text/css" href="../public/css/estilo.css">
<script type="text/javascript" src="../public/js/jquery.js"></script>
<script type="text/javascript" src="../public/js/alt_tribunais.js"></script>
<?php

include_once '../model/tribunalDAO.php';
$id = $_GET['id'];

$objTribunal->setId($id);

$resultado = $objTribunalDAO->consultar($objTribunal);

?>

<form name="frmTribunal" id="frmTribunal" action="../control/tribunalControle.php" method="POST">

<table border="0" align="center" cellpadding="2px">
    <thead>
        <tr>
            <th colspan="2">Tribunais</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="texto">Descrição:</td>
            <td><input type="text" name="descricao" id="descricao" value="<?php echo $resultado['descricao'];?>" size="20" class="campo"  /><input type="hidden" name="opcao" value="alterar" /><input type="hidden" name="id" value="<?php echo $resultado['idTribunal'];?>" /></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="button" id="cadastrar" value="Alterar" name="cadastrar" class="campo" />
            <input type="reset" value="Limpar" name="limpar" class="campo" /></td>
        </tr>
    </tbody>
</table>



</form>

