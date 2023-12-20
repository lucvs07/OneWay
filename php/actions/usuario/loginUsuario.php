<?php

    include '../../config/config.php';

    $login = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE EMAIL = '$login' AND SENHA = '$senha'";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    
    if($login == 'admin' && $senha == 'admin'){
        echo "<script> window.location.assign('../../../html/administrador/clientes.html')</script>";
    }else{
        if($row !=0){

            $_SESSION['id'] = $row['ID'];
            $_SESSION['email'] = $login;
        
            echo "<script> window.location.assign('../../pages/usuario/home.php') </script>";
        }else{
            
            echo "<script> alert('Usuário ou senha incorretos'); window.location.assign('../../../html/usuario/login.html') </script>";
        
        }
    }

?>