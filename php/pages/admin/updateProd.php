<?php

    include '../../config/config.php';

    $idProduto = $_POST['submit'];

    $sql = "SELECT * FROM produto WHERE IDPROD = '$idProduto'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $nome = $row['NOME'];
    $classe = $row['CLASSE'];
    $quantidade = $row['QUANTIDADE'];
    $preco = $row['PRECO'];
    $tamanho = $row['TAMANHO'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Alterar Produto </title>
</head>
<body>
    <form action="../../actions/admin/updateProd.php" method="post">
        <input type="text" name="classe" id="classe" class="classe" value='<?php echo $classe; ?>' placeholder='<?php echo $classe; ?>'>
        <input type="text" name="nome" id="nome" class="nome" value='<?php echo $nome; ?>' placeholder='<?php echo $nome; ?>'>
        <input type="number" name="quantidade" id="quantidade" class="quantidade" value='<?php echo $quantidade; ?>' placeholder='<?php echo $quantidade; ?>'>
        <input type="number" name="preco" id="preco" class="preco" step="0.01" value='<?php echo $preco; ?>' placeholder='<?php echo $preco; ?>'>
        <input type="text" name="tamanho" id="tamanho" class="tamanho" value='<?php echo $tamanho; ?>' placeholder='<?php echo $tamanho; ?>'>
        <button type="submit" name='submit' value='<?php echo $idProduto; ?>'>
            Enviar
        </button>
    </form>
</body>
</html>