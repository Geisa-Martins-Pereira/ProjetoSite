<!-- ======= Chefs Section ======= -->

<!-- utilizamos o inner join para que mostre apenas o que estamos procurando daquelas tabelas (tipo, exite um id igual em ambas as tabelas) -->

<?php
$Listar = listarRegistrosJoin2('pessoas.nome, pessoas.foto, pessoas.cargo, funcionarios.idfuncionarios, equipe.descricao', 'pessoas', 'INNER', 'funcionarios', 'idpessoas', 'INNER', 'equipe', 'idfuncionarios', 'A');
?>

<section id="chefs" class="chefs section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Chefs</h2>
      <p>Our <span>Proffesional</span> Chefs</p>
    </div>

    <div class="row gy-4">

      <?php

      // var_dump($listar); - mostra o que tiver dentro daquela variável

      if ($Listar == 'Vazio') {
        echo '<h6 class="text-center mt-5 p-3 bg-danger text-white">Não existe registros no banco!</h6>';
      } else {

        // vai aumentando o delay de 100 em 100, o que significa que no visual do site os cards vão se mostrando em ordem lentamente 
        $delay = 1;
        // var_dump($Listar);
        foreach ($Listar as $ListarItem) {
          $idfuncionarios = $ListarItem->idfuncionarios;
          $nome = $ListarItem->nome;
          $cargo = $ListarItem->cargo;
          $descricao = $ListarItem->descricao;
          $foto = $ListarItem->foto;

      ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>00">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/<?php echo $foto; ?>.jpg" class="img-fluid" alt="">
                <div class="social">

                  <?php

                  $ListarRedes = listarRegistroUmParametro('redessociais', 'nomerede, link', 'idfuncionarios', $idfuncionarios, 'A');
                  // var_dump($ListarRedes);
                  if ($ListarRedes == 'Vazio') {
                    echo '<h6 class="text-center mt-5 p-3 bg-danger text-white">Não existe registros no banco!</h6>';
                  } else {
                    foreach ($ListarRedes as $itemListaRedes) {
                      $link = $itemListaRedes->link;
                      $nomerede = $itemListaRedes->nomerede;
                      if ($link != '') {

                  ?>

                        <a href="<?php echo $link; ?>" target="blank"><i class="bi bi-<?php echo $nomerede; ?>"></i></a>


                  <?php
                      }
                    }
                  }
                  ?>
                </div>
              </div>
              <div class="member-info">
                <h4><?php echo $nome; ?></h4>
                <span><?php echo $cargo; ?></span>
                <p><?php echo $descricao; ?></p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

      <?php

          $delay++;
        }
      }

      ?>

    </div>

  </div>
</section><!-- End Chefs Section -->