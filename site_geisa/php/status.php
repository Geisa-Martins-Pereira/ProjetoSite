    <!-- ======= Stats Counter Section ======= -->

    <?php

// contagem pessoas
$Listar = listarTodosRegistros('pessoas', 'COUNT(*) as contagem', 'A');

if ($Listar == 'Vazio') {
  echo '<h6 class="text-center mt-5 p-3 bg-danger text-white">Não existem registros de dados no banco.</h6>';
} else {

  foreach ($Listar as $ListarItem) {

    // contagem foi feito de count(*) as contagem porque o sistema não registra o count corretamente se colocar ele depois do -> 
    $contPessoas = $ListarItem->contagem;
  }
};

// contagem cardapio
$ListarCardapio = listarTodosRegistros('cardapio', 'COUNT(*) as contagem', 'A');

if ($ListarCardapio == 'Vazio') {
  echo '<h6 class="text-center mt-5 p-3 bg-danger text-white">Não existem registros de dados no banco.</h6>';
} else {

  foreach ($ListarCardapio as $ListarItem) {
    $contCardapio = $ListarItem->contagem;
  }
};

// contagem horas trabalhadas
$ListarHorasTrabalhadas = listarTodosRegistros('funcionarios', 'MIN(admissao) as minHora', 'A');

if ($ListarHorasTrabalhadas == 'Vazio') {
  echo '<h6 class="text-center mt-5 p-3 bg-danger text-white">Não existem registros de dados no banco.</h6>';
} else {
// var_dump($ListarHorasTrabalhadas);
  foreach ($ListarHorasTrabalhadas as $ListarItem) {
    $minHora = $ListarItem->minHora;
  }

  // strtotime significa string to time, de texto para tempo
  $intervalo = strtotime(DATATIMEATUAL) - strtotime($minHora);
  $dif = $intervalo / 60 / 60;
  // intval tranforma o que tiver na variável contHoras em um número inteiro
  $contHoras = intval($dif);
};

// contagem funcionários
$ListarFuncionarios = listarTodosRegistros('funcionarios', 'COUNT(*) as contagem', 'A');

if ($ListarFuncionarios == 'Vazio') {
  echo '<h6 class="text-center mt-5 p-3 bg-danger text-white">Não existem registros de dados no banco.</h6>';
} else {

  foreach ($ListarFuncionarios as $ListarItem) {
    $contFuncionarios = $ListarItem->contagem;
  }
};


?>

    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="zoom-out">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $contPessoas; ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clientes</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $contCardapio; ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Produtos</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $contHoras; ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Horas de Suporte</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $contFuncionarios; ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Funcionarios</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->