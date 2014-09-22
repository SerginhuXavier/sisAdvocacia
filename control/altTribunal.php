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
<?php
require("../model/classTribunal.php");
$objTribunal = new Tribunal;
$id=$_GET['idtribunal'];
$resultado=$objTribunal->consultar1($id);
$linha=mysql_fetch_array($resultado);
?>
<form name="altera_tribunal" method="post" action="alterarTribunal.php?id=<?php echo $linha['idTribunal']; ?>">
<table align="center" border="0" class="table">
<tr>
<td class="titulo" align="center" colspan="2">ALTERAÇÃO DE TRIBUNAIS</td>
</tr>
<tr>
<td class="texto">Descrição:</td>
<td><input type="text" name="descricao" class="form" maxlength="55" size="58" value="<?php echo $linha['descricao'] ?>"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="ALTERAR" class="form"></td>
</tr>
</table>
</form>