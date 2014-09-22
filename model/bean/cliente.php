<?php 

class cliente {
	var $id;
	var $nome;
	var $nacionalidade;
	var $profissao;
	var $estado;
	var $rg;
	var $cpf;
	var $endereco;
	var $complemento;
	var $tel1;
	var $tel2;
	var $cel;
	var $email;
	var $obs;


	function setId($id) {
	$this->id = $id;
}	
	function getId() {
	return $this->id;
}

        function getProfissao() {
	return $this->profissao;
}
	function setProfissao($profissao) {
	$this->profissao = $profissao;
}
	function getNome() {
	return $this->nome;
}
	function setNome($nome) {
	$this->nome = $nome;
}
	function getNacionalidade() {
	return $this->nacionalidade;
}
	function setNacionalidade($nacionalidade) {
	$this->nacionalidade = $nacionalidade; 
}	
	function getEstado() { 
	return $this->estado; 
}
	function setEstado($estado) {
	$this->estado = $estado; 
}
	function getRg() {
	return $this->rg; 
}
	function setRg($rg) {
	$this->rg = $rg;
}	
	function getCpf() {
	return $this->cpf;
}
	function setCpf($cpf) {
	$this->cpf = $cpf;
}
	function getEndereco() { 
	return $this->endereco; 	
}
	function setEndereco($endereco) {
	$this->endereco = $endereco; 	
}
	function getComplemento() { 
	return $this->complemento; 
}
	function setComplemento($complemento) {
	$this->complemento = $complemento;
}
	function getTel1() {
	return $this->tel1; 	
}
	function setTel1($tel1) {
	$this->tel1 = $tel1; 	
}
	function getTel2() { 
	return $this->tel2; 	
}
	function setTel2($tel2) {
	$this->tel2 = $tel2; 	
}
	function getCel() { 		
	return $this->cel; 	
}
	function setCel($cel) {	
	$this->cel = $cel; 	
}
	function getEmail() { 	
	return $this->email; 	
}
	function setEmail($email) {
	$this->email = $email; 	
}
	function getObs() { 		
	return $this->obs; 	
}
	function setObs($obs) {
	$this->obs = $obs; 	
}

} 
$objCliente=new cliente();
?> 