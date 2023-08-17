<div class="card">



    <div class="card-header">
        Listar usuários
    </div>

    <div class="row">
        <div class="col-12">
            <td class="text-right">
                <div class="btn-group btn-group-sm" role="group" aria-label="Button group">
                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#ClientesAddModal" data-mdb-ripple-color="dark">Cadastrar</button>
                </div>
            </td>
        </div>
    </div>

    <div class="card-body">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">IMG</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Email</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Ativo</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $Listar = listarTodosRegistros('pessoas', 'idpessoas, foto, nome, celular, email, ativo, cargo', 'A');

                if ($Listar == 'Vazio') {
                    echo '<h6 class="text-center mt-5 p-3 bg-danger text-white">Não existem registros de dados no banco.</h6>';
                } else {

                    foreach ($Listar as $ListarItem) {
                        $id = $ListarItem->idpessoas;
                        $foto = $ListarItem->foto;
                        $nome = $ListarItem->nome;
                        $celular = $ListarItem->celular;
                        $email = $ListarItem->email;
                        $cargo = $ListarItem->cargo;
                        $ativo = $ListarItem->ativo;


                ?>


                        <tr>
                            <th scope="row"><?php echo $id; ?></th>
                            <td><?php echo $foto; ?></td>
                            <td><?php echo $nome; ?></td>
                            <td><?php echo $celular; ?></td>
                            <td><?php echo $email; ?></td>
                            <td><?php echo $cargo; ?></td>
                            <td><?php echo $ativo; ?></td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Button group">
                                    <button type="button" class="btn btn-outline-success" data-mdb-ripple-color="dark">Ativar</button>
                                    <button type="button" class="btn btn-outline-warning" data-mdb-ripple-color="dark" data-toggle="modal" data-target="#ClientesAltModal" data-whatever="<?php echo $id; ?>">Editar</button>

                                    <!-- na parte de utilizar o atributo criado por nós anteriormente, o onclick colocamos ele e então a função criada para excluir e fazer a ação no botão, neste caso colocamos onclick="exGeral(<?php echo $id; ?>, 'exprod', 'clientes'), coloca o id dentro do echo, e o nome das páginas respectivas nos painel  -->
                                    <button type="button" class="btn btn-outline-danger" data-mdb-ripple-color="dark" onclick="exGeral(<?php echo $id; ?>, 'exprod', 'clientes');">Excluir</button>

                                </div>
                            </td>
                        </tr>
                <?php
                    }
                }

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

<!-- Modal Adicionar Dados -->
<div class="modal fade" id="ClientesAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="exampleModalLongTitle">Cadastrar dados</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="formClientes" id="formClientes" action="#">
                    <div class="form-group">
                        <label for="inputFoto">Foto</label>
                        <input name="inputFoto" type="text" class="form-control" id="inputFoto" placeholder="Ex.: imagem.png">
                    </div>
                    <div class="form-group">
                        <label for="inputNome">Nome</label>
                        <input name="inputNome" type="text" class="form-control" id="inputNome" placeholder="Ex.: Maria João">
                    </div>
                    <div class="form-group">
                        <label for="inputCelular">Celular</label>
                        <input name="inputCelular" type="text" class="form-control" id="inputCelular" placeholder="Ex.: (01) 9 2345-6789">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input name="inputEmail" type="text" class="form-control" id="inputEmail" placeholder="Ex.: email@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="inputCargo">Cargo</label>
                        <input name="inputCargo" type="text" class="form-control" id="inputCargo" placeholder="Ex.: Programador Júnior">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary" onclick="AddGeral('formClientes', 'ClientesModalCenter', 'addprod', 'clientes');">Cadastrar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Modal Alterar Dados -->
<div class="modal fade" id="ClientesAltModal" tabindex="-1" role="dialog" aria-labelledby="ClientesAltModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="exampleModalLabel">Alterar dados</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="formAltClientes" id="formAltClientes" action="#">
                    <div class="form-group">
                        <label for="inputFoto">Foto</label>
                        <input name="inputFoto" type="text" class="form-control" id="inputFoto">
                    </div>
                    <div class="form-group">
                        <label for="inputNome">Nome</label>
                        <input name="inputNome" type="text" class="form-control" id="inputNome">
                    </div>
                    <div class="form-group">
                        <label for="inputCelular">Celular</label>
                        <input name="inputCelular" type="text" class="form-control" id="inputCelular">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input name="inputEmail" type="text" class="form-control" id="inputEmail">
                    </div>
                    <div class="form-group">
                        <label for="inputCargo">Cargo</label>
                        <input name="inputCargo" type="text" class="form-control" id="inputCargo">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
</div>


<script>
    $('#ClientesAltModal').on('shown.bs.modal', function(event) {
        $('input#inputFoto').trigger('focus');

        // btnSalvarClientes é uma variável para pegar todos os elementos que existem no botão de editar

        var btnSalvarClientes = $(event.relatedTarget);
        var id = btnSalvarClientes.data('whatever');

        var dados = {
            acao: 'verDadosAltClientes',
            id: id,
        };

        $.ajax({
            type: "POST",
            dataType: 'JSON',
            url: 'controle.php',
            data: dados,
            beforeSend: function() {

            },
            success: function(retorno) {
                if (retorno == 'Erro') {
                    alert('Deu erro cara');

                } else {
                    // primeiro o retorno é o que virá da página verDadosAltClientes, o X é retirado do verDadosAltClientes tbm, onde o valor dele é setado em 0 porque ele é um array, o foto é o nome da coluna no banco de dados  
                    $('input#inputFoto').val(retorno.dados[0].foto);
                    $('input#inputNome').val(retorno.dados[0].nome);
                    $('input#inputCelular').val(retorno.dados[0].celular);
                    $('input#inputEmail').val(retorno.dados[0].email);
                    $('input#inputCargo').val(retorno.dados[0].cargo);

                    console.log(retorno);
                }


            }
        });
    })
</script>