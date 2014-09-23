<?php
require_once "constantes.php";

class Banco{

	private $host = CON_ADVOCACIA_HOST;
    private $user = CON_ADVOCACIA_USER;
    private $pass = CON_ADVOCACIA_PASS;
	private $base = CON_ADVOCACIA_BASE;
	public $Conn;
	
	public function abreConexao(){
		$this->Conn = mysql_connect($this->host,$this->user,$this->pass);
		mysql_select_db($this->base,$this->Conn) or die (mysql_error());
	} 
	
	public function fechaConexao(){
		mysql_close($this->Conn);
	}

	/**
	 * Estas fun��es abaixo, ser�o para lidarmos com as consultas utilizadas com Mysqli
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