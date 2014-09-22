$(document).ready(function(){
    
  

    $("#cadastrar").click(function() {

                var nome = $("#nome").val();
                var endereco = $("#endereco").val();
                var telefone = $("#telefone").val();
                var rg = $("#rg").val();
                var cpf = $("#cpf").val();
                var estadoCivil = $("#estadoCivil").val();
                
                //fazendo a verificação dos campos vazios.

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

