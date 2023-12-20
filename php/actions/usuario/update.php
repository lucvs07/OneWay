<?php

    include "../../config/config.php";

    $id = $_SESSION['id'];
    $idProd = $_POST['submit'];

    if($idProd == "acabou"){

        echo "<script> alert('Esse Produto está esgotado, aguarde voltar aos estoques'); window.location.assign('../../pages/usuario/home.php') </script>";

    }else{
        $sql = "SELECT * FROM produto WHERE IDPROD = '$idProd'";
        $result = $conn->query($sql);
    
        $rowGet = $result->fetch_assoc();
    
        $nomeProduto = $rowGet['NOME'];
        $marcaProduto = $rowGet['CLASSE'];
        $precoProduto = $rowGet['PRECO'];
    
        $quantidadeNew = $rowGet['QUANTIDADE'] - 1;
        $incartNew = $rowGet['INCART'] + 1;
    
        $sql = "INSERT INTO carrinhoProd (ID, NOME, CLASSE, VALOR) VALUES ('$id', '$nomeProduto','$marcaProduto', '$precoProduto')";
        $result = $conn->query($sql);
        
        $updateProd = "UPDATE produto SET QUANTIDADE = '$quantidadeNew', INCART = '$incartNew' WHERE IDPROD = '$idProd'";
        $updateResult = $conn->query($updateProd);
    
        echo "<script> window.location.assign('../../pages/usuario/home.php') </script>";
    }

?>