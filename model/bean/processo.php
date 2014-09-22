<?php

class processo {
	var $id;
	var $nprocesso;
	var $cliente;
	var $parte_contraria;
	var $tribunal;
	var $data;
	var $status;
	var $fPagamento;
	var $valorFixo;
	var $nParcelas;
	var $vAcao;


	function getId() { 
		return $this->id; 
	}

	function setId($id) {
		$this->id = $id; 
	}
	
	function getValorAcao() { 
		return $this->vAcao; 
	}

	function setValorAcao($vAcao) {
		$this->vAcao = $vAcao; 
	}
	
	function getNumeroParcelas() { 
		return $this->nParcelas; 
	}

	function setNumeroParcelas($nParcelas) {
		$this->nParcelas = $nParcelas; 
	}

	function getFormaPagamento() { 
		return $this->fPagamento; 
	}

	function setFormaPagamento($fPagamento) {
		$this->fPagamento = $fPagamento; 
	}
	
	function getValorFixo() { 
		return $this->valorFixo; 
	}

	function setValorFixo($valorFixo) {
		$this->valorFixo = $valorFixo; 
	}
	
	function getNprocesso() { 
		return $this->nprocesso; 
	}

	function setNprocesso($nprocesso) {
		$this->nprocesso = $nprocesso; 
	}


	function getCliente() { 
		return $this->cliente; 
	}

	function setCliente($cliente) {
		$this->cliente = $cliente; 
	}


	function getParte() { 
		return $this->parte; 
	}

	function setParte($parte_contraria) {
		$this->parte = $parte_contraria; 
	}


	function getTribunal() { 
		return $this->tribunal; 
	}

	function setTribunal($tribunal) {
		$this->tribunal = $tribunal; 
	}


	function getData() { 
		return $this->data; 
	}

	function setData($data) {
		$this->data = $data; 
	}


	function getStatus() { 
		return $this->status; 
	}

	function setStatus($status) {
		$this->status = $status; 
	}


}
$objProcesso= new processo();
?> 