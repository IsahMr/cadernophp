<?php
     $servidor = "localhost";
     $usuario = "escola";
     $senha = "123";
     $nomedb = "escola";
 
     $conn = new mysqli ($servidor, $usuario, $senha, $nomedb);
 
      if ($conn->connect_error){
 
         die("Conexao Falhou:" . $conn->connect_error);
     }
      
      echo "Conectado ao Banco de Dados" . "<br>";

?>