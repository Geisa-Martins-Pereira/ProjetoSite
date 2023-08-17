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

if (isset($_POST['celular']) && !empty($_POST['celular'])) {
    $celular = $_POST['celular'];
} else {
    echo 'Por favor, preencha os campos obrigatórios para continuar.';
    exit();
}

if (isset($_POST['data']) && !empty($_POST['data'])) {
    $data = $_POST['data'];
} else {
    echo 'Por favor, preencha os campos obrigatórios para continuar.';
    exit();
}

if (isset($_POST['horario']) && !empty($_POST['horario'])) {
    $horario = $_POST['horario'];
} else {
    echo 'Por favor, preencha os campos obrigatórios para continuar.';
    exit();
}

if (isset($_POST['pessoas']) && !empty($_POST['pessoas'])) {
    $pessoas = $_POST['pessoas'];
} else {
    echo 'Por favor, preencha os campos obrigatórios para continuar.';
    exit();
}

if (isset($_POST['mensagem'])) {
    $mensagem = $_POST['mensagem'];
} else {
    echo 'Por favor, preencha os campos obrigatórios para continuar.';
    exit();
}


$Listar = listarRegistroUmParametro2('pessoas', 'email', 'email', $email, 'A');

// var_dump($Listar);

if ($Listar == false) {
    $idpessoas = inserirRegistrosReturnId('pessoas', 'nome, email, celular, cadastro', "'$nome', '$email', '$celular'");

    if ($idpessoas == false) {
        echo 'Não foi possível registrar seus dados.';
        echo 'Por favor, tente novamente.';
        exit();

    } else {

        // as variáveis colocadas dentro do () do inserir registros são as varíaveis criadas no código anterior -> if (isset($_POST['mensagem'])), que estará recebendo sequencialmente as tabelas citadas anteriormente
        $registrarReserva = inserirRegistros('reserva', 'idpessoas, datareserva, horarioreserva, numeropessoas, mensagem, cadastro', "'$idpessoas', '$data','$horario', '$pessoas', '$mensagem'");
        if ($registrarReserva == false) {
            echo 'Não foi possível registrar a reserva.';
        echo 'Por favor, tente novamente.';
        exit();
        }
    }
} else {
        echo 'Já existe uma conta com este email';
        echo 'Por favor, realize o login ou registre outro email.';
        exit();
    }

    echo 'OK';

    ?>