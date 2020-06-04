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
        <link rel="stylesheet" href="font-awesome/css/all.css">
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
                        <a href="" class="nav-link d-flex align-items-center">
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
                                <span>Thiago Almeida</span>
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
                        <div class="d-flex align-items-center mb-3">
                            <div>
                                <h2 class="title mb-1">Novidades</h2>
                                <span class="subtitle">seilaseilaseilaseila</span>
                            </div>
                        </div>
                        
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