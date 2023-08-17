<!-- ======= Book A Table Section ======= -->

<?php
// criar uma variável e colocar o registro dela para puxar os dados do banco
$Listar = listarTodosRegistros('imgreserva', 'img', 'A');

if ($Listar == 'Vazio') {
  echo '<h6 class="text-center mt-5 p-3 bg-danger text-white">Não existem registros de dados no banco.</h6>';
} else {

   foreach ($Listar as $ListarItem) {
    $imgreserva = $ListarItem->img;

   }}
?>

<section id="book-a-table" class="book-a-table">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Reserva</h2>
      <p>Book <span>Your Stay</span> With Us</p>
    </div>

    <div class="row g-0">

      <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/<?php echo $img; ?>);" data-aos="zoom-out" data-aos-delay="200"></div>

      <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
        <form action="forms/acaoreserva.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
              <input type="text" name="nome" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="text" class="form-control" name="celular" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="text" name="data" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="text" class="form-control" name="horario" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="number" class="form-control" name="pessoas" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>


          <div class="form-group mt-3">
            <textarea class="form-control" name="mensagem" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Sua reserva foi realizada com sucesso! Logo alguém de nossa equipe estará entrando em contato!</div>
          </div>
          <div class="text-center"><button type="submit">Book a Table</button></div>
        </form>
      </div><!-- End Reservation Form -->

    </div>

  </div>
</section><!-- End Book A Table Section -->