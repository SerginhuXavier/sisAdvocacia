<?php
require("banco.php");
require "bean/usuario.php";

class UsuarioDAO extends banco {

public function cadastrar($objUsuario) {
	$this->abreConexao();
		$sql="insert into".TBL_USUARIOS."
			set
				nome='".$objUsuario->getNome()."',
				login='".$objUsuario->getLogin()."',
				senha='".$objUsuario->getSenha()."',
				menuAdm='".$objUsuario->getMenuAdm()."',
				menuCliente='".$objUsuario->getMenuCliente()."',
				menuProcesso='".$objUsuario->getMenuProcesso()."'";
				mysql_query($sql) or die (mysql_error());
		echo "<script>alert('Cadastro Realizado com Sucesso');</script>";
	$this->fechaConexao();
}
	public function listar() {
		$this->abreConexao();
		$pesquisa = "select * from".TBL_USUARIOS."where status=1";
		$resultado = mysql_query($pesquisa);
			while ($linha=mysql_fetch_array($resultado)) {
				if($linha['menuAdm']!= 1){
				$linha['menuAdm']='não';
				}	else{
					$linha['menuAdm']='sim';
					}
				
				if($linha['menuCliente']!= 1){
				$linha['menuCliente']='não';
				}	else{
					$linha['menuCliente']='sim';
					}
					
				if($linha['menuProcesso']!= 1){
				$linha['menuProcesso']='não';
				}	else{
					$linha['menuProcesso']='sim';
					}
				echo "<tr id=".$linha['idUsuario']." align='center' class='texto'>
			<td>".$linha['idUsuario']."</td>
			<td>".$linha['nome']."</td>
			<td>".$linha['login']."</td>
			<td>".$linha['menuAdm']."</td>
			<td>".$linha['menuCliente']."</td>
			<td>".$linha['menuProcesso']."</td>
			<td><a id='altera' href='../view/altUsuario.php?idusuario=".$linha['idUsuario']."'><img src='../public/img/file_edit.pNg' border='0'></a></td>
		    <td class='texto'><a href=javascript:excluir(".$linha['idUsuario'].")><img src='../public/img/file_remove.png' border='0'></a></td>
		</tr>";					 
			}
				echo "</table>";
		return $resultado;		
		$this->fechaConexao();
	}

	public function consultar1($objUsuario){
		$this->abreConexao();
		$sql = "select * from".TBL_USUARIOS."
		where idUsuario=".$objUsuario->getId();
		$resultado=mysql_query($sql);
		$linha=mysql_fetch_array($resultado);
	return $linha;
	$this->fechaConexao();
	}
	
	public function alterar($objUsuario){
		$this->abreConexao();
		 	$sql="update".TBL_USUARIOS."
				set
				nome='".$objUsuario->getNome()."',
				login='".$objUsuario->getLogin()."',
				menuAdm='".$objUsuario->getMenuAdm()."',
				menuCliente='".$objUsuario->getMenuCliente()."',
				menuProcesso='".$objUsuario->getMenuProcesso()."'
				where idUsuario=".$objUsuario->getId();
				mysql_query($sql) or die(mysql_error());
		
		echo"<script> alert('Alteração Realizada com Sucesso');</script>";
		$this->fechaConexao();
	}
	public function inativa($objUsuario){
		$this->abreConexao();
			echo $sql="update".TBL_USUARIOS."
				  set
				  status=0
				  where idUsuario=".$objUsuario->getId();
			mysql_query($sql)or die(mysql_error());
		$this->fechaConexao();
	}

	public function logar($objUsuario){
		$this->abreConexao();
			$sql="select * from".TBL_USUARIOS." where login='".$objUsuario->getLogin()."' and senha='".$objUsuario->getSenha()."'";
			$resultado=mysql_query($sql) or die(mysql_error());
			$linha=mysql_num_rows($resultado);
			$permissao=mysql_fetch_array($resultado);
				if($linha<>1) {
					echo"
					<script>alert('USUÁRIO OU SENHA INCORRETOS. TENTE NOVAMENTE!');</script>
					<script>window.location='../index.php'</script>";
				}
				else {
					session_start();
                                        $login=$objUsuario->getLogin();
                                        $processo=$permissao['menuProcesso'];
                                        $cliente=$permissao['menuCliente'];
                                        $adm=$permissao['menuAdm'];
					$_SESSION['login']=$login;
					echo"
					<script>alert('VOCÊ FOI LOGADO COM SUCESSO');</script>";
				$_SESSION['menuProcesso'] = $processo;
				$_SESSION['menuAdm']=$adm;
				$_SESSION['menuCliente']=$cliente;

                                $objUsuario->getLogin();
                                session_write_close();
				echo "<script>window.location='../view/principal.php'</script>";
				}
	$this->fechaConexao();
	}

	public function verificalogin(){
		$this->abreConexao();
			session_start();
                       echo $pag=$_GET['pag'];
			echo $login=$_SESSION['login'];
			$sql="select menuAdm, menuProcesso, menuCliente from".TBL_USUARIOS."
			where login='".$login."'";
				$resultado=mysql_query($sql) or die(mysql_error());
				$linha=mysql_fetch_array($resultado);
					$menuProcesso = $linha['menuProcesso'];
					$menuAdm=$linha['menuAdm'];
					$menuCliente=$linha['menuCliente'];
				ECHO $_SESSION['menuProcesso'] = $menuProcesso;
				echo $_SESSION['menuAdm']=$menuAdm;
				echo $_SESSION['menuCliente']=$menuCliente;
                                exit;

					if (($linha['menuProcesso']!="0") && ($pag=='processo')) {
						echo"<script>window.location='../view/funcao_nao_autorizada.php';</script>";
					}
					else if (($linha['menuAdm']!="0")  && ($pag=='adm')) {
						echo"<script>window.location='../view/funcao_nao_autorizada.php';</script>";
					}
					else if (($linha['menuCliente']!="0")  && ($pag=='cliente')) {
						echo"<script>window.location='../view/funcao_nao_autorizada.php';</script>";
					}
                        session_write_close();
		$this->fechaConexao();
	}
}
$objUsuarioDAO= new UsuarioDAO();
?>