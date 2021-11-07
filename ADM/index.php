<?php
    require "../conexao.php";
    include "../conexao.php";
    session_start();
    if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
        $email = $_SESSION["usuario"][0];
        $adm = $_SESSION["usuario"][1];
        if($adm == 1){
        }
        else{
          echo "<script>alert('Você não é um administrador');</script>";
          echo "<script>window.location= 'LogadoUsuario.php'</script>";
        }
    }else{
        echo "<script>window.location= 'USER/frmloginUsuario.php'</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Administração Campanha Solidária</title>

    <style>

      #gerenciar{
            background-color: #340e3f;
            border-color: #340e3f;
      }
      #gerenciar:hover{
            transform: scale(1.05);
          }
          .mesmo-tamanho {
                    width: 100%;
                    white-space: normal;
                }
        html {
            height: 100%;
            min-height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100%;
        }

        footer {
            margin-top: auto;
        }
        h2 {
    text-align: center;
}
        .container > .row {
            display: flex;
            flex-wrap: wrap;
        }
    </style>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-light" style="background-color: #340e3f;">
        
        <img src="../imgTCC/imgMenuPrinc/imgLogoCDB/imgLogo.jpg" width="160" height="90" alt="Logo">
        <a class="navbar-brand text-white" style="margin-right:45%">A D M I N I S T R A Ç Ã O</a>
      </nav>
    </header>
<br><br>
  <!-- card de exemplos das Funções do site -->
<br><br>
    <section>
      <div class="container mb-3">
        <div class="row">
          <div class="col-12 text-dark text-center my-3">
            <h1>Gerenciar:</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="card" style="border-color: #340e3f;">
              <img src="../imgTCC/imgMenuPrinc/imgCards/imgCesta.jpg" class="card-img-top">
              <div class="card-body">
                <h2 class="card-title" style="color: #340e3f;" align="center">Solicitações de Cestas Básicas</h2>
                <br>
                <a href="GerenciarPedidos.php" class="btn btn-primary mesmo-tamanho" id="gerenciar">Gerenciar</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card" style="border-color: #340e3f;">
              <img src="../imgTCC/imgMenuPrinc/imgCards/imgDoacao.jpg " class="card-img-top">
              <div class="card-body">
                <h2 class="card-title" style="color: #340e3f;" align="center">Registro de Doações</h2>
                <br>
                <a href="GerenciarDoacoes.php" class="btn btn-primary mesmo-tamanho" id="gerenciar">Gerenciar</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card" style="border-color: #340e3f;">
              <img src="../imgTCC/imgLogadoAdministrador/imgCardGerenciarUsuarios.JPG" class="card-img-top">
              <div class="card-body">
                <h2 class="card-title" style="color: #340e3f;" align="center">Usuários Registrados</h2>
                <br>
                <a href="GerenciarUsuarios.php" class="btn btn-primary mesmo-tamanho" id="gerenciar">Gerenciar</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card" style="border-color: #340e3f;">
              <img src="../imgTCC/imgLogadoAdministrador/imgCardGerenciarUsuarios.JPG" class="card-img-top">
              <div class="card-body">
                <h2 class="card-title" style="color: #340e3f;" align="center">Registrar Administrador</h2>
                <br>
                <a href="frmRegistrarAdministrador.php" class="btn btn-primary mesmo-tamanho" id="gerenciar">Registrar</a>
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