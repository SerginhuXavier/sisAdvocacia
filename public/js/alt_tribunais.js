$(document).ready(function() {

        $("#cadastrar").click(function() {

        var tribunal = $("#descricao").val();

        if (tribunal == "") {


                alert('O campo DESCRI��O precisa ser preenchido.');

        }

         else {

                $("#frmTribunal").submit();

         }

        });







    });






