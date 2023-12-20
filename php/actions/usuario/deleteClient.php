<?php

    include "../../config/config.php";

    $idv = $_POST['submit'];

    $sqlSearch = "SELECT * FROM carrinhoProd WHERE IDVenda = '$idv'";
    $result = $conn->query($sqlSearch);
    $row = $result->fetch_assoc();

    $row = $result->fetch_assoc();

    $produto = explode(":",$row["PRODUTO"]);
    $nomeProd = $produto[0];
    $preco = floatval($row['VALOR']);

    $preco1 = $preco - 0.01;
    $preco2 = $preco + 0.01;

    $sql = "SELECT * FROM `produto` WHERE (`PRECO` BETWEEN $preco1 AND $preco2) AND (NOME = '$nomeProd')";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $idProd = $row['IDPROD'];
    $incartNew = $row['INCART'] - 1;
    $quantidadeNew = $row['QUANTIDADE'] + 1;

    $updateProd = "UPDATE produto SET QUANTIDADE = '$quantidadeNew', INCART = '$incartNew' WHERE IDPROD = '$idProd'";
    $updateResult = $conn->query($updateProd);

    $sql = "DELETE FROM carrinhoProd WHERE IDVenda = '$idv'";
    $result = $conn->query($sql);
    echo "<script> window.location.assign('../../pages/usuario/carrinho.php') </script>";
?>