<?php

include '../../config/config.php';

$sql_select_data = "SELECT * FROM produto";
$result = $conn->query($sql_select_data);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/administrador/estoque.css?<?= time() ?>">
    <link href="https://fonts.cdnfonts.com/css/akira-expanded" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../../css/usuario/menu.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title> Estoque </title>
</head>

<body>
    <header>
        <h1>ONE WAY</h1>
    </header>
    <div class="sidebar close">
        <div class="logo-details">
            <i class='bx bxs-shopping-bag-alt'></i>
            <span class="logo_name">ONE WAY</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="../../../html/usuario/index.html">
                    <i class='bx bx-home'></i>
                    <span class="link_name">Home</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="../../../html/usuario/index.html">Home</a></li>
                </ul>
            </li>
            <li>
                <a href="../admin/estoque.php">
                    <i class='bx bx-cart'></i>
                    <span class="link_name">Estoque</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="../admin/estoque.php">Estoque</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="../admin/clienteAdm.php">
                        <i class='bx bx-user'></i>
                        <span class="link_name">Clientes</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Clientes</a></li>
                    <li><a href="../admin/clienteAdm.php">Clientes</a></li>
                </ul>
            </li>
            <li>
                <div class="profile-details">
                    <div class="name-job" style="padding-left: 2rem;">
                        <div class="profile_name"><?php echo "Olá " . $nomeAdm; ?></div>
                    </div>
                    <i class='bx bx-log-out'></i>
                </div>
            </li>


        </ul>
    </div>
    <script src="../../../js/sidebar.js"></script>
    <main>
        <section class="estoque" id="estoque">
        <div class="box">
            <div class="header_new">
                <h2>ESTOQUE</h2>
            </div>
            <div class="linha1"></div>
            <div class="produtos">
                <?php while ($row = $result->fetch_assoc()) {
                    $produtoArray = explode(":", $row["NOME"]);?>
                    <div class="card" style="width: 18rem;">
                        <img src="../../../src/img/<?php echo $row["NOME"]; ?>.svg" class="card-img-top" alt="<?php echo $row["NOME"]; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row["NOME"]; ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $row["CLASSE"]; ?></h6>
                            <p class="card-text">R$<?php echo $row["PRECO"]; ?></p>
                            <p class="card-text text-muted">Código: <?php echo $row["IDPROD"]; ?></p>
                            <p class="card-text text-muted">Quantidade: <?php echo $row["QUANTIDADE"]; ?></p>
                            <div class="row">
                                <div class="col">
                                    <form action="../../actions/admin/delete.php" method="post">
                                        <button type="submit" value="<?php echo $row['IDPROD']; ?>" name='submit' class="btn btn-danger">
                                            Deletar Produto
                                        </button>
                                    </form>
                                </div>
                                <div class="col"> 
                                    <form action="../../pages/admin/updateProd.php" method="post">
                                        <button type="submit" name='submit' value="<?php echo $row['IDPROD']; ?>" class="btn btn-primary">
                                            Alterar Preço
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        </section>
        
    </main>
    <footer>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>