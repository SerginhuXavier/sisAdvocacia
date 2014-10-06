function excluir (id){
    var tab = document.getElementById("table");
    var index = document.getElementById(id).rowIndex;
    var confirma = confirm('Tem certeza de que deseja excluir esse registro? ');
    if (confirma == true){
        tab.deleteRow(index);
       
        Ext.Ajax.request({
            url: ("../control/controleVara.php"),
            params: {
                id: id,
                opcao: "excluir"
            },
            success: function () {
                alert('Registro Excluído com Sucesso.');
            },
            failure: function () {
                alert('Falha na execução. Url: [' + url + ']');
            }

	    });
    }
}

$(document).ready(function(){
    $("#btnAlterar").click(function() {
        var descricao = $("#descricao").val();
        var tribunal = $("#tribunal").val();

        $(".span").html('');
        if (descricao == "") {
            $("#spanDescricao").html("Você esqueceu de preencher a descrição da vara.");
            $("#descricao").focus();
        }else if(tribunal == ""){
            $("#erroTribunal").html("Você deve selecionar um tribunal.");
        }else {
            $("#altVara").submit();
        }

    });

    $("#btnCadastrar").click(function() {
        var descricao = $("#descricao").val();
        var tribunal = $("#tribunal").val();

        $(".span").html('');
        if (descricao == "") {
            $("#spanDescricao").html("Você esqueceu de preencher a descrição da vara.");
            $("#descricao").focus();
        }else if(tribunal == ""){
            $("#erroTribunal").html("Você deve selecionar um tribunal.");
        }else {
            $("#cad_vara").submit();
        }
    })
})
