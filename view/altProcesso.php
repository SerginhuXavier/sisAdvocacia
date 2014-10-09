<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset = utf8" />

        <link rel="styleSheet" type="text/css" href="../public/css/estilo.css">

        <script type="text/javascript" src="../public/js/jquery.js"></script>
        <script type="text/javascript" src="../public/js/jquery.maskedinput.js"></script>
        <script type="text/javascript" src="../public/js/processo.js"></script>
    </head>
    <body>
        <?php
        include_once '../model/processoDAO.php';
        include_once '../model/clientesDAO.php';
        include_once '../model/tribunalDAO.php';

        $objProcesso->setId($_GET['idprocesso']);
        $linha=$objProcessoDAO->consultarProcesso($objProcesso);

        if($linha['valorFixo'] == '0.00'){
            $linha['valorFixo'] = '';
        }else{
            $linha['valorFixo'] = implode(',',explode('.',$linha['valorFixo']));
        }

        if($linha['valorAcao'] == '0.00'){
            $linha['valorAcao'] = '';
        }else{
            $linha['valorAcao'] = implode(',',explode('.',$linha['valorFixo']));
        }

        if($linha['nParcelas'] == '0'){
            $linha['nParcelas'] = '';
        }

        if($linha['formaPagamento'] == 'vista'){
            $vista = 'selected';
            $parceladoClass = 'nParcela';
        }else{
            $parcelado = 'selected';
            $parceladoClass = '';
        }
        ?>
        <form name="frmProcesso" action="../control/controleProcesso.php" id="frmProcesso" method="POST">
            <input type="hidden" value="<?php echo $linha['idProcesso']; ?>" name="id" id="id"/>
            <table border="0" cellspacing="0" align="center">
                <thead>
                    <tr>
                        <th colspan="2">Alteração de Processos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Número do Processo:</td>
                        <td>
                            <input type="text" name="nProcesso" value="<?php echo $linha['nprocesso']; ?>" size="20" id="nProcesso" /><br>
                            <span id="erroProcesso"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Cliente:</td>
                        <td>
                            <select name="idCliente" size="1" id="idCliente">
                                <option value="" selected>Escolha um cliente..</option>
                                <?php
                                $objclientesDAO->listaClienteProcessoCombo($linha['idCliente']);
                                ?>

                            </select><br />
                            <span id="erroCliente"></span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div id="processo"></div>
                            <div id="carregando" align="center">
                                <img src="../public/img/loading.gif">
                                Carregando..
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Parte Contrária:</td>
                        <td>
                            <input type="text" name="parteContraria" value="<?php echo $linha['parte_contraria']; ?>" size="20" id="parteContraria" /><br />
                            <span id="erroParteContraria" class="span"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Data:</td>
                        <td>
                            <input type="text" name="data" size="20" id="data" value="<?php echo $linha['datacerta']; ?>" ><br />
                            <span id="erroData" class="span"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Tribunal:</td>
                        <td>
                            <select name="tribunal" id="tribunal" size="1">
                                <option value="" selected>Selecione um Tribunal..</option>
                                <?php $objTribunalDAO->listaTribunalCombo($linha['idTribunal']);?>
                            </select><br>
                            <span id="erroTribunal" clas="span"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Forma de Pagamento:</td>
                        <td>
                            <select name="formaPagamento" size="1" id="formaPagamento">
                                <option value="vista" <?php echo $vista; ?> >A VISTA</option>
                                <option value="parcelado" <?php echo $parcelado; ?>>PARCELADO</option>
                            </select><br/>
                            <span id="erroFormaPagamento" class="span"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Valor Fixo:</td>
                        <td>
                            <input type="text" name="valorFixo" value="<?php echo $linha['valorFixo']; ?>" size="20" id="valorFixo" /><br />
                        </td>
                    </tr>
                    <tr id="<?php echo $parceladoClass; ?>">
                        <td>Número de Parcelas:</td>
                        <td>
                            <input type="text" name="nParcelas" value="<?php echo $linha['nParcelas']; ?>" size="20" id="nParcelas" />
                            <span id="erroNParcelas"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>% Valor Ação:</td>
                        <td>
                            <input type="text" name="valorAcao" value="<?php echo $linha['valorAcao']; ?>" size="20" id="valorAcao" />
                        </td>
                    </tr>
                    <tr>
                        <td align="center" colspan="2">
                            <input type="hidden" name="opcao" value="alterar" id="opcao" />
                            <input type="button" value="ALTERAR" name="alterar" id="cadastrar"  />
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>