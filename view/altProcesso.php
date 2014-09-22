<meta http-equiv="Content-Type" content="text/html; charset = ISO-8859-1" />
<link rel="styleSheet" type="text/css" href="../public/css/estilo.css">
<script type="text/javascript" src="../public/js/jquery.js"></script>
<script type="text/javascript" src="../public/js/cadProcesso.js"></script>
<script type="text/javascript" src="../public/js/jquery.maskedinput-1.2.2.js"></script>
<script>
$(document).ready(function() {
		$('input[@id=data]').mask('99/99/9999');
	})
</script>
<?php
include_once '../model/processoDAO.php';
include_once '../model/clientesDAO.php';
include_once '../model/tribunalDAO.php';

$objProcesso->setId($_GET['idprocesso']);
$linha=$objProcessoDAO->consultarProcesso($objProcesso);
?>

<form name="frmProcesso" action="../control/controleProcesso.php?idprocesso=<?php echo $linha['idProcesso']; ?>" id="frmProcesso" method="POST">

<table border="0" cellspacing="0" align="center">
    <thead>
        <tr>
            <th colspan="2">Alteração de Processos</th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Número do Processo:</td>
            <td><input type="text" name="nProcesso" value="<?php echo $linha['nprocesso']; ?>" size="20" id="nProcesso" /><br><span id="erroProcesso"></span></td>
        </tr>
        <tr>
            <td>Cliente:</td>
            <td><select name="idCliente" size="1" id="idCliente">
                    <option value="" selected>Escolha um cliente..</option>
                    <?php
                            $objclientesDAO->listaClienteProcesso();
                     ?>

                </select><br><span id="erroCliente"></span></td>
        </tr>
        <tr>
            <td colspan="2"><div id="processo"></div><div id="carregando" align="center"><img src="../public/img/loading.gif">Carregando..</div></td>
            
        </tr>
        <tr>
            <td>Parte Contrária:</td>
            <td><input type="text" name="parteContraria" value="<?php echo $linha['parte_contraria']; ?>" size="20" id="parteContraria" /><br><span id="erroParteContraria"></span></td>
        </tr>
        <tr>
            <td>Data:</td>
            <td><input type="text" name="data" size="20" id="data" value="<?php echo $linha['datacerta']; ?>" ></td>
        </tr>
        <tr>
            <td>Tribunal:</td>
            <td><select name="tribunal" id="tribunal" size="1">
                    <option value="" selected>Selecione um Tribunal..</option>
                    <?php $objTribunalDAO->listaTribunalCombo();?>

                </select><br><span id="erroTribunal"></span></td>
        </tr>
       
        <tr>
            <td>Forma de Pagamento:</td>
            <td><select name="formaPagamento" size="1" id="formaPagamento">
                    <option value="vista">À VISTA</option>
                    <option value="parcelado">PARCELADO</option>
                </select><span id="erroFormaPagamento"></span></td>
        </tr>
        <tr>
            <td>Valor Fixo:</td>
            <td><input type="text" name="valorFixo" value="<?php echo $linha['valorFixo']; ?>" size="20" id="valorFixo" /><span id="erroValorFixo"></span></td>
        </tr>
       
        <tr id="nParcela">

            <td>Número de Parcelas:</td>
            <td><input type="text" name="nParcelas" value="<?php echo $linha['nParcelas']; ?>" size="20" id="nParcelas" /><span id="erroNParcelas"></span></td>
            
        </tr>

        <tr>
            <td>% Valor Ação:</td>
            <td><input type="text" name="valorAcao" value="<?php echo $linha['valorAcao']; ?>" size="20" id="valorAcao" /><span id="errovalorAcao"></span></td>
        </tr>
        <tr>
            <td align="center" colspan="2"><input type="hidden" name="opcao" value="alterar" id="opcao" /><input type="button" value="ALTERAR" name="alterar" id="cadastrar"  /><input type="reset" value="Limpar" name="limpar" id="limpar"  /></td>
           
        </tr>
    </tbody>
</table>
















</form>

