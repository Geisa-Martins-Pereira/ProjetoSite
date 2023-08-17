<div class="card">



    <div class="card-header">
        Listar Cardápio
    </div>

    

    <div class="card-body">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">#idmenucardapio</th>
                    <th scope="col">Imagem</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Ativo</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $Listar = listarTodosRegistros('cardapio', 'idcardapio, img, titulo, descricao, preco, idmenucardapio, ativo', 'A');

                if ($Listar == 'Vazio') {
                    echo '<h6 class="text-center mt-5 p-3 bg-danger text-white">Não existem registros de dados no banco.</h6>';
                } else {

                    foreach ($Listar as $ListarItem) {

                        $id = $ListarItem->idcardapio;
                        $idmenucardapio = $ListarItem->idmenucardapio;
                        $img = $ListarItem->img;
                        $titulo = $ListarItem->titulo;
                        $descricao = $ListarItem->descricao;
                        $preco = $ListarItem->preco;
                        $ativo = $ListarItem->ativo;

                ?>


                        <tr>
                            <th scope="row"><?php echo $id; ?></th>
                            <td><?php echo $idmenucardapio; ?></td>
                            <td><?php echo $img; ?></td>
                            <td><?php echo $titulo; ?></td>
                            <td><?php echo $descricao; ?></td>
                            <td><?php echo $preco; ?></td>
                            <td><?php echo $ativo; ?></td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Button group">
                                    <button type="button" class="btn btn-outline-success" data-mdb-ripple-color="dark">Ativar</button>
                                    <button type="button" class="btn btn-outline-warning" data-mdb-ripple-color="dark">Editar</button>
                                    <button type="button" class="btn btn-outline-danger" data-mdb-ripple-color="dark">Excluir</button>

                                </div>
                            </td>
                        </tr>
                <?php
                    }
                }

                ?>
                </tr>
            </tbody>
        </table>
    </div>
</div>