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

					alert('Registro Exclu�do com Sucesso.');
				},

				 failure: function() {

					alert('Falha na execu��o. Url: [' + url + ']');
				}

	});

            table.deleteRow(index);




    }


}
