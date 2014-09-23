<link rel="styleSheet" type="text/css" href="../public/css/estilo.css">
<script type="text/javascript" src="../public/js/jquery.js"></script>
<script type="text/javascript" src="../public/js/cliente.js"></script>
<script type="text/javascript" src="../public/js/jquery.maskedinput-1.2.2.js"></script>

<?php

include '../model/clientesDAO.php';

 $objClientes->setIdCliente($_GET['idCliente']);
 $id=$_GET['idCliente'];

$resultado = $objclientesDAO->consultar($objClientes);




?>

<form name="frmCliente" action="../control/clienteControle.php" id="frmCliente" method="POST">

<table border="0" cellspacing="0" align="center">
    <thead>
        <tr>
            <th colspan="2">Alteraçãoo de Clientes</th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>*Nome do Cliente:</td>
            <td><input type="text" name="nome"  size="30" id="nome" value="<?php echo $resultado['nome']; ?>" /><br><span id="erroNome"></span></td>
        </tr>
        <tr>
            <td>*Endereço:</td>
            <td><input type="text" name="endereco" value="<?php echo $resultado['endereco']; ?>" size="30" id="endereco" /><br><span id="erroEndereco"></span></td>
        </tr>
        <tr>
            <td>Complemento:</td>
            <td><input type="text" name="complemento" value="<?php echo $resultado['complemento']; ?>" size="30" id="complemento" /><br></td>
        </tr>
        <tr>
            <td>*Telefone:</td>
            <td><input type="text" name="telefone" value="<?php echo $resultado['tel1']; ?>" size="30" id="telefone" /><br><span id="erroTelefone"></span></td>
        </tr>
        <tr>
            <td>Telefone2:</td>
            <td><input type="text" name="telefone2" value="<?php echo $resultado['tel2']; ?>" size="30" id="telefone2" /><br></td>
        </tr>
        <tr>
            <td>Celular:</td>
            <td><input type="text" name="celular" value="<?php echo $resultado['cel']; ?>" size="30" id="celular" /><br></td>
        </tr>
         <tr>
            <td>*RG:</td>
            <td><input type="text" name="rg" value="<?php echo $resultado['rg']; ?>" size="30" id="rg" /><br><span id="erroRG"></span></td>
        </tr>
        <tr>
            <td>*CPF:</td>
            <td><input type="text" name="cpf" value="<?php echo $resultado['cpf']; ?>" size="30" id="cpf" /><br><span id="erroCPF"></span></td>
        </tr>
        <tr>
            <td>*Estado Civil:</td>
            <td><select name="estadoCivil" size="1" id="estadoCivil">
                    <option value="">Estado Civil...</option>
                    
                            <?php 
                                if ($resultado['estado_civil'] == "casado") {
                                    
                                    $casado = "selected";
                                    $divorciado="";
                                    $solteiro="";
                                }
                                else if ($resultado['estado_civil'] == "divorciado") {
                                
                                    $divorciado = "selected";
                                    $casado="";
                                    $solteiro="";
                                    
                                }
                                else {
                                     
                                     $solteiro = "selected";
                                     $casado="";
                                     $divorciado="";
                                }
                    
                    ?>
                    <option value="casado" <?php echo $casado;?>>Casado</option>
                    <option value="divorciado" <?php echo $divorciado;?>>Divorciado</option>
                    <option value="solteiro" <?php echo $solteiro;?>>Solteiro</option>

                </select><span id="erroEstadoCivil"></span></td>
        </tr>
		<tr>
		<td>Nacionalidade:</td>
		<td><input type="text" name="nacionalidade" value="<?php echo $resultado['nacionalidade']; ?>" maxlength="30" size="33" id="nacionalidade"></td>
		</tr>
        <tr>
            <td>Profissão:</td>
            <td><input type="text" name="profissao"  value="<?php echo $resultado['profissao']; ?>" size="30" id="profissao" /><br><span id="erroProfissao"></span></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email"  value="<?php echo $resultado['email']; ?>" size="30" id="email" /><br><span id="erroEmail"></span></td>
        </tr>
         <tr>
            <td>Observações:</td>
            <td><textarea id="observacoes" name="observacoes" cols="28" rows="3" class="campo"><?php echo $resultado['observacao']; ?></textarea></td>
        </tr>
        <tr>
            <td align="center" colspan="2">
                <input type="hidden" name="opcao" value="alterar" id="opcao" />
                <input type="hidden" name="id" value="<?php echo $id;?>" id="id" />
                <input type="button" value="Alterar" name="alterar" id="alterar"  />
                <input type="reset" value="Limpar" name="limpar" id="limpar"  />
            </td>
           
        </tr>
    </tbody>
</table>
</form>