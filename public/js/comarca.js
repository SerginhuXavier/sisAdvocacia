function excluir (id){
    var tab = document.getElementById("table");
    var index = document.getElementById(id).rowIndex;
    var confirma = confirm('Tem certeza de que deseja excluir esse registro? ');
    if (confirma == true){
        tab.deleteRow(index);

        Ext.Ajax.request({
            url: ("../control/controleComarca.php"),
            params: {
            id: id,
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

$(document).ready(function() {
    $("#btnCadastrar").click(function() {
        var descricao = $("#descricao").val();
        var vara = $("#vara").val();

        $(".span").html('');
        if (descricao == "") {
            $("#spanDescricao").html("Você esqueceu de preencher a descrição da comarca.");
            $("#descricao").focus();
        }else if(vara == "")
            $("#spanVara").html("Você deve selecionar uma vara.");
        else {
            $("#cadComarca").submit();
        }
    });

    $("#btnAlterar").click(function() {
        var descricao = $("#descricao").val();
        var vara = $("#vara").val();

        $(".span").html('');
        if (descricao == "") {
            $("#spanDescricao").html("Você esqueceu de preencher a descrição da comarca.");
            $("#descricao").focus();
        }else if(vara == "")
            $("#spanVara").html("Você deve selecionar uma vara.");
        else {
            $("#editarComarca").submit();
        }

    });
});