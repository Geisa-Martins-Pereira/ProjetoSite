<?php

$Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$inputTitulo = $Dados ['inputTitulo'];
$inputImagem = $Dados ['inputImagem'];
$inputPreco = $Dados ['inputPreco'];
$inputDescricao = $Dados ['inputDescricao'];

echo 'cadastrado com sucesso"';

?>