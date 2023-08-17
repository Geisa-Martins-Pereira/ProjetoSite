function addCliente() {
    $('#frmAddClientes').on('submit', function (e) {
        e.preventDefault();

        var dados = {
            acao: '22'
        }


        $.ajax({
            type: "POST",
            dataType: 'JSON',
            url: 'controle.php',
            data: dados,
            beforeSend: function (retorno) {
            }, success: function (retorno) {

                console.log(retorno);

            }
        });
    });
}