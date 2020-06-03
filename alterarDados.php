<!DOCTYPE html>
<html>
    <head>
        <title>Alterar dados do usúario!</title>
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
        <?php 
            session_start();
            if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
                session_unset();
                echo "<script>alert('Esta página só pode ser acessada por usuário logado');window.location.href = 'index.html';</script>";
            }
            $logado = $_SESSION['email'];
        ?>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                 <img src="images/icons/audio.png" width="30" height="30" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="acesso.php">Principal<span class="sr-only">(página atual)</span></a>
                </li>
                
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Alterações
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Alterar Senha</a>
                        <a class="dropdown-item" href="excluirConta.php">Excluir Conta</a>
                    </div>
                </li>
                
            </ul>
                <a href="desconectar.php"><button class="btn btn-outline-secondary my-2 my-sm-0">Desconectar</button></a>
            </div>
        </nav>
        
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100 p-t-50 p-b-90">
                    <form class="login100-form validate-form flex-sb flex-w" action="atualizar.php" method="POST">
                        <span class="login100-form-title p-b-51">Alterar Senha</span>
                        <div class="wrap-input100 validate-input m-b-16" data-validate = "Email de usuário é requerido">
                            <input class="input100" type="email" value="<?php echo $logado; ?>" name="email" disabled>
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input m-b-16" data-validate = "Senha requerida">
                            <input class="input100" type="password" name="senha" placeholder="Senha Atual">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input m-b-16" data-validate = "Senha requerida">
                            <input class="input100" type="password" name="senha2" placeholder="Senha á ser alterada">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="container-login100-form-btn m-t-17">
                            <button class="login100-form-btn">Atualizar</button>
                        </div>
                    </form>
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