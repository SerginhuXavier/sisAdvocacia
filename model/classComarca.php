<?php
require("banco.php");
require("bean/comarca.php");
class ComarcaDAO extends banco {
	
	public function cadastrar($objComarca) {
		$this->abreConexao();
			$cadastra="insert into".TBL_COMARCAS." set
			descricao='".$objComarca->getDescricao()."',
			idVara='".$objComarca->getVara()."'";
			mysql_query($cadastra);
			echo "<script>alert('Cadastro Realizado com Sucesso');</script>";
		$this->fechaConexao();
	}


	public function consultar() {
		$this->abreConexao();
			$consulta = "select * from".TBL_COMARCAS." where status=1";
			$resultado = mysql_query($consulta);
				while ($linha=mysql_fetch_array($resultado)) {
				$consulta2="select v.descricao AS descricao_vara
				FROM ".TBL_COMARCAS." c, ".TBL_VARAS." v
				WHERE c.idVara= v.idVara
				AND c.idComarca =".$linha['idComarca'];
				$resultado2=mysql_query($consulta2);
				$linha2=mysql_fetch_array($resultado2);
						echo"<tr class='texto' align='center' id=".$linha['idComarca'].">
						<td>".$linha['idComarca']."</td>
						<td>".$linha['descricao']."</td>
						<td>".$linha2['descricao_vara']."</td>
						<td><a id='altera' href='../control/controleComarca.php?idcomarca=".$linha['idComarca']."&opcao=lista'><img src='../public/img/file_edit.png' border='no'></a></td>
						<td><a href=javascript:excluir(".$linha['idComarca'].")><img src='../public/img/file_remove.png' border='no'></a></td>
						</tr>";									  
				}
						echo "</table>";
			return $resultado;		
		$this->fechaConexao();
		}
	
	public function consultar1($objComarca) {
		$this->abreConexao();	
			$pesquisa="SELECT c.descricao, v.descricao AS descricao_vara
			FROM ".TBL_COMARCAS." c, ".TBL_VARAS." v
			WHERE c.idVara = v.idVara
			AND c.idComarca =".$objComarca->getId();
			$resultado = mysql_query($pesquisa);
			$linha=mysql_fetch_array($resultado);
				$objComarca->setDescricao($linha['descricao']);
				$objComarca->setVara($linha['descricao_vara']);
		return $objComarca;	
		$this->fechaConexao();
	}
	
	public function alterar($objComarca) {
		$this->abreConexao();
			$sql="update".TBL_COMARCAS."
			set
			descricao='".$objComarca->getDescricao()."',
			idVara='".$objComarca->getVara()."'
			where idComarca=".$objComarca->getId();
			$resultado=mysql_query($sql);
		return $resultado;
		echo"<script> alert('Alteração Realizada com Sucesso');</script>";
		$this->fechaConexao();
	}
	
	public function inativar($objComarca) {
		$this->abreConexao();
			$sql="update ".TBL_COMARCAS."
				set
				status=0
				where idComarca=".$objComarca->getId();
			mysql_query($sql);
		$this->fechaConexao();
	}
}
$objComarcaDAO=new comarcaDAO();
?>