<link rel="styleSheet" type="text/css" href="../public/css/estilo.css">
<script type="text/javascript" src="../public/js/jquery.js"></script>
<script type="text/javascript" src="../public/js/ext.js"></script>
<script type="text/javascript" src="../public/js/listaCliente.js"></script>
<?php
include_once '../model/clientesDAO.php';

?>

<table border="0" align="center" cellspacing="0" cellpadding="10" id="tableCliente">
    <thead>
        <tr>
            <th colspan="6">Listagem de Clientes</th>
            <th><a href="cadCliente.php" target="iframe"><img src="../public/img/forms.png" width="32" height="32" alt="forms" border="0"/></a>
               </th>
          
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><b>Código</b></td>
            <td><b>Nome</b></td>
            <td><b>Telefone</b></td>
            <td><b>Celular</b></td>
            <td align="center"><b>Processos</b></td>
            <td align="center"><b>Editar</b></td>
            <td align="center"><b>Excluir</b></td></b>
        </tr>

    </tbody>

<?php
$objclientesDAO->listar();

?>


</table>
