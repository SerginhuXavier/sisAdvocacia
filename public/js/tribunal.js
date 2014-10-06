function excluir (id){

    var tab = document.getElementById("table");
    var index = document.getElementById(id).rowIndex;
    var confirma = confirm('Tem certeza de que deseja excluir esse registro? ');
    if (confirma == true){

        tab.deleteRow(index);

        Ext.Ajax.request({
            url: ("../control/controleTribunal.php"),
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
        var tribunal = $("#descricao").val();

        if (tribunal == "") {
            alert('O campo DESCRIÇÃO precisa ser preenchido.');
        }else {
            $("#frmTribunal").submit();
        }
    });

    $("#btnAlterar").click(function() {
        var tribunal = $("#descricao").val();
        if (tribunal == "") {
            alert('O campo DESCRIÇÃO precisa ser preenchido.');
        }else {
            $("#frmTribunal").submit();
        }
    });
});