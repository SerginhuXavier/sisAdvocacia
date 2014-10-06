<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <style type="text/css">
        <!--
        @import url("../public/css/estilo.css");
        -->
        </style>
        </head>
        <script src="../public/js/jquery.js"></script>
        <script src ="../public/js/usuario.js"></script>
    </head>
    <body>
    <?php
    require("../model/usuarioDAO.php");
    $id=$_GET['idusuario'];
    $objUsuario->setId($id);
    $resultado=$objUsuarioDAO->consultar1($objUsuario);
    ?>
    <form name="altUsuario" id="altUsuario" method="post" action="../control/controleUsuario.php">
        <input type="hidden" value="<?php echo $resultado['idUsuario']; ?>" name="idusuario"/>
        <input type="hidden" value="altera" name="opcao">
        <table align="center" border="0" class="table">
            <tr>
                <td class="titulo" align="center" colspan="2">ALTERAÇÃO DE USUÁRIOS</td>
            </tr>
            <tr>
                <td class="texto">Nome:</td>
                <td><input type="text" name="nome" id="nome" class="form" maxlength="55" size="33" value="<?php echo $resultado['nome']; ?>"><br>
                    <span id="spanNome"></span></td>
            </tr>
            <tr>
                <td class="texto">Login</td>
                <td>
                    <input type="text" id="login" name="login" class="form" maxlength="55" value="<?php echo $resultado['login']; ?>"><br>
                    <span id="spanLogin"></span></td>
            <tr>
                <td class="texto">nova senha</td>
                <Td><input type="password" name="senha" class="form"></td>
            </tr>
            <tr>
                <td class="texto">confirmar nova senha</td>
                <Td><input type="password" name="confirmaSenha" class="form"></td>
            </tr>
            <tr>
                <td colspan="2" class="texto">
                    <fieldset>PERMISSÕES
                        <fieldset>
                            <input type="checkbox" id="adm" name="MNadm" value="s" <?php if ($resultado['menuAdm']!=0) { echo 'checked';} ?>>
                            <label for="adm"> menu Administração </label>
                        </fieldset>
                        <fieldset>
                            <input type="checkbox" id="cli" name="MNcliente" value="s" <?php if ($resultado['menuCliente']!=0) { echo 'checked';} ?> >
                            <label for="cli"> menu cliente </label>
                        </fieldset>
                        <fieldset>
                            <input type="checkbox" id="pro" name="MNprocesso" value="s" <?php if ($resultado['menuProcesso']!=0) { echo 'checked';} ?> >
                            <label for="pro"> menu processo </label>
                        </fieldset>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="button" value="EDITAR" class="form" id="btnAlterar">
                    <input type="reset" class="form" value="LIMPAR"></td>
            </tr>
        </table>
    </form>
    </body>
</html>