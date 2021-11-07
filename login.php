<?php
   require "conexao.php";

    if(isset($_POST["email"]) && isset($_POST["senha"]) && $conexao != null){
        $query=$conexao->prepare("SELECT * FROM usuario where usuario_email = ? and usuario_senha = ?");
        $query->execute(array($_POST["email"], $_POST["senha"]));
        if($query->rowCount()){
            $user=$query->fetchALL(PDO::FETCH_ASSOC)[0];
            session_start();
            $_SESSION["usuario"]=array($user["usuario_ID"], $user["adm_usuario"]);
            if($_SESSION["usuario"][1] == 1){
                echo "<script>window.location= 'ADM/index.php'</script>";
            }else{
                echo "<script>window.location= 'USER/index.php'</script>";
            }
        }else{
            echo "<script>window.location= 'USER/frmLoginUsuario.php'</script>";
        }
    }else{
        echo "<script>window.location= 'USER/frmLoginUsuario.php'</script>";
    }
