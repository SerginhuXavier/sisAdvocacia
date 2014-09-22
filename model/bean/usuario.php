<?php
class usuario {
	var $idUsuario;
	var $nome;
	var $login;
	var $senha;
	var $menuAdm;
	var $menuProcesso;
	var $menuCliente;
	
	function getId() { 	
	return $this->idUsuario;
}
	function setId($idUsuario) {
	$this->idUsuario = $idUsuario; 	
}
	function getNome() {
	return $this->nome; 	
}
	function setNome($nome) {	
	$this->nome = $nome; 	
}
	function getLogin() {
	return $this->login; 	
}
	function setLogin($login) {
	$this->login = $login; 	
}
	function getSenha() { 		
	return $this->senha; 	
}
	function setSenha($senha) {
	$this->senha = $senha; 	
}
	function getMenuAdm() {
	return $this->menuAdm; 	
}
	function setMenuAdm($menuAdm) {
	$this->menuAdm = $menuAdm; 	
}
	function getMenuProcesso() {
	return $this->menuProcesso; 	
}
	function setMenuProcesso($menuProcesso) {
	$this->menuProcesso = $menuProcesso; 	
}
	function getMenuCliente() { 
	return $this->menuCliente; 	
}
	function setMenuCliente($menuCliente) {
	$this->menuCliente = $menuCliente; 	
}

} 
$objUsuario=new usuario;
?> 