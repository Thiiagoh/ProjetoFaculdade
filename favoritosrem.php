<?php
    $logado = $_POST['email'];
    $opcao = $_POST['opcao'];
    $rem = $_POST['remover'];

    $nome_servidor = "sql10.freesqldatabase.com";
    $nome_usuario = "sql10345169";
    $senhaBanco = "UAzvU32VSN";
    $nome_banco = "sql10345169";
    $conecta = new mysqli($nome_servidor, $nome_usuario, $senhaBanco, $nome_banco); 
    switch ($opcao) {
        case 1:
            $conecta->query($rem);
            unset($opcao);
            header('location:meusfavoritos.php');
            break;
    }
?>