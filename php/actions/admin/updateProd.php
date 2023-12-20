<?php

    include '../../config/config.php';

    $novoNome = $_POST['nome'];
    $novoTamanho = $_POST['tamanho'];
    $novoPreco = $_POST['preco'];
    $novaClasse = $_POST['classe'];
    $novaQuantidade = $_POST['quantidade'];
    $idProduto = $_POST['submit'];

    $sql = "UPDATE produto SET NOME = '$novoNome', TAMANHO = '$novoTamanho', PRECO = '$novoPreco', CLASSE = '$novaClasse', QUANTIDADE = '$novaQuantidade' WHERE IDPROD = '$idProduto'";
    $result = $conn->query($sql);

    echo "<script> window.location.assign('../../pages/admin/estoque.php') </script>";
?>