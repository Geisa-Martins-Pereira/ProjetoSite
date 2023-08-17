<!-- ======= Seção Contatenos ======= -->

<?php

$Listar = listarTodosRegistros('mapacontatenos', '*', 'A');

if ($Listar == 'Vazio') {
  echo '<h6 class="text-center mt-5 p-3 bg-danger text-white">Não existem registros de dados no banco.</h6>';
} else {

  foreach ($Listar as $ListarItem) {
    $idmapacontatenos = $ListarItem->idmapacontatenos;
    $mapa = $ListarItem->mapa;
    $cadastro = $ListarItem->cadastro;
    $alteracao = $ListarItem->alteracao;
    $ativo = $ListarItem->ativo;
  }
};


?>

<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Contact</h2>
      <p>Need Help? <span>Contact Us</span></p>
    </div>

    <div class="mb-3">
      <?php echo $mapa; ?>
    </div><!-- End Google Maps -->


    <div class="row gy-4">

      <?php
      $Listarb = listarRegistroUmParametro('contatenos', 'titulo, descricao, icone, cadastro, alteracao, ativo', 'idmapacontatenos', $idmapacontatenos, 'A');


      foreach ($Listarb as $ListarItemb) {
        $titulo = $ListarItemb->titulo;
        $icone = $ListarItemb->icone;
        $descricao = $ListarItemb->descricao;
        $cadastro = $ListarItemb->cadastro;
        $alteracao = $ListarItemb->alteracao;
        $ativo = $ListarItemb->ativo;

      ?>

        <div class="col-md-6">
          <div class="info-item  d-flex align-items-center">
            <i class="icon bi bi-<?php echo $icone; ?> flex-shrink-0"></i>
            <div>
              <h3><?php echo $titulo; ?></h3>
              <p><?php echo $descricao; ?></p>
            </div>
          </div>
        </div><!-- End Info Item -->

      <?php
      }

      ?>

    </div>



    <form action="forms/acaocontato.php" method="post" role="form" class="php-email-form p-3 p-md-4">
      <div class="row">
        <div class="col-xl-6 form-group">
          <input type="text" name="nome" class="form-control" id="name" placeholder="Your Name" required>
        </div>
        <div class="col-xl-6 form-group">
          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
        </div>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="assunto" id="subject" placeholder="Subject" required>
      </div>
      <div class="form-group">
        <textarea class="form-control" name="mensagem" rows="5" placeholder="Message" required></textarea>
      </div>
      <div class="my-3">
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your message has been sent. Thank you!</div>
      </div>
      <div class="text-center"><button type="submit">Send Message</button></div>
    </form>
    <!--End Contact Form -->

  </div>
</section><!-- End Contact Section -->