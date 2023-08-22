mascaras();

// essa forma de função é a para definir a página de menu, tudo o que não for formulário 
// usadopara qualquer coisa que não seja formulário


function addCliente() {

console.log('botaoFunfa');


    $('#frmAddClientes').on('submit', function (event) {
        event.preventDefault();

// array de dados de página, 1 dado por vez

        // var dados = {
        //     acao: 'addCliente'
        // }

        // se quiser um formulário ele fica em um Array
        
        var dados = $(this).serializeArray();

        dados.push(
            {name: "acao", value: 'addCliente'},
        );

        $.ajax({
            type: "POST",
            dataType: 'JSON',
            url: 'controle.php',
            data: dados,
            beforeSend: function (retorno) {
            }, success: function (retorno) {

                console.log(retorno);

                if(retorno=='Gravado') {
                    $('#modalAddCliente').modal('hide');
                    msgGeral();
                   $('div#msgGeral').html("<div className='alert alert-success text-center' role='alert'>Gravado com sucesso!!</div>");

                   listarGeral('ListarCliente');
                   setTimeout(function(){
                    $('div#msgGeral').html('');
                   }, 3000)
                   

                }else{
                    
                    $('div#msgGeral').html("<div className='alert alert-danger text-center' role='alert'>Erro, não gravou.</div>");
                }
            }
        });
    });
}

function listarCliente() {
    var dados = {
        acao: 'listarCliente',
    }

    $.ajax({
        type: "POST",
        dataType: 'html',
        url: 'controle.php',
        data: dados,
        beforeSend: function (retorno) {
        }, success: function (retorno) {
            $('div#showpage').html(retorno);
        }
    });
}

function ListarGeral() {
    var dados = {
        acao: 'acaopage',
    }

    $.ajax({
        type: "POST",
        dataType: 'html',
        url: 'controle.php',
        data: dados,
        beforeSend: function (retorno) {
        }, success: function (retorno) {
            $('div#showpage').html(retorno);
        }
    });
}

function msgGeral() {
   Swal.fire({
    position: 'top-center',
    icon: 'success',
    title: 'Gravado com Sucesso!!!',
    showConfirmButton: false,
    timer: 1500
    })
}


// as máscaras são nativas do Jquery, precisa de instalar a biblioteca do jquery procurar por cdn mask input jquery e pegar o 1º, jquery sempre é o 1º antes dos outros links
function mascaras() {
    $('.maskCelular').inputmask({
        mask: "(99)9.9999-9999"
    });    
    $('.maskCep').inputmask({
        mask: "99999-999"
    });    
    $('.maskCpf').inputmask({
        mask: "999.999.999-99"
    });    
}

function ativoGeral(e, ativo, idbtn, acao) {
    if (ativo = 'ativar') {
        var btn = idbtn;   
        var ativo = 'A';  
    } else {
        var btn = idbtn;
        var ativo = 'D'
    }
    $('#' + btn).on('click', function(){
        var dados = {
            acao: acao,
            id: e,
            a: ativo,
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

