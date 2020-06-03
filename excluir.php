<!DOCTYPE html>
<html>
    <head>
        <title>Excluir um usuário!</title>
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
               
        <?php
            //Receber as informações via formulario
            $id = $_GET['id'];
                    
            //Conectar no mysql
            $nome_servidor = "localhost";
            $nome_usuario = "root";
            $senhaBanco = "";
            $nome_banco = "cadastro";
            $conecta = new mysqli($nome_servidor, $nome_usuario, $senhaBanco, $nome_banco);
            
            //Inserir registro 
            if (empty($id)){
                echo 'O campo esta vazio, escreva algo.';
            }else{
                $sql = "DELETE FROM usuarios WHERE id='$id'";
                if ($conecta->query($sql) === TRUE) {
                    echo "Usuario apagado com sucesso.<br>";
                }else {
                    echo "Erro ao apagar o usuario: " . $conecta->error."<br>";
                }
            }
            $conecta->close();
        ?>
        
        
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100 p-t-50 p-b-90">
                    <form class="login100-form validate-form flex-sb flex-w" action="excluirConta.php" method="POST">
                        <span class="login100-form-title p-b-51">Excluir Conta</span>
                        <div class="wrap-input100 validate-input m-b-16" data-validate = "Email de usuário é requerido">
                            <input class="input100" type="email" name="email" placeholder="Email">
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
                            <button class="login100-form-btn">Excluir</button>
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