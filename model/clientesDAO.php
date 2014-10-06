<?php
include_once "constantes.php";
include_once "banco.php";
include_once "bean/clientes.php";

class clientesDAO extends banco {
    public function incluirCliente($objClientes){
        $this->abreConexao();

        $sql = 'INSERT INTO '.TBL_CLIENTES.'
                SET
                    nome = "'.$objClientes->getNome().'",
                    endereco = "'.$objClientes->getEndereco().'",
                    complemento = "'.$objClientes->getComplemento().'",
                    tel1 = "'.$objClientes->getTelefone().'",
                    tel2 = "'.$objClientes->getTelefone2().'",
                    cel = "'.$objClientes->getCelular().'",
                    rg = "'.$objClientes->getRg().'",
                    cpf = "'.$objClientes->getCpf().'",
                    estado_civil = "'.$objClientes->getEstadoCivil().'",
                    profissao = "'.$objClientes->getProfissao().'",
                    email = "'.$objClientes->getEmail().'",
                    observacao = "'.$objClientes->getObservacoes().'",
                    nacionalidade = "'.$objClientes->getNacionalidade().'",
                    datacadastro = NOW()';

        mysql_query($sql);

       $this->fechaConexao();
    }

    public function listar() {
        $this->abreConexao();

        $sql = 'SELECT * FROM '.TBL_CLIENTES.' ORDER BY nome ASC';

        $resultado = mysql_query($sql);

        while ($linha = mysql_fetch_assoc($resultado)){

            echo '<tr id='.$linha['idCliente'].' align="center">
                    <td>'.$linha['nome'].'</td>
                    <td>'.$linha['cpf'].'</td>
                    <td>'.$linha['tel1'].'</td>
                    <td>'.$linha['cel'].'</td>
                    <td><a href="listaProcessoAjax.php?id='.$linha['idCliente'].'"><img src="../public/img/archive_add.png" width="32" height="32" border="0" alt="Processo"/>
                    <td><a href="altCliente.php?idCliente='.$linha['idCliente'].'"><img src="../public/img/file_edit.png" width="32" height="32" border="0" alt="Processo"/>
                    <td><a href="javascript:excluirCliente('.$linha['idCliente'].')"><img src="../public/img/file_remove.png" width="32" height="32" border="0" alt="Processo"/>';
        }

        $this->fechaConexao();
    }

    public function consultar($objClientes){
        $this->abreConexao();

        $sql = 'SELECT *
                FROM
                    '.TBL_CLIENTES.'
                WHERE
                      idCliente = "'.$objClientes->getIdCliente().'"';

        $resultado = mysql_query($sql);

        $linha = mysql_fetch_assoc($resultado);

        return $linha;

        $this->fechaConexao();
    }

    public function alterarCliente($objClientes){
        $this->abreConexao();

        $sql  = 'UPDATE '.TBL_CLIENTES.'
                    SET
                        nome = "'.$objClientes->getNome().'",
                        endereco = "'.$objClientes->getEndereco().'",
                        complemento = "'.$objClientes->getComplemento().'",
                        tel1 = "'.$objClientes->getTelefone().'",
                        tel2 = "'.$objClientes->getTelefone2().'",
                        cel = "'.$objClientes->getCelular().'",
                        rg = "'.$objClientes->getRg().'",
                        cpf = "'.$objClientes->getCpf().'",
                        estado_civil = "'.$objClientes->getEstadoCivil().'",
                        profissao = "'.$objClientes->getProfissao().'",
                        email = "'.$objClientes->getEmail().'",
                        observacao = "'.$objClientes->getObservacoes().'",
                        nacionalidade = "'.$objClientes->getNacionalidade().'"
                  WHERE
                        idCliente = '.$objClientes->getIdCliente();

        mysql_query($sql);

        $this->fechaConexao();
    }

    public function excluirCliente($objClientes){
        $this->abreConexao();

        $sql = 'DELETE FROM '.TBL_CLIENTES.' WHERE idCliente = "'.$objClientes->getIdCliente().'"';

        mysql_query($sql);

        $this->fechaConexao();
    }

    public function listaClienteProcesso($idCliente){
        $this->abreConexao();
        $sql = 'SELECT tp.*, tc.nome
                     FROM '.TBL_PROCESSOS.' tp
                     JOIN '.TBL_CLIENTES.' tc ON
                        tp.idCliente = tc.idCliente
                    WHERE tp.idCliente='.$idCliente.' and tp.status=1';


        $resultado = mysql_query($sql);
        $numLinhas = mysql_num_rows($resultado);
        $retorno = '';

        if($numLinhas>0){
            while($linha = mysql_fetch_array($resultado)){
                $retorno .= '
                <tr align="center">
                    <td>'.$linha['nprocesso'].'</td>
                    <td>'.$linha['nome'].'</td>
                    <td>'.$linha['valorAcao'].'</td>
                </tr>
                ';
            }
        }else{
            $retorno = 0;
        }

        return $retorno;
    }

    public function listaClienteProcessoCombo(){
        $this->abreConexao();

        $sql= "SELECT nome, idcliente FROM ".TBL_CLIENTES;

        $banco = mysql_query($sql);

        while($linha=mysql_fetch_array($banco)){
            echo '<option value="='.$linha["id"].'">'.$linha["nome"].'</option>';
        }

        $this->fechaConexao();
    }
}

$objclientesDAO = new clientesDAO();
