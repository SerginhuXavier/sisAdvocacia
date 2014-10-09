<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
    </head>
    <body>
        <?php
        include_once '../model/clientesDAO.php';

        $objClientes->setIdCliente($_POST['id']);
        $resultado = $objclientesDAO->consultar($objClientes);
        ?>
        <table border="0" cellpadding="5">
            <thead>
                <tr>
                    <th colspan="2">Informações Gerais:</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nome:</td>
                    <td><?php echo utf8_encode($resultado['nome']);?></td>
                </tr>
                <tr>
                    <td>Telefone:</td>
                    <td><?php echo $resultado['tel1'];?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?php echo $resultado['email'];?></td>
                </tr>
                <tr>
                    <td>Quantidade de Processos:</td>
                    <td>--</td>
                </tr>
                <tr>
                    <td>Cliente Desde:</td>
                    <td>
                        <?php
                        $explode = explode(' ', $resultado['datacadastro']);
                        $data = $explode[0];
                        echo implode('/', array_reverse(explode('-',$data)));
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>