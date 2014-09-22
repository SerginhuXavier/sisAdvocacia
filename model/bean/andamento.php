<?php

class andamento {
	var $id;
	var $processo;
	var $descricao;
	var $data;


	function getId() { 
		return $this->id; 
	}

	function setId($id) {
		$this->id = $id; 
	}


	function getProcesso() { 
		return $this->processo; 
	}

	function setProcesso($processo) {
		$this->processo = $processo; 
	}


	function getDescricao() { 
		return $this->descricao; 
	}

	function setDescricao($descricao) {
		$this->descricao = $descricao; 
	}


	function getData() { 
		return $this->data; 
	}

	function setData($data) {
		$this->data = $data; 
	}
}
$objAndamento=new andamento();
?> 