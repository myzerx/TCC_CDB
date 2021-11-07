<?php
    session_start();
    if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){ 
        session_destroy();
        echo "<script>window.location= 'index.php'</script>";
    }else{
        echo "<script>window.location= 'index.php'</script>";
    }
?>