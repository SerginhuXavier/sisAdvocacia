<?php
class clientes {
	private $idCliente;
	private $nome;
	private $endereco;
	private $complemento;
	private $telefone;
	private $telefone2;
	private $celular;
	private $email;
	private $rg;
	private $cpf;
	private $estadocivil;
	private $observacoes;
        private $profissao;


	function getIdCliente() {
		return $this->idCliente;
	}

	function setIdCliente($idCliente) {
		$this->idCliente = $idCliente;
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


	function getTelefone() {
		return $this->telefone;
	}

	function setTelefone($telefone) {
		$this->telefone = $telefone;
	}


	function getTelefone2() {
		return $this->telefone2;
	}

	function setTelefone2($telefone2) {
		$this->telefone2 = $telefone2;
	}


	function getCelular() {
		return $this->celular;
	}

	function setCelular($celular) {
		$this->celular = $celular;
	}


	function getEmail() {
		return $this->email;
	}

	function setEmail($email) {
		$this->email = $email;
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


	function getEstadocivil() {
		return $this->estadocivil;
	}

	function setEstadocivil($estadocivil) {
		$this->estadocivil = $estadocivil;
	}


	function getObservacoes() {
		return $this->observacoes;
	}

	function setObservacoes($observacoes) {
		$this->observacoes = $observacoes;
	}



}

$objClientes = new clientes();

?>
