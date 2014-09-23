<?php
class Clientes {
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
    private $nacionalidade;


    public function getIdCliente() {
		return $this->idCliente;
	}

    public function setIdCliente($idCliente) {
		$this->idCliente = $idCliente;
	}


    public function getProfissao() {
		return $this->profissao;
	}

    public function setProfissao($profissao) {
		$this->profissao = $profissao;
	}


    public function getNome() {
		return $this->nome;
	}

    public function setNome($nome) {
		$this->nome = $nome;
	}


    public function getEndereco() {
		return $this->endereco;
	}

    public function setEndereco($endereco) {
		$this->endereco = $endereco;
	}


    public function getComplemento() {
		return $this->complemento;
	}

    public function setComplemento($complemento) {
		$this->complemento = $complemento;
	}


    public function getTelefone() {
		return $this->telefone;
	}

    public function setTelefone($telefone) {
		$this->telefone = $telefone;
	}


    public function getTelefone2() {
		return $this->telefone2;
	}

    public function setTelefone2($telefone2) {
		$this->telefone2 = $telefone2;
	}


    public function getCelular() {
		return $this->celular;
	}

    public function setCelular($celular) {
		$this->celular = $celular;
	}


    public function getEmail() {
		return $this->email;
	}

    public function setEmail($email) {
		$this->email = $email;
	}


    public function getRg() {
		return $this->rg;
	}

    public function setRg($rg) {
		$this->rg = $rg;
	}


	public function getCpf() {
		return $this->cpf;
	}

	public function setCpf($cpf) {
		$this->cpf = $cpf;
	}


	public function getEstadocivil() {
		return $this->estadocivil;
	}

	public function setEstadocivil($estadocivil) {
		$this->estadocivil = $estadocivil;
	}


	public function getObservacoes() {
		return $this->observacoes;
	}

	public function setObservacoes($observacoes) {
		$this->observacoes = $observacoes;
	}


    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

}

$objClientes = new Clientes();

?>
