<!--// Seção porque nós  //-->

<?php
// criar uma variável e colocar o registro dela para puxar os dados do banco
$Listar = listarTodosRegistros('pqnos', '*', 'A');



if ($Listar == 'Vazio') {
  echo '<h6 class="text-center mt-5 p-3 bg-danger text-white">Não existem registros de dados no banco.</h6>';
} else {

  foreach ($Listar as $ListarItem) {

    // se o icone estiver vazio ele continua nos dados abaixo

    $icone = $ListarItem->icone;
    if ($icone == '') {
      $titulo = $ListarItem->titulo;
      $descricao = $ListarItem->descricao;
      $ativo = $ListarItem->ativo;
    }
  }
};


//   if ($sqlLista->rowCount() > 0) {
//     return $sqlLista->fetchAll(PDO::FETCH_OBJ);
// } else {
//     return 'Vazio';
// };



// para poder testar se o banco tá em funcionamento
// print_r($Listar);

// para cada item da lista $Listar vai entrar em uma variavel diferente, vair criar uma variável diferente em cada um, sendo pego do $ListarItem




?>

<section id="why-us" class="why-us section-bg">
  <div class="container" data-aos="fade-up">

    <div class="row gy-4">

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="why-box">
          <h3><?php echo $titulo; ?></h3>
          <p><?php echo $descricao; ?>
          </p>
          <div class="text-center">
            <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
      </div><!-- End Why Box -->

      

            <div class="col-lg-8 d-flex align-items-center">
              <div class="row gy-4">

              <?php
      if ($Listar == 'Vazio') {
        echo 'Não existem registros de dados no banco.';
      } else {

        foreach ($Listar as $ListarItem) {
          // se icone for diferente de vazio ele deverá mostrar os outros dados da mesma forma 
          $icone = $ListarItem->icone;
          if ($icone != '') {
            $titulo = $ListarItem->titulo;
            $descricao = $ListarItem->descricao;
            $ativo = $ListarItem->ativo;

      ?>

                <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                  <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                    <i class="<?php echo $icone; ?>"></i>
                    <h4><?php echo $titulo; ?></h4>
                    <p><?php echo $descricao; ?></p>
                  </div>
                </div><!-- End Icon Box -->

          <?php
          }
        }
      };

          ?>


              </div>
            </div>

    </div>

  </div>
</section><!-- End Why Us Section -->