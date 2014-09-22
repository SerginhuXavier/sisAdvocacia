<meta http-equiv="Content-Type" content="text/html; charset = ISO-8859-1" />
<link rel="styleSheet" type="text/css" href="../public/css/estilo.css">
<script type="text/javascript" src="../public/js/jquery.js"></script>
<script type="text/javascript" src="../public/js/cadProcesso.js"></script>
<script type="text/javascript" src="../public/js/jquery.maskedinput-1.2.2.js"></script>
<script>
$(document).ready(function() {
		$('input[@name=data]').mask('99/99/9999');
	})
</script>
<?php

include_once '../model/clientesDAO.php';
include_once '../model/tribunalDAO.php';

?>

<form name="frmProcesso" action="../control/controleProcesso.php" id="frmProcesso" method="POST">

<table border="0" cellspacing="0" align="center">
    <thead>
        <tr>
            <th colspan="2">Cadastro de Processos</th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>N�mero do Processo:</td>
            <td><input type="text" name="nProcesso" value="" size="20" id="nProcesso" /><br><span id="erroProcesso"></span></td>
        </tr>
        <tr>
            <td>Cliente:</td>
            <td><select name="idCliente" size="1" id="idCliente">
                    <option value="" selected>Escolha um cliente..</option>
                    <?php
                            $objclientesDAO->listaClienteProcesso();
                     ?>

                </select><span id="erroCliente"></span></td>
        </tr>
        <tr>
            <td colspan="2"><div id="processo"></div><div id="carregando" align="center"><img src="../public/img/loading.gif">Carregando..</div></td>
            
        </tr>
        <tr>
            <td>Parte Contr�ria:</td>
            <td><input type="text" name="parteContraria" value="" size="20" id="parteContraria" /><br><span id="erroParteContraria"></span></td>
        </tr>
        <tr>
            <td>Data:</td>
            <td><input type="text" name="data" value="" size="20" id="data" value="<?php echo date("d-m-Y");?>" /></td>
        </tr>
        <tr>
            <td>Tribunal:</td>
            <td><select name="tribunal">
                    <option>Selecione um Tribunal..</option>
                    <?php $objTribunalDAO->listaTribunalCombo();?>

                </select><span id="erroTribunal"></span></td>
        </tr>
       
        <tr>
            <td>Forma de Pagamento:</td>
            <td><select name="formaPagamento" size="1" id="formaPagamento">
                    <option value="vista">� VISTA</option>
                    <option value="parcelado">PARCELADO</option>
                </select><span id="erroFormaPagamento"></span></td>
        </tr>
        <tr>
            <td>Valor Fixo:</td>
            <td><input type="text" name="valorFixo" value="" size="20" id="valorFixo" /><span id="erroValorFixo"></span></td>
        </tr>
       
        <tr id="nParcela">

            <td>N�mero de Parcelas:</td>
            <td><input type="text" name="nParcelas" value="" size="20" id="nParcelas" /><span id="erroNParcelas"></span></td>
            
        </tr>

        <tr>
            <td>% Valor A��o:</td>
            <td><input type="text" name="valorAcao" value="" size="20" id="valorAcao" /><span id="errovalorAcao"></span></td>
        </tr>
        <tr>
            <td align="center" colspan="2"><input type="hidden" name="opcao" value="incluir" id="opcao" /><input type="button" value="Cadastrar" name="cadastrar" id="cadastrar"  /><input type="reset" value="Limpar" name="limpar" id="limpar"  /></td>
           
        </tr>
    </tbody>
</table>
















</form>

