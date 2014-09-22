<link rel="styleSheet" type="text/css" href="../public/css/estilo.css">
<script type="text/javascript" src="../public/js/jquery.js"></script>
<script type="text/javascript" src="../public/js/tribunais.js"></script>
<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

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
            <td><input type="text" name="descricao" id="descricao" value="" size="20" class="campo" /><input type="hidden" name="opcao" value="incluir" /></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="button" id="cadastrar" value="Cadastrar" name="cadastrar" class="campo" />
            <input type="reset" value="Limpar" name="limpar" class="campo" /></td>
        </tr>
    </tbody>
</table>



</form>

