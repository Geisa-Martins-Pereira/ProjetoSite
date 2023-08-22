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

        $retorno = upUm('cliente', 'ativo', 'idcliente', 'A', $idCliente);
        if ($retorno == 'Atualizado') {
            echo json_encode('Ok');
        } else {
            echo json_encode($retorno);
        }
        
    } else {

        $retorno = upUm('cliente', 'ativo', 'idcliente', 'D', $idCliente);
        if ($retorno == 'Atualizado') {
            echo json_encode('Ok');
        } else {
            echo json_encode($retorno);
        }
    } 
} else {
     echo json_encode('Erro. Insert não com concluído.');
}
