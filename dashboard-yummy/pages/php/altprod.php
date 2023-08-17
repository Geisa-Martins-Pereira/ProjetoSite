<?php

$Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


// function exGeral(id, page, pageretorno) {
//     var dados = {
//         acao: page,
//         id: id,
//     };

// o id dentro do [] foi retirado da página do painel

$foto = $Dados['inputFoto'];
$nome = $Dados['inputNome'];
$celular = $Dados['inputCelular'];
$email = $Dados['inputEmail'];
$cargo = $Dados['inputCargo'];

$alt = alterarRegistros('pessoas', 'foto, nome, celular, email, cargo, cadastro', "'$foto', '$nome', '$celular', '$email', '$cargo'", );
// ($tabela, $campos, $nomeid, $id)
if ($add === false) {
    echo 'Não foi possível cadastrar.';
} elseif ($add) {
    echo 'Editado com sucesso';
} else {

    echo 'Ocorreu um erro no banco de dados, por favor confirmar o que ocorreu.';
} 
