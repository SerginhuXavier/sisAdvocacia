<?php

include_once 'constantes.php';
include_once 'banco.php';
include_once 'bean/processo.php';

class processoDAO extends banco {

    public function incluirProcesso($objProcesso){

        $this->abreConexao();
		//fazendo o tratamento de data
		$data= $objProcesso->getData();
		$data1=explode("/",$data);
		$dataFinal=$data1[2]."-".$data1[1]."-".$data1[0];
		//fim do tratamento de data
		
        if ($objProcesso->getNumeroParcelas() != "") {
             $nParcelas = 'nParcelas = "'.$objProcesso->getNumeroParcelas().'",';
        }
        else {
            $nParcelas = '';
        }
         $sql = 'INSERT INTO '.TBL_PROCESSOS.'
                SET  nprocesso = "'.$objProcesso->getNProcesso().'",
                     idCliente = "'.$objProcesso->getCliente().'",
                     parte_contraria = "'.$objProcesso->getParte().'",
                     idTribunal = "'.$objProcesso->getTribunal().'",
                     data = "'.$dataFinal.'",
					 formaPagamento = "'.$objProcesso->getFormaPagamento().'",
                     valorFixo = "'.$objProcesso->getValorFixo().'",
                     '.$nParcelas.'
                     valorAcao = "'.$objProcesso->getValorAcao().'"';

      
         mysql_query($sql);

        echo "<script>alert('Cadastro Realizado com Sucesso.');</script>";
		echo "<script>window.location('../view/consultarProcesso.php?pag=processo');</script>";
         $this->fechaConexao();
	}

	public function listaProcesso() {
		$this->abreConexao();
		
			$lista="SELECT *, DATE_FORMAT(
					data , '%d/%m/20%y' ) AS
					DATACERTA from".TBL_PROCESSOS."
					where status=1";
			$resultado=mysql_query($lista);
			while($linha=mysql_fetch_array($resultado)) {
			
				$procura="SELECT c.nome, t.descricao
						  FROM ".TBL_CLIENTES." c, ".TBL_TRIBUNAIS." t, ".TBL_PROCESSOS." p
						  WHERE c.idCliente = p.idCliente AND
						  t.idTribunal = p
						  .idTribunal AND
						  p.idProcesso=".$linha['idProcesso'];
				$resultado2=mysql_query($procura);
				$linha2=mysql_fetch_array($resultado2);
		
				echo "
					<tr class='texto' align='center' id=".$linha['idProcesso'].">
					<tr class='texto' align='center' border='1'>
					<td>".$linha['idProcesso']."</td>
					<td>".$linha['nprocesso']."</td>
					<td>".$linha2['nome']."</td>
					<td>".$linha['parte_contraria']."</td>
					<td>".$linha2['descricao']."</td>
					<td>".$linha['DATACERTA']."</td>
					<td>".$linha['status']."</td>
					<td><a href='../view/consultarAndamento.php?id=".$linha['idProcesso']."'>ver andamento</a></td>
					<td><a id='altera' href=altProcesso.php?idprocesso=".$linha['idProcesso']."><img src='../public/img/file_edit.png' border='no'></a></td>
					<td><a href=javascript:excluir(".$linha['idProcesso'].")><img src='../public/img/file_remove.png' border='no'></a></td>
				";
			}
				echo"</tr></table>";
	
			return $linha;
		
		
		$this->fechaConexao();
	}

	public function consultarProcesso($objProcesso){
		$this->abreConexao();
			$consulta="SELECT c.nome, t.descricao, p.idProcesso, p.nprocesso, p.valorFixo, p.valorAcao, p.parte_contraria, p.status, p.nParcelas,DATE_FORMAT(
					data , '%d/%m/20%y' ) as datacerta
			FROM ".TBL_PROCESSOS." p, ".TBL_TRIBUNAIS." t, ".TBL_CLIENTES." c
			WHERE p.idCliente = c.idCliente
			AND p.idTribunal = t.idTribunal
			AND p.idProcesso =".$objProcesso->getId();
			$resultado=mysql_query($consulta);
			$linha=mysql_fetch_array($resultado);
			return $linha;
		$this->fechaConexao();
	}
	
	public function editarProcesso($objProcesso){
		$this->abreConexao();
		//fazendo o tratamento de data
		$data= $objProcesso->getData();
		$data1=explode("/",$data);
		$dataFinal=$data1[2]."-".$data1[1]."-".$data1[0];
		//fim do tratamento de data
		if ($objProcesso->getNumeroParcelas() != "") {
             $nParcelas = 'nParcelas = "'.$objProcesso->getNumeroParcelas().'",';
        }
        else {
            $nParcelas = '';
        }
		
		$edita='update '.TBL_PROCESSOS.' set
					nprocesso = "'.$objProcesso->getNProcesso().'",
                     idCliente = "'.$objProcesso->getCliente().'",
                     parte_contraria = "'.$objProcesso->getParte().'",
                     idTribunal = "'.$objProcesso->getTribunal().'",
                     data = "'.$dataFinal.'",
					 formaPagamento = "'.$objProcesso->getFormaPagamento().'",
                     valorFixo = "'.$objProcesso->getValorFixo().'",
                     '.$nParcelas.'
                     valorAcao = "'.$objProcesso->getValorAcao().'"
					where idProcesso="'.$objProcesso->getId().'
		"';
		echo "<script>alert('Cadastro Alterado com Sucesso.');</script>";
		echo "<script>window.location('../view/consultarProcesso.php?pag=processo');</script>";
		$this->fechaConexao();
	}
	
	public function excluirProcesso($objProcesso) {
		$this->abreConexao();
			$sql="update".TBL_PROCESSOS."
			set
			statusRegistro=0
			where idProcesso=".$objProcesso->getId();
			mysql_query($sql);
		$this->fechaConexao();
		}

       public function listaAndamentoProcesso($idProcesso){
           $this->abreConexao();
                echo $sql="SELECT *
                                from ".TBL_ANDAMENTOS."
                                                        where idProcesso=".$idProcesso;
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

?>
