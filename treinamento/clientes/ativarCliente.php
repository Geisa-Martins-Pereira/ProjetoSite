<?php

include_once './config/constantes.php';
include_once './config/conexao.php';
include_once './func/dashboard.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$conn = conectar();
if (!empty($dados) && isset($dados)) {
    $idCliente = $dados['id'];
    $ativar = $dados['a'];

    if ($ativar == 'A') {

        # ativar aqui
        echo json_encode('Ativar aqui.');
        
    } else {

        # desativar aqui
        echo json_encode('Desativar aqui.');
    } 
} else {
     echo json_encode('Erro. Insert não com concluído.');
}
