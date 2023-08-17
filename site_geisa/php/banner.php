  <!--// Seção Hero  //-->
  <?php
  // criar uma variável e colocar o registro dela para puxar os dados do banco
  $Listar = listarTodosRegistros('banner', 'img, titulo, descricao, video, cadastro, alteracao, ativo', 'A');


  //   if ($sqlLista->rowCount() > 0) {
  //     return $sqlLista->fetchAll(PDO::FETCH_OBJ);
  // } else {
  //     return 'Vazio';
  // };

  if ($Listar == 'Vazio') {
    echo '<h6 class="text-center mt-5 p-3 bg-danger text-white">Não existem registros de dados no banco.</h6>';
  } else {

    // para poder testar se o banco tá em funcionamento
    // print_r($Listar);

    // para cada item da lista $Listar vai entrar em uma variavel diferente, vair criar uma variável diferente em cada um, sendo pego do $ListarItem
    foreach ($Listar as $ListarItem) {
      $img = $ListarItem->img;
      $titulo = $ListarItem->titulo;
      $descricao = $ListarItem->descricao;
      $video = $ListarItem->video;
      $cadastro = $ListarItem->cadastro;
      $alteracao = $ListarItem->alteracao;
      $ativo = $ListarItem->ativo;
    }
  };


  ?>

  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up"><?php echo $titulo; ?></h2>
          <p data-aos="fade-up" data-aos-delay="100"><?php echo $descricao; ?></p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#book-a-table" class="btn-book-a-table">Reserve uma mesa</a>
            <a href="<?php echo $video; ?>" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Veja o
                Vídeo</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="<?php echo $img; ?>" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- Fim da Seção Hero -->

