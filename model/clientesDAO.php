<?php
include_once "banco.php";
include_once "clientes.php";
include_once "constantes.php";

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
                    observacao = "'.$objClientes->getObservacoes().'"';

       mysql_query($sql) or die ('Não foi possível cadastrar o cliente. '.mysql_error());

       echo "<script>alert('Cadastro Realizado com Sucesso.');</script>";
        echo "<script>window.location='../view/listaCliente.php';</script>";

       $this->fechaConexao();



    }

    public function listar() {


        $this->abreConexao();

        $sql = 'SELECT * FROM '.TBL_CLIENTES.' ORDER BY nome ASC';

        $resultado = mysql_query($sql) or die ('Não foi possível listar. '.mysql_error());

        while ($linha = mysql_fetch_assoc($resultado)){

            echo '<tr id='.$linha['idCliente'].' align="center">
                    <td>'.$linha['nome'].'</td>
                    <td>'.$linha['cpf'].'</td>
                    <td>'.$linha['tel1'].'</td>
                    <td>'.$linha['cel'].'</td>
                    <td><a href="listaProcesso.php?id='.$linha['idCliente'].'"><img src="../public/img/archive_add.png" width="32" height="32" border="0" alt="Processo"/>
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

        $resultado = mysql_query($sql) or die ('Não foi possível consultar esse cliente');

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
                        observacao = "'.$objClientes->getObservacoes().'"
                  WHERE
                        idCliente = "'.$objClientes->getIdCliente().'"';

        mysql_query($sql) or die ('Não foi possível atualizar esse cliente'.mysql_error());

     

        $this->fechaConexao();





    }

    public function excluirCliente($objClientes){


        $this->abreConexao();

        $sql = 'DELETE FROM '.TBL_CLIENTES.' WHERE idCliente = "'.$objClientes->getIdCliente().'"';

        mysql_query($sql) or die ('Não foi possível excluir o cliente. '.mysql_error());

        $this->fechaConexao();


    }

    public function listaClienteProcesso(){

        $this->abreConexao();
        $cliente=$_GET['id'];
        $sql = 'SELECT *
                         from '.TBL_PROCESSOS.'
                                               where idCliente='.$cliente.' and status=1';

        $resultado = mysql_query($sql) or die ('Não foi possível fazer a listagem de todos os clientes. '.mysql_error());
        
        $buscaCliente=" SELECT nome from".TBL_CLIENTES." where idCliente=".$cliente;
                $resultado2=mysql_query($buscaCliente);
                $linha2=mysql_fetch_array($resultado2);
        while($linha = mysql_fetch_array($resultado)){
                
            echo '
                <tr align="center">
                    <td>'.$linha['nprocesso'].'</td>
                    <td>'.$linha2['nome'].'</td>
                    <td>'.$linha['valorAcao'].'</td>
                </tr>
                </table>';


        }

    }






}

$objclientesDAO = new clientesDAO();

?>
