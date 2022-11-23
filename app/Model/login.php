<?php
    session_start();

    //chamando o arquivo usuarios.php
    require_once '../Controller/usuarios.php';
    //require_once '../Controller/nivel.php';

    // Chama nivel de acesso
    //Nivel();

    //Chama a classe
    $u = new Usuario; 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../View/css/login.css" rel="stylesheet">
</head>
<body id="body">
    <!-- TELA DE LOGIN -->
    <img id="back" src="../View/css/images/login.png">
    <div class="linha1"></div>
        <div class="titulo2">BEM VINDO!</div>
        <div class="container">
            <div class="card">
                <div class="titulo1">Login</div>
                 <!-- FORMULÁRIO -->
                <form action="processa.php" method="POST">
                    <!-- USUÁRIO -->
                    <div class="label-float">
                        <input type="text" class="form-control" id="nome_usuario" required name="nome_usuario">
                        <label for="usuario">Usuário </i> </label>
                    </div>
                    <!-- SENHA -->
                    <div class="label-float">
                        <input type="password" class="form-control" id="senha_usuario" required name="senha_usuario">
                        <label for="senha"> Senha </i> </label>
                    </div>
                    <!-- BOTÃO-->
                    <input type="submit" value="ACESSAR" class="btn1">
                </form>
                <p> Não tem uma conta?
                <a href=''> Cadastre-se! </a>
            </div>
        </div>     
</html>