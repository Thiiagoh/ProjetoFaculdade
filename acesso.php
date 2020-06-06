<!DOCTYPE html>
<html>
    <head>
        <title>Página - Inícial</title>
	    <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="font-awesome/css/all.css">
        <?php 
            session_start();
            include_once "conectar.php";
            if((!isset($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
                session_unset();
                echo "<script>alert('Esta página só pode ser acessada por usuário logado');window.location.href = 'index.html';</script>";
            }
            $logado = $_SESSION['email'];
        ?>
    </head>
    <body>
        <div class="root">
            <nav class="nav-bar d-flex flex-column">
                <div class="nav-bar-header d-flex pl-4 pt-4 pb-4">
                    <img class="logo" src="images/icons/audio.png" class="card-img-top mb-3"/>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a href="#" class="nav-link d-flex align-items-center">
                            <i class="fa fa-home"></i>
                            <span>Início</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="meusfavoritos.php" class="nav-link d-flex align-items-center">
                            <i class="fas fa-video"></i>
                            <span>Meus Videos</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="top-bar">
                <header id="header" class="d-flex position-relative">
                    <div id="header-overlay"></div>
                    <div class="d-flex ml-auto">
                        <div class="dropdown menu ml-3">
                            <button type="button" class="d-flex align-items-center" data-toggle="dropdown">
                                <img class="avatar" src="images/user.png"/>
                                <span><?php echo $logado; ?></span>
                                <i class="fas fa-caret-down ml-2 mr-2"></i>
                            </button>
                            <div class="dropdown-menu mt-0 p-0">
                                <a href="alterarDados.php" class="dropdown-item">Alterar senha</a>
                                <a href="excluirConta.php" class="dropdown-item">Excluir conta</a>
                                <div class="dropdown-divider"></div>
                                <a href="desconectar.php" class="dropdown-item">Sair</a>
                            </div>
                        </div>
                    </div>
                </header>
            </div>

            <div id="main" class="main d-flex flex-column">
                    <div class="margin-top"></div>
                    <div class="main-container">
                        <h2 class="title mb-3">Filmes/Séries que estão bombando no momento</h2>
                        <div class="row list mb-5">
                            <div class="col-12 col-md-3 col-lg-2">
                                <div class="card">
                                        <img src="images/img_filme/anne.jpg" class="card-img-top mb-3"/>
                                    <div class="card-body p-0">
                                            <h5 class="card-title">Anne with an "E"</h5>
                                            <p class="card-text">Drama/Romance</p>
                                            <p class="card-text">2017</p>
                                    </div>
                                    <div class="btn-play">
                                        <form action="favoritosadd.php" method="POST">
                                            <button name="email" value="<?php echo $logado; ?>" class="d-flex justify-content-center align-items-center">
                                                <input type="" name="filme" value="Anne with an E" hidden>
                                                <input type="" name="genero" value="Drama/Romance" hidden>
                                                <input type="" name="imagem" value="anne" hidden>
                                                <input type="" name="lancamento" value="2017" hidden>
                                                <input type="" name="opcao" value="0" hidden>
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12 col-md-3 col-lg-2">
                                <div class="card">
                                    <a href="">
                                        <img src="images/img_filme/gente_grande.jpg" class="card-img-top mb-3"/>
                                    </a>
                                    <div class="card-body p-0">
                                        <a href="">
                                            <h5 class="card-title">Gente Grande</h5>
                                            <p class="card-text">Comédia</p>
                                            <p class="card-text">2010</p>
                                        </a>
                                    </div>
                                    <div class="btn-play">
                                        <form action="favoritosadd.php" method="POST">
                                            <button name="email" value="<?php echo $logado; ?>" class="d-flex justify-content-center align-items-center">
                                                <input type="" name="filme" value="Gente Grande" hidden>
                                                <input type="" name="genero" value="Comédia" hidden>
                                                <input type="" name="imagem" value="gente_grande" hidden>
                                                <input type="" name="lancamento" value="2010" hidden>
                                                <input type="" name="opcao" value="1" hidden>
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-3 col-lg-2">
                                <div class="card">
                                    <a href="">
                                        <img src="images/img_filme/brooklyn.jpg" class="card-img-top mb-3"/>
                                    </a>
                                    <div class="card-body p-0">
                                        <a href="">
                                            <h5 class="card-title">Brooklyn Nine-Nine</h5>
                                            <p class="card-text">Comédia/Crime</p>
                                            <p class="card-text">2019</p>
                                        </a>
                                    </div>
                                    <div class="btn-play">
                                        <form action="favoritosadd.php" method="POST">
                                            <button name="email" value="<?php echo $logado; ?>" class="d-flex justify-content-center align-items-center">
                                                <input type="" name="filme" value="Brooklyn Nine-Nine" hidden>
                                                <input type="" name="genero" value="Comédia/Crime" hidden>
                                                <input type="" name="imagem" value="brooklyn" hidden>
                                                <input type="" name="lancamento" value="2019" hidden>
                                                <input type="" name="opcao" value="2" hidden>
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="col-12 col-md-3 col-lg-2">
                                <div class="card">
                                    <a href="">
                                        <img src="images/img_filme/paixao.jpg" class="card-img-top mb-3"/>
                                    </a>
                                    <div class="card-body p-0">
                                        <a href="">
                                            <h5 class="card-title">Paixão Obsessiva</h5>
                                            <p class="card-text">Ação</p>
                                            <p class="card-text">2017</p>
                                        </a>
                                    </div>
                                    <div class="btn-play">
                                        <form action="favoritosadd.php" method="POST">
                                            <button name="email" value="<?php echo $logado; ?>" class="d-flex justify-content-center align-items-center">
                                                <input type="" name="filme" value="Paixão Obsessiva" hidden>
                                                <input type="" name="genero" value="Ação" hidden>
                                                <input type="" name="imagem" value="paixao" hidden>
                                                <input type="" name="lancamento" value="2017" hidden>
                                                <input type="" name="opcao" value="3" hidden>
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-3 col-lg-2">
                                <div class="card">
                                    <a href="">
                                        <img src="images/img_filme/vis.jpg" class="card-img-top mb-3"/>
                                    </a>
                                    <div class="card-body p-0">
                                        <a href="">
                                            <h5 class="card-title">Vis a Vis</h5>
                                            <p class="card-text">Drama</p>
                                            <p class="card-text">2015</p>
                                        </a>
                                    </div>
                                    <div class="btn-play">
                                        <form action="favoritosadd.php" method="POST">
                                            <button name="email" value="<?php echo $logado; ?>" class="d-flex justify-content-center align-items-center">
                                                <input type="" name="filme" value="Vis a Vis" hidden>
                                                <input type="" name="genero" value="Drama" hidden>
                                                <input type="" name="imagem" value="vis" hidden>
                                                <input type="" name="lancamento" value="2015" hidden>
                                                <input type="" name="opcao" value="4" hidden>
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-3 col-lg-2">
                                <div class="card">
                                    <a href="">
                                        <img src="images/img_filme/ilha.jpg" class="card-img-top mb-3"/>
                                    </a>
                                    <div class="card-body p-0">
                                        <a href="">
                                            <h5 class="card-title">Ilha do medo</h5>
                                            <p class="card-text">Ação</p>
                                            <p class="card-text">2010</p>
                                        </a>
                                    </div>
                                    <div class="btn-play">
                                        <form action="favoritosadd.php" method="POST">
                                            <button name="email" value="<?php echo $logado; ?>" class="d-flex justify-content-center align-items-center">
                                                <input type="" name="filme" value="Ilha do Medo" hidden>
                                                <input type="" name="genero" value="Ação" hidden>
                                                <input type="" name="imagem" value="ilha" hidden>
                                                <input type="" name="lancamento" value="2010" hidden>
                                                <input type="" name="opcao" value="5" hidden>
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div>
                                <h2 class="title mb-1">Séries/Filmes Recomendados</h2>
                                
                            </div>
                        </div>
                        
                        <div class="row list mb-5">
                            <div class="col-12 col-md-3 col-lg-2">
                                <div class="card">
                                    <a href="">
                                        <img src="images/img_filme/ameaca.jpg" class="card-img-top mb-3"/>
                                    </a>
                                    <div class="card-body p-0">
                                        <a href="">
                                            <h5 class="card-title">Ameaça Profunda</h5>
                                            <p class="card-text">Terror/Ficção/Ação</p>
                                            <p class="card-text">2020</p>
                                        </a>
                                    </div>
                                    <div class="btn-play">
                                        <form action="favoritosadd.php" method="POST">
                                            <button name="email" value="<?php echo $logado; ?>" class="d-flex justify-content-center align-items-center">
                                                <input type="" name="filme" value="Ameaça Profunda" hidden>
                                                <input type="" name="genero" value="Terror/Ficção/Ação" hidden>
                                                <input type="" name="imagem" value="ameaca" hidden>
                                                <input type="" name="lancamento" value="2020" hidden>
                                                <input type="" name="opcao" value="6" hidden>
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-3 col-lg-2">
                                <div class="card">
                                    <a href="">
                                        <img src="images/img_filme/homem.jpg" class="card-img-top mb-3"/>
                                    </a>
                                    <div class="card-body p-0">
                                        <a href="">
                                            <h5 class="card-title">Homem Invisível</h5>
                                            <p class="card-text">Suspense/Ficção/Terror</p>
                                            <p class="card-text">2020</p>
                                        </a>
                                    </div>
                                    <div class="btn-play">
                                        <form action="favoritosadd.php" method="POST">
                                            <button name="email" value="<?php echo $logado; ?>" class="d-flex justify-content-center align-items-center">
                                                <input type="" name="filme" value="Homem Invisível" hidden>
                                                <input type="" name="genero" value="Suspense/Ficção/Terror" hidden>
                                                <input type="" name="imagem" value="homem" hidden>
                                                <input type="" name="lancamento" value="2020" hidden>
                                                <input type="" name="opcao" value="7" hidden>
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-3 col-lg-2">
                                <div class="card">
                                    <a href="">
                                        <img src="images/img_filme/dois.jpg" class="card-img-top mb-3"/>
                                    </a>
                                    <div class="card-body p-0">
                                        <a href="">
                                            <h5 class="card-title">Dois Irmãos Uma Jornada Fantástica</h5>
                                            <p class="card-text">Animação</p>
                                            <p class="card-text">2020</p>
                                        </a>
                                    </div>
                                    <div class="btn-play">
                                        <form action="favoritosadd.php" method="POST">
                                            <button name="email" value="<?php echo $logado; ?>" class="d-flex justify-content-center align-items-center">
                                                <input type="" name="filme" value="Dois Irmãos Uma Jornada Fantástica" hidden>
                                                <input type="" name="genero" value="Animação" hidden>
                                                <input type="" name="imagem" value="dois" hidden>
                                                <input type="" name="lancamento" value="2020" hidden>
                                                <input type="" name="opcao" value="8" hidden>
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12 col-md-3 col-lg-2">
                                <div class="card">
                                    <a href="">
                                        <img src="images/img_filme/poco.jpg" class="card-img-top mb-3"/>
                                    </a>
                                    <div class="card-body p-0">
                                        <a href="">
                                            <h5 class="card-title">O poço</h5>
                                            <p class="card-text">Drama</p>
                                            <p class="card-text">2019</p>

                                        </a>
                                    </div>
                                    <div class="btn-play">
                                        <form action="favoritosadd.php" method="POST">
                                            <button name="email" value="<?php echo $logado; ?>" class="d-flex justify-content-center align-items-center">
                                                <input type="" name="filme" value="O poço" hidden>
                                                <input type="" name="genero" value="Drama" hidden>
                                                <input type="" name="imagem" value="poco" hidden>
                                                <input type="" name="lancamento" value="2019" hidden>
                                                <input type="" name="opcao" value="9" hidden>
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-3 col-lg-2">
                                <div class="card">
                                    <a href="">
                                        <img src="images/img_filme/sim.jpg" class="card-img-top mb-3"/>
                                    </a>
                                    <div class="card-body p-0">
                                        <a href="">
                                            <h5 class="card-title">Simpsons </h5>
                                            <p class="card-text">Animação/Comédia</p>
                                            <p class="card-text">2019</p>
                                        </a>
                                    </div>
                                    <div class="btn-play">
                                        <form action="favoritosadd.php" method="POST">
                                            <button name="email" value="<?php echo $logado; ?>" class="d-flex justify-content-center align-items-center">
                                                <input type="" name="filme" value="Simpsons" hidden>
                                                <input type="" name="genero" value="Animação/Comédia" hidden>
                                                <input type="" name="imagem" value="sim" hidden>
                                                <input type="" name="lancamento" value="2019" hidden>
                                                <input type="" name="opcao" value="10" hidden>
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-3 col-lg-2">
                                <div class="card">
                                    <a href="">
                                        <img src="images/img_filme/milagre.jpg" class="card-img-top mb-3"/>
                                    </a>
                                    <div class="card-body p-0">
                                        <a href="">
                                            <h5 class="card-title">Milagre na Cela 7</h5>
                                            <p class="card-text">Drama/Comédia</p>
                                            <p class="card-text">2019</p>
                                        </a>
                                    </div>
                                    <div class="btn-play">
                                        <form action="favoritosadd.php" method="POST">
                                            <button name="email" value="<?php echo $logado; ?>" class="d-flex justify-content-center align-items-center">
                                                <input type="" name="filme" value="Milagre na Cela 7" hidden>
                                                <input type="" name="genero" value="Drama/Comédia" hidden>
                                                <input type="" name="imagem" value="milagre" hidden>
                                                <input type="" name="lancamento" value="2019" hidden>
                                                <input type="" name="opcao" value="11" hidden>
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
            </div>
        </div> 
        <script language="javascript" type="text/javascript" src="js/javascript.js"></script>
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    	<script src="vendor/bootstrap/js/popper.js"></script>
    	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    	<script src="vendor/select2/select2.min.js"></script>
    	<script src="vendor/tilt/tilt.jquery.min.js"></script>
    	<script>
                $('.js-tilt').tilt({
            	scale: 1.1
                });
    	</script>
    	<script src="js/main.js"></script>
    </body>
</html>