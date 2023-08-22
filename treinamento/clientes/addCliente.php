<?php



include_once './config/constantes.php';
include_once './config/conexao.php';
include_once './func/dashboard.php';

// array pega todos os dados agrupados, ex, telefone, nome, email e etc
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$conn = conectar();
if (!empty($dados) && isset($dados)) {

    $nomeCliente = $dados['nomeCliente'];
    $telefoneCliente = $dados['telefoneCliente'];


    $retornoInsert = insertDois('cliente', 'nome, telefone', $nomeCliente, $telefoneCliente);

    // se ele cair com sucesso, vai aparecer gravado

    echo json_encode($retornoInsert);
    }else{
        echo json_encode("Insert não concluído com sucesso.");
}
