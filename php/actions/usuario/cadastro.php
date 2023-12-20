<?php

    include "../../config/config.php";

    $erroCadastro = "window.location.assign('../../../html/usuario/cadastro.html')";

    $nome = $_POST['name'];
    if($_POST['senha'] == $_POST['confirmar-senha']){
        $senha = $_POST['senha'];
    }else{
        echo "<script> alert('As senhas devem ser iguais'); $erroCadastro </script>";
    }
    if($_POST['email'] == $_POST['confirmar-email']){
        $email = $_POST['email'];
    }else{
        echo "<script> alert('Os emails devem ser iguais') $erroCadastro </script>";
    }
    if($_POST['termos'] == "aceito"){
        $termos = 1;
    }else{
        $termos = 0;
    }
    if($_POST['news'] == "aceito"){
        $news = 1;
    }else{
        $news = 0;
    }
    $idade = $_POST['idade'];

    $sql = "INSERT INTO usuario (NOME, SENHA, EMAIL, TERMOS, RECEBER, IDADE) VALUES ('$nome', '$senha', '$email', $termos, $news, $idade)";
    if ($conn->query($sql) === TRUE) {
        echo "<script> window.location.assign('../../../html/usuario/login.html') </script>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error();
    }

?>