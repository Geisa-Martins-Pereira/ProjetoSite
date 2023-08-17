<!--// Seção Sobre  //-->
<?php
// criar uma variável e colocar o registro dela para puxar os dados do banco
$Listar = listarTodosRegistros('sobrenos', '*', 'A');


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
    $titulo = $ListarItem->titulo;
    $img = $ListarItem->img;
    $imgcontato = $ListarItem->imgcontato;
    $descricao = $ListarItem->descricao;
    $video = $ListarItem->video;
    $cadastro = $ListarItem->cadastro;
    $alteracao = $ListarItem->alteracao;
    $ativo = $ListarItem->ativo;
    $contato = $ListarItem->contato;
    $msgcontato = $ListarItem->msgcontato;
  }
};


?>

<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>About Us</h2>
      <p>Learn More <span>About Us</span></p>
    </div>

    <div class="row gy-4">
      <div class="col-lg-7 position-relative about-img" style="background-image: url(<?php echo $imgcontato ?>) ;" data-aos="fade-up" data-aos-delay="150">
        <div class="call-us position-absolute">
          <h4><?php echo $msgcontato; ?></h4>
          <p><?php echo $contato; ?></p>
        </div>
      </div>
      <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
        <div class="content ps-0 ps-lg-5">
          <p class="fst-italic">
          <?php echo $descricao; ?>
          </p>

          <div class="position-relative mt-4">
            <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
            <a href="<?php echo $video; ?>" class="glightbox play-btn"></a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<!--// Fim da Seção Sobre //-->