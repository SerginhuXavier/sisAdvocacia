<link rel="styleSheet" type="text/css" href="../public/css/estilo.css">
<script type="text/javascript" src="../public/js/jquery.js"></script>
<script type="text/javascript" src="../public/js/cadCliente.js"></script>
<script type="text/javascript" src="../public/js/jquery.maskedinput-1.2.2.js"></script>
<script>
$().ready(function() {
		$('input[@name=tel1]').mask('9999-9999');
		$('input[@name=tel2]').mask('9999-9999');
		$('input[@name=cel]').mask('9999-9999');
		$('input[@name=cpf]').mask('999.999.999-99');
	})
</script>
<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<form name="frmCliente" action="../control/clienteControle.php" id="frmCliente" method="POST">

<table border="0" cellspacing="0" align="center">
    <thead>
        <tr>
            <th colspan="2">Cadastro de Clientes</th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>*Nome do Cliente:</td>
            <td><input type="text" name="nome" value="" size="30" id="nome" /><br><span id="erroNome"></span></td>
        </tr>
        <tr>
            <td>*Endere�o:</td>
            <td><input type="text" name="endereco" value="" size="30" id="endereco" /><br><span id="erroEndereco"></span></td>
        </tr>
        <tr>
            <td>Complemento:</td>
            <td><input type="text" name="complemento" value="" size="30" id="complemento" /><br></td>
        </tr>
        <tr>
            <td>*Telefone:</td>
            <td><input type="text" name="telefone" value="" size="30" id="telefone" /><br><span id="erroTelefone"></span></td>
        </tr>
        <tr>
            <td>Telefone2:</td>
            <td><input type="text" name="telefone2" value="" size="30" id="telefone2" /><br></td>
        </tr>
        <tr>
            <td>Celular:</td>
            <td><input type="text" name="celular" value="" size="30" id="celular" /><br></td>
        </tr>
         <tr>
            <td>*RG:</td>
            <td><input type="text" name="rg" value="" size="30" id="rg" /><br><span id="erroRG"></span></td>
        </tr>
        <tr>
            <td>*CPF:</td>
            <td><input type="text" name="cpf" value="" size="30" id="cpf" /><br><span id="erroCPF"></span></td>
        </tr>
        <tr>
            <td>*Estado Civil:</td>
            <td><select name="estadoCivil" size="1" id="estadoCivil">
                    <option value="">Estado Civil...</option>
                    <option value="casado">Casado</option>
                    <option value="divorciado">Divorciado</option>
                    <option value="solteiro">Solteiro</option>

                </select><span id="erroEstadoCivil"></span></td>
        </tr>
		<tr>
		<td>Nacionalidade:</td>
		<td><input type="text" name="nacionalidade" maxlength="30" size="33" id="nacionalidade"></td>
		</tr>
        <tr>
            <td>Profiss�o:</td>
            <td><input type="text" name="profissao" value="" size="30" id="profissao" /><br><span id="erroProfissao"></span></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email" value="" size="30" id="email" /><br><span id="erroEmail"></span></td>
        </tr>
         <tr>
            <td>Observa��es:</td>
            <td><textarea id="observacoes" name="observacoes" cols="28" rows="3" class="campo"></textarea></td>
        </tr>
        <tr>
            <td align="center" colspan="2"><input type="hidden" name="opcao" value="incluir" id="opcao" /><input type="button" value="Cadastrar" name="cadastrar" id="cadastrar"  /><input type="reset" value="Limpar" name="limpar" id="limpar"  /></td>
           
        </tr>
    </tbody>
</table>
















</form>

