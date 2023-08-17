<?php

$Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


// function exGeral(id, page, pageretorno) {
//     var dados = {
//         acao: page,
//         id: id,
//     };

    // o id dentro do [] foi retirado da página do painel

$id = $Dados ['id'];

$exc = excluirRegistros('pessoas', 'idpessoas', $id);

// var_dump($exc);
echo 'Excluído com sucesso"';

?>