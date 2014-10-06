<?php
include('../control/verifica2.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <script	src="../public/js/ext.js" type="text/javascript"></script>
        <script type="text/javascript" src="../public/js/usuario.js"></script>
        <script  src="../public/js/usuario.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
        <title>Untitled Document</title>
        <style type="text/css">
        <!--
        @import url("../public/css/estilo.css");
        -->
        </style>
    </head>

    <body>
        <?php
        require_once('../model/usuarioDAO.php');
        echo "
                <table border = '0' align='center' cellspacing='0' cellpadding='7' id='table'>
                    <th colspan='7'>
                        LISTAGEM DE USUÁRIOS
                    </th>
                    <th colspan='15' align='left'>
                        <a class='exemplo' title='CLIQUE AQUI PARA ADICIONAR UM NOVO REGISTRO' href='../view/cadUsuario.php'><img src='../public/img/forms.png' alt='CLIQUE AQUI PARA ADICIONAR UM NOVO REGISTRO' border='no'></a>
                    </th>
		            <tr class='titulo' align='center'>
            			<td>Nome</td>
			            <td>Login</td>
			            <td>menu ADMINISTRAÇÃO</td>
			            <td>menu CLIENTES</td>
			            <td>menu PROCESSOS</td>
			            <td>EDITAR</td>
			            <td>EXCLUIR</td>
		            </tr>";
                    $objUsuarioDAO->listar();
        ?>
    </body>
</html>