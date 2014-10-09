$(document).ready(function() {
    $("#data").mask('99/99/9999');
    $("#btnCadastrar").click(function() {
        var data = $("#data").val();
        var descricao = $("#descricao").val();

        $(".span").html('');
        if (data == "") {
            $("#spanData").html("Campo Data vazio.");
            $("#data").focus();
        }else if (descricao == "") {
            $("#spanDescricao").html("Campo Descrição vazio");
            $("#descricao").focus();
        }else {
            $("#cadAndamento").submit();
        }
    });
});