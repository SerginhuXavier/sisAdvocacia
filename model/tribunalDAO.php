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
         echo "<script>alert('Cadastro Realizado com Sucesso');</script>";
          echo "<script>window.location='../view/lista_tribunal.php';</script>";
      


    }

    public function listaTribunal (){


        $this->abreConexao();

        $sql = 'SELECT * FROM '.TBL_TRIBUNAIS;

        $resultado = mysql_query($sql) or die ('Não foi possível fazer a listagem dos tribunais.');

        $i = 1;
        while ($linha = mysql_fetch_assoc($resultado)) {

            echo "<tr id=".$linha['idTribunal'].">
                    <td class='texto'>".$linha['idTribunal']."</td>
                    <td class='texto'>".$linha['descricao']."</td>
                    <td class='texto'><a href=../view/alt_tribunais.php?id=".$linha['idTribunal']."><img src='../public/img/file_edit.png' border='0'></td>
                    <td class='texto'><a href=javascript:excluir(".$linha['idTribunal'].")><img src='../public/img/file_remove.png' border='0'></td>

                  </tr>";

        $i++;
        }
    }

     public function listaTribunalCombo (){


        $this->abreConexao();

        $sql = 'SELECT * FROM '.TBL_TRIBUNAIS." where status=1";

        $resultado = mysql_query($sql) or die ('Não foi possível fazer a listagem dos tribunais.');


        while ($linha = mysql_fetch_assoc($resultado)) {

            echo "<option value=".$linha['idTribunal'].">".$linha['descricao']."</option>";

        }
		$this->fechaConexao();
	}


       public function consultar($objTribunal) {

           $this->abreConexao();

            $sql = 'SELECT * FROM '.TBL_TRIBUNAIS.' WHERE idTribunal = "'.$objTribunal->getId().'"';

           $resultado = mysql_query($sql) or die ('Não foi possível consutar esse registro.'.mysql_error());

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

            mysql_query($sql) or die ('Não foi possível atualizar o registro.');

            echo "<script>alert('Alteração Realizada com Sucesso');</script>";
            echo "<script>window.location='../view/lista_tribunal.php';</script>";



       }

       public function excluir($objTribunal){


           $this->abreConexao();

           $sql = "DELETE FROM  ".TBL_TRIBUNAIS." WHERE idTribunal = '".$objTribunal->getId()."'";

           mysql_query($sql) or die ('Não foi possível fazer a exclusão. '.mysql_error());

           
       }







}
$objTribunalDAO = new tribunalDAO();

?>
