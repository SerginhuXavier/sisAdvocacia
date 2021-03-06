<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="../public/css/estilo.css" />
        <script src="../public/js/jquery.js"></script>
        <script src="../public/js/comarca.js"></script>
    </head>
    <body>
        <?php
        require("../model/comarcaDAO.php");
        $objComarca->setId($_GET['id']);
        $objComarcaDAO->consultar1($objComarca);
        ?>
        <form name="editarComarca" id="editarComarca" method="post" action="../control/controleComarca.php?idcomarca=<?php echo $objComarca->getId(); ?>">
            <input type="hidden" value="altera" name="opcao">
            <table align="center" border="0" class="table">
                <tr>
                    <td class="titulo" align="center" colspan="2">ALTERAÇÃO DE COMARCAS</td>
                </tr>
                <tr>
                    <td class="texto">Descrição:</td>
                    <td>
                        <input type="text" name="descricao" id="descricao" class="form" maxlength="55" size="58" value="<?php echo $objComarca->getDescricao(); ?>"><br>
                        <span id="spanDescricao" class="span"></span></td>
                </tr>
                <tr>
                    <td class="texto">Identificação da Vara:</td>
                    <td>
                        <select name="idvara">
                            <option value="">Selecione uma vara..</option>
                            <?php include_once '../model/varaDAO.php';
                            $objVaraDAO->listaVaraCombo($objComarca->getVara()); ?>
                        </select><br />
                        <span id="spanVara" class="error"></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="button" id="btnAlterar" value="CADASTRAR" class="form">
                </tr>
            </table>
        </form>
    </body>
</html>