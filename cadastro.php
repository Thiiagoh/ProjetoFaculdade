<!DOCTYPE html>
<html>
    <head>
        <title>Cadastrar um novo usuário!</title>
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
    </head>
    <body>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100 p-t-50 p-b-90">
                    <span class="login100-form-title p-b-51">Mensagem do sistema</span>
                       
                     <?php
                        //Receber as informações via formulario
                        $email = $_GET['email'];
                        $senha = $_GET['senha'];
                        $senha2 = $_GET['senha2'];

                        //Conectar no mysql
                        $nome_servidor = "sql10.freesqldatabase.com";
                        $nome_usuario = "sql10345169";
                        $senhaBanco = "UAzvU32VSN";
                        $nome_banco = "sql10345169";
                        $conecta = new mysqli($nome_servidor, $nome_usuario, $senhaBanco, $nome_banco);

                        //Inserir registro
                        if ($senha == $senha2){
                            if (empty($email) || empty($senha) || empty($senha2)){
                                echo 'Algum campo esta vazio, escreva algo.';
                            }else{
                                $sql = "INSERT INTO clientes(email, senha) VALUES('$email', '$senha')";
                                if ($conecta->query($sql) === TRUE) {
                                    echo "Usuário registrado com sucesso!<br><br>";
                                } else{
                                    echo "O usuário informado já existe!<br><br>";
                                }
                            }
                        }else{
                            echo 'As senhas não correspondem';
                        }
                        $conecta->close();
                    ?> 
                    <a href="desconectar.php"><button class="login100-form-btn">Voltar</button></a>
        	</div>
            </div>
    	</div>
        
        <div id="dropDownSelect1"></div>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>
    </body>
</html>