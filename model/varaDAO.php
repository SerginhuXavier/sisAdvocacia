<?php
require_once "banco.php";
require_once "bean/vara.php";

class VaraDAO extends Banco {
	
	public function cadastrar($objVara) {
		$this->abreConexao();
			$cadastra="insert into".TBL_VARAS."
			set
			descricao='".$objVara->getDescricao()."',
			idTribunal=".$objVara->getTribunal();
			mysql_query($cadastra) or die(mysql_error());

		$this->fechaConexao();
	}
	
	public function consultar() {
		$this->abreConexao();
			$consulta = "SELECT v.*, t.descricao as tribunal
			                FROM ".TBL_VARAS." v
			                JOIN ".TBL_TRIBUNAIS." t ON t.idtribunal = v.idtribunal
			                where v.status=1";

			$resultado = mysql_query($consulta);
				while ($linha=mysql_fetch_array($resultado)) {

                    echo "<tr class='texto' align='center' id=" . $linha['idVara'] . ">
						<td>" . $linha['descricao'] . "</td>
						<td>" . $linha['tribunal'] . "</td>
						<td><a id='altera' href='../control/controleVara.php?idvara=" . $linha['idVara'] . "&opcao=lista'><img src='../public/img/file_edit.png' border='no'></a></td>
						<td><a href=javascript:excluir(" . $linha['idVara'] . ")><img src='../public/img/file_remove.png' border='no'></a></td>
						</tr>";
                }
			return $resultado;		
		$this->fechaConexao();
	}
		
	
    public function listaVaraCombo($id=0) {
        $this->abreConexao();

        $sql = 'SELECT v.* FROM '.TBL_VARAS." v where status=1";

        $resultado = mysql_query($sql);

        echo $id;
        while ($linha = mysql_fetch_array($resultado)) {
            if($id == $linha['idVara']){
                $selected = "selected";
            }else{
                $selected = "";
            }

            echo "<option value=".$linha['idVara']." ".$selected.">".$linha['descricao']."</option>";
        }
		
		$this->fechaConexao();
	}
	
	public function consultar1($objVara) {
		$this->abreConexao();	
			$pesquisa="
                        SELECT v.descricao, t.idTribunal AS tribunal
                          FROM ".TBL_VARAS." v
                            JOIN ".TBL_TRIBUNAIS." t ON
			                v.idTribunal= t.idTribunal
                          WHERE v.idVara =".$objVara->getId();

			$resultado = mysql_query($pesquisa);

			$linha=mysql_fetch_array($resultado);
            $objVara->setDescricao($linha['descricao']);
            $objVara->setTribunal($linha['tribunal']);
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
