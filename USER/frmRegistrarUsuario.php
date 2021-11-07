<!DOCTYPE html>
<html lang="en" dir="ltr">

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
      background-image: url('../imgTCC/imgLogin/imgFundoLogin.jpg');
      background-size: 100% 100%;
    }
  </style>



</head>

<body>
  <div class=login-page>


    <a href="../index.php" class="btn text-white" id="voltarparaapaginainicial">Voltar para a página inicial</a>

    <div class="center">
      <h1 style="color: #2691d9;">Registro</h1>
      <form method="post" action="registrar.php">
        <div class="txt_field">
          <input name="Nome" type="text" style="color:white;" required>
          <span></span>
          <label>Nome de Usuário</label>
        </div>
        <div class="txt_field">
          <input name="Senha" type="password" style="color:white;" required>
          <span></span>
          <label>Senha de Usuário</label>
        </div>
        <div class="txt_field">
          <input name="rSenha" type="password" style="color:white;" required>
          <span></span>
          <label>Repetir Senha de Usuário</label>
        </div>
        <div class="txt_field">
          <input name="email" type="email" style="color:white;" required>
          <span></span>
          <label>E-mail</label>
        </div>
        <div class="txt_field">
          <input name="telefone" type="text" style="color:white;" required>
          <span></span>
          <label>Telefone</label>
        </div>
        <input type="submit" value="Registrar">
        <div class="signup_link">
        </div>

        <div class="signup_link">
          Já possui uma conta? <a href="frmLoginUsuario.php">
            Fazer Login</a>
        </div>
      </form>
    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>