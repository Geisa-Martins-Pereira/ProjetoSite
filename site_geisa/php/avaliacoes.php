<!--// Seção de Avaliações //-->

<?php
// criar uma variável e colocar o registro dela para puxar os dados do banco
$Listar = listarTodosRegistros('pessoas', '*', 'A');
?>
<section id="testimonials" class="testimonials section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Testimonials</h2>
      <p>What Are They <span>Saying About Us</span></p>
    </div>

    <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">
        <?php
        $total = 0;
        foreach ($Listar as $ListarItem) {
          $idpessoas = $ListarItem->idpessoas;
          $nome = $ListarItem->nome;
          $cargo = $ListarItem->cargo;
          $foto = $ListarItem->foto;

          $ListarEstrela = listarRegistroUmParametro('avaliacoes', 'descricao, nota', 'idpessoas', "$idpessoas", 'A');
          if ($ListarEstrela != 'Vazio') {
            foreach ($ListarEstrela as $itemEstrela) {
              $descricao = $itemEstrela->descricao;
              $nota = $itemEstrela->nota;
            }

        ?>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">

                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <?php echo $descricao; ?>
                        <i class="bi bi-quote quote-icon-right"></i>                        
                      </p>
                      <h3><?php echo $nome; ?></h3>
                      <h4><?php echo $cargo; ?></h4>
                      <div class="stars">
                      <?php

                      if ($nota < 5) {
                        $total = (5 - $nota);
                      }

                      for ($i = 0; $i < $nota; $i++) {
                        echo "<i class='bi bi-star-fill'></i>";
                      }
                      for ($i = 0; $i < $total; $i++) {
                        echo "<i class='bi bi-star'></i>";
                      }
                    }
                      ?>


                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2 text-center">
                    <img src="assets/img/testimonials/<?php echo $foto; ?>" class="img-fluid testimonial-img" alt="">
                  </div>
                </div>
              </div>
            </div> <!-- End testimonial item -->
          <?php

        }
      
          ?>

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Testimonials Section -->