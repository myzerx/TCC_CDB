<?php
//CONEXAO AO SERVIDOR
$dsn="mysql:host=localhost;dbname=db_campanha";
$usuario="root";
$senha="";

global $conexao;

try{
  $conexao =new PDO($dsn,$usuario,$senha) OR DIE ('Erro na conexão!');
  $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $erro){
  die ("Ocorreu um erro de conexao: {$erro->getMessage()}");
  $conexao=null;
}
?>
  
  
  

