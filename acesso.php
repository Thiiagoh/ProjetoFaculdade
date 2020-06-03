<!DOCTYPE html>
<html>
    <head>
        <title>Acessando o sistema!</title>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <?php 
            session_start();
            if((!isset($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
                session_unset();
                echo "<script>alert('Esta página só pode ser acessada por usuário logado');window.location.href = 'index.html';</script>";
            }
            $logado = $_SESSION['email'];
        ?>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                 <img src="images/icons/audio.png" width="45" height="45" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Início<span class="sr-only">(página atual)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Alterações
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="alterarDados.php">Alterar Senha</a>
                        <a class="dropdown-item" href="excluirConta.php">Excluir Conta</a>
                    </div>
                </li>
            </ul>
                <a href="desconectar.php"><button class="btn btn-outline-secondary my-2 my-sm-0">Desconectar</button></a>
            </div>
        </nav>
        
        <div id="main" class="main d-flex flex-column">
            <div class="margin-top"></div>
            <div class="main-container">
                <h2 class="title mb-3">Lançado recentemente</h2>
                <div class="row list mb-5">
                    
                    <div class="col-12 col-md-3 col-lg-2">
                        <div class="card">
                            <a href="">
                                <img src="images/icons/audio.png" class="card-img-top mb-3"/>
                            </a>
                            <div class="card-body p-0">
                                <a href="">
                                    <h5 class="card-title">Teste</h5>
                                    <p class="card-text">Teste</p>
                                </a>
                            </div>
                            <div class="btn-play">
                                <button class="d-flex justify-content-center align-items-center">
                                    <i class="fas fa-play"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-3 col-lg-2">
                        <div class="card">
                            <a href="">
                                <img src="images/icons/audio.png" class="card-img-top mb-3"/>
                            </a>
                            <div class="card-body p-0">
                                <a href="">
                                    <h5 class="card-title">Teste</h5>
                                    <p class="card-text">Teste</p>
                                </a>
                            </div>
                            <div class="btn-play">
                                <button class="d-flex justify-content-center align-items-center">
                                    <i class="fas fa-play"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-3 col-lg-2">
                        <div class="card">
                            <a href="">
                                <img src="images/icons/audio.png" class="card-img-top mb-3"/>
                            </a>
                            <div class="card-body p-0">
                                <a href="">
                                    <h5 class="card-title">Teste</h5>
                                    <p class="card-text">Teste</p>
                                </a>
                            </div>
                            <div class="btn-play">
                                <button class="d-flex justify-content-center align-items-center">
                                    <i class="fas fa-play"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-3 col-lg-2">
                        <div class="card">
                            <a href="">
                                <img src="images/icons/audio.png" class="card-img-top mb-3"/>
                            </a>
                            <div class="card-body p-0">
                                <a href="">
                                    <h5 class="card-title">Teste</h5>
                                    <p class="card-text">Teste</p>
                                </a>
                            </div>
                            <div class="btn-play">
                                <button class="d-flex justify-content-center align-items-center">
                                    <i class="fas fa-play"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-3 col-lg-2">
                        <div class="card">
                            <a href="">
                                <img src="images/icons/audio.png" class="card-img-top mb-3"/>
                            </a>
                            <div class="card-body p-0">
                                <a href="">
                                    <h5 class="card-title">Teste</h5>
                                    <p class="card-text">Teste</p>
                                </a>
                            </div>
                            <div class="btn-play">
                                <button class="d-flex justify-content-center align-items-center">
                                    <i class="fas fa-play"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-3 col-lg-2">
                        <div class="card">
                            <a href="">
                                <img src="images/icons/audio.png" class="card-img-top mb-3"/>
                            </a>
                            <div class="card-body p-0">
                                <a href="">
                                    <h5 class="card-title">Teste</h5>
                                    <p class="card-text">Teste</p>
                                </a>
                            </div>
                            <div class="btn-play">
                                <button class="d-flex justify-content-center align-items-center">
                                    <i class="fas fa-play"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
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