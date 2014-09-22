<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>


<?php
require "constantes.php";
require "banco.php";
require "bean/vara.php";

class VaraDAO extends banco {
	
	public function cadastrar($objVara) {
		$this->abreConexao();
			$cadastra="insert into".TBL_VARAS."
			set
			descricao='".$objVara->getDescricao()."',
			idTribunal=".$objVara->getTribunal();
			mysql_query($cadastra) or die(mysql_error());
			echo "<script>alert('Cadastro Realizado com Sucesso');</script>";
		$this->fechaConexao();
	}
	
	public function consultar() {
		$this->abreConexao();
			$consulta = "select * from".TBL_VARAS." where status=1";
			$resultado = mysql_query($consulta);
				while ($linha=mysql_fetch_array($resultado)) {
				$consulta2="select t.descricao AS descricao_tribunal
				FROM ".TBL_VARAS." v, ".TBL_TRIBUNAIS." t
				WHERE v.idTribunal= t.idTribunal
				AND v.idVara =".$linha['idVara'];
				$resultado2=mysql_query($consulta2);
				$linha2=mysql_fetch_array($resultado2);
						echo"<tr class='texto' align='center' id=".$linha['idVara'].">
						<td>".$linha['idVara']."</td>
						<td>".$linha['descricao']."</td>
						<td>".$linha2['descricao_tribunal']."</td>
						<td><a id='altera' href='../control/controleVara.php?idvara=".$linha['idVara']."&opcao=lista'><img src='../public/img/file_edit.png' border='no'></a></td>
						<td><a href=javascript:excluir(".$linha['idVara'].")><img src='../public/img/file_remove.png' border='no'></a></td>
						</tr>";									  
				}

						echo "</table>";
			return $resultado;		
		$this->fechaConexao();
	}
		
	
	 public function listaVaraCombo() {


        $this->abreConexao();

        $sql = 'SELECT * FROM '.TBL_VARAS." where status=1";

        $resultado = mysql_query($sql) or die ('Não foi possível fazer a listagem das varas.');


        while ($linha = mysql_fetch_array($resultado)) {

            echo "<option value=".$linha['idVara'].">".$linha['descricao']."</option>";

        }
		
		$this->fechaConexao();
	}
	
	public function consultar1($objVara) {
		$this->abreConexao();	
			$pesquisa="SELECT v.descricao, t.descricao AS descricao_tribunal
			FROM ".TBL_VARAS." v, ".TBL_TRIBUNAIS." t
			WHERE v.idTribunal= t.idTribunal
			AND v.idVara =".$objVara->getId();
			$resultado = mysql_query($pesquisa);
			$linha=mysql_fetch_array($resultado);
				$objVara->setDescricao($linha['descricao']);
				$objVara->setTribunal($linha['descricao_tribunal']);
		return $objVara;		
		$this->fechaConexao();
	}
	
	public function alterar($objVara) {
		$this->abreConexao();
			$altera ="update ".TBL_VARAS."
			set
			descricao='".$objVara->getDescricao()."',
			idTribunal='".$objVara->getTribunal()."'
			where idVara='".$objVara->getId()."'";	
			mysql_query($altera) or die(mysql_error());
			echo"<script> alert('Alteração Realizada com Sucesso');</script>";
		$this->fechaConexao();
	}
	
	public function inativar($objVara) {
		$this->abreConexao();
			$inativa="update ".TBL_VARAS. "
				set
				status=0
				where idVara=".$objVara->getId();
			$resultado= mysql_query($inativa) or die(mysql_error());
		$this->fechaConexao();
		}
}
$objVaraDAO= new varaDAO();
?>