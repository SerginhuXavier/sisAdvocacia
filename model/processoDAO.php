<?php

include_once 'constantes.php';
include_once 'banco.php';
include_once 'bean/processo.php';

class processoDAO extends banco {

    public function incluirProcesso($objProcesso){

        $this->abreConexao();

       echo  $sql = 'INSERT INTO '.TBL_PROCESSOS.'
                SET  nprocesso = "'.$objProcesso->getNProcesso().'",
                     idCliente = '.$objProcesso->getCliente().',
                     parte_contraria = "'.$objProcesso->getParte().'",
                     idTribunal = '.$objProcesso->getTribunal().',
                     data = "'.$objProcesso->getData().'",
					 formaPagamento = "'.$objProcesso->getFormaPagamento().'",
                     valorFixo = '.$objProcesso->getValorFixo().',
                     nParcelas = '.$objProcesso->getNumeroParcelas().',
                     valorAcao = "'.$objProcesso->getValorAcao().'"';

      
         mysql_query($sql);

         $this->fechaConexao();
	}

	public function listaProcesso() {
		$this->abreConexao();
		
			$lista="SELECT p.*, DATE_FORMAT(
					data , '%d/%m/%y' ) AS
					DATACERTA, c.nome, t.descricao
					FROM ".TBL_PROCESSOS." p
					    JOIN ".TBL_CLIENTES." c ON
					    p.idCliente = c.idCliente
					    JOIN ".TBL_TRIBUNAIS." t ON
					    p.idTribunal = t.idTribunal
					WHERE p.status='A'";

			$resultado=mysql_query($lista) or die(mysql_error());

			while($linha=mysql_fetch_array($resultado)) {
				echo "
					<tr class='texto' align='center' id='".$linha['idProcesso']."'>
					<td>".$linha['nprocesso']."</td>
					<td>".$linha['nome']."</td>
					<td>".$linha['parte_contraria']."</td>
					<td>".$linha['descricao']."</td>
					<td>".$linha['DATACERTA']."</td>
					<td>
					    <a href='../view/consultarAndamento.php?id=".$linha['idProcesso']."'>
					        <img src='../public/img/archive_add.png' alt='ver andamento' border='no' />
					    </a>
                    </td>
					<td><a id='altera' href=altProcesso.php?idprocesso=".$linha['idProcesso']."><img src='../public/img/file_edit.png' border='no'></a></td>
					<td><a href=javascript:excluir(".$linha['idProcesso'].")><img src='../public/img/file_remove.png' border='no'></a></td>
					</tr>
				";
			}

		$this->fechaConexao();
	}

	public function consultarProcesso($objProcesso){
		$this->abreConexao();
			$consulta="
                      SELECT
                      c.nome, c.idCliente,
                      t.descricao, t.idTribunal,
                      p.idProcesso, p.nprocesso, p.formaPagamento, p.valorFixo, p.valorAcao, p.parte_contraria, p.status, p.nParcelas,DATE_FORMAT(data , '%d/%m/20%y' ) as datacerta
			            FROM ".TBL_PROCESSOS." p
			            JOIN ".TBL_TRIBUNAIS." t ON
			             t.idTribunal = p.idTribunal
                        JOIN ".TBL_CLIENTES." c ON
                        t.idTribunal = c.idCliente
			            WHERE p.idProcesso =".$objProcesso->getId();

			$resultado=mysql_query($consulta);

			$linha=mysql_fetch_array($resultado);
			return $linha;
		$this->fechaConexao();
	}
	
	public function editarProcesso($objProcesso){
		$this->abreConexao();


		$edita='update '.TBL_PROCESSOS.' set
					nprocesso = "'.$objProcesso->getNProcesso().'",
                     idCliente = "'.$objProcesso->getCliente().'",
                     parte_contraria = "'.$objProcesso->getParte().'",
                     idTribunal = "'.$objProcesso->getTribunal().'",
                     data = "'.$objProcesso->getData().'",
					 formaPagamento = "'.$objProcesso->getFormaPagamento().'",
                     valorFixo = "'.$objProcesso->getValorFixo().'",
                     nParcelas = '.$objProcesso->getNumeroParcelas().',
                     valorAcao = "'.$objProcesso->getValorAcao().'"
					where idProcesso="'.$objProcesso->getId().'
		"';

		$this->fechaConexao();
	}
	
	public function excluirProcesso($objProcesso) {
		$this->abreConexao();
			$sql="update".TBL_PROCESSOS."
			set
			status=0
			where idProcesso=".$objProcesso->getId();
			mysql_query($sql);
		$this->fechaConexao();
		}

       public function listaAndamentoProcesso($idProcesso){
           $this->abreConexao();
                $sql="
                      SELECT *
                        FROM ".TBL_ANDAMENTOS."
                            WHERE idProcesso=".$idProcesso;
                $resultado=mysql_query($sql);

                while($linha=mysql_fetch_array($resultado)){
                      echo "<tr class='texto' align='center'>
                                <td>".$linha['idProcesso']."</td>
                                <td>".$linha['data']."</td>
                                <td>".$linha['observacao']."</td>
                            </tr>";
                }
           $this->fechaConexao();

       }
}
$objProcessoDAO = new processoDAO();