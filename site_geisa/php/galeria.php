 <!-- ======= Gallery Section ======= -->

 <?php
// criar uma variável e colocar o registro dela para puxar os dados do banco
$Listar = listarTodosRegistros('galeria', '*', 'A');


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
    $cadastro = $ListarItem->cadastro;
    $alteracao = $ListarItem->alteracao;
    $ativo = $ListarItem->ativo;

  }
};


?>

 <section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>gallery</h2>
          <p>Check <span>Our Gallery</span></p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="assets/img/gallery/gallery-1.jpg"><img src="assets/img/gallery/gallery-1.jpg" class="img-fluid"
                  alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="assets/img/gallery/gallery-2.jpg"><img src="assets/img/gallery/gallery-2.jpg" class="img-fluid"
                  alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="assets/img/gallery/gallery-3.jpg"><img src="assets/img/gallery/gallery-3.jpg" class="img-fluid"
                  alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="assets/img/gallery/gallery-4.jpg"><img src="assets/img/gallery/gallery-4.jpg" class="img-fluid"
                  alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="assets/img/gallery/gallery-5.jpg"><img src="assets/img/gallery/gallery-5.jpg" class="img-fluid"
                  alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="assets/img/gallery/gallery-6.jpg"><img src="assets/img/gallery/gallery-6.jpg" class="img-fluid"
                  alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="assets/img/gallery/gallery-7.jpg"><img src="assets/img/gallery/gallery-7.jpg" class="img-fluid"
                  alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="assets/img/gallery/gallery-8.jpg"><img src="assets/img/gallery/gallery-8.jpg" class="img-fluid"
                  alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->