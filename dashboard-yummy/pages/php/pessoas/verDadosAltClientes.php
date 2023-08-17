<?php

include_once './config/conexao.php';
include_once './config/funcoes.php';
include_once './config/constantes.php';

$id = filter_input(INPUT_POST, 'id', FILTER_DEFAULT);

$ListarClientes = listarTodosRegistros2('pessoas', 'foto, nome, celular, email, ativo, cargo', 'idpessoas', $id);

if ($ListarClientes != false) {
    echo json_encode (['dados' => $ListarClientes]);
} else {
    echo json_encode (['dados' => 'Erro']);
}

?>