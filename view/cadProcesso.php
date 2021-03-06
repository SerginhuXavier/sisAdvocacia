<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset = utf8" />
        <link rel="styleSheet" type="text/css" href="../public/css/estilo.css">
        <script type="text/javascript" src="../public/js/jquery.js"></script>
        <script type="text/javascript" src="../public/js/jquery.maskedinput.js"></script>
        <script type="text/javascript" src="../public/js/processo.js"></script>
    </head>
    <body>

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
                    <td>Número do Processo:</td>
                    <td>
                        <input type="text" name="nProcesso" value="" size="20" id="nProcesso" /><br />
                        <span id="erroProcesso" class="span"></span>
                    </td>
                </tr>
                <tr>
                    <td>Cliente:</td>
                    <td>
                        <select name="idCliente" size="1" id="idCliente">
                            <option value="" selected>Escolha um cliente..</option>
                            <?php
                            $objclientesDAO->listaClienteProcessoCombo();
                            ?>
                        </select><br />
                        <span id="erroCliente" class="span"></span></td>
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
                        <input type="text" name="parteContraria" value="" size="20" id="parteContraria" /><br />
                        <span id="erroParteContraria" class="span"></span>
                    </td>
                </tr>
                <tr>
                    <td>Data:</td>
                    <td>
                        <input type="text" name="data" size="20" id="data"  /><br />
                        <span id="erroParteContraria" class="span"></span>
                    </td>
                </tr>
                <tr>
                    <td>Tribunal:</td>
                    <td>
                        <select name="tribunal" id="tribunal">
                            <option>Selecione um Tribunal..</option>
                            <?php $objTribunalDAO->listaTribunalCombo(0);?>
                        </select><span id="erroTribunal" class="span"><br />
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>Forma de Pagamento:</td>
                    <td>
                        <select name="formaPagamento" size="1" id="formaPagamento">
                            <option value="vista">A VISTA</option>
                            <option value="parcelado">PARCELADO</option>
                        </select><br />
                        <span id="erroFormaPagamento"></span>
                    </td>
                </tr>
                <tr>
                    <td>Valor Fixo:</td>
                    <td>
                        <input type="text" name="valorFixo" value="" size="20" id="valorFixo" />
                    </td>
                </tr>
                <tr id="nParcela">
                    <td>Número de Parcelas:</td>
                    <td>
                        <input type="text" name="nParcelas" value="" size="20" id="nParcelas" /><br />
                        <span id="erroNParcelas"></span>
                    </td>
                </tr>
                <tr>
                    <td>% Valor Ação:</td>
                    <td>
                        <input type="text" name="valorAcao" value="" size="20" id="valorAcao" />
                    </td>
                </tr>
                <tr>
                    <td align="center" colspan="2">
                        <input type="hidden" name="opcao" value="incluir" id="opcao" />
                        <input type="button" value="Cadastrar" name="cadastrar" id="cadastrar"  />
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>