<?php
class tribunal {

    var $id;
    var $descricao;


    function setId($id) {

        $this->id = $id;
    }

    function getId() {

        return $this->id;
    }

    function setDescricao($descricao) {

        $this->descricao = $descricao;

    }

    function getDescricao() {

        return $this->descricao;
    }


}
$objTribunal = new tribunal();

?>
