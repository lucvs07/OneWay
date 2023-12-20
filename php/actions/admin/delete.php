<?php

    include '../../config/config.php';

    $idProd = $_POST['submit'];

    $sqlDelete = "DELETE FROM produto WHERE IDPROD = '$idProd'";
    $deleteResult = $conn->query($sqlDelete);

    echo "<script> window.location.assign('../../pages/admin/estoque.php') </script>"

?>