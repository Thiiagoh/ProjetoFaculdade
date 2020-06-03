<!DOCTYPE html>
<html>
    <head>
        <title>Atualizar usuário!</title>
        <meta charset="UTF-8">
        <style>
            #menu ul{
                padding:0px;
                margin:0px;
                background-color:#EDEDED;
                list-style:none;
            }
            #menu ul li{
                display: inline; 
            }
            #menu ul li a {
                padding: 2px 10px;
                display: inline-block;
                background-color:#EDEDED;
                color: #333;
                text-decoration: none;
                border-bottom:3px solid #EDEDED;
            }
        </style>
	</head>
    <body>
        <div id="menu">
            <ul>
                <li><a href="consultar.html">Consultar</a></li>
                <li><a href="cadastro.html">Cadastrar</a></li>
                <li><a href="atualizar.html">Atualizar</a></li>
                <li><a href="excluir.html">Excluir</a></li>
            </ul>
        </div>
        <?php
            //Receber as informações via formulario
            $id = $_GET['id'];
            $nome = $_GET['nome'];
            $email = $_GET['email'];
            $senha = $_GET['senha'];
            
            //Conectar no mysql
            $nome_servidor = "localhost";
            $nome_usuario = "root";
            $senhaBanco = "";
            $nome_banco = "cadastro";
            $conecta = new mysqli($nome_servidor, $nome_usuario, $senhaBanco, $nome_banco);

            //Inserir registro 
            if (empty($nome) || empty($email) || empty($senha)){
                echo 'O campo esta vazio, escreva algo.';
            }else{
                $sql = "UPDATE usuarios SET nome='$nome',email='$email',senha='$senha' WHERE id='$id'";
                if ($conecta->query($sql) === TRUE) {
                    echo "Registro atualizado com sucesso<br>";
                }else{
                    echo "Erro na atualização do registro: " . $conecta->error."<br>";
                }
            }
            $conecta->close();
        ?>
    </body>
</html>