<div class="card">



    <div class="card-header">
        Listar eventos
    </div>

    <div class="row">
        <div class="col-12">
            <td class="text-right">
                <div class="btn-group btn-group-sm" role="group" aria-label="Button group">
                    <button type="button" id="onClick" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModalCenter" data-mdb-ripple-color="dark">Cadastrar</button>
                </div>
            </td>
        </div>
    </div>

    <div class="card-body">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Imagem</th>
                    <th scope="col">Preco</th>
                    <th scope="col">Descricao</th>
                    <th scope="col">Ativo</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>


                <?php

                $Listar = listarTodosRegistros('eventos', 'ideventos, titulo, img, preco, descricao, ativo', 'A');

                if ($Listar == 'Vazio') {
                    echo '<h6 class="text-center mt-5 p-3 bg-danger text-white">Não existem registros de dados no banco.</h6>';
                } else {

                    foreach ($Listar as $ListarItem) {
                        $id = $ListarItem->ideventos;
                        $titulo = $ListarItem->titulo;
                        $img = $ListarItem->img;
                        $preco = $ListarItem->preco;
                        $descricao = $ListarItem->descricao;
                        $ativo = $ListarItem->ativo;


                ?>


                        <tr>
                            <th scope="row"><?php echo $id; ?></th>
                            <td><?php echo $titulo; ?></td>
                            <td><?php echo $img; ?></td>
                            <td><?php echo $preco; ?></td>
                            <td><?php echo $descricao; ?></td>
                            <td><?php echo $ativo; ?></td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Button group">
                                    <button type="button" class="btn btn-outline-success" data-mdb-ripple-color="dark">Ver++</button>
                                    <button type="button" class="btn btn-outline-warning" data-mdb-ripple-color="dark">Editar</button>
                                    <button type="button" class="btn btn-outline-danger" data-mdb-ripple-color="dark">Excluir</button>

                                </div>
                            </td>
                        </tr>
                <?php
                    }
                }

                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="formEventos" id="formEventos" method="post" action="#">
                    <div class="form-group">
                        <label for="inputTitulo">Titulo</label>
                        <input name="inputTitulo" type="text" class="form-control" id="inputTitulo" placeholder="Ex.: Festa premium">
                    </div>
                    <div class="form-group">
                        <label for="inputImagem">Imagem</label>
                        <input name="inputImagem"  type="text" class="form-control" id="inputImagem" placeholder="Ex.: img.jpg">
                    </div>
                    <div class="form-group">
                        <label for="inputPreco">Preco</label>
                        <input name="inputPreco"  type="text" class="form-control" id="inputPreco" placeholder="Ex.: R$99,99">
                    </div>
                    <div class="form-group">
                        <label for="inputDescricao">Descricao</label>
                        <input name="inputDescricao"  type="text" class="form-control" id="inputDescricao" placeholder="Ex.: Festa de aniversário.">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" onclick="cadNos">Save changes</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>