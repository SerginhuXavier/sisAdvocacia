function excluir (id){
    var tab = document.getElementById("table");
    var index = document.getElementById(id).rowIndex;
    var confirma = confirm('Tem certeza de que deseja excluir esse registro? ');
    if (confirma == true){
        tab.deleteRow(index);

        Ext.Ajax.request({
            url: ("../control/controleProcesso.php"),
            params: { id: id,
                opcao: "excluir"},
            success: function() {
                alert('Registro Excluído com Sucesso.');
            },
            failure: function() {
                alert('Falha na execução. Url: [' + url + ']');
            }

        });

    }
}


$(document).ready(function(){
    $("#data").mask('99/99/9999');

    $("#nParcela").hide();
    $("#processo").hide();
    $("#carregando").hide();

    $("#formaPagamento").change(function(){
        var formaPagamento = $("#formaPagamento").val();

        if (formaPagamento == 'parcelado'){
            $("#nParcelas").attr("disabled",false);
            $("#nParcela").show();
        }else {
            $("#nParcelas").attr("disabled",true);
            $("#nParcela").hide();
        }
    });

    $("#idCliente").change(function () {
        var cliente = $("#idCliente").val();

        $.post('listaClienteAjax.php' ,{id:cliente},
        function (data){

            if (cliente != ""){
                $("#processo").show();
                $("#processo").empty().html(data);
                $("#carregando").hide();
            }
            else {
                $("#processo").empty();
                $("#carregando").hide();
                $("#processo").hide();
            }
        });
    });


    $("#cadastrar").click(function() {
        var nProcesso = $("#nProcesso").val();
        var idCliente = $("#idCliente").val();
        var parteContraria = $("#parteContraria").val();
        var tribunal = $("#tribunal").val();
        var formaPagamento = $("#formaPagamento").val();
        var valorFixo = $("#valorFixo").val();
        var nParcelas = $("#nParcelas").val();
        var valorAcao = $("#valorAcao").val();
        var data = $("#data").val();

        //fazendo a verificação dos campos vazios.
        $(".span").html('');
        if (nProcesso == "") {
            $("#erroProcesso").html("Campo Número do Processo Vazio.");
            $("#nProcesso").focus();
        } else if (idCliente == ""){
            $("#erroCliente").html("Campo Cliente Vazio.");
            $("#idCliente").focus();
        } else if (parteContraria == "" ) {
            $("#erroParteContraria").html("Campo Parte Contrária Vazio.");
            $("#parteContraria").focus();
        } else if(data == '') {
            $("#erroData").html("Campo Data Vazio.");
            $("#data").focus();
        }else if (tribunal == ""){
            $("#erroTribunal").html("Campo Tribunal Vazio.");
            $("#tribunal").focus();
        } else if (formaPagamento == ""){
            $("#erroFormaPagamento").html("Campo Forma de Pagamento Vazio.");
            $("#formaPagamento").focus();
        } else if (valorFixo == "" && valorAcao == '') {
            $("#erroFormaPagamento").html("Campo Valor Fixo ou o campao % Valor Ação devem ser preenchidos.");
        } else if ((formaPagamento == "parcelado") && (nParcelas == "")) {
            $("#erroFormaPagamento").html("Campo Número de Parcelas Vazio.");
            $("#nParcelas").focus();
        } else {
           document.getElementById("frmProcesso").submit();
        }
    });
});

