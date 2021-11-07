<?php
require "../conexao.php";
  session_start();
  if (isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])) {
    $email = $_SESSION["usuario"][0];
    $adm = $_SESSION["usuario"][1];
  } else {
    echo "<script>alert('Você não esta logado!');</script>";
    echo "<script>window.location= 'USER/frmloginUsuario.php'</script>";
  }
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <title>Usuário Logado - Campanha Solidária</title>
  <style>
    #Acessar {
      background-color: #340e3f;
      border-color: #340e3f;
    }

    #Acessar:hover {
      transform: scale(1.05);
    }

    .mesmo-tamanho {
      width: 100%;
      white-space: normal;
    }

    #containercss {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      flex-direction: column;
      text-align: center;
    }
  </style>
</head>

<body>
  <header>
    <nav class="navbar navbar-light" style="background-color: #340e3f;">

      <img src="../imgTCC/imgMenuPrinc/imgLogoCDB/imgLogo.jpg" width="160" height="90" alt="Logo">
      <a class="navbar-brand text-white" style="margin-right:45%">USUÁRIO LOGADO</a>
    </nav>
  </header>
  <br><br>
  <!-- card de exemplos das Funções do site -->
  <br><br>
  <br><br>
  <div id="containercss">
    <section>
      <div class="container mb-5">
        <div class="row">
          <div class="col-sm-12 text-dark text-center my-3">
            <h1>Gerenciar:</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="card" style="border-color: #340e3f;">
              <img src="../imgTCC/imgMenuPrinc/imgCards/imgCesta.jpg" class="card-img-top" alt="..." width="270" height="300">
              <div class="card-body">
                <h3 class="card-title" style="color: #340e3f;" align="center">Solicitar Cesta Básica</h3>
                <br>
                <a href="frmSolicitarPedidos.php" class="btn btn-primary mesmo-tamanho" id="Acessar">ACESSAR</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card" style="border-color: #340e3f;">
              <img src="../imgTCC/imgMenuPrinc/imgCards/imgDoacao.jpg " class="card-img-top" alt="..." width="270" height="300">
              <div class="card-body">
                <h3 class="card-title" style="color: #340e3f;" align="center">Fazer uma Doação</h3>
                <br>
                <a href="frmDoar.php" class="btn btn-primary mesmo-tamanho" id="Acessar">ACESSAR</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
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