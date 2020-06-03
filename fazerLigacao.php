<?php
    session_start();
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $local="sql10.freesqldatabase.com";
    $usuario_BD="sql10345169";
    $senha_BD="UAzvU32VSN";
    $base="sql10345169";
    
    $tenta_conectar =  new mysqli($local,$usuario_BD,$senha_BD,$base);
    if($tenta_conectar->connect_error === TRUE){    
        die("Deu erro na conexão ". $tenta_conectar->connect_error);
    }
    
    $tenta_achar = "SELECT * FROM clientes WHERE email='$email' AND senha='$senha'";
    $resultado = $tenta_conectar->query($tenta_achar);
    if ($resultado->num_rows > 0){
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('location:acesso.php');
    }
    else{
        session_unset();
        session_destroy();
        echo "<script>alert('Login ou senha incorreto');window.location.href = 'index.html';</script>";
    }
?>