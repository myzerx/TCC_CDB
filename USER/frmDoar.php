<?php
    session_start();
    if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
        $email = $_SESSION["usuario"][0];
        $adm = $_SESSION["usuario"][1];
    }else{
        echo "<script>window.location= 'USER/frmloginUsuario.php'</script>";
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registro - Campanha Solidária</title>
        <link rel="stylesheet" href="../css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
        <style>
           #voltarparaapaginainicial{
            position: absolute;
            background-color: #340e3f;
            border-color: #340e3f;
            border-radius: 30px;
            white-space: normal;
            margin-top:10px;
            margin-left:0.5%;
          }
          #voltarparaapaginainicial:hover{
            transform: scale(1.05);
          }
        </style>
    
    
    
      </head>
    <body>
   
        <header>
              <nav class="navbar navbar-light" style="background-color: #340e3f;">
                
                <img src="../imgTCC/imgLogin/imgLogoCDB/imgLogo.jpg" width="160" height="90" alt="Logo">
                <a class="navbar-brand text-white" style="margin-right:45%">Campanha Solidária</a>

              </nav>
         </header>
        
         <a href="index.php" class="btn text-white" id="voltarparaapaginainicial">Voltar para a página inicial</a>




        <footer style="position:absolute; bottom:0; width:100%;">
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