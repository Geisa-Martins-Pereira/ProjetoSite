// alert('entrou na página, estou funcionando'); 

// preciso de uma explicação melhor desta parte, não entendi direito pra q serve


// a parte que repete do código é a parte que deve ficar aqui para que o menu funcione

// esta parte é criação de ajax, vai depender do que eu quero, como eu quero os dados e etc
// . para classe e # para id, id n pode repetir, classe ss, começa sempre com $
// não precisa de todo o nome da classe, apenas a última parte caso houver espaço


// attr é uma palavra que chama o atributo para a variável criada

// se for usar um id id que é utilizado mais de uma vez, é bom colocar o nome da tag para reconhecer o que é desejado, neste caso, input + #conteudo, tag + #id

// $('.div.conteudo').html('nome');

// array está dentro das {} chaves

$(document).ready(function () {
    $('.linkMenu').on('click', function (pageLink) {
        pageLink.preventDefault();

        // a área depois do attr(aqui) é o atributo criado na classo do item 
        var menuClicado = $(this).attr('datalink');
        // comecei o post aqui

        // com aspas ele fala o texto menuClicado, sem aspas ele fala o que tem na variável
        // alert(menuClicado); 

        var dados = {

            acao: menuClicado,

        };

        // alert(dados);

        $.ajax({
            type: "POST",
            dataType: 'html',
            url: 'controle.php',
            data: dados,
            beforeSend: function () {
                loadingMostrar();
            }, success: function (retorno) {
                $('div#conteudo').html(retorno);
                loadingFechar();
            }
        });


        //   terminei o post aqui

    })

});

function cadDados() {
    $('#formCadDados').on('submit', function (e) {
        e.preventDefacult();
        alert('clicou no submit');
        // serializeArray faz com que todos os dados recebidos sejam transformados em array

        var formCadDados = $(this).serializeArray();

        formCadDados.push(
            { name: "acao", value: 'tipodefestasacao' },
        )

        $.ajax({
            type: "POST",
            dataType: 'html',
            url: 'controle.php',
            data: formCadDados,
            beforeSend: function () {
                // loadingMostrar();
            }, success: function (retorno) {
                $('#conteudo').html(retorno);
                // loadingFechar();
            }
        });

    })
}


function loadingMostrar() {
    $('div.loading').html("<div class='spinner-border text-primary' role='status'></div>");
}

function loadingFechar() {
    $('div.loading').html("");
    // se precisar saber algum prazo
    // setTimeout(function(){
    //     $('div.loading').html("");
    // }, 6000;
}

// adicionar dados
function AddGeral(idForm, idModal, page, pageretorno) {

    $('#'+idForm).on('submit', function (e) {         

        e.preventDefault();

        // alert(idForm);
        // alert(idModal);
        // alert(page);
        // alert(pageretorno);
        // alert('AAAAAA');

        let dados = $(this).serializeArray();

        dados.push(
            { name: 'acao', value: page }
        );

        

        $.ajax({
            type: "POST",
            dataType: 'html',
            url: 'controle.php',
            data: dados,
            beforeSend: function () {
                // loadingMostrar();
            }, success: function (retorno) {

                alert(retorno);
                AtualizarPagCad(pageretorno, idModal);
            }
        });
    });
};

// alterar dados
function alterarRegistros(idForm, idModal, page, pageretorno) {

    $('#'+idForm).on('submit', function (e) {         

        e.preventDefault();

        // alert(idForm);
        // alert(idModal);
        // alert(page);
        // alert(pageretorno);
        // alert('AAAAAA');

        let dados = $(this).serializeArray();

        dados.push(
            { name: 'acao', value: page }
        );

        

        $.ajax({
            type: "POST",
            dataType: 'html',
            url: 'controle.php',
            data: dados,
            beforeSend: function () {
                // loadingMostrar();
            }, success: function (retorno) {

                alert(retorno);
                AtualizarPagCad(pageretorno, idModal);
            }
        });
    });
};

// excluir dados
function exGeral(id, page, pageretorno) {

    // alert('AAAAAA');

    var dados = {
        acao: page,
        id: id,
    };

    // alert(page);
    // alert(id);

    $.ajax({
        type: "POST",
        dataType: 'html',
        url: 'controle.php',
        data: dados,
        beforeSend: function () {
            // loadingMostrar();
        }, success: function (retorno) {
            // console.log(retorno);
            // alert(retorno);

            setTimeout(function () {
                AtualizarPag(pageretorno);
            }, 1000);
        }
    });
}




// atualizar a página
function AtualizarPag(menuClicado) {

    let dados = {
        acao: menuClicado,
    };

    $.ajax({
        type: "POST",
        dataType: 'html',
        url: 'controle.php',
        data: dados,
        beforeSend: function () {
            // loadingMostrar();
        }, success: function (retorno) {
            setTimeout(function () {
                $('div#conteudo').html(retorno);
            }, 1000);
        }
    });
}


// atualizar a página cadastro

function AtualizarPagCad(menuClicado, idModal) {

    let dados = {
        acao: menuClicado, 
    };

    $.ajax({
        type: "POST",
        dataType: 'html',
        url: 'controle.php',
        data: dados,
        beforeSend: function () {
            // loadingMostrar();
        }, success: function (retorno) {
            $('#'+idModal).modal('hide');
            setTimeout(function () {
                $('div#conteudo').html(retorno);
            }, 1000);
        }
    });
}

// modal focus

$('#exampleModal').on('show.bs.modal', function (event) {
    $('#nomeAlt').trigger('focus');
    var button = $(event.relatedTarget) 
    var recipient = button.data('whatever') 
    var modal = $(this)
    modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('.modal-body input').val(recipient)
  })

  // modal alterar dados

$('#exampleModal').on('show.bs.modal', function (event) {
    $('#nomeAlt').trigger('focus');
    var button = $(event.relatedTarget) 
    var recipient = button.data('whatever') 
    var modal = $(this)
    modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('.modal-body input').val(recipient)
  })