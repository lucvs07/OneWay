<?php

    include '../../config/config.php';

    $login = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM administrador WHERE EMAIL = '$login' AND SENHA = '$senha'";
    $result = $conn->query($sql);
    
    if($result->num_rows != 0){
        $row = $result->fetch_assoc();
    
        $_SESSION['idAdm'] = $row['IDADM'];
        $_SESSION['nomeAdm'] = $row['NOME'];
    
        echo "<script> window.location.assign('../../../php/pages/admin/estoque.php') </script>";
    }else{
        echo "<script> alert('Nenhum usuario localizado, senha ou email incorretos'); window.location.assign('../../../html/administrador/loginAdmin.html') </script>";
    }

?>