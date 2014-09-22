<?php
require_once "constantes.php";

class Banco{

	public $host = "localhost";
	public $user = "root";
	public $pass = "mysql";
	public $base = "advocacia";
	public $Conn;
	
	public function abreConexao(){
		$this->Conn = mysql_connect($this->host,$this->user,$this->pass);
		mysql_select_db($this->base,$this->Conn) or die (mysql_error());
	} 
	
	public function fechaConexao(){
		mysql_close($this->Conn);
	}

	/**
	 * Estas funções abaixo, serão para lidarmos com as consultas utilizadas com Mysqli
	 */
	public function abreConexaoi(){
		$this->Conni = mysqli_connect($this->host,$this->user,$this->pass);
		mysqli_select_db($this->base,$this->Conni) or die (mysqli_error());
	} 
	
	public function fechaConexaoi(){
		mysqli_close($this->Conni);
				
	}

	public function verConexao(){
		if (!mysql_ping($this->Conn)) {
	    $this->abreConexao();
		}
	}
	
}

?>