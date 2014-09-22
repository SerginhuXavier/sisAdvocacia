<?php
class vara {
	var $id;
	var $descricao;
	var $tribunal;


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


	function getTribunal() { 
		return $this->tribunal; 
	}

	function setTribunal($tribunal) {
		$this->tribunal = $tribunal; 
	}
} 
$objVara=new vara();
?>