<?php
require_once("banco.php");
require_once("constantes.php");
require_once("bean/processo.php");

class processoDAO extends banco {
	
	public function cadastrar($objProcesso) {
		$this->abreConexao();
		$data= $objProcesso->getData();
		$data1=explode("/",$data);
		$dataFinal=$data1[2]."-".$data1[1]."-".$data1[0];
		
		$cadastra="insert into".TBL_PROCESSOS."
			set
			nprocesso='".$objProcesso->getNprocesso()."',
			idCliente='".$objProcesso->getCliente()."',
			parte_contraria='".$objProcesso->getParte()."',
			idTribunal='".$objProcesso->getTribunal()."',
			data='".$dataFinal."',
			status='".$objProcesso->getStatus()."'
			";
			mysql_query($cadastra) or die(mysql_error());
		$this->fechaConexao();
		echo "<script>alert('Cadastro Realizado com Sucesso');</script>";
	}


	public function listar() {
		$this->abreConexao();	
			$lista="SELECT *, DATE_FORMAT(
					DATA , '%d/%m/20%y' ) AS
					DATACERTA from".TBL_PROCESSOS."
			where statusRegistro=1";
			
			$resultado=mysql_query($lista);
				while ($linha = mysql_fetch_array($resultado)) {
					$procuraCliente="select nome from ".TBL_CLIENTES."  where idCliente=".$linha['idCliente'];
					$procuraTribunal="select descricao from ".TBL_TRIBUNAIS." where idTribunal=".$linha['idTribunal'];
					$resultadoCliente=mysql_query($procuraCliente);
					$linha2=mysql_fetch_array($resultadoCliente);
					$resultadoTribunal=mysql_query($procuraTribunal);
					$linha3=mysql_fetch_array($resultadoTribunal);
						echo"
						<tr class='texto' align='center' id=".$linha['idProcesso'].">
						<tr class='texto' align='center' border='1'>
						<td>".$linha['idProcesso']."</td>
						<td>".$linha['nprocesso']."</td>
						<td>".$linha2['nome']."</td>
						<td>".$linha['parte_contraria']."</td>
						<td>".$linha3['descricao']."</td>
						<td>".$linha['DATACERTA']."</td>
						<td>".$linha['status']."</td>
						<td><a id='altera' href=altProcesso.php?idprocesso=".$linha['idProcesso']."><img src='../public/img/file_edit.png' border='no'></a></td>
						<td><a href=javascript:excluir(".$linha['idProcesso'].")><img src='../public/img/file_remove.png' border='no'></a></td>
						";
				}
						echo"</tr></table>";
	
			return $linha;
	$this->fechaConexao();
	}
	
	public function consultar($objProcesso) {
		$this->abreConexao();	
			$consulta="SELECT c.nome, t.descricao, p.nprocesso, p.parte_contraria, p.data, p.status, p.nParcelas
			FROM ".TBL_PROCESSOS." p, ".TBL_TRIBUNAIS." t, ".TBL_CLIENTES." c
			WHERE p.idCliente = c.idCliente
			AND p.idTribunal = t.idTribunal
			AND p.idProcesso =".$objProcesso->getId();
		$resultado=mysql_query($consulta);
		return $resultado;
		$this->fechaConexao();
	}
	
	public function alterar($objProcesso) {
		$this->abreConexao();	
			$data= $objProcesso->getData();
			$data1=explode("/",$data);
			$dataFinal=$data1[2]."-".$data1[1]."-".$data1[0];
			$edita="update".TBL_PROCESSOS."
				set
				nprocesso='".$objProcesso->getNprocesso()."',
				idCliente='".$objProcesso->getCliente()."',
				parte_contraria='".$objProcesso->getParte()."',
				idTribunal='".$objProcesso->getTribunal()."',
				data='".$dataFinal."',
				status='".$objProcesso->getStatus()."'
				where idProcesso=".$objProcesso->getId();
				$resultado=mysql_query($edita) or die ('não foi possível alterar o registro' .mysql_error());
		echo"<script>alert('Alteração Realizada com Sucesso');</script>";
		$this->fechaConexao();
		
	}
	
	public function excluir($objProcesso) {
		$this->abreConexao();
			$sql="update".TBL_PROCESSOS."
			set
			statusRegistro=0
			where idProcesso=".$objProcesso->getId();
			mysql_query($sql);
		$this->fechaConexao();
		}
}
$objProcessoDAO = new processoDAO();
?>