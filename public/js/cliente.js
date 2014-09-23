function excluirCliente(id){

    var table = document.getElementById("tableCliente");
    var index = document.getElementById(id).rowIndex;
    var confirma = confirm("Tem Certeza de que deseja excluir o Cliente. ");

    if (confirma == true){

        Ext.Ajax.request({
            url: ("../control/clienteControle.php"),
            params: { id: id,
                opcao: "excluir"},
            success: function() {

                alert('Registro Excluído com Sucesso.');
                location.reload();
            },

            failure: function() {

                alert('Falha na execução. Url: [' + url + ']');
            }

        });

        table.deleteRow(index);
    }
}

$(document).ready(function(){
    $('#telefone').mask('(99)9999-9999');
    $('#telefone2').mask('(99)9999-9999');
    $('#celular').mask('(99)99999-9999');
    $('#cpf').mask('999.999.999-99');

    $("#cadastrar").click(function() {

        var nome = $("#nome").val();
        var endereco = $("#endereco").val();
        var telefone = $("#telefone").val();
        var rg = $("#rg").val();
        var cpf = $("#cpf").val();
        var estadoCivil = $("#estadoCivil").val();

        //fazendo a verificação dos campos vazios.
        $("span").html('');
        if (nome == "") {

            $("#erroNome").html("Campo Nome Vazio.");
            $("#nome").focus();

        } else if (endereco == ""){

                $("#erroEndereco").html("Campo Endereco Vazio.");
                $("#endereco").focus();
        } else if (telefone == "" ) {

                $("#erroTelefone").html("Campo Telefone Vazio.");
                $("#telefone").focus();
        } else if (rg == ""){

                $("#erroRG").html("Campo RG Vazio.");
                $("#rg").focus();

        } else if (cpf == ""){

                $("#erroCPF").html("Campo CPF Vazio.");
                $("#cpf").focus();

        } else if (estadoCivil == ""){

                $("#erroEstadoCivil").html("Selecione o Estado Civil.");
                $("#estadoCivil").focus();

        }else {

           document.getElementById("frmCliente").submit();
        }
    });

    $("#alterar").click(function() {

        var nome = $("#nome").val();
        var endereco = $("#endereco").val();
        var telefone = $("#telefone").val();
        var rg = $("#rg").val();
        var cpf = $("#cpf").val();
        var estadoCivil = $("#estadoCivil").val();

        //fazendo a verificação dos campos vazios.
        $("span").html('');
        if (nome == "") {

            $("#erroNome").html("Campo Nome Vazio.");
            $("#nome").focus();

        } else if (endereco == ""){

            $("#erroEndereco").html("Campo Endereco Vazio.");
            $("#endereco").focus();
        } else if (telefone == "" ) {

            $("#erroTelefone").html("Campo Telefone Vazio.");
            $("#telefone").focus();
        } else if (rg == ""){

            $("#erroRG").html("Campo RG Vazio.");
            $("#rg").focus();

        } else if (cpf == ""){

            $("#erroCPF").html("Campo CPF Vazio.");
            $("#cpf").focus();

        } else if (estadoCivil == ""){

            $("#erroEstadoCivil").html("Selecione o Estado Civil.");
            $("#estadoCivil").focus();

        }else {

            document.getElementById("frmCliente").submit();
        }

    });

});

