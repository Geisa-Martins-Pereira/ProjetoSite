<?php



include_once './config/constantes.php';
include_once './config/conexao.php';
include_once './func/dashboard.php';

// array pega todos os dados agrupados, ex, telefone, nome, email e etc
$retornoListaCliente = listarGeral("idcliente, nome, telefone, ativo", "cliente");
if ($retornoListaCliente != 'Vazio') {


?>

<table class="table table-hover">
                    <thead>
                        <tr class="bg-danger text-white">
                            <th scope="col" width="25%">#</th>
                            <th scope="col" width="25%">Nome</th>
                            <th scope="col" width="25%">Telefone</th>
                            <th scope="col" width="25%">Ações</th>
                        </tr>
                    </thead>
                    <tbody>

<?php

foreach ($retornoListaCliente as $itemListaCLiente){
    $idcliente = $itemListaCLiente->idcliente;
    $nome = $itemListaCLiente->nome;
    $telefone = $itemListaCLiente->telefone;
    $ativo = $itemListaCLiente->ativo;

?>
                        <tr>
                            <th scope="row"><?php echo $idcliente; ?></th>
                            <td><?php echo $nome; ?></td>
                            <td><?php echo $telefone; ?></td>
                            <td><div class="btn-group btn-group-sm" role="group" aria-label="Button group">

                            <?php
                            if($ativo === 'A'){
                            ?>
                                    <button type='button' data-toggle='modal' class='btn btn-outline-success' data-mdb-ripple-color='dark' data-target='#modalDesativarCliente' onclick="ativarGeral(<?php echo $idcliente; ?>, 'desativar', 'btnDesativar', 'ativarCliente', 'modalDesativarCliente');"><span class="mdi mdi-lock-open-check"></span>Desativar</button>
                                    <?php
                            } else {
                                    ?>
                                    <button type='button' data-toggle='modal' class='btn btn-outline-success' data-mdb-ripple-color='dark' data-target='#modalAtivarCliente' onclick="ativarGeral(<?php echo $idcliente; ?>, 'ativar', 'btnAtivar', 'ativarCliente', 'modalAtivarCliente');"><span class="mdi mdi-lock-open-check"></span>Ativar</button>

                                    <?php
                            }
                                    ?>

                                    <button type="button" class="btn btn-outline-warning" data-mdb-ripple-color="dark" data-toggle="modal" data-target="#ClientesAltModal" data-whatever="<?php echo $id; ?>">Editar</button>
                                    <button type="button" class="btn btn-outline-danger" data-mdb-ripple-color="dark" onclick="exGeral(<?php echo $id; ?>, 'exprod', 'clientes');">Excluir</button>

                                </div></td>
                        </tr>
                        <?php
}
}
                ?>
                    </tbody>
                </table>

