<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <script src="../public/js/jquery.js"></script>
        <script src="../public/js/comarca.js"></script>

        <link rel="stylesheet" href="../public/css/estilo.css" />
    </head>
    <body>
        <form name="cadComarca" id="cadComarca" method="post" action="../control/controleComarca.php">
            <input type="hidden" value="cadastrar" id="opcao" name="opcao">
            <table align="center" border="0" class="table">
                <tr>
                    <td class="titulo" align="center" colspan="2">CADASTRO DE COMARCAS</td>
                </tr>
                <tr>
                    <td class="texto">Descrição:</td>
                    <td>
                        <input type="text" name="descricao" id="descricao" class="form" maxlength="55" size="58"><br>
                        <span id="spanDescricao" class="span"></span>
                    </td>
                </tr>
                <tr>
                    <td class="texto">Identificação da Vara:</td>
                    <td>
                        <select name="vara" id="vara">
                            <option value="">Selecione uma vara..</option>
                            <?php include_once '../model/varaDAO.php';
                            $objVaraDAO->listaVaraCombo();?>
                        </select><br />
                        <span id="spanVara" class="span"></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="button" id="btnCadastrar" value="CADASTRAR" class="form">
                    </td>
                </tr>
            </table>
        </form>
    </body>