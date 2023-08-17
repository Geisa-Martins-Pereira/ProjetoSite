 <!-- ======= Events Section ======= -->

 <?php
  // criar uma variável e colocar o registro dela para puxar os dados do banco
  $Listar = listarTodosRegistros('eventos', '*', 'A');


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


  ?>

   <section id="events" class="events">
     <div class="container-fluid" data-aos="fade-up">

       <div class="section-header">
         <h2>Events</h2>
         <p>Share <span>Your Moments</span> In Our Restaurant</p>
       </div>

       <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
         <div class="swiper-wrapper">

           <?php
            foreach ($Listar as $ListarItem) {
              $titulo = $ListarItem->titulo;
              $img = $ListarItem->img;
              $preco = $ListarItem->preco;
              $descricao = $ListarItem->descricao;
              $cadastro = $ListarItem->cadastro;
              $alteracao = $ListarItem->alteracao;
              $ativo = $ListarItem->ativo;
            ?>

             <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/<?php echo $img; ?>)">
               <h3><?php echo $titulo; ?></h3>
               <div class="price align-self-start"><?php echo $preco; ?></div>
               <p class="description">
                 <?php echo $descricao; ?>
               </p>
             </div><!-- End Event item -->
         <?php
            }
          };
          ?>
         </div>
         <div class="swiper-pagination"></div>
       </div>

     </div>
   </section><!-- End Events Section -->