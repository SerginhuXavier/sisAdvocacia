<?php
require_once "constantes.php";
require_once "banco.php";
require_once "bean/andamento.php";

class andamentoDAO extends banco{

	public function cadastrar($objAndamento) {
		$this->abreConexao();
			$busca="INSERT INTO ".TBL_ANDAMENTOS." SET
			        data = '".$objAndamento->getData()."',
			        observacao = '".$objAndamento->getDescricao()."',
			        idProcesso = ".$objAndamento->getProcesso()."
			        ";

                mysql_query($busca);
		$this->fechaConexao();
	}

		public function listar(){
			$this->abreConexao();
				$lista="select * from".TBL_ANDAMENTOS." where status=1";
				$resultado=mysql_query($lista) or die(mysql_error());
					while($linha=mysql_fetch_array($resultado)) {
					echo"
					<tr class='consulta1' align='center'>
					<td>".$linha['data']."</td>
					<td>".$linha['descricao']."</td>
					<td><a id='altera' href=../control/controleCliente.php?idcliente=".$linha['idCliente']."&opcao=lista><img src='../public/img/btn_alterar.jpg' border='no'></a></td>
					<td><a href=javascript:clienteNovo(".$linha['idCliente'].")><img src='../public/img/btn_excluir.png' border='no'></a></td>
					";
					}
			$this->fechaConexao();
		}

		public function consultar($objAndamento) {
			$this->abreConexao();
                $consulta="
				            select DATE_FORMAT(a.data , '%d/%m/%y' ) data, a.observacao,
				            p.nProcesso
				                from".TBL_ANDAMENTOS." a
				                join ".TBL_PROCESSOS." p on
				                p.idProcesso = a.idProcesso
				                where a.idProcesso = ".$objAndamento->getProcesso();

				$resultado=mysql_query($consulta);

				while($linha=mysql_fetch_array($resultado)){
                    echo '
                            <tr>
                                <td>'.$linha["nProcesso"].'</td>
                                <td>'.$linha["data"].'</td>
                                <td>'.$linha["observacao"].'</td>
                            </tr>
                         ';
                }
			$this->fechaConexao();
		}
		
		public function alterar($objAndamento){
			$this->abreConexao();
				$altera="update ".TBL_ANDAMENTOS." set
				descricao='".$objAndamento->getdescricao()."',
				data='".$objCliente->getData()."'
				where idAndamento=".$objAndamento->getId();		
				$resultado=mysql_query($altera)or die(mysql_error());
					$linha=mysql_fetch_array($resultado);
						$objAndamento->setDescricao($linha['descricao']);
						$objAndamento->setData($linha['data']);
				return $objCliente;
			$this->fechaConexao();
		}
		
		public function excluir($objAndamento){
			$this->abreConexao();
				$exclui="update ".TBL_ANDAMENTOS." set
				status=0
				where idAndamento=".$objAndamento->getId();
				$resultado=mysql_query($exclui);
				return mysql_affected_rows;
			$this->fechaConexao();
		}
}
$objAndamentoDAO= new andamentoDAO();