<?php
    $logado = $_POST['email'];
    $nome = $_POST['filme'];
    $opcao = $_POST['opcao'];

    $nome_servidor = "sql10.freesqldatabase.com";
    $nome_usuario = "sql10345169";
    $senhaBanco = "UAzvU32VSN";
    $nome_banco = "sql10345169";
    $conecta = new mysqli($nome_servidor, $nome_usuario, $senhaBanco, $nome_banco); 
    switch (opcao) {
        case 0:
            $ameaca = "INSERT INTO favoritos(filmes, clientes_email) VALUES('$nome', '$logado')";
            $conecta->query($ameaca);
            header('location:acesso.php');
            break;
        case 1:
            $flash = "INSERT INTO favoritos(filmes, clientes_email) VALUES('Flash', '$logado')";
            $conecta->query($flash);
            break;
        case 2:
            $supernatural = "INSERT INTO favoritos(filmes, clientes_email) VALUES('Supernatural', '$logado')";
            $conecta->query($supernatural);
            break;
        case 3:
            $the100 = "INSERT INTO favoritos(filmes, clientes_email) VALUES('The 100', '$logado')";
            $conecta->query($the100);
            break;
        case 4:
            $breaking = "INSERT INTO favoritos(filmes, clientes_email) VALUES('Breaking Bad', '$logado')";
            $conecta->query($breaking);
            break;
        case 5:
            $blacklist = "INSERT INTO favoritos(filmes, clientes_email) VALUES('The Black List', '$logado')";
            $conecta->query($blacklist);
            break;
    }
?>