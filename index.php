<?php
require"model/classUsuario.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <script src="public/js/jquery.js" type="text/javascript"></script>
        <script>
        $().ready(function() {
                $("#logar").click(function() {
                    var usuario = $("#login").val();
                    var senha = $("#senha").val();
                    if (usuario == "") {
                        $("#errorLogin").html("campo USUARIO vazio.");
                    }
                    else if (senha == "") {
                        $("#errorSenha").html("campo SENHA  vazio");
                    }
                    else {
                    $("#errorLogin").html("");
                    $("#errorSenha").html("");
                    $("#formLogar").submit();
                    }
                });
        });
        </script>

        <style type="text/css">
        <!-- @import url("public/css/estilo.css");
        #apDiv1 {
            position:relative;
            margin-left:741px;
            top:105px;
            width:187px;
            height:79px;
            z-index:1;
        }
        -->
        </style>
    </head>

    <body>
        <div class="centerIndex">
            <img src="public/img/logoadvocacia.jpg" width='394' height='201' /><br><br>
        </div>
        <form name="frmlogar" id="formLogar"  method="post" action="control/logando.php">
            <table align="center" border="0">
                <tr>
                    <td colspan="2" class="titulo" align="center">LOGIN</td>
                </tr>
                <tr align="right">
                    <td class="texto">Usuário:</td>
                    <td>
                        <input type="text" name="login" id="login" class="form">
                    </td>
                </tr>
                <tr>
                    <td class="texto">Senha:</td>
                    <td>
                        <input type="password" name="senha" id="senha" class="form">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="button" value="LOGAR" class="form" id='logar'><br />
                        <span id="errorSenha" class="texto"></span>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
