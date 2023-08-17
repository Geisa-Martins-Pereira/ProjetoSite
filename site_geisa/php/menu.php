<!-- ======= Menu Section ======= -->


<section id="menu" class="menu">

  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Our Menu</h2>
    </div>

    <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

      <?php

      $Listar = listarTodosRegistros('menucardapio', '*', 'A');

      if ($Listar == 'Vazio') {
        echo '<h6 class="text-center mt-5 p-3 bg-danger text-white">Não existem registros de dados no banco.</h6>';
      } else {

        // necessário colocar o conta para que o active show funcione normalmente sem que todos estejam selecionados
        $conta = 0;

        // para poder testar se o banco tá em funcionamento
        // print_r($Listar);

        // para cada item da lista $Listar vai entrar em uma variavel diferente, vair criar uma variável diferente em cada um, sendo pego do $ListarItem
        foreach ($Listar as $ListarItem) {
          $idmenucardapio = $ListarItem->idmenucardapio;
          $categoria = $ListarItem->categoria;
          $cadastro = $ListarItem->cadastro;
          $alteracao = $ListarItem->alteracao;
          $ativo = $ListarItem->ativo;

      ?>

          <li class="nav-item">
            <a class="nav-link <?php if ($conta = 0) { ?> active show <?php } ?>" data-bs-toggle="tab" data-bs-target="#menu-<?php echo $categoria; ?>">
              <h4>
                <?php echo $categoria; ?>
              </h4>
            </a>
          </li><!-- End tab nav item -->

      <?php
          $conta++;
        }
      }
      ?>

    </ul>

    <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

      <?php

      // repetiu o foreach porque o menu é chamado novamento com outro nome para poder evitar mostrar o último da lista do 1º menu
      if ($Listar == 'Vazio') {
        echo '<h6 class="text-center mt-5 p-3 bg-danger text-white">Não existem registros de dados no banco.</h6>';
      } else {
        $conta = 0;
        foreach ($Listar as $ListarItem) {
          $idmenu = $ListarItem->idmenucardapio;
          $categoria2 = $ListarItem->categoria;
          $cadastro = $ListarItem->cadastro;
          $alteracao = $ListarItem->alteracao;
          $ativo = $ListarItem->ativo;

      ?>

          <div class="tab-pane fade <?php if ($conta == 0) { ?>active show<?php } ?>" id="menu-<?php echo $categoria2; ?>">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3><?php echo $categoria2; ?></h3>
            </div>

            <div class="row gy-5">

              <?php


              // eu tenho o $idmenu porque criei ele no código pra receber a coluna do banco de dados, enquanto o idmenucardapio será chamado da tabela, ambos terão o mesmo valor, estou chamando os registros da tabela de cardapio onde a coluna idmenucardapio é igual ao valor da variável idmenu

              $Listarb = listarRegistroUmParametro('cardapio', 'img, titulo, descricao, preco', 'idmenucardapio', $idmenu, 'A');
              if ($Listarb == 'Vazio') {
                echo '<h6 class="text-center mt-5 p-3 bg-danger text-white">Não existem registros de dados no banco.</h6>';
              } else {

                $conta = 0;

                foreach ($Listarb as $ListarItemb) {
                  $img = $ListarItemb->img;
                  $titulo = $ListarItemb->titulo;
                  $descricao = $ListarItemb->descricao;
                  $preco = $ListarItemb->preco;

              ?>

                  <div class="col-lg-4 menu-item">
                    <a href="<?php echo $img; ?>" class="glightbox"><img src="<?php echo $img; ?>" class="menu-img img-fluid" alt=""></a>
                    <h4><?php echo $titulo; ?></h4>
                    <p class="ingredients">
                      <?php echo $descricao; ?>
                    </p>
                    <p class="price">
                      <?php echo $preco; ?>
                    </p>
                  </div><!-- Menu Item -->

              <?php
                }
              }
              ?>

            </div>
          </div><!-- End Starter Menu Content -->

      <?php

          $conta++;
        }
      };

      ?>

    </div>

  </div>
</section><!-- End Menu Section -->