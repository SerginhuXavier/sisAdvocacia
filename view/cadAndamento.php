<html>
    <head>
        <script src="../public/js/jquery.js"></script>
        <script src="../public/js/jquery.maskedinput.js"></script>
        <script src="../public/js/andamento.js"></script>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <link rel="stylesheet" href="../public/css/estilo.css"; />
    </head>
    <body>
        <?php
        $processo=$_GET['processo'];
        ?>
        <form id="cadAndamento" action="../control/controleAndamento.php" method="post">
            <input type="hidden" name="processo" value="<?php echo $processo; ?>">
            <input type="hidden" name="opcao" value="cadastrar">
            <table align="center" border="0" class="table">
                <th class="titulo" colspan="2" align="center">CADASTRO DE ANDAMENTOS</th>
                <tr>
                    <td class="texto">Data</td>
                    <td>
                        <input type="text" name="data" maxlength="10" size="13" class="form" id="data"><br />
                        <span id="spanData" class="span"></span>
                    </td>
                </tr>
                <tr>
                    <td class="texto">Descricao</td>
                    <td>
                        <textarea name="descricao" cols="50" rows="3"  class="form" id="descricao"></textarea><br />
                        <span id="spanDescricao" class="span"></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="button" id="btnCadastrar" value="CADASTRAR" class="form"></td>
                </tr>
            </table>
        </form>
    </body>
</html>