<?php
class comarca {
	var $id;
	var $descricao;
	var $vara;


	function getId() { 
		return $this->id; 
	}

	function setId($id) {
		$this->id = $id; 
	}


	function getDescricao() { 
		return $this->descricao; 
	}

	function setDescricao($descricao) {
		$this->descricao = $descricao; 
	}


	function getVara() { 
		return $this->vara; 
	}

	function setVara($vara) {
		$this->vara = $vara; 
	}
} 
$objComarca=new comarca();
?>