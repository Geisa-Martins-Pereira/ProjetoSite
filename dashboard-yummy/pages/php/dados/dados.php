<div class="card">



    <div class="card-header">
        Listar usuários
    </div>

    

    <div class="card-body">
    <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Imagem</th>
                    <th scope="col">Ativo</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
        <?php

        $Listar = listarTodosRegistros('dados', 'iddados, valor, titulo, img, ativo', 'A');

        if ($Listar == 'Vazio') {
            echo '<h6 class="text-center mt-5 p-3 bg-danger text-white">Não existem registros de dados no banco.</h6>';
        } else { 

            foreach ($Listar as $ListarItem) {
                $id = $ListarItem->iddados;
                $valor = $ListarItem->valor;
                $titulo = $ListarItem->titulo;
                $img = $ListarItem->img;
                $ativo = $ListarItem->ativo;
                

        ?>
        
            
                <tr>
                    <th scope="row"><?php echo $id; ?></th>
                    <td><?php echo $valor; ?></td>
                    <td><?php echo $titulo; ?></td>
                    <td><?php echo $img; ?></td>
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
      }}

      ?>
                <tr>
                    <th scope="row">2</th>
                    <td>Jujuba</td>
                    <td>Tortão</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>pao</td>
                    <td>the Birb</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>