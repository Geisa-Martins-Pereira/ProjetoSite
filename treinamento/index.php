<!doctype html>
<html lang="en">

<head>

    <!-- 1ª etapa, ir no bootstrap, ir em documentation e então procurar pelo starter que é o index deste código -->
    <!-- 2º content card e pega o card header -->
    <!-- 3º content tables qualquer que quiser -->
    <!-- 4º componentes modal vertically centered-->
    <!-- 5º components forms e pega o 1º form, mete nos 3 pontinhos -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>aAAAAAAAAAAAAAA</title>

    <!-- sweetalert2.github.io -->

    <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.23/dist/sweetalert2.min.css
" rel="stylesheet">

    <?php

    // incluir o arquivo de funções
    include_once './config/conexao.php';
    //   include_once './config/funcoes.php';
    include_once './config/constantes.php';
    // iniciar as sessions 
    include_once './func/dashboard.php';
    // faz o header funcionar

    ?>

</head>

<body>



    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Listar de Clientes <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modalAddCliente">
                    Cadastrar
                </button>
            </div>
            <div class="card-body">
        
            <div id="showpage"><?php include_once("./clientes/listarCliente.php"); ?></div>

                <div id="msgGeral"></div>

            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="modalAddCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Cadastrar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="frmAddClientes" name="frmAddClientes" action="#" method="post">
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="nomeCliente">Nome</label>
                            <input type="text" class="form-control form-control-sm" id="nomeCliente" name="nomeCliente" placeholder="Nome do cliente">
                        </div>
                        <div class="form-group">
                            <label for="telefoneCliente">Telefone</label>
                            <input type="text" class="form-control form-control-sm maskCelular" name="telefoneCliente" id="telefoneCliente" placeholder="Telefone do cliente">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary" onclick="addCliente();">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


     <!-- Modal -->
     <div class="modal fade" id="modalAtivarCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Ativar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <div class="modal-body">
                       Você tem certeza que deseja ativar?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary" id="btnAtivar">Salvar</button>
                    </div>
            </div>
        </div>
    </div>

         <!-- Modal -->
         <div class="modal fade" id="modalDesativarCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Desativar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <div class="modal-body">
                       Você tem certeza que deseja desativar?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary" id="btnDesativar">Salvar</button>
                    </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- sweetalert2.github.io -->
    <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.23/dist/sweetalert2.all.min.js
"></script>

    <!-- cdn jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js" integrity="sha512-efAcjYoYT0sXxQRtxGY37CKYmqsFVOIwMApaEbrxJr4RwqVVGw8o+Lfh/+59TU07+suZn1BWq4fDl5fdgyCNkw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script src="./js/painel.js"></script>

</body>

</html>