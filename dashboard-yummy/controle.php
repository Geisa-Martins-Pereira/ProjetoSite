<?php

include_once './config/conexao.php';
include_once './config/funcoes.php';
include_once './config/constantes.php';

$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);
switch ($acao) {

    case 'clientes':
        include_once 'pages/php/pessoas/clientes.php';
        break;

    case 'funcionarios':
        include_once 'pages/php/equipe/funcionarios.php';
        break;

    case 'menu':
        include_once 'pages/php/cardapio/menu.php';
        break;

    case 'cardapio':
        include_once 'pages/php/cardapio/cardapio.php';
        break;

    case 'tipodefestas':
        include_once 'pages/php/tipodefestas/tipodefestas.php';
        break;

    case 'redessociais':
        include_once 'pages/php/equipe/redessociais.php';
        break;

    case 'descricao':
        include_once 'pages/php/equipe/descricao.php';
        break;

    case 'galeria':
        include_once 'pages/php/galeria/galeria.php';
        break;

    case 'dados':
        include_once 'pages/php/dados/dados.php';
        break;

    case 'mapas':
        include_once 'pages/php/mapas/mapas.php';
        break;

    case 'reserva':
        include_once 'pages/php/reserva/reserva.php';
        break;

    case 'exprod':
        include_once 'pages/php/exprod.php';
        break;

    case 'addprod':
        include_once 'pages/php/addprod.php';
        break;

    case 'verDadosAltClientes':
        include_once 'pages/php/pessoas/verDadosAltClientes.php';
        break;

        case 'treinamento':
            include_once 'pages/php/pessoas/treinamento.php';
            break;
}
