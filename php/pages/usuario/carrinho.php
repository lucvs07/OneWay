<?php

   
    include '../../config/config.php';

    $sqlNome = "SELECT * FROM usuario WHERE ID = '".$_SESSION['id']."'";
    $resultNome = $conn->query($sqlNome);

    $row = $resultNome->fetch_assoc();

    $nome = $row['NOME'];

    $id = $_SESSION['id'];

    $sql = "SELECT * FROM carrinhoProd WHERE ID = $id";
    $result = $conn->query($sql);
    
    $total = 0;

?>
<html lang="pt">
    <head>
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../../css/usuario/carrinho.css?<?=time()?>">
        <link href="https://fonts.cdnfonts.com/css/akira-expanded" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="../../../css/usuario/menu.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title> Carrinho </title>
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
                        <div class="iocn-link">
                        <a href="../../pages/usuario/home.php">
                            <i class='bx bx-collection' ></i>
                            <span class="link_name">Produtos</span>
                        </a>
                        <i class='bx bxs-chevron-down arrow' ></i>
                        </div>
                        <ul class="sub-menu">
                        <li><a class="link_name" href="../../../php/pages/usuario/home.php">Produtos</a></li>
                        <li><a href="../../../php/pages/usuario/home.php#superiores">Superiores</a></li>
                        <li><a href="../../../php/pages/usuario/home.php#inferiores">Inferiores</a></li>
                        <li><a href="../../../php/pages/usuario/home.php#acessorios">Acessórios</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../../../php/pages/usuario/carrinho.php">
                        <i class='bx bx-cart' ></i>
                        <span class="link_name">Carrinho</span>
                        </a>
                        <ul class="sub-menu blank">
                        <li><a class="link_name" href="../../../php/pages/usuario/carrinho.php">Carrinho</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="iocn-link">
                        <a href="../../../html/usuario/login.html">
                            <i class='bx bx-user' ></i>
                            <span class="link_name">Conta</span>
                        </a>
                        <i class='bx bxs-chevron-down arrow' ></i>
                        </div>
                        <ul class="sub-menu">
                        <li><a class="link_name" href="../../../html/usuario/login.html">Conta</a></li>
                        <li><a href="../../../html/usuario/login.html">Login</a></li>
                        <li><a href="../../../html/usuario/cadastro.html">Cadastro</a></li>
                        </ul>
                    </li>
                        <li>
                            <div class="profile-details">
                            <div class="name-job" style="padding-left: 2rem;">
                                <div class="profile_name"><?php echo "Olá ".$nome;?></div>
                            </div>
                            <i class='bx bx-log-out' ></i>
                            </div>
                        </li>
                    
                </ul>
            </div>
            <script src="../../../js/sidebar.js"></script>

        <section class="carrinho" id="carrinho">
            <div class="box">
                <div class="header_new">
                    <h2>Carrinho</h2>
                </div>
                <div class="linha1"></div>
                <div class="produtos">
                    <?php while($row = $result->fetch_assoc()){ $produtoArray = explode(":", $row["NOME"]); $total += $row['VALOR'];?>
                            <div class="card" style="width: 18rem;">
                                <img src="../../../src/img/<?php echo $row["NOME"];?>.svg" class="card-img-top" alt="<?php echo $row["NOME"];?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row["NOME"];?></h5>
                                    <p class="card-text">R$<?php echo $row["VALOR"];?></p>
                                    <form action="../../actions/usuario/deleteClient.php" method="post">
                                        <button type="submit" name='submit' value="<?php echo $row['IDVenda'];?>" class="btn btn-danger">
                                            Remover
                                        </button>
                                    </form>
                                </div>
                            </div>
                    <?php } ?>
                </div>
                <div class="linha1"></div>
                
            </div>
            
        </section>
        <section class="pagamento" id="pagamento">
            <div class="box">
                <div class="header_new">
                        <h2>Pagamento</h2>
                        <p class="h2"> R$<?php echo $total; ?></p>
                    </div>
                    <div class="linha1"></div>
                <form action="../../actions/usuario/reset.php" method="POST">
                    <div class="mb-3">
                        <label for="cep" class="form-label">CEP</label>
                        <input type="number" class="form-control" name="cep" id="cep">
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="endereco">
                    </div>
                    <div class="mb-3">
                        <label for="complemento" class="form-label">Complemento</label>
                        <input type="text" class="form-control" id="complemento">
                    </div>
                
                    <button type="submit" class="btn btn-primary" name="pagar" value="pagou">Ir para o pagamento</button>
                </form>
                
            </div>
                
        </section>
        
                                
                    
        <footer>

        </footer>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>