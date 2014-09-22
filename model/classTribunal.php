<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>


<?php
require("conexao.php");

class Tribunal {
	
	var $tribunal;
	
	
	public function __construct() {
		if ($_SERVER['REQUEST_METHOD']=="POST") {
   			   $this->tribunal = ($_POST['descricao']);
	     }
		
	}
	
	public function cadastrar() {
		
		

		$sql="insert into tribunal
		      set
			  descricao='".$this->tribunal."'";
	    
		mysql_query($sql) or die ("Não foi possível fazer o cadastro de Nível. ".mysql_error());
		
		echo "<script>alert('Cadastro Realizado com Sucesso');</script>";
		
	}
	
	public function consultar() {
		
	
          $sql = "select * from tribunal";
		  $resultado = mysql_query($sql) or die ('Não foi possível consultar os nívies.'.mysql_error());
		  return $resultado;		
		
	}
	
	public function consultar1($id) {
		
	
          $sql = "select * from tribunal where idTribunal=".$id;
		  $resultado = mysql_query($sql) or die ('Não foi possível consultar os nívies.'.mysql_error());
		  return $resultado;		
		
	}
	
	public function editar($id) {
	$sql ="update tribunal
	set
	descricao='".$this->tribunal."'
	where idTribunal=".$id;
	mysql_query($sql);
	echo"<script> alert('Cadastro alterado com sucesso');</script>";
	}
	
	public function excluir($id) {
	$sql="delete from tribunal where idTribunal=".$id;
	mysql_query($sql);
	echo"<script> alert('Cadastro excluído com sucesso');</script>";	
	}
}
?>