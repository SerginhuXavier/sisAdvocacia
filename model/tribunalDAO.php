<?php
include_once 'banco.php';
include_once 'tribunal.php';


class tribunalDAO extends banco {


    public function incluirTribunal ($objTribunal) {
        $this->abreConexao();
        $sql = 'INSERT INTO '.TBL_TRIBUNAIS.'
                SET
                    descricao = "'.$objTribunal->getDescricao().'"';

         mysql_query($sql);
    }

    public function listaTribunal (){
        $this->abreConexao();

        $sql = 'SELECT * FROM '.TBL_TRIBUNAIS;

        $resultado = mysql_query($sql);

        while ($linha = mysql_fetch_assoc($resultado)) {

            echo "<tr id=".$linha['idTribunal'].">
                    <td>".$linha['descricao']."</td>
                    <td>
                        <a href=../view/altTribunais.php?id=".$linha['idTribunal'].">
                            <img src='../public/img/file_edit.png' border='0'>
                        </a>
                    </td>
                    <td>
                        <a href=javascript:excluir(".$linha['idTribunal'].")>
                            <img src='../public/img/file_remove.png' border='0'>
                        </a>
                    </td>

                  </tr>";
        }
    }

     public function listaTribunalCombo($id = 0){
        $this->abreConexao();

        $sql = 'SELECT * FROM '.TBL_TRIBUNAIS." where status=1";

        $resultado = mysql_query($sql);

         echo $id;
        while ($linha = mysql_fetch_assoc($resultado)) {
            if($id != 0 && $id == $linha['idTribunal']){
                $selected = 'selected';
            }else{
                $selected = '';
            }

            echo "<option value='".$linha['idTribunal']."' ".$selected.">".$linha['descricao']."</option>";
        }
		$this->fechaConexao();
	}


   public function consultar($objTribunal) {

       $this->abreConexao();

        $sql = 'SELECT * FROM '.TBL_TRIBUNAIS.' WHERE idTribunal = "'.$objTribunal->getId().'"';

       $resultado = mysql_query($sql) or die ('N�o foi poss�vel consutar esse registro.'.mysql_error());

       $linha = mysql_fetch_assoc($resultado);

       return $linha;



   }

   public function alterar($objTribunal){

       $this->abreConexao();

       $sql = 'UPDATE
                    '.TBL_TRIBUNAIS.'
                SET
                     descricao  = "'.$objTribunal->getDescricao().'"
                WHERE
                    idTribunal = "'.$objTribunal->getId().'"';

        mysql_query($sql) or die ('N�o foi poss�vel atualizar o registro.');





   }

   public function excluir($objTribunal){


       $this->abreConexao();

       $sql = "DELETE FROM  ".TBL_TRIBUNAIS." WHERE idTribunal = '".$objTribunal->getId()."'";

       mysql_query($sql) or die ('N�o foi poss�vel fazer a exclus�o. '.mysql_error());


   }
}
$objTribunalDAO = new tribunalDAO();

