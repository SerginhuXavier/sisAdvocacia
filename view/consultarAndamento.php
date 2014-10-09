<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script src="../public/js/excluir.js"></script>
        <link rel="stylesheet" href="../public/css/estilo.css"; />
    </head>
<body>
<?php
require_once "../model/andamentoDAO.php";

$objAndamento->setProcesso($_GET['id']);
?>
<table align='center' cellpadding='8' cellspacing='0' border='0'>
    <th colspan='2' align="center">ANDAMENTO DE PROCESSOS</th>
    <th align='right'>
        <a class='exemplo' title='CLIQUE AQUI PARA ADICIONAR UM NOVO REGISTRO' href='../view/cadAndamento.php?processo=<?php echo $objAndamento->getProcesso(); ?>'>
            <img src='../public/img/forms.png' alt='CLIQUE AQUI PARA ADICIONAR UM NOVO REGISTRO' border='no'>
        </a>
    </th>
    <tr align='center' class='titulo'>
        <td>NÚMERO DO PROCESSO</td>
        <td>DATA</td>
        <td>DESCRIÇÃO</td>
    </tr>
    <?php
    $objAndamentoDAO->consultar($objAndamento);
    ?>
    </table>
</body>
</html>