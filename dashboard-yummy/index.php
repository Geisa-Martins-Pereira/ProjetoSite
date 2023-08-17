<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Nhom nhom</title>

  <!-- eliminar os botão
colocar o banco de dados conectado ao sistema com a parte dos usuários
index passar pra pt
coolocaar o q a gente quiser nas informações
corta o site e separa no index novamente
manda os include tlgd
não eliminar o widget pq ele n tem drop down
eliminar oqq repete e passar pro próximo
limpar a parte de dentro -->

  <!-- fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  
  <!-- Icones -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

  <!-- CSS -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">


  <?php

  // incluir o arquivo de funções
  include_once './config/conexao.php';
  include_once './config/funcoes.php';
  include_once './config/constantes.php';
  // iniciar as sessions 
  session_start();

  // faz o header funcionar
  ob_start();

  ?>

</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

  <!-- Menu top -->    
<?php 

include_once 'pages/php/menutop.php';
include_once 'pages/php/menulado.php';

?>
<!-- Menu topo -->

    
   
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard Principal</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard Principal</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      

      <!-- Main content -->
      <div class="content">
        
        <div class="container-fluid">

        <div class="conteudo" id="conteudo"></div>
        <input type="text" id="conteudo">
        <input type="text" id="conteudo2">

        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE -->
  <script src="dist/js/adminlte.js"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard3.js"></script>

  <script src="js/painel.js"></script>
</body>

</html>