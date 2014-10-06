function excluir (id){

    var tab = document.getElementById("table");
    var index = document.getElementById(id).rowIndex;
    var confirma = confirm('Tem certeza de que deseja excluir esse registro? ');

    if (confirma == true){
        tab.deleteRow(index);

        Ext.Ajax.request({
            url: ("../control/controleUsuario.php"),
            params: { id: id, opcao: "excluir"},
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
        var nome = $("#nome").val();
        var login = $("#login").val();
        var senha = $("#senha").val();
        var nsenha = $("#confirmaSenha").val();

        $(".span").html('');
        if (nome == "") {
            $("#spanNome").html("Você esqueceu de preencher o nome.");
            $("#nome").focus();
        }else if (login == "") {
            $("#spanLogin").html("você esqueceu de preencher o login");
            $("#login").focus();
        }else if (senha == "") {
            $("#spanSenha").html("você esqueceu de preencher a senha");
            $("#senha").focus();
        }else if (nsenha != senha) {
            $("#spanNsenha").html("SENHA não confere");
            $("#confirmaSenha").focus();
        }else {
            $("#cadUsuario").submit();
        }

    });

    $("#btnAlterar").click(function() {
        var nome = $("#nome").val();
        var login = $("#login").val();
        var senha = $("#senha").val();
        var nsenha = $("#confirmaSenha").val();

        $(".span").html('');
        if (nome == "") {
            $("#spanNome").html("Você esqueceu de preencher o nome.");
            $("#nome").focus();
        }else if (login == "") {
            $("#spanLogin").html("você esqueceu de preencher o login");
            $("#login").focus();
        }if(senha != '' && nsenha != senha){
            $("#spanNsenha").html("SENHA não confere");
            $("#confirmaSenha").focus();
        }else{
            $("#altUsuario").submit();
        }

    });
});
