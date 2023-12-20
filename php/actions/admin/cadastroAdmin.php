<?php

    include "../../config/config.php";

    $erroCadastro = "window.location.assign('../../../html/administrador/cadastroADM.html')";

    $nome = $_POST['nome'];
    
    $senha = $_POST['senha'];

    $email = $_POST['email'];

    

    $sql = "INSERT INTO administrador (EMAIL, NOME, SENHA) VALUES ('$email', '$nome', '$senha')";
    if ($conn->query($sql) === TRUE) {
        echo "<script> window.location.assign('../../../html/administrador/loginAdmin.html') </script>";
      } else {
        echo "Error: ";
      }

?>