<?php
require('conexao.php');
session_start();
if (isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])) {
  $email = $_SESSION["usuario"][0];
  $adm = $_SESSION["usuario"][1];
  if ($adm = 0) {
    echo "<script>window.location= 'USER/index.php'</script>";
  } else if ($adm = 1) {
    echo "<script>window.location= 'ADM/index.php'</script>";
  } else {
    session_unset();
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <title>Página Inicial - Campanha Solidária</title>

</head>

<body>
  
  <header>
    <nav class="navbar navbar-light" style="background-color: #340e3f;">
      <img src="imgTCC/imgMenuPrinc/imgLogoCDB/imgLogo.jpg" width="160" height="90" alt="Logo">
      <a class="navbar-brand text-white">Campanha Solidária</a>
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="USER/frmLoginUsuario.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="USER/frmRegistrarUsuario.php">Registrar</a>
        </li>
      </ul>
    </nav>
  </header>
  <!-- Carousel -->
  <section>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://source.unsplash.com/1400x500/?estudantes" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://source.unsplash.com/1400x500/?alimentos" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://source.unsplash.com/1400x500/?escola" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>
  </section>
  <br><br>
  <!-- Descrição O que é o projeto -->
  <div class="container">
    <div class="card" style="border-color: #340e3f;">
      <div class="card-header text-white" style="background-color: #340e3f;">
        O que é esse projeto?
      </div>
      <div class="card-body">
        <h5 class="card-title">Campanha Solidária</h5>
        <p class="card-text">A campanha solidária foi criada por alguns professores da escola ETEC Fernando Prestes de Sorocaba, para ajudar as pessoas que estão passando por necessidades. O projeto consiste em que o necessitado faça uma solicitação de cesta básica com alimentos. O único requisito é que a pessoa esteja Logada com um registro de Login, com informações pessoais e assim possibilitando a solicitação de forma remota.</p>
      </div>
    </div>
  </div>
  <!-- card de exemplos das Funções do site -->
  <br><br>
  <section>
    <div class="container mb-5">
      <div class="row">
        <div class="col-sm-12 text-dark text-center my-3">
          <h3>Funções do Site</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="card" style="border-color: #340e3f;">
            <img src="imgTCC/imgMenuPrinc/imgCards/imgCesta.jpg" class="card-img-top" alt="..." width="270" height="300">
            <div class="card-body">
              <h5 class="card-title" style="color: #340e3f;">Cesta básica</h5>
              <p class="card-text">Solicite sua cesta básica com alimentos. Será requisitado apenas que você possua uma conta.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card" style="border-color: #340e3f;">
            <img src="imgTCC/imgMenuPrinc/imgCards/imgDoacao.jpg " class="card-img-top" alt="..." width="270" height="300">
            <div class="card-body">
              <h5 class="card-title" style="color: #340e3f;">Doação</h5>
              <p class="card-text">Faça uma contribuição, lembrando que qualquer valor já é uma grande ajuda.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card" style="border-color: #340e3f;">
            <img src="imgTCC/imgMenuPrinc/imgCards/imgDivulgacao.jpg" class="card-img-top" alt="..." width="270" height="300">
            <div class="card-body">
              <h5 class="card-title" style="color: #340e3f;">Divulgação</h5>
              <p class="card-text">Faça uma divulgação em suas redes sociais, para expandir o alcance desse site e ajudar mais pessoas.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Rodapé -->
  <footer>
    <div class="container-fluid bg-dark p-5">
      <div class="row">
        <div class="col-sm-12 text-white text-center">
          <p class="mb-0">Desenvolvido pela equipe CDB</p>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>