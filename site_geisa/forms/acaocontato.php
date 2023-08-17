<?php

include_once '../config/conexao.php';
include_once '../config/constantes.php';
include_once '../config/funcoes.php';


// essa parte é para mexer no arquivo dentro da url sem ter q ficar enviando pelo formulário td hr naquela chatice, apenas é necessário colocar 'http://localhost/Ge%C3%ADsa/Yummy/projetosite/site_geisa/forms/acaoreserva.php' na url e go

// $_POST['nome'] = 'Geísa';
// $_POST['email'] = 'aa@gmail.com';
// $_POST['celular'] = '33986718752';
// $_POST['data'] = '15-05-2024';
// $_POST['horario'] = '18:00:00';
// $_POST['pessoas'] = '12';
// $_POST['mensagem'] = 'Bora cumê';


if (isset($_POST['nome']) && !empty($_POST['nome'])) {
    $nome = $_POST['nome'];
} else {
    echo 'Por favor, preencha os campos obrigatórios para continuar.';
    exit();
}

if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = $_POST['email'];
} else {
    echo 'Por favor, preencha os campos obrigatórios para continuar.';
    exit();
}

if (isset($_POST['assunto']) && !empty($_POST['assunto'])) {
    $assunto = $_POST['assunto'];
} else {
    echo 'Por favor, preencha os campos obrigatórios para continuar.';
    exit();
}

if (isset($_POST['mensagem']) && !empty($_POST['mensagem'])) {
    $mensagem = $_POST['mensagem'];
} else {
    echo 'Por favor, preencha os campos obrigatórios para continuar.';
    exit();
}


$Listar = inserirRegistros('contato', 'nome, email, assunto, mensagem', "'$nome', '$email', '$assunto', '$mensagem'");
// ($tabela, $campos, $valores)
// var_dump($Listar);

if ($Listar == false) {
        echo 'Não foi possível registrar seus dados.';
        echo 'Por favor, tente novamente.';
        exit();

    } else {
    echo 'Mensagem enviada com sucesso!';
    }
