<?php
session_start();
if (isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])) {
  $email = $_SESSION["usuario"][0];
  $adm = $_SESSION["usuario"][1];
} else {
  echo "<script>window.location= 'USER/frmloginUsuario.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulário de login transparente</title>
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <style>
    #voltarparaapaginainicial {
      position: absolute;
      background-color: #340e3f;
      border-color: #340e3f;
      border-radius: 30px;
      white-space: normal;
      margin-top: 10px;
      margin-left: 0.5%;
    }

    #voltarparaapaginainicial:hover {
      transform: scale(1.05);
    }

    body {
      background-image: url("./imgTCC/imgLogin/imgFundoLogin.jpg");
      background-size: 100% 100%;
    }
  </style>

</head>

<body>

  <a href="index.php" class="btn text-white" id="voltarparaapaginainicial">Voltar para a página inicial</a>


  <form action="login.php" method="POST">
    <div class="center">
      <h1 style="color: #2691d9;">Login</h1>
      <form method="post">
        <div class="txt_field">
          <input type="email" name="email" id="inputEmail" style="color:white;" required>
          <span></span>
          <label>Email de Usuário</label>
        </div>
        <div class="txt_field">
          <input type="password" name="senha" id="inputPassword" style="color:white;" required>
          <span></span>
          <label>Senha</label>
        </div>
        <div class="pass">Esqueceu sua senha?</div>
        <input type="submit" value="Entrar">
        <div class="signup_link">
          Não possui uma conta? <a href="frmRegistrarUsuario.php">
            Cadastrar-se</a>
        </div>
      </form>
    </div>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>