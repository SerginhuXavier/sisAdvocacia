<?php

class processo {
	 var $idProcesso;
	 var $nProcesso;
	 var $parteContraria;
	 var $data;
	 var $tribunal;
	 var $formaPagamento;
	 var $valorFixo;
	 var $nParcelas;
	 var $valorAcao;
	 var $status;
         var $idCliente;


	function getIdProcesso() {
		return $this->idProcesso;
	}

	function setIdProcesso($idProcesso) {
		$this->idProcesso = $idProcesso;
	}

        function getIdCliente() {
		return $this->idCliente;
	}

	function setIdCliente($idCliente) {
		$this->idCliente = $idCliente;
	}


	function getNProcesso() {
		return $this->nProcesso;
	}

	function setNProcesso($nProcesso) {
		$this->nProcesso = $nProcesso;
	}


	function getParteContraria() {
		return $this->parteContraria;
	}

	function setParteContraria($parteContraria) {
		$this->parteContraria = $parteContraria;
	}


	function getData() {
		return $this->data;
	}

	function setData($data) {
		$this->data = $data;
	}


	function getTribunal() {
		return $this->tribunal;
	}

	function setTribunal($tribunal) {
		$this->tribunal = $tribunal;
	}


	function getFormaPagamento() {
		return $this->formaPagamento;
	}

	function setFormaPagamento($formaPagamento) {
		$this->formaPagamento = $formaPagamento;
	}


	function getValorFixo() {
		return $this->valorFixo;
	}

	function setValorFixo($valorFixo) {
		$this->valorFixo = $valorFixo;
	}


	function getNParcelas() {
		return $this->nParcelas;
	}

	function setNParcelas($nParcelas) {
		$this->nParcelas = $nParcelas;
	}


	function getValorAcao() {
		return $this->valorAcao;
	}

	function setValorAcao($valorAcao) {
		$this->valorAcao = $valorAcao;
	}


	function getStatus() {
		return $this->status;
	}

	function setStatus($status) {
		$this->status = $status;
	}

   


}
$objProcesso = new processo();

?>
