<?php

// echo json_encode('tá funfano o controle');

$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);
switch ($acao) {
    case 'addCliente':
        // echo 'Chamou a pagina de Adicionar Cliente';  
        include_once './clientes/addCliente.php';  
    break;
    case 'listarCliente':
        // echo 'Chamou a pagina de Listar Cliente';  
        include_once './clientes/listarCliente.php';  
    break;
    case 'ativarCliente':
        // echo 'Chamou a pagina de Ativar Cliente';  
        include_once './clientes/ativarCliente.php';  
    break;
}


?>