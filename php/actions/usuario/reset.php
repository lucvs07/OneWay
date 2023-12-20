<?php

    include "../../config/config.php";

    $id = $_SESSION['id'];
    $pagou = $_POST['pagar'];

    $sql = "DELETE FROM carrinhoProd";
    $result = $conn->query($sql);
    
    
    echo "<script> alert('Parabéns Pela Compra !');window.location.assign('../../pages/usuario/home.php') </script>";

?>