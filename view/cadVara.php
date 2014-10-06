<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="../public/css/estilo.css" />

        <script src="../public/js/jquery.js"></script>
        <script src="../public/js/vara.js"></script>
    </head>
    <body>
        <form name="cad_vara" id="cad_vara" method="post" action="../control/controleVara.php">
            <input type="hidden" value="cadastrar" name="opcao" id="opcao">
            <table align="center" border="0" class="table">
                <tr>
                    <td class="titulo" align="center" colspan="2">CADASTRO DE VARAS</td>
                </tr>
                <tr>
                    <td class="texto">Descrição:</td>
                    <td><input type="text" name="descricao" id="descricao" class="form" maxlength="55" size="58"><br>
                        <span id="spanDescricao" class="span"></span></td>
                </tr>
                <tr>
                    <td class="texto">Identificação do Tribunal:</td>
                    <td>
                        <select name="idtribunal" id="tribunal">
                            <option value="">Selecione um Tribunal..</option>
                            <?php include_once '../model/tribunalDAO.php';
                            $objTribunalDAO->listaTribunalCombo();?>

                        </select><br />
                        <span id="erroTribunal" class="span"></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input class="form" type="button" id="btnCadastrar" value="CADASTRAR">
                        <input type="reset" value="LIMPAR" class="form"></td>
                </tr>
            </table>
        </form>
    </body>
