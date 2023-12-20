<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "usbw";
    $onewayBD = "onewaybd";

    $conn = new mysqli($servidor, $usuario, $senha, $onewayBD);

    if($conn->connect_error){
        die("Conexão Falha, entre em contato com a administração: ".$conn->connect_error);
    }

    session_start();
?>