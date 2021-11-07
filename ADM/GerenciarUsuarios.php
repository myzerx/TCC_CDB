<?php
    include "../conexao.php";
    require "../conexao.php";
    session_start();
    if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
        $email = $_SESSION["usuario"][0];
        $adm = $_SESSION["usuario"][1];
        if($adm == 1){
            $sql_code="SELECT * FROM usuario";
            $resultado=$conexao->prepare($sql_code);
            $resultado->execute();
        }
        else{
            echo  "<script>alert('Você não é um administrador');</script>";
            echo "<script>window.location= 'frmLoginUsuario.php'</script>";
        }
    }else{
        echo "<script>window.location= 'frmloginUsuario.php'</script>";
    }


?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulário de login transparente</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    </head>

    <body>
        
        <header>
              <nav class="navbar navbar-light" style="background-color: #340e3f;">
                
                <img src="../imgTCC/imgLogin/imgLogoCDB/imgLogo.jpg" width="160" height="90" alt="Logo">
                <a class="navbar-brand text-white" style="margin-right:45%">A D M I N I S T R A Ç Ã O</a>
                <a href="index.php" class="btn text-white" id="voltarparaapaginainicial">Voltar para a página inicial</a>

              </nav>
        </header>

        <br><br>

        <table border=1  cellpadding="10" class="table table-bordered table-dark table-striped table-hover" >
            <tr class=titulo>
                <td style="color:#b92fe1;">Nome</td>
                <td style="color:#b92fe1;">Email</td>
                <td style="color:#b92fe1;">Telefone</td>
                <td style="color:#de6dff;">Nivel de acesso</td>
                <td style="color:#de6dff;">Ação</td>
            </tr>
            <?php
            while($row=$resultado->fetch(pdo::FETCH_ASSOC)){

            ?>
            <tr>
                <td><?php echo $row['usuario_nome']; ?></td>
                <td><?php echo $row['usuario_email']; ?></td>
                <td><?php echo $row['usuario_telefone']; ?></td>
                <td><?php echo $row['adm/usuario']; ?></td>
                <td>
                    <a href="<?php echo $linha['usuario_nome']; ?>">Editar</a>
                    <a href="<?php echo $linha['usuario_nome']; ?>">Deletar</a>
                </td>

            </tr>
            <?php
            };
            ?>
        </table>






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