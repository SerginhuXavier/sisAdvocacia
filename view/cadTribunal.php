<html>
    <head>
        <link rel="styleSheet" type="text/css" href="../public/css/estilo.css">
        <script type="text/javascript" src="../public/js/tribunal.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>
        <form name="frmTribunal" id="frmTribunal" action="../control/controleTribunal.php" method="POST">
            <table border="0" align="center" cellpadding="2px">
                <thead>
                    <tr>
                        <th colspan="2">CADASTRO DE TRIBUNAIS</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="texto">Descrição:</td>
                        <td><input type="text" name="descricao" id="descricao" value="" size="53" maxlength="50" class="form" /><input type="hidden" name="opcao" value="incluir" /><br>
                        <span id="spanDescricao" class="span"></span></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="button" id="btnCadastrar" value="CADASTRAR" name="cadastrar" class="form" />
                            <input type="reset" value="LIMPAR" class="form">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>