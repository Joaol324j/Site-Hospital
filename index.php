<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adília Maria</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>

  <?php

  $info1 = array('nome'=>'Acreditação JCI', 'desc'=> 'Melhor Cuidado e <br> Segurança <br> com a Acreditação <br> JCI', 'img'=>'imagens/Imagem_03.jpg');
  $info2 = array('nome'=>'Melhor Serviço', 'desc'=> 'Providência um <br> Excelente <br> Tratamento para <br> seus pacientes', 'img'=>'imagens/Imagem_04.jpg');
  $info3 = array('nome'=>'Acessível', 'desc'=> 'Oferece <br> Tratamento de <br> Graça  para a <br> População', 'img'=>'imagens/Imagem_05.jpg');
  $info4 = array('nome'=>'Boas Instalações', 'desc'=> 'Instalações Adequadas <br> de boa qualidade <br> para Realizar nossos <br> Serviços', 'img'=>'imagens/Imagem_06.jpg');

  $infos = array($info1, $info2, $info3, $info4);

  $espe1 = array('nome'=>'Laborátorio de Patologia', 'img'=>'imagens/Imagem_07.jpg');
  $espe2 = array('nome'=>'Ginecologia e Obstetrícia', 'img'=>'imagens/Imagem_08.jpg');
  $espe3 = array('nome'=>'Laborátorio de Patologia', 'img'=>'imagens/Imagem_09.jpg');

  $espes = array($espe1, $espe2, $espe3);

  $consult1 = array('img'=>'imagens/Imagem_10.jpg');
  $consult2 = array('img'=>'imagens/Imagem_11.jpg');
  $consult3 = array('img'=>'imagens/Imagem_12.jpg');
  $consult4 = array('img'=>'imagens/Imagem_13.jpg');

  $consults = array($consult1, $consult2, $consult3, $consult4);

?>

  <section>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <img src="imagens/Logo.png" alt="Logo" width="100" height="100" class="d-inline-block align-text-top">
          <a class="navbar-brand" href="#">Adília <br> Maria</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#inicio">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#sobre">Sobre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#especialidade">Especialidade</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#contato">Contato</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  </section>

  <section id="inicio">
      <div class="introducao">
        <img src="imagens/Imagem_01.jpg">
        <h1>Um Hospital <br> de Confiança! <br> Com uma Reputação de <br> Exelência.</h1>
        <p class="paragrafo1">A casa de saúde Adília Maria <br> prioriza o cuidado e segurança de <br> seus pacientes.</p>
        <div class="consulta">
          <a href="https://docs.google.com/forms/d/e/1FAIpQLSe0GbwNAW-ZaTfjd_UygU-7ZU089yJv10NtDOyhSX8gq1kRJg/viewform?usp=sf_link"><button type="button" class="btn">Marque uma Consulta!</button></a>
        </div>
      </div>
    </section>

    <section id="sobre">
      <div class="sobre">
        <img src="imagens/Imagem_02.jpg">
        <h2>Quem Somos?</h2>
        <p>Somos Um Hospital e Casa de Saúde, <br> no Sertão do Ceará, <br> na Cidade de Boa Viagem. <br> Priorizamos o Cuidado e a Segurança <br> de Nossos Pacientes.</p>
        <h2>Objetivo</h2>
        <p>Proporcionar atendimento <br> humanizado e de excelência em saúde, <br> promovendo a qualidade de vida e a <br> geração expectativa de vida e <br> promovendo o bem estar físico, psíquico <br> e social do ser humano com profissionais <br> qualificados e tecnologia atualizada, <br> buscando atingir a excelência no <br> atendimento.</p>
      </div>
    </section>

    <section>
      <div class="container text-center grid_style">
        <h3>Informações</h3>
        <div class="row">
          <?php
          for ($i = 0; $i < count($infos); $i++) {
            $info = $infos[$i];
          ?>
            <div class="col-sm-3">
              <div class="card" style="width: 18rem;">
                <?php
                echo '<img src="' . $info['img'] . '" class="card-img-top" alt="...">';
                ?>
                <div class="card-body">
                  <h5 class="card-title">
                    <?php
                    echo $info['nome'];
                    ?>
                  </h5>
                  <p class="card-text">
                    <?php
                    echo $info['desc'];
                    ?>
                  </p>
                </div>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
  </section>

    <section id="especialidade">
      <div class="container text-center grid_style">
        <h2>Nossa Especialidade</h2>
        <div class="row">
          <?php
          for ($i = 0; $i < count($espes); $i++) {
            $espe = $espes[$i];
          ?>
          <div class="col-sm-4">
            <div class="card" style="width: 18em;">
              <?php
                echo '<img src="' . $espe['img'] . '" class="card-img-top" alt="...">';
              ?>
              <div class="card-body">
                <h5 class="card-title">
                  <?php
                    echo $espe['nome'];
                    ?>
              </div>
            </div>
          </div>
          <?php
          }
          ?>
        </div>
      </div>
    </section>

    <section>
      <div class="registro text-center">
        <h3>Marque uma Consulta!</h3>
        <div class="container">
          <div class="row">
          <?php
          for ($i = 0; $i < count($consults); $i++) {
            $consult = $consults[$i];
          ?>
            <div class="col-lg-3">
              <?php
                echo '<img src="' . $consult['img'] . '" class="card-img-top" alt="...">';
              ?>
            </div>
          <?php
          }
          ?>
          <a href="https://docs.google.com/forms/d/e/1FAIpQLSe0GbwNAW-ZaTfjd_UygU-7ZU089yJv10NtDOyhSX8gq1kRJg/viewform?usp=sf_link"><button type="button" class="btn">Marque uma Consulta!</button></a>
        </div>
      </div>
    </section>

  <section>
      <div class="mais_infos1">
        <h4>Providenciamos o Melhor Serviço <br> Para os Nossos Pacientes</h4>
        <div id="carousel1" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="imagens/Imagem_14.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="imagens/Imagem_15.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>

    <section>
      <div class="mais_infos2">
        <h6>Departamento de Emergência <br> Rapido e Eficiente</h6>
        <div id="carousel2" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="imagens/Imagem_01.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="imagens/Imagem_02.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>

    <section id="contato">
      <div class="container contato">
          <h2>Contato</h2>
          <h2>Samu: 192</h2>
          <h2>Telefone: (88) 3427-1136</h2>
      </div>
    </section>

      <section class="final">
        <footer class="text-center text-md-start">
          <div class="container p-4">
            <div class="row">
              <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Adília <br> Maria</h5>
                <p>Prioriza o Cuidado e Segurança <br> de seus Pacientes</p>
              </div>
              <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <ul class="list">
                  <li class="lista_1">
                    <a href="#inicio" class="text-dark">Inicio</a>
                  </li>
                  <li>
                    <a href="#especialidade" class="text-dark">Especialidade</a>
                  </li>
              </div>
              <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <ul class="list">
                  <li class="lista_2">
                    <a href="#sobre" class="text-dark">Sobre</a>
                  </li>
                  <li>
                    <a href="#contato" class="text-dark">Contato</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </section>
</body>
</html>
