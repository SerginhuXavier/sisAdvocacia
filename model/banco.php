<?php
require_once "constantes.php";
class Banco{

	public $host = CON_ADVOCACIA_HOST;
	public $user = CON_ADVOCACIA_USER;
	public $pass = CON_ADVOCACIA_PASS;
	public $base = CON_ADVOCACIA_BASE;
	public $Conn;
	
	public function abreConexao(){
		$this->Conn = mysql_connect($this->host,$this->user,$this->pass);
		mysql_select_db($this->base,$this->Conn) or die (mysql_error());
	
	} 
	
	public function fechaConexao(){
		mysql_close($this->Conn);
	}

}
?>