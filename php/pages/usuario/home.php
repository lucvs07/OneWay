<?php

    include '../../config/config.php';

    $sql = "SELECT * FROM usuario WHERE ID = '".$_SESSION['id']."'";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    $nome = $row['NOME'];

    $sql_select_data = "SELECT * FROM produto WHERE classe = 'superiores' ";
    $result = $conn->query($sql_select_data);

    $sql_select_inferiores = "SELECT * FROM produto WHERE classe = 'inferiores' ";
    $resultInf = $conn->query($sql_select_inferiores);

    $sql_select_acs = "SELECT * FROM produto WHERE classe = 'acessorios' ";
    $resultAcs = $conn->query($sql_select_acs);


?>

<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/usuario/produtos.css?<?=time()?>">
    <link href="https://fonts.cdnfonts.com/css/akira-expanded" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../../css/usuario/menu.css">
    <title>Produtos</title>
</head>
<body>
    <header>
        <h1>ONE WAY</h1>
    </header>
    <main>
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
                    <a href="../../../html/usuario/index.html">
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

        <section class="banner-entrega"></section>

        <section class="superiores" id="superiores">
            <div class="box">
                <div class="header_new">
                    <h2>PEÇAS SUPERIORES</h2>
                </div>
                <div class="linha1"></div>
                <div class="produtos wrap">
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <div class="item">
                            <div class="produto_img">
                                <img src="../../../src/img/<?php echo $row["NOME"];?>.svg" alt="">
                                <div class="card-body">
                                </div>
                            </div>
                            <div class="produto_nome">
                                <span><?php echo $row["NOME"]; ?></span>
                                <span>R$<?php echo $row["PRECO"] ?></span>
                                
                                <form action="../../../php/actions/usuario/update.php" method="POST">
                                    <button class="btn-carrinho" type="submit" name='submit' value="<?php if($row['QUANTIDADE'] > 0){echo $row['IDPROD'];}else{ echo "acabou";}?>">Adicione ao Carrinho</button>
                                </form>

                                <div class="line"></div>
                            </div>
                        </div>
                        
                    <?php } ?>
                </div>
            </div>
        </section>
        
        <section class="inferiores" id="inferiores">
            <div class="box">
                <div class="header_new">
                    <h2>PEÇAS INFERIORES</h2>
                </div>
                <div class="linha1"></div>
                <div class="produtos wrap">
                    <?php while ($row = $resultInf->fetch_assoc()) { ?>
                        <div class="item">
                            <div class="produto_img">
                                <img src="../../../src/img/<?php echo $row["NOME"];?>.svg" alt="">
                                <div class="card-body">
                                        
                                </div>
                            </div>
                            <div class="produto_nome">
                                <span><?php echo $row["NOME"]; ?></span>
                                <span>R$<?php echo $row["PRECO"] ?></span>

                                <form action="../../../php/actions/usuario/update.php" method="POST">
                                    <button class="btn-carrinho" type="submit" name='submit' value="<?php if($row['QUANTIDADE'] > 0){echo $row['IDPROD'];}else{ echo "acabou";}?>">Adicione ao Carrinho</button>
                                </form>
                                <div class="line"></div>
                            </div>
                        </div>
                        
                    <?php } ?>
                </div>
            </div>
        </section>
        
        <section class="acessorios" id="acessorios">
            <div class="box">
                <div class="header_new">
                    <h2>ACESSÓRIOS</h2>
                </div>
                <div class="linha1"></div>
                <div class="produtos wrap">
                    <?php while ($row = $resultAcs->fetch_assoc()) { ?>
                        <div class="item">
                            <div class="produto_img">
                                <img src="../../../src/img/<?php echo $row["NOME"];?>.svg" alt="">
                                <div class="card-body">
                                </div>
                            </div>
                            <div class="produto_nome">
                                <span><?php echo $row["NOME"]; ?></span>
                                <span>R$<?php echo $row["PRECO"] ?></span>

                                <form action="../../../php/actions/usuario/update.php" method="POST">
                                    <button class="btn-carrinho" type="submit" name='submit' value="<?php if($row['QUANTIDADE'] > 0){echo $row['IDPROD'];}else{ echo "acabou";}?>">Adicione ao Carrinho</button>
                                </form>
                                <div class="line"></div>
                            </div>
                        </div>
                        
                    <?php } ?>
                </div>
            </div>

            
        </section>
        <section class="ajuda" id="ajuda">
            <div class="help">
                <h1>PRECISA DE AJUDA ?</h1>
                <p>Envie-nos seu feedback que responderemos em segundos!</p>
                <form action="../../actions/help.php" class="feedback">
                    <textarea name="feedback" id="feedback" cols="40" rows="10" placeholder="Escreva Aqui"></textarea>
                    <input type="submit" value="enviar" name="enviar">
                </form>
            </div>
        </section>           
        
    </main>
    <footer>

    </footer>    
</body>
</html>